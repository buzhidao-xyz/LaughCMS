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
	 */
	public function getGroupTree()
	{
		$where = array(
			'isshow' => 1
		);
		return T('group')->where()->select();
	}

    /**
     * 获取节点组信息
     * @param $groupids array 组id数组
     */
    public function getGroup($groupids)
    {
        if (!is_array($groupids)) return false;

        $where = array(
        	'id' => array('in', $groupids),
        	'isshow' => 1
        );
        $res = T('group')->where($where)->order('id')->select();

        return $res;
    }
}