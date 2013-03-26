<?php
/**
 * 图片控制器
 * by buzhidao 2013-03-26
 */
class ImageControl extends CommonControl
{
	public function __construct()
	{
		parent::__construct();
	}

	//入口
	public function index(){}

	//首页轮播图片管理
	public function HomeScrollImage()
	{
		$HomeScrollImageList = M("Image")->getHomeScrollImage();
		$this->assign("total",$HomeScrollImageList['total']);
		$this->assign("dataList",$HomeScrollImageList['data']);

		$this->display("Image/HomeScrollImage.html");
	}

	//获取轮播图片
	private function _getImage()
	{
		$upload = new UploadHelper();
		$upload->maxSize  = 5242880; //5M
		$upload->savePath =  C("UPLOAD_PATH")."/ScrollImage/";
		if(!$upload->upload()) {
			return false;
		} else {
			$info = $upload->getUploadFileInfo();
			$url = str_replace(ROOT_DIR, "", $info[0]['savepath'].$info[0]['savename']);
			return $url;
		}
	}

	//保存首页轮播图片
	public function saveHomeScrollImage()
	{
		$path = $this->_getImage();
		$title = q("title");
		$link = q("link");

		$data = array(
			'path'  => $path,
			'title' => $title,
			'link'  => $link
		);

		$return = M("Image")->saveHomeScrollImage($data);
		if ($return) {
			$this->showMessage('图片保存成功！',1);
		} else {
			$this->showMessage('图片保存失败！',0);
		}
	}

	//修改首页轮播图片状态
	public function UpdateHomeScrollImageStatus()
	{
		$id = q('id');
		$isshow = q('isshow');

		$data = array('isshow'=>$isshow);
		$return = M("Image")->UpdateHomeScrollImageStatus($id,$data);
		if ($return) {
			$this->ajaxReturn(0,"状态切换成功！");
		} else {
			$this->ajaxReturn(1,"状态切换失败！");
		}
	}
}