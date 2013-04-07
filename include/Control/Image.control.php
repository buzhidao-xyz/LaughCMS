<?php
/**
 * 图集模型控制器
 * by buzhidao 2013-02-03
 * 处理逻辑数据 执行具体的功能操作
 */
class ImageControl extends ArchiveControl
{
	//控制器名
    protected $_control = 'Image';

	public function __construct()
	{
		parent::__construct();
	}

	//主入口
	public function index()
	{
		list($start,$length) = $this->getPages();
		$ArchiveList = $this->getAllArchive();

		$this->assign("ArchiveList", $ArchiveList['data']);
		$this->assign("page", getPage($ArchiveList['total'],$this->_pagesize));
		$this->display("Image/list.html");
	}

	//获取文档内容
	public function View()
	{
		$archiveid = $this->_getArchiveID();
		$archiveInfo = M("Image")->getImageInfo($this->_columnid,$archiveid);
		$this->assign("archiveInfo",$archiveInfo);
		
		$this->display("Image/body.html");
	}

	//瀑布流展示图集详细内容
	public function Msonary()
	{
		// $this->display("Image/Msonary.html");
	}
}