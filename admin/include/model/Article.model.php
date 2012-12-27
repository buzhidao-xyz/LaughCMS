<?php
/**
 * 栏目模型
 * by laucen 2012-9-6
 */
class Article extends Base
{
	public function __construct()
	{
		parent::__construct();
	}

	//添加文档
	public function saveArticle($data=array())
	{
		if (!is_array($data) || empty($data)) return false;
		return T("Article")->add($data);
	}

	//添加文档内容
	public function saveArticleContent($data=array())
	{
		if (!is_array($data) || empty($data)) return false;
		return T("Article_index")->add($data);
	}
}