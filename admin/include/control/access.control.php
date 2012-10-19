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

		$this->_getUserAccess();
	}

	/**
	 * 获取用户的控制访问权限
	 */
	private function _getUserAccess()
	{
        if (session('userAccess')) return true;

        $user = $this->getUser();
        if (in_array($user['id'], $this->_super_admin)) {
            $node = $this->getNode();
            $node = $this->dealNode($node);
        } else {
            $roleids = $this->getRole($user['id']);
            if (empty($roleids)) return true;

            $roleNode = $this->getRoleNode($roleids);
            if (empty($roleNode)) return true;

            $userNode = $this->getUserNode($user['id']);
            $node = $this->dealNode($roleNode,$userNode);
        }

        foreach ($node as $v) {
            if ($v['pid'] == 0) $groupids[$v['groupid']] = $v['groupid'];
        }

        $group = $this->getGroup($groupids);
        if (empty($group)) return true;

        $userAccess = $this->dealGroupNode($group, $node);
        if (is_array($userAccess)) session('userAccess',$userAccess);

        return true;
	}

	/**
     * 获取用户的角色信息
     * @param $userid int 用户id
	 */
	protected function getRole($userid)
	{
        $return = null;

        $where = array(
            'userid' => $userid
        );
		$res = T('role_user')->field('roleid')->where($where)->select();
        
        if (!empty($res) && is_array($res)) {
            foreach ($res as $v) {
                $return[] = $v['roleid'];
            }
        }
		return $return;
	}

    /**
     * 获取某个节点的子节点
     * @param $nodeid 节点id 默认为0 取全部
     */
    protected function getNode($nodeid=0)
    {
        $where = array();
        if ($nodeid) {
            $where = array(
                'pid' => $nodeid
            );
        }

        $res = T('node')->where($where)->order('id')->select();

        return empty($res) ? null : $res;
    }

	/**
     * 获取角色信息的node权限
     * @param $roleids array 角色信息
	 */
	protected function getRoleNode($roleids)
    {
        if (!is_array($roleids)) return false;

        $where['a.roleid'] = array('in',$roleids);
        $res = T('role_node')->join(' '.TBF.'node as b on a.nodeid=b.id ')->field('a.nodeid,b.id,b.title,b.control,b.action,b.sort,b.pid,b.level,b.groupid')->where($where)->select();

        return $res;
    }

    /**
     * 获取用户的node权限
     * @param $userid int 用户id
     */
    protected function getUserNode($userid)
    {
        if (!$userid) return false;

        $where = array('a.userid' => $userid);
        $res = T('admin_access')->join(' '.TBF.'node as b on a.nodeid=b.id ')->field('a.nodeid,b.id,b.title,b.control,b.action,b.sort,b.pid,b.level,b.groupid')->where($where)->select();

        return $res;
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
     * 获取节点组信息
     * @param $groupids array 组id数组
     */
    protected function getGroup($groupids)
    {
        if (!is_array($groupids)) return false;

        $groupids = array('id' => array('in', $groupids));
        $res = T('group')->where($groupids)->order('id')->select();

        return $res;
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

	/**
	 * 获取用户的session信息/id username
	 */
	protected function getUser()
	{
		return $this->userInfo;
	}
}
