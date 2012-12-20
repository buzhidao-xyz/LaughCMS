<?php
/**
 * 栏目模型
 * by laucen 2012-9-6
 */
class Column extends Base
{
	public function __construct()
	{
		parent::__construct();
	}

	//添加栏目
	public function addColumn()
	{

	}

	/**
	 * 获取栏目
	 * @param $columnid int 栏目id
	 */
	public function getColumn($columnid = null)
	{
		$where = array();
		if ($columnid) $where['id'] = is_array($columnid) ? array("in", $columnid) : $columnid;

		$data = T("Column")->where($where)->select();

		return $data;
	}
}