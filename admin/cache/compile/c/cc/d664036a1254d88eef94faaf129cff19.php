<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="keywords" content="">
<link type="text/css" rel="stylesheet" href="themes/blue/style/common.css" media="screen">
<link type="text/css" rel="stylesheet" href="themes/blue/style/global.css" media="screen">
<script type="text/javascript" src="public/js/jquery.js"></script>
<script type="text/javascript" src="themes/blue/js/div_window.js"></script>
<link type="text/css" rel="stylesheet" href="public/plugin/colorbox/colorbox.css" media="screen">
<script type="text/javascript" src="public/plugin/colorbox/jquery.colorbox.js"></script>
<title>LaughCMS网站管理系统</title>
<script type="text/javascript">
var JS_APP = '/laugh/admin';
var JS_APPM = 'http://localhost:82/laugh';
function colorboxAjaxHtml(url) {
	$.post(url,{},function (data){
		$.colorbox({ html: data });
	});
}
function colorboxHtml(url) {
	$.colorbox({ href: url });
}
function colorboxImage(url) {
	$.colorbox({ href: url });
}
</script>
</head>

<body>
<style type="text/css">
	body { background: none; }
</style>
<div id="control">
	<div id="controlContent">
<div class="captitle">
	<h5>当前目录 <font color="red">.</font></h5> |
	<h5>权限 <font color="red">drwxrwxrwx</font></h5> |
	<h5><font color="red">.</font> 表示根目录</h5>
</div>
<ul class="table_list_title">
	<li class="table_list_l table_list_l350">文件名</li>
	<li class="table_list_l table_list_l150">文件大小</li>
	<li class="table_list_l table_list_l150">最后修改时间</li>
		<li class="table_list_l table_list_l200" accessStatus=1>操作</li>
	</ul>
