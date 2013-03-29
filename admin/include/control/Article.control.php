<?php
/**
 * 文章控制器
 * by buzhidao 2012-12-26
 */
class ArticleControl extends ArchiveControl
{
	//控制器名
	static protected $_Control = "Article";

	public function __construct()
	{
		parent::__construct();
	}

	//获取文章ID
	protected function _getArticleID()
	{
		$articleid = q("articleid");
		return $articleid;
	}

	//主入口文档列表
	public function index()
	{
		$columnid = $this->_getColumnID();

		$columnids = array();
		if ($columnid) $columnids = array_merge(M("Column")->getSubColumnID($columnid),array($columnid));

		list($start,$length) = $this->getPages();
        $articleList = M("Article")->getArticle(null,$start,$length,1,$columnids,self::$_Control);
        $this->assign("total", $articleList['total']);
        $this->assign("dataList", $articleList['data']);

        $this->assign("page", getPage($articleList['total'],$this->_pagesize));
		$this->display("Article/index.html");
	}

	//新文章
	public function add()
	{
		$this->assign("accessStatus",1);

		$this->assign("userInfo",$this->userInfo);
		$this->assign("columnTree", D("Column")->getColumnTree(self::$_Control));

		$this->display("Article/add.html");
	}

	/**
	 * 保存文章入库
	 * @param $title string 文章标题 必须
	 */
	public function save()
	{
		$data = $this->dealArchiveSubmit();
		$archiveid = M("Archive")->saveArchive($data['title'],$data['tag'],$data['source'],$data['author'],$data['columnid'],$data['status'],$data['seotitle'],$data['keyword'],$data['description'],$data['image'],$data['publishtime']);
		
		if ($archiveid) {
			$content = $this->_getContent();
			$articleid = M('Article')->saveArticle($archiveid,$content);
			if ($articleid) {
				$NextOperation = array(
					array('name'=>'查看修改', 'link'=>__APP__.'/index.php?s=Article/edit&archiveid='.$archiveid)
				);
				$this->assign("NextOperation", $NextOperation);
				$this->display("Common/success.html");
			} else {
				$this->display("Common/error.html");
			}
		} else {
			$this->display("Common/error.html");
		}
	}

	//更新文档信息
	public function edit()
	{
		$this->assign("accessStatus", 1);

		$ArchiveID = $this->_getArchiveID();
		$articleInfo = M("Article")->getArticle($ArchiveID,0,0,null);
		$articleInfo = !empty($articleInfo['data']) ? $articleInfo['data'][0] : array();

		if (empty($articleInfo)) $this->display("Common/error.html");

		$articleInfo['content'] = M("Article")->getArticleContent($articleInfo["id"]);
		$this->assign("articleInfo", $articleInfo);

		$this->assign("columnTree", D("Column")->getColumnTree());
		$this->display("Article/edit.html");
	}

	//保存更新文档信息
	public function saveEdit()
	{
		$ArchiveID = $this->_getArchiveID();
		$data = $this->dealArchiveSubmit();
		$return = M("Archive")->upArchive($ArchiveID,$data['title'],$data['tag'],$data['source'],$data['author'],$data['columnid'],$data['status'],$data['seotitle'],$data['keyword'],$data['description'],$data['image'],$data['publishtime']);
		if ($return) {
			$content = $this->_getContent();
			$return = M("Article")->upArticleContent($ArchiveID,$content);
			if ($return) {
				$NextOperation = array(
					array('name'=>'查看修改', 'link'=>__APP__.'/index.php?s=Article/edit&archiveid='.$ArchiveID)
				);
				$this->assign("NextOperation", $NextOperation);
				$this->display("Common/success.html");
			} else {
				$this->display("Common/error.html");
			}
		} else {
			$this->display("Common/error.html");
		}
	}

	//回收文档 进入回收站
	public function recoverArticle()
	{
		$return = $this->recoverArchive();
		if ($return) {
			$this->ajaxReturn(0,"删除成功！");
		} else {
			$this->ajaxReturn(1,"删除失败！");
		}
	}

	//文档回收站
	public function recover()
	{
		$this->assign("accessStatus", 1);

		list($start,$length) = $this->getPages();
        $articleList = M("Article")->getArticle(null,$start,$length,0,null,self::$_Control);
        $this->assign("total", $articleList['total']);
        $this->assign("dataList", $articleList['data']);

        $this->assign("page", getPage($articleList['total'],$this->_pagesize));
		$this->display("Article/recover.html");
	}

	//还原文档
	public function backArticle()
	{
		$return = $this->backArchive();
		if ($return) {
			$this->ajaxReturn(0,"还原成功！");
		} else {
			$this->ajaxReturn(1,"还原失败！");
		}
	}

	//彻底删除文档
	public function deleteArticle()
	{
		$return = $this->deleteArchive();
		if ($return) {
			$this->ajaxReturn(0,"删除成功！");
		} else {
			$this->ajaxReturn(1,"删除失败！");
		}
	}

	//移动文档
	public function moveArticle()
	{
		$ArchiveID = $this->_getArchiveID();
		$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';
		if ($action == 'save') {
			
		} else {
			$this->assign("ArchiveID", $ArchiveID);
			$this->assign("columnTree", D("Column")->getColumnTree(self::$_Control));
			$this->display("Article/move.html");
		}
	}
}