<?php
/**
 * 文章模型
 * by wbq 2013-03-28
 * edit by buzhidao 2013-03-28
 * 文章的基本增删改查操作
 */
class Article extends Archive
{
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * 获取文章内容
	 * @param $archiveid int 文章id
	 */
	public function getArticleContent($archiveid=null)
	{
		if (empty($archiveid)) return false;

		$where = array();
		$where['archiveid'] = is_array($archiveid) ? array("in", $archiveid) : $archiveid;
		
		return T("article")->where($where)->select();
	}

	/**
	 * 获取某个文章详情
	 * @param $columnid int 栏目id
	 * @param $archiveid int 文档id
	 */
	public function getArticleInfo($columnid=null,$archiveid=null,$where=array())
	{
		$articleInfo = $this->getArchive($archiveid,0,0,$where);
		if (!$articleInfo['total']) return false;

		$articleInfo = $articleInfo['data'][0];
		$articleIndex = $this->getArticleContent($archiveid);
		$articleInfo['content'] = $articleIndex[0]['content'];

		$articleInfo['prev'] = $this->getPrevArchive($columnid,$archiveid);
		$articleInfo['next'] = $this->getNextArchive($columnid,$archiveid);
		return $articleInfo;
	}
}