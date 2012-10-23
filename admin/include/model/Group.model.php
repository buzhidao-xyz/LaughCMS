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
     * 根据节点id获取节点组信息
     * @param $groupids array 组id数组
     */
    public function getGroup($groupids=array())
    {
        if (!is_array($groupids) || empty($groupids)) return false;

        $where = array(
        	'id' => array('in', $groupids),
        	'isshow' => 1
        );
        return T('group')->where($where)->order('id')->select();
    }
}