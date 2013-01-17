<?php
class PluginControl extends CommonControl
{
	//初始化构造函数
	public function __construct()
	{
		parent::__construct();
	}

    //文件管理器插件
    public function fileManage()
    {
    	$folder = ROOT_DIR;
        import("Lib.Plugin.FileManage");
        $fileManage = new FileManage($folder);

        $filelist = $fileManage->index();
        $this->assign("filelist", $filelist);
        dump($filelist);exit;
        $this->display("FileManage/index.html");
    }
}