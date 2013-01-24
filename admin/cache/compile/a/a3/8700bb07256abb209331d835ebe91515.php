<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="keywords" content="">
<link type="text/css" rel="stylesheet" href="themes/green/style/common.css" media="screen">
<link type="text/css" rel="stylesheet" href="themes/green/style/base.css" media="screen">
<link type="text/css" rel="stylesheet" href="themes/green/style/global.css" media="screen">
<script type="text/javascript" src="public/js/jquery.js"></script>
<script type="text/javascript" src="themes/green/js/div_window.js"></script>
<!-- <script type="text/javascript" src="themes/blue/js/PIE.js"></script> -->
<title>管理中心</title>
<script type="text/javascript">
var JS_APP = '/laugh/admin';
var JS_APPM = 'http://localhost:82/laugh';
</script>
</head>

<body>
<style type="text/css">
	body { background: none; }
</style>
<div id="control">
	<ul class="controlTop">
		<li class="controlLeftTop"></li>
		<li class="controlRightTop"></li>
	</ul>
	<div id="controlContent">
<div class="captitle">
	<h5>文件管理 >> 修改文件</h5>
</div>
<div class="formContainer">
	<div class="formtitle"><h5>修改文件</h5></div>
	<form name="newform" action="/laugh/admin/index.php?s=Plugin/fileEdit&action=save" method="post" class="newform">
		<input type="hidden" name="dir" value="./admin/include/control" />
		<input type="hidden" name="oldfilename" value="Plugin.control.php" />
		<ul class="formbody">
			<li class="formblock">
				<span>文件目录:</span>
				<input type="text" name="newdir" value="./admin/include/control" class="input w250" />（. 表示根目录 ，不允许用 “..” 形式的路径） 
			</li>
			<li class="formblock">
				<span>文件名称:</span>
				<input type="text" name="newfilename" value="Plugin.control.php" class="input w250" />
			</li>
			<li class="formautoblock">
				<span>文件内容:</span>
				<textarea name="filecontent" rows="35" cols="110">&lt;?php
class PluginControl extends CommonControl
{
	//初始化构造函数
	public function __construct()
	{
		parent::__construct();
	}

    private function _newFileManage()
    {
        $dir = urldecode(q(&quot;dir&quot;));
        $root = ROOT_DIR;

        import(&quot;Lib.Plugin.FileManage&quot;);
        return new FileManage($root,$dir);
    }

    //文件管理器插件
    public function fileManage()
    {
        $fileManage = $this-&gt;_newFileManage();
        $fileArray = $fileManage-&gt;getFileArray();

        $this-&gt;assign(&quot;fileArray&quot;, $fileArray);
        $this-&gt;display(&quot;FileManage/index.html&quot;);
    }

    //文件编辑
    public function fileEdit()
    {
        $dir = urldecode(q(&quot;dir&quot;));
        $action = q('action');

        $fileManage = $this-&gt;_newFileManage();
        if ($action == &quot;save&quot;) {
            $newdir = q(&quot;newdir&quot;);
            $oldfilename = q('oldfilename');
            $newfilename = q('newfilename');
            $filecontent = q('filecontent');

            $return = $fileManage-&gt;fileDelete($dir,$oldfilename);
            $return = $fileManage-&gt;fileSave($newdir,$newfilename,$filecontent);
            $this-&gt;showMessage($return['msg'],$return['state'],/laugh/admin.&quot;/index.php?s=Plugin/fileManage&amp;dir=&quot;.urlencode($dir));
        } else {
            $filename = q('filename');
            $this-&gt;assign('dir', $dir);
            $this-&gt;assign('oldfilename', $filename);
            $this-&gt;assign('filecontent', $fileManage-&gt;getFileContent($dir,$filename));
            $this-&gt;display(&quot;FileManage/fileEdit.html&quot;);
        }
    }

    //文件改名
    public function fileRename()
    {
        $dir = urldecode(q(&quot;dir&quot;));
        $action = q('action');
        if ($action == &quot;save&quot;) {
            $oldfilename = q('oldfilename');
            $newfilename = q('newfilename');
            if (!$newfilename) $this-&gt;ajaxReturn(1,'请输入新名称！');
            $fileManage = $this-&gt;_newFileManage();
            $return = $fileManage-&gt;fileRename($dir,$oldfilename,$newfilename);
            if ($return['state']) {
                $this-&gt;ajaxReturn(0,'修改成功！');
            } else {
                $this-&gt;ajaxReturn(1,$return['msg']);
            }
        } else {
            $filename = q('filename');
            $this-&gt;assign('dir', $dir);
            $this-&gt;assign('oldfilename', $filename);
            $this-&gt;display(&quot;FileManage/fileRename.html&quot;);
        }
    }

