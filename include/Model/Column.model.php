<?php
/**
 * 栏目数据模型
 * by buzhidao 2013-2-1
 * 栏目的基本查询操作
 */
class Column extends Base
{
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * 获取栏目列表
	 * @param $columnid int 栏目ID
	 */
	public function getColumn($columnid=null)
	{
		$where = array();
		if ($columnid) $where['id'] = is_array($columnid) ? array("in", $columnid) : $columnid;

		$data = T("Column")->where($where)->select();
		$data = $this->makeColumnList($data);

		return $data;
	}

	//格式化栏目列表
	public function makeColumnList($ColumnList=array())
	{
		$data = array();

		if (empty($ColumnList)) return false;
		foreach ($ColumnList as $column) {
			if ($column['parentid']) {
				
			}
		}

		return $data;
	}

	/**
	 * 获取栏目内容
	 * @param $parentid 父栏目ID
	 */
	private function getColumnList($parentid=null)
	{

	}
}