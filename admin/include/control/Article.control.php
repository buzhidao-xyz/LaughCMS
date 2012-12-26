<?php
/**
 * 文档控制器
 * by buzhidao 2012-12-26
 */
class ArticleControl extends CommonControl
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->display("Article/articlelist.html");
	}

	public function newArticle()
	{
		$this->assign("columnTree", D("Column")->getColumnTree());
		$this->display("Article/newarticle.html");
	}

	public function saveArticle()
	{
		
	}
}