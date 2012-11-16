<?php
/**
 * 用户角色模型 数据处理
 * by laucen 2012-9-6
 */
class Admin extends Base
{
	public function __construct()
	{
		parent::__construct();
	}

	/**
     * 获取管理员信息
	 */
	public function getAdmin($id=null,$start=0,$length=0)
	{
		$obj = T('admin')->where($where);

		$where = array();
		if ($id) $where = is_array($id) && !empty($id) ? array('in',$id) : array('id',$id);

		$total = $obj->count();
		if ($length) $obj = $obj->limit($start.",".$length);
		$data = $obj->select();

		return array('total'=>$total, 'data'=>$data);
	}
}