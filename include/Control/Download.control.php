<?php
/**
 * 下载模型控制器
 * by buzhidao 2013-02-01
 * 处理逻辑数据 执行具体的功能操作
 */
class DownloadControl extends CommonControl
{
	//控制器名
    protected $_control = 'download';

	public function __construct()
	{
		parent::__construct();
	}

	//主入口
	public function index()
	{
		$this->assign("page", getPage(170,15));
		$this->display("Download/index.html");
	}
}