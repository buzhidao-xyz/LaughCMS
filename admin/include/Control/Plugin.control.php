<?php
class PluginControl extends CommonControl
{
    //控制器名
    protected $_Control = "Plugin";

	//初始化构造函数
	public function __construct()
	{
		parent::__construct();
	}

    public function index(){}

    protected function _getColumnID()
    {
        $columnid = q("columnid");

        return $columnid;
    }

    protected function _getPublishtime()
    {
        $publishtime = q("publishtime");
        if (!$publishtime) return false;
        $publishtime = explode(" ", $publishtime);
        $publishtime1 = explode("-", $publishtime[0]);
        $publishtime2 = explode(":", $publishtime[1]);
        $publishtime = mktime($publishtime2[0],$publishtime2[1],$publishtime2[2],$publishtime1[1],$publishtime1[2],$publishtime1[0]);

        return $publishtime;
    }

    protected function _getUpdatetime()
    {
        $updatetime = q("updatetime");
        if (!$updatetime) return false;
        $updatetime = explode(" ", $updatetime);
        $updatetime1 = explode("-", $updatetime[0]);
        $updatetime2 = explode(":", $updatetime[1]);
        $updatetime = mktime($updatetime2[0],$updatetime2[1],$updatetime2[2],$updatetime1[1],$updatetime1[2],$updatetime1[0]);

        return $updatetime;
    }

    /********************************人才招聘插件********************************/

    //人才招聘插件
    public function CooperateIndex()
    {
        $columnid = $this->_getColumnID();

        $columnids = array();
        if ($columnid) $columnids = array_merge(M("Column")->getSubColumnID($columnid),array($columnid));

        list($start,$length) = $this->getPages();
        $dataList = M("Plugin")->getCooperateList(null,$start,$length,$columnids,$this->_Control);
        
        $this->assign("total", $dataList['total']);
        $this->assign("dataList", $dataList['data']);

        $this->assign("page", getPage($dataList['total'],$this->_pagesize));
        $this->display("Plugin/CooperateIndex.html");
    }

    //添加人才招聘信息
    public function CooperateAdd()
    {
        $this->assign("accessStatus",1);

        $this->assign("userInfo",$this->userInfo);
        $this->assign("columnTree", D("Column")->getColumnTree($this->_Control));

        $this->display("Plugin/CooperateAdd.html");
    }

    //获取招聘字段
    private function _dealCooperateFields($filter=array())
    {
        $position = q("position");
        if (!$position) $this->ajaxReturn(1,"请填写招聘职位！");
        $columnid = q("columnid");
        if (!$columnid) $this->ajaxReturn(1,"请选择发布栏目！");
        $quantity = q("quantity");
        if (!$quantity) $this->ajaxReturn(1,"请输入招聘人数！");
        $education = q("education");
        $experience = q("experience");
        $place = q("place");
        $nature = q("nature");
        $salary = q("salary");
        $author = q("author");
        $publishtime = $this->_getPublishtime();
        $updatetime = $this->_getUpdatetime();
        $description = q("description");
        $validitytime = q("validitytime");

        $data = array(
            'position' => $position,
            'columnid' => $columnid,
            'quantity' => $quantity,
            'education'  => $education,
            'experience' => $experience,
            'place'  => $place,
            'nature' => $nature,
            'salary' => $salary,
            'author' => $author,
            'description' => $description,
            'validitytime'=> $validitytime
        );

        if (!in_array('publishtime',$filter)) $data['publishtime'] = $publishtime;
        $data['updatetime'] = $updatetime ? $updatetime : TIMESTAMP;

        return $data;
    }

    //保存人才招聘信息
    public function CooperateSave()
    {
        $data = $this->_dealCooperateFields();
        $return = M("Plugin")->CooperateSave($data);
        if ($return) {
            $this->ajaxReturn(0,"添加信息成功！");
        } else {
            $this->ajaxReturn(1,"添加信息失败！");
        }
    }

    //修改人才招聘信息
    public function CooperateEdit()
    {
        $this->assign("accessStatus",1);
        $id = q("id");
        if (!$id) $this->ajaxReturn(1,"ID错误！");

        $this->assign("userInfo",$this->userInfo);
        $this->assign("columnTree", D("Column")->getColumnTree($this->_Control));

        $CooperateInfo = M("Plugin")->getCooperateList($id,0,0,null);
        $this->assign("CooperateInfo",!empty($CooperateInfo['data']) ? $CooperateInfo['data'][0] : array());

        $this->display("Plugin/CooperateEdit.html");
    }

