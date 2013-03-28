<?php
/**
 * 内容模型
 * by laucen 2012-9-6
 */
class CTModel extends Base
{
	public function __construct()
	{
		parent::__construct();
	}

	//获取内容模型列表
	public function ColumnModelList($id=0,$where=array())
	{
		if ($id) $where["id"] = is_array($id) ? array("in",$id) : $id;

		$total = T("column_model")->where($where)->count();
		$data = T("column_model")->where($where)->select();

		return array("total"=>$total, "data"=>$data);
	}

	//保存新增内容模型
	public function saveColumnModel($data=array())
	{
		if (empty($data)) return false;

		return T("column_model")->add($data);
	}

	//通过栏目模型控制器获取模型信息
	public function getColumnModelByControl($control=null)
	{
		if (!$control) return array();

		return T("column_model")->where(array("control"=>$control))->find();
	}
}