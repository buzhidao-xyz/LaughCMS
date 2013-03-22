<?php
/**
 * 文档模型
 * by wbq 2011-12-13
 * edit by buzhidao 2012-12-13
 * 文档的基本增删改查操作
 */
class Article extends Base
{
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * 获取文档列表
	 * @param $articleid mixed 文档id 单一id或数组
	 * @param $start int 分页开始记录数
	 * @param $length int 每页记录数
	 * @param $where array() 条件数组
	 */
	public function getArticle($articleid=null,$start=0,$length=0,$where=array(),$state=1)
	{
		$where = is_array($where) ? $where : array();
		$where['state'] = $state;
		if ($articleid) $where['a.id'] = is_array($articleid) ? array("in", $articleid) : $articleid;

		$total = T("Article")->where($where)->count();
		$obj = T("Article")->where($where);
		if ($length) $obj = $obj->limit($start,$length);
		$data = $obj->order("publishtime","desc")->select();

		return array('total'=>$total, 'data'=>$data);
	}

	/**
	 * 获取某个栏目下面的文档列表
	 * @param $columnid mixed 栏目id
	 */
	public function getArticleListByColumnID($columnid=null)
	{
		if (empty($columnid)) return false;

		$where = array();
		$where['columnid'] = is_array($columnid) ? array('in',$columnid) : $columnid;
		$articleList = $this->getArticle(null,0,0,$where);

		$articleList = $articleList['data'];

		return $articleList;
	}

	/**
	 * 获取文章内容
	 * @param $articleid int 文章id
	 */
	public function getArticleContent($articleid=null)
	{
		if (empty($articleid)) return false;

		$where = array();
		$where['articleid'] = is_array($articleid) ? array("in", $articleid) : $articleid;
		$data = T("article_index")->where($where)->select();

		return $data;
	}

	//获取某个文档详情
	public function getArticleInfo($columnid=null,$articleid=null,$where=array())
	{
		$articleInfo = $this->getArticle($articleid,0,0,$where);
		if (!$articleInfo['total']) return false;

		$articleInfo = $articleInfo['data'][0];
		$articleIndex = $this->getArticleContent($articleid);
		$articleInfo['content'] = $articleIndex[0]['content'];

		$prevarticle = $this->getPrevArticle($columnid,$articleid);
		$articleInfo['prev'] = $prevarticle;
		$nextarticle = $this->getNextArticle($columnid,$articleid);
		$articleInfo['next'] = $nextarticle;

		return $articleInfo;
	}

	/**
	 * 获取某篇文档的前一篇文档
	 * @param $articleid int 文章id
	 */
	public function getPrevArticle($columnid=null,$articleid=null)
	{
		if (empty($columnid)||!$articleid) return false;

		$where = array();

		$columnids = array();
		$where['columnid'] = array("in", $columnids);
		$where['id'] = array("lt",$articleid);
		$article = T("Article")->where($where)->order("id","asc")->find();
		dump($columnid);exit;
	}

	/**
	 * 获取某篇文档的后一篇文档
	 * @param $articleid int 文章id
	 */
	public function getNextArticle($columnid=null,$articleid=null)
	{
		if (!$articleid) return false;

	}
}