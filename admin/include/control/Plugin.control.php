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
        $c = '.';
        $ROOT_DIR = ROOT_DIR;

        import("Lib.Plugin.FileManage");
        $fileManage = new FileManage($ROOT_DIR);

        $dir = q("dir");
        //当前需要管理的目录 物理路径
        $mdir = $dir && $dir != $c ? $ROOT_DIR."/".$dir : $ROOT_DIR;
        $filelist = $fileManage->index($mdir);
        $this->assign("filelist", $filelist);

        //当前目录 相对路径
        $cdir = $dir ? $dir : $c;
        $this->assign("dir", $cdir);

        //上级目录
        $pdir = $dir && $dir != $c ? substr($dir,0,strrpos($dir, '/')) : $c;
        $this->assign("pdir", $pdir);
        $this->display("FileManage/index.html");
    }

    //文件编辑
    public function fileEdit()
    {
        $dir = q('dir');
        $file = q('file');
        $action = q('action');
    }

    //文件改名
    public function fileRename()
    {
        $dir = q('dir');
        $filename = q('filename');
        $action = q('action');
        if ($action == "save") {
            
        } else {
            $this->assign('oldfilename', $filename);
            $this->display("FileManage/fileRename.html");
        }
    }

    //文件删除
    public function fileDelete()
    {
        $dir = q('dir');
        $file = q('file');
        $action = q('action');
    }

    //文件移动
    public function fileMove()
    {
        $dir = q('dir');
        $file = q('file');
        $action = q('action');
    }
}