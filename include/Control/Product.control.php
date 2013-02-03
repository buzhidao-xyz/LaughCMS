<?php
/**
 * 产品模型控制器
 * by wbq 2013-02-01
 * 处理逻辑数据 执行具体的功能操作
 */
class ProductControl extends CommonControl
{
	//控制器名
    protected $_control = 'product';

	public function __construct()
	{
		parent::__construct();
	}

	//主入口
	public function index()
	{
		$this->assign("page", getPage(170,15));
		$this->display("Product/index.html");
	}
}