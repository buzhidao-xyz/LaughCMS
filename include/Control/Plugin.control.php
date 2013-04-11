<?php
/**
 * 插件控制器
 * by buzhidao 2013-02-04
 * 处理逻辑数据 执行具体的功能操作
 */
class PluginControl extends CommonControl
{
	//控制器名
    protected $_control = 'plugin';

	public function __construct()
	{
		parent::__construct();
	}

	public function index(){}

	//人才招聘插件
	public function Cooperate()
	{
		$this->assign("page", getPage(170,15));
		$this->display("Plugin/cooperate.html");
	}

	//帮助(问答)插件
	public function QA()
	{
		$this->assign("page", getPage(170,15));
		$this->display("QA/index.html");
	}
}