    //文件删除
    public function fileDelete()
    {
        $dir = urldecode(q(&quot;dir&quot;));
        $filename = q('filename');
        $fileManage = $this-&gt;_newFileManage();
        $return = $fileManage-&gt;fileDelete($dir,$filename);
        if ($return['state']) {
            $this-&gt;ajaxReturn(0,'删除成功！');
        } else {
            $this-&gt;ajaxReturn(1,$return['msg']);
        }
    }

    //文件移动
    public function fileMove()
    {
        $dir = urldecode(q(&quot;dir&quot;));
        $filename = q('filename');
        $action = q('action');
        if ($action == &quot;save&quot;) {
            $newdir = q(&quot;newdir&quot;);
            $fileManage = $this-&gt;_newFileManage();
            $return = $fileManage-&gt;fileMove($dir,$newdir,$filename);
            if ($return['state']) {
                $this-&gt;ajaxReturn(0,'移动成功！');
            } else {
                $this-&gt;ajaxReturn(1,$return['msg']);
            }
        } else {
            $this-&gt;assign('dir', $dir);
            $this-&gt;assign('filename', $filename);
            $this-&gt;display(&quot;FileManage/fileMove.html&quot;);
        }
    }

    //新建文件
    public function newFile()
    {
        $dir = urldecode(q(&quot;dir&quot;));
        $action = q('action');

        if ($action == &quot;save&quot;) {
            $filename = q('filename');
            $filecontent = q('filecontent');

            $fileManage = $this-&gt;_newFileManage();
            $return = $fileManage-&gt;fileSave($dir,$filename,$filecontent);
            $this-&gt;showMessage($return['msg'],$return['state'],/laugh/admin.&quot;/index.php?s=Plugin/fileManage&amp;dir=&quot;.urlencode($dir));
        } else {
            $this-&gt;assign('dir', $dir);
            $this-&gt;display(&quot;FileManage/newfile.html&quot;);
        }
    }

    //新建目录
    public function newDir()
    {
        $dir = urldecode(q(&quot;dir&quot;));
        $action = q('action');

        if ($action == &quot;save&quot;) {
            $newdir = q(&quot;newdir&quot;);
            $fileManage = $this-&gt;_newFileManage();
            $return = $fileManage-&gt;saveDir($dir,$newdir);
            if ($return['state']) {
                $this-&gt;ajaxReturn(0,'创建成功！');
            } else {
                $this-&gt;ajaxReturn(1,$return['msg']);
            }
        } else {
            $this-&gt;assign('dir', $dir);
            $this-&gt;display(&quot;FileManage/newdir.html&quot;);
        }
    }

    //文件上传
    public function fileUpload()
    {
        $dir = urldecode(q(&quot;dir&quot;));
        $action = q('action');

        if ($action == &quot;save&quot;) {
            $fileManage = $this-&gt;_newFileManage();
            $return = $fileManage-&gt;fileUpload($dir);
            $this-&gt;showMessage($return['msg'],$return['state']);
        } else {
            $this-&gt;assign('dir', $dir);
            $this-&gt;display(&quot;FileManage/fileupload.html&quot;);
        }
    }

    //空间检查
    public function spaceCheck()
    {
        $dir = urldecode(q(&quot;dir&quot;));
        $fileManage = $this-&gt;_newFileManage();
        $diskSpace = $fileManage-&gt;getDiskSpace($dir);
        $this-&gt;assign('diskSpace', formatBytes($diskSpace));
        $this-&gt;display(&quot;FileManage/spaceCheck.html&quot;);
    }
}</textarea>
			</li>
			<li class="formblock bordernone">
				<input type="submit" name="subut" class="button btngreen2 fleft" value="保存" />
				<input type="button" id="goback" name="goback" class="button btngreen2 fleft" value="返回" style="margin-left:50px;" />
			</li>
		</ul>
	</form>
</div>
    </div>
    <ul class="controlBottom">
		<li class="controlLeftBottom"></li>
		<li class="controlRightBottom"></li>
	</ul>
</div>
</body>
<script type="text/javascript" src="themes/green/js/jquery.corner.js"></script>
<script type="text/javascript" src="themes/green/js/public.js"></script>
<script type="text/javascript" src="themes/green/js/common.js"></script>
<script type="text/javascript" src="themes/green/js/ajax.js"></script>
<script type="text/javascript" src="public/js/jquery.idTabs.min.js"></script>
</html>