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
     * 获取某个节点的子节点
     * @param $nodeid 节点id 默认为0 取全部
     */
    public function getNode($nodeid=0,$start=0,$length=0)
    {
        $where = array('isshow' => 1);
        if ($nodeid) $where['pid'] = $nodeid;

        $obj = T('node')->where($where)->order('id');
        $total = $obj->count();

        if ($length > 0) $obj = $obj->limit($start,$length);
        $data = $obj->select();

        return array('total'=>$total, 'data'=>$data);
    }

	/**
     * 获取角色信息的node权限
     * @param $roleids array 角色信息
	 */
	public function getRoleNode($roleids)
    {
        if (!is_array($roleids)) return false;

        $where = array(
        	'a.roleid' => array('in', $roleids),
        	'b.isshow'   => 1
        );
        $res = T('role_node')->join(' '.TBF.'node as b on a.nodeid=b.id ')->field('a.nodeid,b.id,b.title,b.control,b.action,b.sort,b.pid,b.level,b.groupid')->where($where)->select();

        return $res;
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
}