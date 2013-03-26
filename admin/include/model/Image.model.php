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

		$total = T("scrollimage")->where($where)->count();
		$data = T("scrollimage")->where($where)->select();

		return array("total"=>$total,"data"=>$data);
	}

	//切换首页轮播图片状态
	public function UpdateHomeScrollImageStatus($id=null,$data=array())
	{
		
	}
}