    //保存修改人才招聘信息
    public function CooperateEditSave()
    {
        $id = q("cooperateid");
        if (!$id) $this->ajaxReturn(1,"ID错误！");

        $data = $this->_dealCooperateFields(array('publishtime'));
        $return = M("Plugin")->CooperateUpdate($id,$data);
        if ($return) {
            $this->ajaxReturn(0,"信息修改成功！");
        } else {
            $this->ajaxReturn(1,"信息修改失败！");
        }
    }

    //删除人才招聘信息
    public function CooperateDelete()
    {
        $id = q("id");
        if (!$id) $this->ajaxReturn(1,"ID错误！");

        $return = M("Plugin")->CooperateDelete($id);
        if ($return) {
            $this->ajaxReturn(0,"删除信息成功！");
        } else {
            $this->ajaxReturn(1,"删除信息失败！");
        }
    }

    /********************************友情链接插件********************************/

    //友情链接管理
    public function FlinkIndex()
    {
        $catalogList = M("Plugin")->getFlinkCatalog();
        $this->assign("catalogList", $catalogList);

        list($start,$length) = $this->getPages();
        $dataList = M("Plugin")->getFlink(null,$start,$length);
        
        $this->assign("total", $dataList['total']);
        $this->assign("dataList", $dataList['data']);

        $this->assign("page", getPage($dataList['total'],$this->_pagesize));
        $this->display("Plugin/FlinkIndex.html");
    }

    //友情链接保存
    public function FlinkSave()
    {
        $catalogid = q("catalogid");
        if (!$catalogid) $this->ajaxReturn(1,"请选择分类！");
        $linkname = q("linkname");
        if (!$linkname) $this->ajaxReturn(1,"请填写链接名称！");
        $linkurl = q("linkurl");
        if (!$linkurl) $this->ajaxReturn(1,"请填写链接地址！");

        $return = M("Plugin")->FlinkSave($catalogid,$linkname,$linkurl,TIMESTAMP);
        if ($return) {
            $this->ajaxReturn(0,"链接添加成功！");
        } else {
            $this->ajaxReturn(1,"链接添加失败！");
        }
    }

    //友情链接管理
    public function FlinkEdit()
    {
        $linkid = q("linkid");
        $LinkInfo = M("Plugin")->getFlink($linkid,0,0);
        $this->assign("LinkInfo",$LinkInfo['data'][0]);

        $catalogList = M("Plugin")->getFlinkCatalog();
        $this->assign("catalogList", $catalogList);

        $this->display("Plugin/FlinkEdit.html");
    }

    //保存修改友情链接信息
    public function FlinkEditSave()
    {
        $linkid = q("linkid");
        if (!$linkid) $this->ajaxReturn(1,"ID错误！");
        $catalogid = q("catalogid");
        if (!$catalogid) $this->ajaxReturn(1,"请选择分类！");
        $linkname = q("linkname");
        if (!$linkname) $this->ajaxReturn(1,"请填写链接名称！");
        $linkurl = q("linkurl");
        if (!$linkurl) $this->ajaxReturn(1,"请填写链接地址！");

        $return = M("Plugin")->FlinkUpdate($linkid,$catalogid,$linkname,$linkurl);
        if ($return) {
            $this->ajaxReturn(0,"链接信息修改成功！");
        } else {
            $this->ajaxReturn(1,"链接信息修改失败！");
        }
    }

    //友情链接管理
    public function FlinkDelete()
    {
        $id = q("id");
        if (!$id) $this->ajaxReturn(1,"ID错误！");
        $return = M("Plugin")->FlinkDelete($id);
        if ($return) {
            $this->ajaxReturn(0,"删除成功！");
        } else {
            $this->ajaxReturn(1,"删除失败！");
        }
    }

    //友情链接分类管理
    public function FlinkCatalogIndex()
    {
        $this->assign("accessStatus",1);

        $dataList = M("Plugin")->getFlinkCatalog();
        $this->assign("total", count($dataList));
        $this->assign("dataList", $dataList);

        $this->display("Plugin/FlinkCatalogIndex.html");
    }

