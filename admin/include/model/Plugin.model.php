<?php
/**
 * 插件模型
 * by buzhidao 2013-04-11
 */
class Plugin extends Base
{
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * 获取文章列表
	 * @param string/array $id 文档ID
	 * @param int $start 分页开始记录号
	 * @param int $length 分页结束记录号
	 * @param array $where 条件数组
	 */
	public function getCooperateList($id=null,$start=0,$length=0,$state=1,$columnids=array(),$control=null)
	{
		$where = array();
		if (is_array($columnids) && !empty($columnids)) $where['columnid'] = array("in", $columnids);
		if ($control) $where['control'] = $control;

		return array();
	}
}