<div class="contentTableList">
	<ul class="table_list">
		<li class="table_list_l table_list_l350"><a class="nonetextdecoration" href="/laugh/admin/index.php?s=Plugin/fileManage&dir=."><span class="icon" style="background:url(themes/blue/images/fileicon/dir1.gif) no-repeat;">上级目录</span></a></li>
    </ul>
            <ul class="table_list">
		<li class="table_list_l table_list_l350">
						<a class="nonetextdecoration" href="/laugh/admin/index.php?s=Plugin/fileManage&dir=./.git"><span class="icon" style="background:url(themes/blue/images/fileicon/dir.gif) no-repeat;">.git</span></a>
					</li>
    	<li class="table_list_l table_list_l150"></li>
    	<li class="table_list_l table_list_l150"></li>
    	    	<li class="table_list_l table_list_l200" accessStatus=1>
    		    		<a name="fileRename" href="/laugh/admin/index.php?s=Plugin/fileRename&dir=.&filename=.git">改名</a>
    		<a name="fileDelete" href="/laugh/admin/index.php?s=Plugin/fileDelete&dir=.&filename=.git">删除</a>
    		    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l350">
						<a class="nonetextdecoration" href="/laugh/admin/index.php?s=Plugin/fileManage&dir=./a"><span class="icon" style="background:url(themes/blue/images/fileicon/dir.gif) no-repeat;">a</span></a>
					</li>
    	<li class="table_list_l table_list_l150"></li>
    	<li class="table_list_l table_list_l150"></li>
    	    	<li class="table_list_l table_list_l200" accessStatus=1>
    		    		<a name="fileRename" href="/laugh/admin/index.php?s=Plugin/fileRename&dir=.&filename=a">改名</a>
    		<a name="fileDelete" href="/laugh/admin/index.php?s=Plugin/fileDelete&dir=.&filename=a">删除</a>
    		    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l350">
						<a class="nonetextdecoration" href="/laugh/admin/index.php?s=Plugin/fileManage&dir=./admin"><span class="icon" style="background:url(themes/blue/images/fileicon/dir.gif) no-repeat;">admin</span></a>
					</li>
    	<li class="table_list_l table_list_l150"></li>
    	<li class="table_list_l table_list_l150"></li>
    	    	<li class="table_list_l table_list_l200" accessStatus=1>
    		    		<a name="fileRename" href="/laugh/admin/index.php?s=Plugin/fileRename&dir=.&filename=admin">改名</a>
    		<a name="fileDelete" href="/laugh/admin/index.php?s=Plugin/fileDelete&dir=.&filename=admin">删除</a>
    		    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l350">
						<a class="nonetextdecoration" href="/laugh/admin/index.php?s=Plugin/fileManage&dir=./cache"><span class="icon" style="background:url(themes/blue/images/fileicon/dir.gif) no-repeat;">cache</span></a>
					</li>
    	<li class="table_list_l table_list_l150"></li>
    	<li class="table_list_l table_list_l150"></li>
    	    	<li class="table_list_l table_list_l200" accessStatus=1>
    		    		<a name="fileRename" href="/laugh/admin/index.php?s=Plugin/fileRename&dir=.&filename=cache">改名</a>
    		<a name="fileDelete" href="/laugh/admin/index.php?s=Plugin/fileDelete&dir=.&filename=cache">删除</a>
    		    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l350">
						<a class="nonetextdecoration" href="/laugh/admin/index.php?s=Plugin/fileManage&dir=./data"><span class="icon" style="background:url(themes/blue/images/fileicon/dir.gif) no-repeat;">data</span></a>
					</li>
    	<li class="table_list_l table_list_l150"></li>
    	<li class="table_list_l table_list_l150"></li>
    	    	<li class="table_list_l table_list_l200" accessStatus=1>
    		    		<a name="fileRename" href="/laugh/admin/index.php?s=Plugin/fileRename&dir=.&filename=data">改名</a>
    		<a name="fileDelete" href="/laugh/admin/index.php?s=Plugin/fileDelete&dir=.&filename=data">删除</a>
    		    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l350">
						<a class="nonetextdecoration" href="/laugh/admin/index.php?s=Plugin/fileManage&dir=./docs"><span class="icon" style="background:url(themes/blue/images/fileicon/dir.gif) no-repeat;">docs</span></a>
					</li>
    	<li class="table_list_l table_list_l150"></li>
    	<li class="table_list_l table_list_l150"></li>
    	    	<li class="table_list_l table_list_l200" accessStatus=1>
    		    		<a name="fileRename" href="/laugh/admin/index.php?s=Plugin/fileRename&dir=.&filename=docs">改名</a>
    		<a name="fileDelete" href="/laugh/admin/index.php?s=Plugin/fileDelete&dir=.&filename=docs">删除</a>
    		    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l350">
						<a class="nonetextdecoration" href="/laugh/admin/index.php?s=Plugin/fileManage&dir=./include"><span class="icon" style="background:url(themes/blue/images/fileicon/dir.gif) no-repeat;">include</span></a>
					</li>
    	<li class="table_list_l table_list_l150"></li>
    	<li class="table_list_l table_list_l150"></li>
    	    	<li class="table_list_l table_list_l200" accessStatus=1>
    		    		<a name="fileRename" href="/laugh/admin/index.php?s=Plugin/fileRename&dir=.&filename=include">改名</a>
    		<a name="fileDelete" href="/laugh/admin/index.php?s=Plugin/fileDelete&dir=.&filename=include">删除</a>
    		    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l350">
						<a class="nonetextdecoration" href="/laugh/admin/index.php?s=Plugin/fileManage&dir=./public"><span class="icon" style="background:url(themes/blue/images/fileicon/dir.gif) no-repeat;">public</span></a>
					</li>
    	<li class="table_list_l table_list_l150"></li>
    	<li class="table_list_l table_list_l150"></li>
    	    	<li class="table_list_l table_list_l200" accessStatus=1>
    		    		<a name="fileRename" href="/laugh/admin/index.php?s=Plugin/fileRename&dir=.&filename=public">改名</a>
    		<a name="fileDelete" href="/laugh/admin/index.php?s=Plugin/fileDelete&dir=.&filename=public">删除</a>
    		    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l350">
						<a class="nonetextdecoration" href="/laugh/admin/index.php?s=Plugin/fileManage&dir=./themes"><span class="icon" style="background:url(themes/blue/images/fileicon/dir.gif) no-repeat;">themes</span></a>
					</li>
    	<li class="table_list_l table_list_l150"></li>
    	<li class="table_list_l table_list_l150"></li>
    	    	<li class="table_list_l table_list_l200" accessStatus=1>
    		    		<a name="fileRename" href="/laugh/admin/index.php?s=Plugin/fileRename&dir=.&filename=themes">改名</a>
    		<a name="fileDelete" href="/laugh/admin/index.php?s=Plugin/fileDelete&dir=.&filename=themes">删除</a>
    		    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l350">
						<a class="nonetextdecoration" href="/laugh/admin/index.php?s=Plugin/fileManage&dir=./Uploads"><span class="icon" style="background:url(themes/blue/images/fileicon/dir.gif) no-repeat;">Uploads</span></a>
					</li>
    	<li class="table_list_l table_list_l150"></li>
    	<li class="table_list_l table_list_l150"></li>
    	    	<li class="table_list_l table_list_l200" accessStatus=1>
    		    		<a name="fileRename" href="/laugh/admin/index.php?s=Plugin/fileRename&dir=.&filename=Uploads">改名</a>
    		<a name="fileDelete" href="/laugh/admin/index.php?s=Plugin/fileDelete&dir=.&filename=Uploads">删除</a>
    		    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l350">
						<span class="icon" style="background:url(themes/blue/images/fileicon/DS_Store.gif) no-repeat;">.DS_Store</span>
					</li>
    	<li class="table_list_l table_list_l150">15KB</li>
    	<li class="table_list_l table_list_l150">2013-04-28 17:50:37</li>
    	    	<li class="table_list_l table_list_l200" accessStatus=1>
    		    		<a name="fileRename" href="/laugh/admin/index.php?s=Plugin/fileRename&dir=.&filename=.DS_Store">改名</a>
    		<a name="fileDelete" href="/laugh/admin/index.php?s=Plugin/fileDelete&dir=.&filename=.DS_Store">删除</a>
    		    			<a name="fileMove" href="/laugh/admin/index.php?s=Plugin/fileMove&dir=.&filename=.DS_Store">移动</a>
    		    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l350">
						<span class="icon" style="background:url(themes/blue/images/fileicon/php.gif) no-repeat;">index.php</span>
					</li>
    	<li class="table_list_l table_list_l150">124B</li>
    	<li class="table_list_l table_list_l150">2013-05-10 14:57:26</li>
    	    	<li class="table_list_l table_list_l200" accessStatus=1>
    		    			<a name="fileEdit" href="/laugh/admin/index.php?s=Plugin/fileEdit&dir=.&filename=index.php">编辑</a>
    		    		<a name="fileRename" href="/laugh/admin/index.php?s=Plugin/fileRename&dir=.&filename=index.php">改名</a>
    		<a name="fileDelete" href="/laugh/admin/index.php?s=Plugin/fileDelete&dir=.&filename=index.php">删除</a>
    		    			<a name="fileMove" href="/laugh/admin/index.php?s=Plugin/fileMove&dir=.&filename=index.php">移动</a>
    		    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l350">
						<span class="icon" style="background:url(themes/blue/images/fileicon/unknow.gif) no-repeat;">README</span>
					</li>
    	<li class="table_list_l table_list_l150">60B</li>
    	<li class="table_list_l table_list_l150">2013-04-28 17:50:37</li>
    	    	<li class="table_list_l table_list_l200" accessStatus=1>
    		    		<a name="fileRename" href="/laugh/admin/index.php?s=Plugin/fileRename&dir=.&filename=README">改名</a>
    		<a name="fileDelete" href="/laugh/admin/index.php?s=Plugin/fileDelete&dir=.&filename=README">删除</a>
    		    			<a name="fileMove" href="/laugh/admin/index.php?s=Plugin/fileMove&dir=.&filename=README">移动</a>
    		    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l350">
						<span class="icon" style="background:url(themes/blue/images/fileicon/php.gif) no-repeat;">route.php</span>
					</li>
    	<li class="table_list_l table_list_l150">2.66KB</li>
    	<li class="table_list_l table_list_l150">2013-04-28 17:57:48</li>
    	    	<li class="table_list_l table_list_l200" accessStatus=1>
    		    			<a name="fileEdit" href="/laugh/admin/index.php?s=Plugin/fileEdit&dir=.&filename=route.php">编辑</a>
    		    		<a name="fileRename" href="/laugh/admin/index.php?s=Plugin/fileRename&dir=.&filename=route.php">改名</a>
    		<a name="fileDelete" href="/laugh/admin/index.php?s=Plugin/fileDelete&dir=.&filename=route.php">删除</a>
    		    			<a name="fileMove" href="/laugh/admin/index.php?s=Plugin/fileMove&dir=.&filename=route.php">移动</a>
    		    	</li>
    	    </ul>
        </div>
