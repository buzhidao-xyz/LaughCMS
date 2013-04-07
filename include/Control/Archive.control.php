<?php
/**
 * 文档控制器
 * by wbq 2013-03-28
 * 处理逻辑数据 执行具体的功能操作
 */
class ArchiveControl extends CommonControl
{
	//控制器名
    protected $_control = 'Archive';
    //分页每页记录数
    protected $_pagesize = 15;

	public function __construct()
	{
		parent::__construct();
	}

	//获取文档ID
	public function _getArchiveID()
	{
		$archiveid = q("archiveid");
		return $archiveid;
	}

	//主入口 获取文档
	public function index()
	{
		list($start,$length) = $this->getPages();
		$ArchiveList = $this->getAllArchive();

		$this->assign("ArchiveList", $ArchiveList['data']);
		$this->assign("page", getPage($ArchiveList['total'],$this->_pagesize));
		$this->display("Archive/list.html");
	}

	//获取文档内容
	public function View()
	{
		$this->display("Archive/body.html");
	}
}