<?php
/**
 * 组模型 数据处理
 * by laucen 2012-9-28
 */
class Group extends Base
{
	public function __construct()
	{
		parent::__construct();
	}

	//新增导航组
	public function addGroup($data=array())
	{
		if (!is_array($data) || empty($data)) return false;

		return T('group')->add($data);
	}

	/**
	 * 获取组树
	 * @param $start int 开始位置
	 * @param $length int 获取数据长度
	 */
	public function getGroupTree($start=0,$length=0)
	{
		$obj = T('group');

		$total = $obj->count();

		if ($length > 0) $obj = $obj->limit($start,$length);

		$data = $obj->select();
		return array('total'=>$total, 'data'=>$data);
	}

    /**
     * 根据组id获取节点组信息
     * @param $groupid int/array 组id或者id数组
     */
    public function getGroup($groupid=null)
    {
        if (!$groupid) return false;

        $where = array(
        	'id' => is_array($groupid) ? array('in', $groupid) : $groupid,
        	'isshow' => 1
        );
        return T('group')->where($where)->order('id')->select();
    }

	/**
	 * 根据组名称获取组信息
	 * @param $title string 组名称
	 */
	public function getGroupByTitle($title=null)
	{
		if (!$title) return false;

		$return = T('group')->where(array("title"=>$title))->find();

		return !empty($return) ? $return : false;
	}

	/**
	 * 更新组信息
	 * @param $id int 组id
	 * @param $data array() 组信息
	 */
	public function upGroup($id,$data=array())
	{
		if (!$id || empty($data)) return false;

		return T('group')->where(array('id'=>$id))->update($data);
	}
}