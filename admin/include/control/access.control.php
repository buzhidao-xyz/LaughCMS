<?php
/**
 * 用户访问权限控制
 * by wbq 2012-3-22
 */
class AccessControl extends BaseControl
{
	//控制器名
	static protected $_control = 'Access';

    //超级管理员账户id数组
    private $_super_admin = array(1);

	public function __construct()
	{
		parent::__construct();

        $this->_NODE = N('Node');
        $this->_GROUP = N('Group');
        $this->_ROLE = N('Role');

		$this->_getUserAccess();
	}

	/**
	 * 获取用户的控制访问权限
	 */
	private function _getUserAccess()
	{
        if (session('userAccess')) return true;

        $user = $this->userInfo;
        if (in_array($user['id'], $this->_super_admin)) {
            $node = $this->_NODE->getNode();
            $node = $this->dealNode($node['data']);
        } else {
            $roleids = $this->_ROLE->getRole($user['id']);
            if (empty($roleids)) return true;

            $roleNode = $this->_NODE->getRoleNode($roleids);
            if (empty($roleNode)) return true;

            $userNode = $this->_NODE->getUserNode($user['id']);
            $node = $this->dealNode($roleNode,$userNode);
        }

        foreach ($node as $v) {
            if ($v['pid'] == 0) $groupids[$v['groupid']] = $v['groupid'];
        }

        $group = $this->_GROUP->getGroup($groupids);
        if (empty($group)) return true;

        $userAccess = $this->dealGroupNode($group, $node);
        if (is_array($userAccess)) session('userAccess',$userAccess);

        return true;
	}

    /**
     * 整理节点信息
     * @param $roleNode array 角色节点数组
     * @param $userNode array 用户单独节点数组
     */
    protected function dealNode($roleNode=array(),$userNode=array())
    {
        $return = array();

        $roleNode = array_merge($roleNode,$userNode);
        foreach ($roleNode as $v) {
            if ($v['pid'] == 0) {
                $m = 0;
                foreach ($return as $k0=>$v0) {
                    if ($v0['id'] == $v['id']) {
                        $m = 1;
                        break;
                    }
                }
                // $v['title'] = html_entity_decode($v['title']);
                if (!$m) $return[] = $v;
            } else {
                foreach ($return as $k1=>$v1) {
                    if ($v['pid'] == $v1['id']) {
                        $m = 0;
                        if (array_key_exists('cnode', $return[$k1])) {
                            foreach ($return[$k1]['cnode'] as $k2=>$v2) {
                                if ($v2['id'] == $v['id']) {
                                    $m = 1;
                                    break;
                                }
                            }
                        }
                        if (!$m) {
                            // $v['title'] = html_entity_decode($v['title']);
                            $return[$k1]['cnode'][] = $v;
                        }
                        break;
                    }
                }
            }
        }
        
        return $return;
    }

    /**
     * 整理节点与组信息
     * @param $group array 组信息
     * @param $node array 节点信息
     */
    protected function dealGroupNode($group,$node)
    {
        $userAccess = array();

        foreach ($node as $k=>$v) {
            foreach ($group as $k1=>$v1) {
                // $v['title'] = html_entity_decode($v['title']);
                if ($v['groupid'] == $v1['id']) {
                    if (!array_key_exists($v['groupid'], $userAccess)) $userAccess[$v['groupid']] = $v1;
                    $userAccess[$v['groupid']]['cnode'][] = $v;
                    break;
                }
            }
        }

        return $userAccess;
    }
}
