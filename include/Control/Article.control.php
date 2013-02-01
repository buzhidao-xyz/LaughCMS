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

	//主入口
	public function index()
	{
		$this->display("Article/index.html");
	}

	//获取文档ID
	public function _getArticleID()
	{
		$articleid = q("articleid");
		return $articleid;
	}

	//获取文档内容
	public function getArticle()
	{
		$articleid = $this->_getArticleID();
	}
}