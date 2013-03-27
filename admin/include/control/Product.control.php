<?php
/**
 * 产品控制器
 */
class ProductControl extends CommonControl
{
	//控制器名
	static protected $_Control = "Product";

	public function __construct()
	{
		parent::__construct();
	}

	//主入口
	public function index()
	{
		$this->display("Product/index.html");
	}
}