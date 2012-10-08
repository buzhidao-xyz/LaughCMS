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
	 */
	public function getNodeTree()
	{
		return T('node')->select()->find(1);
	}
}