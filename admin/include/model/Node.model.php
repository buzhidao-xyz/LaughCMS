<?php
/**
 * 节点模型 数据处理
 * by laucen 2012-9-6
 */
class Node extends Base
{
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * 保存新节点
	 */
	public function saveNode($data)
	{
		if (!is_array($data) || empty($data)) return false;
		
		return T('node')->add($data);
	}

    /**
     * 获取某个节点的子节点
     * @param $nodeid 节点id 默认为0 取全部
     */
    public function getNode($nodeid=0,$start=0,$length=0)
    {
        $where = array('isshow' => 1);
        if ($nodeid) $where['pid'] = $nodeid;

        $total = T('node')->where($where)->count();
        $obj = T('node')->where($where)->order('id');
        if ($length > 0) $obj = $obj->limit($start,$length);
        $data = $obj->select();

        return array('total'=>$total, 'data'=>$data);
    }

	/**
	 * 获取某个组的子节点/节点树
	 * @param $groupid int 组id 默认为Null 返回所有节点
	 */
	public function getNodeTree($groupid=null)
	{
		if ($groupid === 0) return array();

		$where = array(
			'groupid' => $groupid,
			'isshow'  => 1
		);
		$return = T('node')->where($where)->select();

		return $return;
	}

    /**
     * 获取用户的node权限
     * @param $userid int 用户id
     */
    public function getUserNode($userid)
    {
        if (!$userid) return false;

        $where = array(
        	'a.userid' => $userid,
			'b.isshow'  => 1
        );
        $res = T('admin_access')->join(' '.TBF.'node as b on a.nodeid=b.id ')->field('a.nodeid,b.id,b.title,b.control,b.action,b.sort,b.pid,b.level,b.groupid')->where($where)->select();

        return $res;
    }

	/**
     * 获取角色信息的node权限
     * @param $roleids array 角色信息
     * @param $f int 是否只返回节点id数组 默认1返回全部
	 */
	public function getRoleNode($roleids,$f=1)
    {
        if (!is_array($roleids) || empty($roleids)) return array();

        $where = array(
        	'a.roleid' => array('in', $roleids)
        );
        if ($f === 1) {
            $where['b.isshow'] = 1;
            $return = T('role_node')->join(' '.TBF.'node as b on a.nodeid=b.id ')->field('a.nodeid,a.access,b.id,b.title,b.control,b.action,b.sort,b.pid,b.level,b.groupid')->where($where)->order("a.nodeid","asc")->select();
        } else if ($f === 0) {
            $return = array(
                'node' => array(),
                'access' => array()
            );
            $res = T('role_node')->field('nodeid,access')->where($where)->select();
            foreach ($res as $k=>$v) {
                $return['node'][] = $v['nodeid'];
                $return['access'][$v['nodeid']] = $v['access'];
            }
        }
        return $return;
    }

    /**
     * 获取某个节点的信息
     * @param $nodeid 节点id
     */
    public function getNodeInfo($nodeid=null)
    {
        if (!$nodeid) return array();

        $where = array(
            'id'     => $nodeid,
            'isshow' => 1
        );
        return T('node')->where($where)->find();
    }

    /**
     * 更新节点信息
     * @param $id int 节点id
     * @param $data array() 数据数组
     */
    public function upNode($id=null,$data=array())
    {
        if (!$id) return false;

        return T('node')->where(array('id'=>$id))->update($data);
    }

    //删除节点
    public function delNode($id=null)
    {
        if (!$id) return false;

        return T('node')->where(array('id'=>$id))->delete();
    }

    //生成节点分配列表树
    public function makeNodeTree()
    {
        $node = $this->getNode();
        $node = $this->dealNode($node['data']);

        $groupids = array();
        foreach ($node as $v) {
            if ($v['pid'] == 0) $groupids[$v['groupid']] = $v['groupid'];
        }

        $group = M('Group')->getGroup($groupids);
        if (is_array($group) && !empty($group))
            return M('Node')->dealGroupNode($group, $node);
        else
            return array();
    }

    /**
     * 整理节点信息
     * @param $roleNode array 角色节点数组
     * @param $userNode array 用户单独节点数组
     */
    private function dealNode($roleNode=array(),$userNode=array())
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
                        if (!$m) $return[$k1]['cnode'][] = $v;
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
    private function dealGroupNode($group,$node)
    {
        $userAccess = array();

        foreach ($node as $k=>$v) {
            foreach ($group as $k1=>$v1) {
                if ($v['groupid'] == $v1['id']) {
                    if (!array_key_exists($v['groupid'], $userAccess)) $userAccess[$v['groupid']] = $v1;
                    $userAccess[$v['groupid']]['cnode'][] = $v;
                    break;
                }
            }
        }

        return $userAccess;
    }

    //更新角色节点
    public function upRoleNode($roleid=null,$data=array())
    {
        if (!$roleid || !is_array($data) || empty($data)) return false;

        T('role_node')->where(array('roleid'=>$roleid))->delete();
        T('role_node')->add($data,true);
        return true;
    }
}