<div id="opBottom" class="opBottom">
	<a href="/laugh/admin/index.php?s=Plugin/fileManage&dir=.">根目录</a>
	<a name="newfile" href="/laugh/admin/index.php?s=Plugin/newFile&dir=.">新建文件</a>
	<a name="newdir" href="/laugh/admin/index.php?s=Plugin/newDir&dir=.">新建目录</a>
	<a name="fileupload" href="/laugh/admin/index.php?s=Plugin/fileUpload&dir=.">文件上传</a>
	<a name="spacecheck" href="/laugh/admin/index.php?s=Plugin/spaceCheck&dir=.">目录空间</a>
</div>
<script type="text/javascript">
$(document).ready(function (){
var fileClass = function (){
	var Obj = {
		fileRename: $("a[name=fileRename]"),
		fileDelete: $("a[name=fileDelete]"),
		fileMove: $("a[name=fileMove]"),
		newfile: $("a[name=newfile]"),
		newdir: $("a[name=newdir]"),
		spacecheck: $("a[name=spacecheck]"),
		fileupload: $("a[name=fileupload]")
	}
	Obj.fileRename.click(function (){
		window.parent.colorboxAjaxHtml($(this).attr("href"));
		return false;
	});

	//文件删除
	Obj.fileDelete.click(function (){
		if (window.confirm("确定删除吗？")) {
			var d = {
			};
			$.post($(this).attr("href"),d,function (data){
				alert(data.info);
				if (!data.status) location.href = location.href;
			},'json');
		}
		return false;
	});

	//文件移动
	Obj.fileMove.click(function (){
		window.parent.colorboxAjaxHtml($(this).attr("href"));
		return false;
	});
	//新建目录
	Obj.newdir.click(function (){
		window.parent.colorboxAjaxHtml($(this).attr("href"));
		return false;
	});
	//文件上传
	Obj.fileupload.click(function (){
		// window.parent.colorboxAjaxHtml($(this).attr("href"));
		colorboxAjaxHtml($(this).attr("href"));
		return false;
	});
	//空间检查
	Obj.spacecheck.click(function (){
		window.parent.colorboxAjaxHtml($(this).attr("href"));
		return false;
	});
}
fileClass();
});
</script>
    </div>
</div>
</body>
<script type="text/javascript" src="themes/blue/js/jquery.corner.js"></script>
<script type="text/javascript" src="themes/blue/js/public.js"></script>
<script type="text/javascript" src="themes/blue/js/common.js"></script>
<script type="text/javascript" src="themes/blue/js/ajax.js"></script>
<script type="text/javascript" src="public/js/jquery.idTabs.min.js"></script>
</html>