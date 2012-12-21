<?php
/**
 * 上传控制类
 * by wbq 2011-12-01
 * 处理逻辑数据 执行具体的功能操作
 */
class FileControl extends CommonControl
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index(){}

    //图片上传返回
    protected function imageUploadReturn($url=null,$title='',$state="SUCCESS")
    {
        $return = array(
            'url'      => $url,
            'title'    => $title,
            'state'    => $state
        );

        echo json_encode($return); exit;
    }

    private function makeSavePath($folderpath=null)
    {
    	return C("UPLOAD_PATH")."/".$folderpath."/".date("Ym/d/");
    }

	//上传图片处理
	public function upImage()
	{
		$upload = new UploadHelper();
		$upload->maxSize  = 2097152; //2M
		$upload->savePath =  $this->makeSavePath("Image");
		if(!$upload->upload()) {
			$this->imageUploadReturn("","",$upload->getErrorMsg());
		} else {
			$info = $upload->getUploadFileInfo();
			$url = str_replace(ROOT_DIR, "", $info[0]['savepath'].$info[0]['savename']);
			$this->imageUploadReturn(__APP__.$url,$info[0]['name']);
		}
	}

	//涂鸦图片处理
	public function scrawlImage()
	{
		$upload = new UploadHelper();
		$upload->savePath =  $this->makeSavePath("Scrawl");

		$action = isset($_GET["action"]) ? htmlspecialchars($_GET["action"]) : "";
		if ($action == "tmpImg") {
			// 背景上传
	        if(!$upload->upload()) {
				$url = "";
				$state = $upload->getErrorMsg();
			} else {
				$info = $upload->getUploadFileInfo();
				$url = str_replace(ROOT_DIR, "", $info[0]['savepath'].$info[0]['savename']);
				$state = "SUCCESS";
			}
	        //返回数据，调用父页面的ue_callback回调
	        echo "<script>parent.ue_callback('".__APP__.$url."','".$state."')</script>";
	    } else {
	        if(!$upload->uploadContent("content","base64")) {
				$this->imageUploadReturn("","",$upload->getErrorMsg());
			} else {
				$info = $upload->getUploadFileInfo();
				$url = str_replace(ROOT_DIR, "", $info['savepath'].$info['savename']);
				$this->imageUploadReturn(__APP__.$url,$info['name']);
			}
	    }
	}
}