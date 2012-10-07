<?php
/**
 * 用户访问权限控制
 * by wbq 2012-3-22
 */
class AccessControl extends BaseControl
{
	//控制器名
	static public $_control_name = 'Access Control';

    //超级管理员账户id数组
    private $_super_admin = array();

	public function __construct()
	{
		parent::__construct();
		$this->getUserAccess();
	}

	/**
	 * 获取用户的控制访问权限
	 */
	public function getUserAccess()
	{
        //if (session('useraccess')) return true;

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

        $useraccess = $this->dealGroupNode($group, $node);
        if (is_array($useraccess)) session('useraccess',$useraccess);

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
    public function getNode($nodeid=0)
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

        $where = array('userid' => $userid);

        $res = T('user_access')->join(' '.TBF.'node as b on a.nodeid=b.id ')->field('a.nodeid,b.id,b.title,b.control,b.action,b.sort,b.pid,b.level,b.groupid')->where($where)->select();
dump($res);dump(T('role_access')->getSql());exit;
        return $res;
    }

    /**
     * 整理节点信息
     * @param $node array 节点数组
     */
    protected function dealNode($node)
    {
        $return = array();

        foreach ($node as $v) {
            if ($v['pid'] == 0) {
                $return[] = $v;
            } else {
                foreach ($return as $k1=>$v1) {
                    if ($v['pid'] == $v1['id']) {
                        $return[$k1]['cnode'][] = $v;
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
        $useraccess = array();

        foreach ($node as $k=>$v) {
            foreach ($group as $k1=>$v1) {
                if ($v['groupid'] == $v1['id']) {
                    if (!array_key_exists($v['groupid'], $useraccess)) $useraccess[$v['groupid']] = $v1;
                    $useraccess[$v['groupid']]['cnode'][] = $v;
                    break;
                }
            }
        }

        return $useraccess;
    }

	/**
	 * 获取用户的session信息/id username
	 */
	protected function getUser()
	{
		return $this->userInfo;
	}
}
