<?php
/**
 * 文档控制器
 * by wbq 2013-03-28
 * 处理逻辑数据 执行具体的功能操作
 */
class ArticleControl extends ArchiveControl
{
	//控制器名
    protected $_control = 'Article';

	public function __construct()
	{
		parent::__construct();
	}

	//获取文章ID
	public function _getArticleID()
	{
		$articleid = q("articleid");
		return $articleid;
	}

	//主入口 获取文档
	public function index()
	{
		$this->display($this->_Column['template_index']);
	}

	//模型列表控制器
	public function lists()
	{
		$ArchiveList = $this->getAllArchive();

		$this->assign("ArchiveList", $ArchiveList['data']);
		$this->assign("page", getPage($ArchiveList['total'],$this->_pagesize));
		$this->display($this->_Column['template_list']);
	}

	//获取文档内容
	public function View()
	{
		$archiveid = $this->_getArchiveID();
		$archiveInfo = M("Article")->getArticleInfo($this->_columnid,$archiveid);
		$this->assign("archiveInfo",$archiveInfo);
		
		$this->display($this->_Column['template_body']);
	}
}