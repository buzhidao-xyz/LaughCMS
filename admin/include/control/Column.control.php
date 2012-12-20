<?php
/**
 * 网站栏目管理器
 * by buzhidao 2012-11-19
 */
class ColumnControl extends CommonControl
{
	public function __construct()
	{
		parent::__construct();
	}

	//主入口
	public function index()
	{
		$this->assign("dataList",$dataList);
		$this->display("Column/column.html");
	}

	//添加栏目
	public function newColumn()
	{
		$this->assign("columnTree", $this->getColumnTree());
		$this->display("Column/newcolumn.html");
	}

	//保存栏目信息
	public function saveColumn()
	{

	}

	public function getColumnTree()
	{
		$data = M("Column")->getColumn();

		return $data;
	}
}