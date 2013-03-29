<?php
/**
 * 图片管理模型
 * by buzhidao 2013-03-26
 */
class Image extends Base
{
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * 保存轮播图片
	 */
	public function saveHomeScrollImage($data=array())
	{
		if (!is_array($data)||empty($data)) return false;
		return T("scrollimage")->add($data);
	}

	/**
	 * 获取首页轮播图片
	 */
	public function getHomeScrollImage($id=null,$where=array())
	{
		if ($id) $where['id'] = $id;
		$where['isdelete'] = 0;

		$total = T("scrollimage")->where($where)->count();
		$data = T("scrollimage")->where($where)->select();

		return array("total"=>$total,"data"=>$data);
	}

	//保存修改首页轮播图片
	public function UpdateHomeScrollImage($id=null,$data=array())
	{
		if (!$id) return false;
		return T("scrollimage")->where(array("id"=>$id))->update($data);
	}

	//删除首页轮播图片
	public function deleteHomeScrollImage($id=null)
	{
		if (!$id) return false;
		return T("scrollimage")->where(array("id"=>$id))->update(array("isdelete"=>1));
	}

	/**
	 * 保存上传的图片 产品图片/图片集等
	 * @param $imagepath string 图片地址
	 * @param $imageTitle string 图片标题描述
	 * @param $imageLink string 图片链接
	 * @param $archiveid int 文档ID
	 */
	public function saveUploadImage($imagepath=null,$imagetitle=null,$imagelink=null,$archiveid=0)
	{
		if (!$imagepath) return false;

		$data = array('imagepath'=>$imagepath);
		if ($imagetitle) $data['imagetitle'] = $imagetitle;
		if ($imagelink) $data['imagelink'] = $imagelink;
		if ($archiveid) $data['archiveid'] = $archiveid;

		return T("images")->add($data);
	}
}