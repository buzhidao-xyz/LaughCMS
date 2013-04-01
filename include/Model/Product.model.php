<?php
/**
 * 产品模型
 * by wbq 2013-04-01
 * edit by buzhidao 2013-04-01
 * 文章的基本增删改查操作
 */
class Product extends Archive
{
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * 获取产品详情
	 * @param $archiveid int 文章id
	 */
	public function getProductDetail($archiveid=null)
	{
		if (empty($archiveid)) return false;

		$where = array();
		$where['archiveid'] = is_array($archiveid) ? array("in", $archiveid) : $archiveid;
		
		return T("product")->where($where)->select();
	}

	/**
	 * 获取某个产品详情
	 * @param $columnid int 栏目id
	 * @param $archiveid int 文档id
	 */
	public function getProductInfo($columnid=null,$archiveid=null,$where=array())
	{
		$archiveInfo = $this->getArchive($archiveid,0,0,$where);
		if (!$archiveInfo['total']) return false;

		$archiveInfo = $archiveInfo['data'][0];
		$productDetail = $this->getProductDetail($archiveid);
		$archiveInfo = array_merge($productDetail[0],$archiveInfo);
		$archiveInfo['archiveImage'] = $this->getArchiveImages($archiveid);

		$archiveInfo['prev'] = $this->getPrevArchive($columnid,$archiveid);
		$archiveInfo['next'] = $this->getNextArchive($columnid,$archiveid);
		return $archiveInfo;
	}
}