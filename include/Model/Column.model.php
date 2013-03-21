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
	 * @param $parentid mixed 父栏目ID
	 */
	public function getColumnList($parentid=null,$where=array())
	{
		if ($parentid) $where['a.parentid'] = is_array($parentid) ? array("in", $parentid) : $parentid;

		$data = T("Column")->join(' '.TBF.'column_model as b on a.columnmodel=b.id ')->field("a.*,b.table,b.usefields,b.control")->where($where)->order("a.id")->select();
		$data = $this->makeColumnList($data);

		return $data;
	}

	/**
	 * 格式化栏目列表
	 * @param $ColumnList array() 栏目列表
	 */
	public function makeColumnList($ColumnList=array())
	{
		$data = array();

		if (empty($ColumnList)) return false;
		foreach ($ColumnList as $column) {
			$column['control'] = $column['control'] ? $column['control'] : 'Index';
			$column['action'] = $column['action'] ? $column['action'] : 'index';

			if (!$column['parentid']) {
				if ($column['control'] == CONTROL && $column['action'] == ACTION) $column['navon'] = true;
				$data[] = $column;
			} else {
				foreach ($data as $k=>$d) {
					if ($column['parentid'] == $d['id']) {
						if ($column['control'] == CONTROL && $column['action'] == ACTION) $data[$k]['navon'] = true;
						$data[$k]['SubColumnList'][] = $column;
					} else {
						if (isset($d['SubColumnList'])&&!empty($d['SubColumnList'])) {
							foreach ($d['SubColumnList'] as $k1=>$d1) {
								if ($column['parentid'] == $d1['id']) {
									if ($column['control'] == CONTROL && $column['action'] == ACTION) $data[$k]['navon'] = true;
									$data[$k]['SubColumnList'][$k1]['SubColumnList'][] = $column;
								} else {
									if (isset($d1['SubColumnList'])&&!empty($d1['SubColumnList'])) {
										foreach ($d1['SubColumnList'] as $k2=>$d2) {
											if ($column['parentid'] == $d2['id']) {
												if ($column['control'] == CONTROL && $column['action'] == ACTION) $data[$k]['navon'] = true;
												$data[$k]['SubColumnList'][$k1]['SubColumnList'][$k2]['SubColumnList'][] = $column;
											}
										}
									}
								}
							}
						}
					}
				}
			}
		}
		return $data;
	}

	/**
	 * 获取某个栏目内容
	 * @param $columnid int 栏目ID
	 */
	public function getColumn($columnid=null,$where=array())
	{
		if (!$columnid) return false;
		$where['a.id'] = $columnid;
		$column = T("Column")->join(' '.TBF.'column_model as b on a.columnmodel=b.id ')->field("a.*,b.table,b.usefields,b.control")->where($where)->find();

		return $column;
	}
}