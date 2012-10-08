<?php
/**
 * 组模型 数据处理
 * by laucen 2012-9-28
 */
class Group extends Base
{
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * 获取组树
	 */
	public function getGroupTree()
	{
		return Table('group')->select()->find(1);
	}
}