    //保存分类
    public function FlinkCatalogSave()
    {
        $catalogname = q("catalogname");
        if (!$catalogname) $this->ajaxReturn(1,"请填写分类名称！");
        $state = q("state");

        $return = M("Plugin")->FlinkCatalogSave($catalogname,$state,TIMESTAMP);
        if ($return) {
            $this->ajaxReturn(0,"链接分类添加成功！");
        } else {
            $this->ajaxReturn(1,"链接分类添加失败！");
        }
    }

    //编辑分类信息
    public function FlinkCatalogEdit()
    {
        $this->assign("accessStatus",1);
        $id = q("id");
        if (!$id) $this->ajaxReturn(1,"ID错误！");

        $CatalogInfo = M("Plugin")->getFlinkCatalog($id);
        $this->assign("CatalogInfo", $CatalogInfo[0]);
        $this->display("Plugin/FlinkCatalogEdit.html");
    }

    //保存编辑分类信息
    public function FlinkCatalogEditSave()
    {
        $catalogid = q("catalogid");
        if (!$catalogid) $this->ajaxReturn(1,"分类ID错误！");
        $catalogname = q("catalogname");
        if (!$catalogname) $this->ajaxReturn(1,"请填写分类名称！");
        $state = q("state");
        $sort = intval(q("sort"));
        if (!FilterHelper::C_int($sort)) $this->ajaxReturn(1,"请填写正确的排序序号！");

        $return = M("Plugin")->FlinkCatalogEditSave($catalogid,$catalogname,$state,$sort);
        if ($return) {
            $this->ajaxReturn(0,"修改成功！");
        } else {
            $this->ajaxReturn(1,"修改失败！");
        }
    }

    //友情链接分类删除
    public function FlinkCatalogDelete()
    {
        $id = q("id");
        if (!$id) $this->ajaxReturn(1,"ID错误！");
        $return = M("Plugin")->FlinkCatalogDelete($id);
        if ($return) {
            $this->ajaxReturn(0,"删除成功！");
        } else {
            $this->ajaxReturn(1,"删除失败！");
        }
    }

    /********************************文件管理器插件********************************/

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
            $this->showMessage($return['msg'],$return['state'],__APP__."/index.php?s=Plugin/fileManage&dir=".urlencode($dir));
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
        $filename = q('filename');
        $action = q('action');
        if ($action == "save") {
            $newdir = q("newdir");
            $fileManage = $this->_newFileManage();
            $return = $fileManage->fileMove($dir,$newdir,$filename);
            if ($return['state']) {
                $this->ajaxReturn(0,'移动成功！');
            } else {
                $this->ajaxReturn(1,$return['msg']);
            }
        } else {
            $this->assign('dir', $dir);
            $this->assign('filename', $filename);
            $this->display("FileManage/fileMove.html");
        }
    }

    //新建文件
    public function newFile()
    {
        $dir = urldecode(q("dir"));
        $action = q('action');

        if ($action == "save") {
            $filename = q('filename');
            $filecontent = q('filecontent');

            $fileManage = $this->_newFileManage();
            $return = $fileManage->fileSave($dir,$filename,$filecontent);
            $this->showMessage($return['msg'],$return['state'],__APP__."/index.php?s=Plugin/fileManage&dir=".urlencode($dir));
        } else {
            $this->assign('dir', $dir);
            $this->display("FileManage/newfile.html");
        }
    }

    //新建目录
    public function newDir()
    {
        $dir = urldecode(q("dir"));
        $action = q('action');

        if ($action == "save") {
            $newdir = q("newdir");
            $fileManage = $this->_newFileManage();
            $return = $fileManage->saveDir($dir,$newdir);
            if ($return['state']) {
                $this->ajaxReturn(0,'创建成功！');
            } else {
                $this->ajaxReturn(1,$return['msg']);
            }
        } else {
            $this->assign('dir', $dir);
            $this->display("FileManage/newdir.html");
        }
    }

    //文件上传
    public function fileUpload()
    {
        $dir = urldecode(q("dir"));
        $action = q('action');

        if ($action == "save") {
            $fileManage = $this->_newFileManage();
            $return = $fileManage->fileUpload($dir);
            $this->showMessage($return['msg'],$return['state']);
        } else {
            $this->assign('dir', $dir);
            $this->display("FileManage/fileupload.html");
        }
    }

    //空间检查
    public function spaceCheck()
    {
        $dir = urldecode(q("dir"));
        $fileManage = $this->_newFileManage();
        $diskSpace = $fileManage->getDiskSpace($dir);
        $this->assign('diskSpace', formatBytes($diskSpace));
        $this->display("FileManage/spaceCheck.html");
    }
}