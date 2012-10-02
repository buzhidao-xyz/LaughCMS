<?php
/**
 * 用户访问权限控制
 * by wbq 2012-3-22
 */
class AccessControl extends BaseControl
{
	//控制器名
	static public $_control_name = 'Access Control';

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
        if (session('useraccess')) return true;

        $user = $this->getUser();
        if (in_array($user['id'], array(1))) {
            $node = $this->getNode();
            $node = $this->dealNode($node);
        } else {
            $role = $this->getRole($user['id']);
            if (empty($role)) return true;

            $roleNode = $this->getRoleNode($role);
            if (empty($roleNode)) return true;

            $userNode = $this->getUserNode($user['id']);
            $node = $this->dealNode($roleNode,$userNode);
        }

        foreach ($node as $v) {
            if ($v['pid'] == 0) $groupids[$v['groupid']] = array('id',$v['groupid']);
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
        $where = array(
            array('userid', $userid)
        );
		$res = T('role_user')->select('roleid')->where($where)->find(1);

		return empty($res) ? null : $res;
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
                array('pid', $nodeid)
            );
        }

        $res = T('node')->select('*')->where($where)->find(1);

        return empty($res) ? null : $res;
    }

	/**
     * 获取角色信息的node权限
     * @param $role array 角色信息
	 */
	protected function getRoleNode($role)
    {
        if (!is_array($role)) return false;

        foreach ($role as $id) {
            $roleids[] = array('roleid',$id['roleid']);
        }
        //dump($roleids);exit;

        $on = array(
            array('a.nodeid', 'b.id')
        );
        $res = T('role_access')->join('node')->select('a.nodeid,b.id,b.title,b.control,b.action,b.sort,b.pid,b.level,b.groupid')->on($on)->where($roleids, 'OR')->find(1);

        return $res;
    }

    /**
     * 获取用户的node权限
     * @param $userid int 用户id
     */
    protected function getUserNode($userid)
    {
        if (!$userid) return false;

        $on = array(
            array('a.nodeid', 'b.id')
        );
        $where = array(array('userid', $userid));
        $res = T('user_access')->join('node')->select('a.nodeid,b.id,b.title,b.control,b.action,b.sort,b.pid,b.level,b.groupid')->on($on)->where($where)->find(1);

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

        //dump($return);exit;
        return $return;
    }

    /**
     * 获取节点组信息
     * @param $groupids array 组id数组
     */
    protected function getGroup($groupids)
    {
        if (!is_array($groupids)) return false;

        $res = T('group')->select('*')->where($groupids,'OR')->find(1);

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
