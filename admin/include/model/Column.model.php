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
	public function addColumn($data=array())
	{
		if (!is_array($data) || empty($data)) return false;
		return T("Column")->add($data);
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

	//获取顶级栏目
	public function getTopColumn()
	{
		$data = T("Column")->where(array("topid"=>0))->select();

		return $data;
	}

	//获取子栏目
	public function getSubColumn($columnid = null)
	{
		$where = array();
		if ($columnid) $where['parentid'] = is_array($columnid) ? array("in", $columnid) : $columnid;

		$data = T("Column")->where($where)->select();

		return $data;
	}

	//删除栏目
	public function deleteColumn($columnid = null)
	{
		if (!$columnid) return false;
		return T("Column")->where(array("id"=>$columnid))->delete();
	}
}