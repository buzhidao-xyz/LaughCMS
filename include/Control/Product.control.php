<?php
/**
 * 产品模型控制器
 * by wbq 2013-02-01
 * 处理逻辑数据 执行具体的功能操作
 */
class ProductControl extends ArchiveControl
{
	//控制器名
    protected $_control = 'Product';

	public function __construct()
	{
		parent::__construct();
	}

	//主入口
	public function index()
	{
		$ArchiveList = $this->getAllArchive();

		$this->assign("ArchiveList", $ArchiveList['data']);
		$this->assign("page", getPage($ArchiveList['total'],$this->_pagesize));
		$this->display("Product/list.html");
	}

	//显示产品详情
	public function view()
	{
		$archiveid = $this->_getArchiveID();
		$archiveInfo = M("Product")->getProductInfo($this->_columnid,$archiveid);
		$this->assign("archiveInfo",$archiveInfo);

		$this->display("Product/body.html");
	}
}