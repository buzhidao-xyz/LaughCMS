<?php
class PluginControl extends CommonControl
{
	//初始化构造函数
	public function __construct()
	{
		parent::__construct();
	}

    private function _newFileManage()
    {
        $dir = urldecode(q("dir"));
        $root = ROOT_DIR;

        import("Lib.Plugin.FileManage");
        return new FileManage($root,$dir);
    }

    //文件管理器插件
    public function fileManage()
    {
        $fileManage = $this->_newFileManage();
        $fileArray = $fileManage->getFileArray();

        $this->assign("fileArray", $fileArray);
        $this->display("FileManage/index.html");
    }

    //文件编辑
    public function fileEdit()
    {
        $dir = urldecode(q("dir"));
        $action = q('action');

        $fileManage = $this->_newFileManage();
        if ($action == "save") {
            $newdir = q("newdir");
            $oldfilename = q('oldfilename');
            $newfilename = q('newfilename');
            $filecontent = q('filecontent');

            $return = $fileManage->fileDelete($dir,$oldfilename);
            $return = $fileManage->fileSave($newdir,$newfilename,$filecontent);
            if ($return['state']) {
                $this->display("Common/success.html");
            } else {
                $this->display("Common/error.html");
            }
        } else {
            $filename = q('filename');
            $this->assign('dir', $dir);
            $this->assign('oldfilename', $filename);
            $this->assign('filecontent', $fileManage->getFileContent($dir,$filename));
            $this->display("FileManage/fileEdit.html");
        }
    }

    //文件改名
    public function fileRename()
    {
        $dir = urldecode(q("dir"));
        $action = q('action');
        if ($action == "save") {
            $oldfilename = q('oldfilename');
            $newfilename = q('newfilename');
            if (!$newfilename) $this->ajaxReturn(1,'请输入新名称！');
            $fileManage = $this->_newFileManage();
            $return = $fileManage->fileRename($dir,$oldfilename,$newfilename);
            if ($return['state']) {
                $this->ajaxReturn(0,'修改成功！');
            } else {
                $this->ajaxReturn(1,$return['msg']);
            }
        } else {
            $filename = q('filename');
            $this->assign('dir', $dir);
            $this->assign('oldfilename', $filename);
            $this->display("FileManage/fileRename.html");
        }
    }

    //文件删除
    public function fileDelete()
    {
        $dir = urldecode(q("dir"));
        $filename = q('filename');
        $fileManage = $this->_newFileManage();
        $return = $fileManage->fileDelete($dir,$filename);
        if ($return['state']) {
            $this->ajaxReturn(0,'删除成功！');
        } else {
            $this->ajaxReturn(1,$return['msg']);
        }
    }

    //文件移动
    public function fileMove()
    {
        $dir = urldecode(q("dir"));
        $action = q('action');
        if ($action == "save") {

        } else {
            $filename = q('filename');
            $this->assign('dir', $dir);
            $this->assign('filename', $filename);
            $this->display("FileManage/fileMove.html");
        }
    }
}