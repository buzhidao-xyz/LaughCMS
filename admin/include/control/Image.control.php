<?php
/**
 * 图片控制器
 * by buzhidao 2013-03-26
 */
class ImageControl extends CommonControl
{
	//缩略图标准宽高
	static protected $_Width = 550;
	static protected $_Height = 350;

	//图片最大size
	static protected $_ImageSize = 5242880; //5M

	public function __construct()
	{
		parent::__construct();
	}

	//入口
	public function index(){}

	//首页轮播图片管理
	public function HomeScrollImage()
	{
		$HomeScrollImageList = M("Images")->getHomeScrollImage();
		$this->assign("total",$HomeScrollImageList['total']);
		$this->assign("dataList",$HomeScrollImageList['data']);

		$this->display("Image/HomeScrollImage.html");
	}

	//获取轮播图片
	private function _getImage()
	{
		$upload = new UploadHelper();
		$upload->maxSize  = self::$_ImageSize;
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

		$return = M("Images")->saveHomeScrollImage($data);
		if ($return) {
			$this->showMessage('图片保存成功！',1);
		} else {
			$this->showMessage('图片保存失败！',0);
		}
	}

	//修改首页轮播图片
	public function updateHomeScrollImage()
	{
		$this->assign("accessStatus",1);

		$id = q('id');
		$HomeScrollImageInfo = M("Images")->getHomeScrollImage($id);
		$HomeScrollImageInfo = $HomeScrollImageInfo['data'][0];
		$this->assign("HomeScrollImageInfo",$HomeScrollImageInfo);

		$this->display("Image/updateHomeScrollImage.html");
	}

	//保存修改
	public function saveUpdateHomeScrollImage()
	{
		$id = q('id');
		$path = $this->_getImage();
		$title = q("title");
		$link = q("link");

		$data = array(
			'title' => $title,
			'link'  => $link
		);
		if ($path) $data['path'] = $path;

		$return = M("Images")->UpdateHomeScrollImage($id,$data);
		$this->showMessage('图片修改成功！',1);
	}

	//修改首页轮播图片状态
	public function UpdateHomeScrollImageStatus()
	{
		$id = q('id');
		$isshow = q('isshow');

		$data = array('isshow'=>$isshow);
		$return = M("Images")->UpdateHomeScrollImage($id,$data);
		if ($return) {
			$this->ajaxReturn(0,"状态切换成功！");
		} else {
			$this->ajaxReturn(1,"状态切换失败！");
		}
	}

	//删除首页轮播图片状态
	public function deleteHomeScrollImage()
	{
		$id = q('id');
		$return = M("Images")->deleteHomeScrollImage($id);
		if ($return) {
			$this->ajaxReturn(0,"删除成功！");
		} else {
			$this->ajaxReturn(1,"删除失败！");
		}
	}

	//图片上传
	public function saveUploadImage()
	{
		$imageTitle = q("imageTitle");
		$imageLink = null;
		$archiveid = null;

		$upload = new UploadHelper();
		$upload->thumb = true;
		$upload->thumbMaxWidth = self::$_Width;
		$upload->thumbMaxHeight = self::$_Height;
		$upload->maxSize  = self::$_ImageSize;
		$upload->savePath =  C("UPLOAD_PATH")."/Image/".date("Ym/d/");
		if (!$upload->upload()) {
			$this->ajaxReturn(1,"图片上传失败！");
		} else {
			$info = $upload->getUploadFileInfo();
			$imagepath = str_replace(ROOT_DIR, "", $info[0]['savepath'].$info[0]['savename']);
			$thumbpath = str_replace(ROOT_DIR, "", $info[0]["thumb"]);
			$imageid = M("Images")->saveUploadImage($imagepath,$thumbpath,$imageTitle,$imageLink,$archiveid,$info[0]['name'],$info[0]['savename'],$info[0]['size']);
			if ($imageid) {
				$data = array(
					'imageid' => $imageid,
					'src'     => __APPM__.$thumbpath,
					'imageTitle' => $imageTitle
				);
				$this->ajaxReturn(0,"图片上传成功！",$data);
			} else {
				$this->ajaxReturn(1,"图片上传失败！");
			}
		}
	}
}