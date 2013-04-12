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
	 * 保存招聘信息
	 * @param $data array 信息数组
	 */
	public function CooperateSave($data=array())
	{
		if (!is_array($data) || empty($data)) return false;
		return T("cooperate")->add($data);
	}

	/**
	 * 保存招聘信息
	 * @param $data array 信息数组
	 */
	public function CooperateUpdate($id=null,$data=array())
	{
		if (!$id || !is_array($data) || empty($data)) return false;
		return T("cooperate")->where(array("id"=>$id))->update($data);
	}

	/**
	 * 删除招聘信息
	 * @param int $id 信息id
	 */
	public function CooperateDelete($id=null)
	{
		if (!$id) return false;
		return T("cooperate")->where(array("id"=>$id))->update(array("state"=>0));
	}

	/**
	 * 获取文章列表
	 * @param string/array $id 文档ID
	 * @param int $start 分页开始记录号
	 * @param int $length 分页结束记录号
	 * @param array $where 条件数组
	 */
	public function getCooperateList($id=null,$start=0,$length=0,$columnids=array(),$control=null)
	{
		$where = array();
		if (is_array($columnids) && !empty($columnids)) $where['columnid'] = array("in", $columnids);
		if ($control) $where['control'] = $control;

		if ($id) $where['a.id'] = is_array($id) ? array('in', $id) : $id;

		$where['a.state'] = 1;
		if (isset($where['control'])) {
			$ColumnModelInfo = M("CTModel")->getColumnModelByControl($where['control']);
			$where['b.columnmodel'] = $ColumnModelInfo['id'];
			unset($where['control']);
		}

		$total = T("cooperate")->join(' '.TBF.'Column as b on a.columnid=b.id ')->field('*')->where($where)->count();
		$obj = T("cooperate")->join(' '.TBF.'Column as b on a.columnid=b.id ')->field('a.*,b.columnname,b.columntype')->where($where)->order("a.id","desc");
		if ($length) $obj = $obj->limit($start,$length);
		$data = $obj->select();

		return array('total'=>$total,'data'=>$data);
	}

	/**
	 * 获取友情链接列表
	 * @param string/array $id 友情链接ID
	 * @param int $start 分页开始记录号
	 * @param int $length 分页结束记录号
	 * @param array $where 条件数组
	 */
	public function getFlinkList($id=null,$start=0,$length=0,$columnids=array(),$control=null)
	{

	}
}