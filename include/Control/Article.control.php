<?php
/**
 * 文档控制器
 * by wbq 2011-12-01
 * 处理逻辑数据 执行具体的功能操作
 */
class ArticleControl extends CommonControl
{
	//控制器名
    protected $_control = 'article';

	public function __construct()
	{
		parent::__construct();
	}

	//获取文档ID
	public function _getArticleID()
	{
		$articleid = q("articleid");
		return $articleid;
	}

	//主入口 获取文档
	public function index()
	{
		list($start,$length) = $this->getPages();
		$ArticleList = $this->getAllArticle();

		$this->assign("ArticleList", $ArticleList['data']);
		$this->assign("page", getPage($ArticleList['total'],$this->_pagesize));
		$this->display("Article/list.html");
	}

	//获取文档内容
	public function view()
	{
		$articleid = $this->_getArticleID();
		$articleInfo = M("Article")->getArticleInfo($this->_columnid,$articleid);

		$this->assign("articleInfo",$articleInfo);
		$this->display("Article/body.html");
	}

	//显示文章内容
	public function article()
	{
		$this->display("Article/article.html");
	}
}