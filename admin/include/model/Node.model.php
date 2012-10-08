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
	 * @param $groupid int 组id 默认为Null 0:返回所有节点
	 */
	public function getNodeTree($groupid=null)
	{
		
		return T('node')->select()->find(1);
	}
}