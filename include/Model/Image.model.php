<?php
/**
 * 图片模型
 * by buzhidao 2013-03-26
 * 图片操作 轮播图片 增删改查
 */
class Image extends Base
{
	public function __construct()
	{
		parent::__construct();
	}

	//获取首页轮播图片
	public function getHomeScrollImage($id=null,$where=array())
	{
		if ($id) $where['id'] = $id;
		return T("scrollimage")->where($where)->select();
	}
}