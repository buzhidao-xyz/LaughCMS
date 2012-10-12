<?php
/**
 * 节点模型 数据处理
 * by laucen 2012-9-6
 */
class Node extends Base
{
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * 获取节点树
	 * @param $groupid int 组id 默认为Null 返回所有节点
	 */
	public function getNodeTree($groupid=null)
	{
		if ($groupid === 0) return array();

		$where = array(
			'groupid' => $groupid
		);
		$return = T('node')->where($where)->select();

		return $return;
	}

	/**
	 * 保存新节点
	 */
	public function saveNode($data)
	{
		if (!is_array($data) || empty($data)) return false;
		
		return T('node')->add($data);
	}
}