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
<div class="captitle"><h5>当前目录 <font color="red">.</font></h5></div>
<ul class="table_list_title">
	<li class="table_list_l table_list_l350">文件名</li>
	<li class="table_list_l table_list_l150">文件大小</li>
	<li class="table_list_l table_list_l150">最后修改时间</li>
		<li class="table_list_l table_list_l200" accessStatus=1>操作</li>
	</ul>
<div class="contentTableList">
	<ul class="table_list">
		<li class="table_list_l table_list_l350"><a class="nonetextdecoration" href="/laugh/admin/index.php?s=Plugin/fileManage&dir=."><span class="icon" style="background:url(themes/green/images/fileicon/dir1.gif) no-repeat;">上级目录</span></a></li>
    </ul>
            <ul class="table_list">
		<li class="table_list_l table_list_l350"><a class="nonetextdecoration" href="/laugh/admin/index.php?s=Plugin/fileManage&dir=./.git"><span class="icon" style="background:url(themes/green/images/fileicon/dir.gif) no-repeat;">.git</span></a></li>
    	<li class="table_list_l table_list_l150"></li>
    	<li class="table_list_l table_list_l150"></li>
    	    	<li class="table_list_l table_list_l200" accessStatus=1>
    		    		<a name="fileRename" href="/laugh/admin/index.php?s=Plugin/fileRename&dir=.&filename=.git">改名</a>
    		<a name="fileDelete" href="/laugh/admin/index.php?s=Plugin/fileDelete&dir=.&filename=.git">删除</a>
    		    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l350"><a class="nonetextdecoration" href="/laugh/admin/index.php?s=Plugin/fileManage&dir=./admin"><span class="icon" style="background:url(themes/green/images/fileicon/dir.gif) no-repeat;">admin</span></a></li>
    	<li class="table_list_l table_list_l150"></li>
    	<li class="table_list_l table_list_l150"></li>
    	    	<li class="table_list_l table_list_l200" accessStatus=1>
    		    		<a name="fileRename" href="/laugh/admin/index.php?s=Plugin/fileRename&dir=.&filename=admin">改名</a>
    		<a name="fileDelete" href="/laugh/admin/index.php?s=Plugin/fileDelete&dir=.&filename=admin">删除</a>
    		    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l350"><a class="nonetextdecoration" href="/laugh/admin/index.php?s=Plugin/fileManage&dir=./cache"><span class="icon" style="background:url(themes/green/images/fileicon/dir.gif) no-repeat;">cache</span></a></li>
    	<li class="table_list_l table_list_l150"></li>
    	<li class="table_list_l table_list_l150"></li>
    	    	<li class="table_list_l table_list_l200" accessStatus=1>
    		    		<a name="fileRename" href="/laugh/admin/index.php?s=Plugin/fileRename&dir=.&filename=cache">改名</a>
    		<a name="fileDelete" href="/laugh/admin/index.php?s=Plugin/fileDelete&dir=.&filename=cache">删除</a>
    		    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l350"><a class="nonetextdecoration" href="/laugh/admin/index.php?s=Plugin/fileManage&dir=./data"><span class="icon" style="background:url(themes/green/images/fileicon/dir.gif) no-repeat;">data</span></a></li>
    	<li class="table_list_l table_list_l150"></li>
    	<li class="table_list_l table_list_l150"></li>
    	    	<li class="table_list_l table_list_l200" accessStatus=1>
    		    		<a name="fileRename" href="/laugh/admin/index.php?s=Plugin/fileRename&dir=.&filename=data">改名</a>
    		<a name="fileDelete" href="/laugh/admin/index.php?s=Plugin/fileDelete&dir=.&filename=data">删除</a>
    		    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l350"><a class="nonetextdecoration" href="/laugh/admin/index.php?s=Plugin/fileManage&dir=./docs"><span class="icon" style="background:url(themes/green/images/fileicon/dir.gif) no-repeat;">docs</span></a></li>
    	<li class="table_list_l table_list_l150"></li>
    	<li class="table_list_l table_list_l150"></li>
    	    	<li class="table_list_l table_list_l200" accessStatus=1>
    		    		<a name="fileRename" href="/laugh/admin/index.php?s=Plugin/fileRename&dir=.&filename=docs">改名</a>
    		<a name="fileDelete" href="/laugh/admin/index.php?s=Plugin/fileDelete&dir=.&filename=docs">删除</a>
    		    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l350"><a class="nonetextdecoration" href="/laugh/admin/index.php?s=Plugin/fileManage&dir=./include"><span class="icon" style="background:url(themes/green/images/fileicon/dir.gif) no-repeat;">include</span></a></li>
    	<li class="table_list_l table_list_l150"></li>
    	<li class="table_list_l table_list_l150"></li>
    	    	<li class="table_list_l table_list_l200" accessStatus=1>
    		    		<a name="fileRename" href="/laugh/admin/index.php?s=Plugin/fileRename&dir=.&filename=include">改名</a>
    		<a name="fileDelete" href="/laugh/admin/index.php?s=Plugin/fileDelete&dir=.&filename=include">删除</a>
    		    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l350"><a class="nonetextdecoration" href="/laugh/admin/index.php?s=Plugin/fileManage&dir=./public"><span class="icon" style="background:url(themes/green/images/fileicon/dir.gif) no-repeat;">public</span></a></li>
    	<li class="table_list_l table_list_l150"></li>
    	<li class="table_list_l table_list_l150"></li>
    	    	<li class="table_list_l table_list_l200" accessStatus=1>
    		    		<a name="fileRename" href="/laugh/admin/index.php?s=Plugin/fileRename&dir=.&filename=public">改名</a>
    		<a name="fileDelete" href="/laugh/admin/index.php?s=Plugin/fileDelete&dir=.&filename=public">删除</a>
    		    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l350"><a class="nonetextdecoration" href="/laugh/admin/index.php?s=Plugin/fileManage&dir=./themes"><span class="icon" style="background:url(themes/green/images/fileicon/dir.gif) no-repeat;">themes</span></a></li>
    	<li class="table_list_l table_list_l150"></li>
    	<li class="table_list_l table_list_l150"></li>
    	    	<li class="table_list_l table_list_l200" accessStatus=1>
    		    		<a name="fileRename" href="/laugh/admin/index.php?s=Plugin/fileRename&dir=.&filename=themes">改名</a>
    		<a name="fileDelete" href="/laugh/admin/index.php?s=Plugin/fileDelete&dir=.&filename=themes">删除</a>
    		    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l350"><a class="nonetextdecoration" href="/laugh/admin/index.php?s=Plugin/fileManage&dir=./Uploads"><span class="icon" style="background:url(themes/green/images/fileicon/dir.gif) no-repeat;">Uploads</span></a></li>
    	<li class="table_list_l table_list_l150"></li>
    	<li class="table_list_l table_list_l150"></li>
    	    	<li class="table_list_l table_list_l200" accessStatus=1>
    		    		<a name="fileRename" href="/laugh/admin/index.php?s=Plugin/fileRename&dir=.&filename=Uploads">改名</a>
    		<a name="fileDelete" href="/laugh/admin/index.php?s=Plugin/fileDelete&dir=.&filename=Uploads">删除</a>
    		    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l350"><a class="nonetextdecoration" href="/laugh/admin/index.php?s=Plugin/fileManage&dir=./.DS_Store"><span class="icon" style="background:url(themes/green/images/fileicon/DS_Store.gif) no-repeat;">.DS_Store</span></a></li>
    	<li class="table_list_l table_list_l150">15KB</li>
    	<li class="table_list_l table_list_l150">2012-11-19 09:00:28</li>
    	    	<li class="table_list_l table_list_l200" accessStatus=1>
    		    			<a name="fileEdit" href="/laugh/admin/index.php?s=Plugin/fileEdit&dir=.&filename=.DS_Store">编辑</a>
    		    		<a name="fileRename" href="/laugh/admin/index.php?s=Plugin/fileRename&dir=.&filename=.DS_Store">改名</a>
    		<a name="fileDelete" href="/laugh/admin/index.php?s=Plugin/fileDelete&dir=.&filename=.DS_Store">删除</a>
    		    			<a name="fileMove" href="/laugh/admin/index.php?s=Plugin/fileMove&dir=.&filename=.DS_Store">移动</a>
    		    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l350"><a class="nonetextdecoration" href="/laugh/admin/index.php?s=Plugin/fileManage&dir=./index.php"><span class="icon" style="background:url(themes/green/images/fileicon/php.gif) no-repeat;">index.php</span></a></li>
    	<li class="table_list_l table_list_l150">119B</li>
    	<li class="table_list_l table_list_l150">2012-12-13 15:15:52</li>
    	    	<li class="table_list_l table_list_l200" accessStatus=1>
    		    			<a name="fileEdit" href="/laugh/admin/index.php?s=Plugin/fileEdit&dir=.&filename=index.php">编辑</a>
    		    		<a name="fileRename" href="/laugh/admin/index.php?s=Plugin/fileRename&dir=.&filename=index.php">改名</a>
    		<a name="fileDelete" href="/laugh/admin/index.php?s=Plugin/fileDelete&dir=.&filename=index.php">删除</a>
    		    			<a name="fileMove" href="/laugh/admin/index.php?s=Plugin/fileMove&dir=.&filename=index.php">移动</a>
    		    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l350"><a class="nonetextdecoration" href="/laugh/admin/index.php?s=Plugin/fileManage&dir=./README"><span class="icon" style="background:url(themes/green/images/fileicon/unknow.gif) no-repeat;">README</span></a></li>
    	<li class="table_list_l table_list_l150">60B</li>
    	<li class="table_list_l table_list_l150">2012-10-24 13:42:30</li>
    	    	<li class="table_list_l table_list_l200" accessStatus=1>
    		    			<a name="fileEdit" href="/laugh/admin/index.php?s=Plugin/fileEdit&dir=.&filename=README">编辑</a>
    		    		<a name="fileRename" href="/laugh/admin/index.php?s=Plugin/fileRename&dir=.&filename=README">改名</a>
    		<a name="fileDelete" href="/laugh/admin/index.php?s=Plugin/fileDelete&dir=.&filename=README">删除</a>
    		    			<a name="fileMove" href="/laugh/admin/index.php?s=Plugin/fileMove&dir=.&filename=README">移动</a>
    		    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l350"><a class="nonetextdecoration" href="/laugh/admin/index.php?s=Plugin/fileManage&dir=./route.php"><span class="icon" style="background:url(themes/green/images/fileicon/php.gif) no-repeat;">route.php</span></a></li>
    	<li class="table_list_l table_list_l150">2.52KB</li>
    	<li class="table_list_l table_list_l150">2012-12-21 15:40:18</li>
    	    	<li class="table_list_l table_list_l200" accessStatus=1>
    		    			<a name="fileEdit" href="/laugh/admin/index.php?s=Plugin/fileEdit&dir=.&filename=route.php">编辑</a>
    		    		<a name="fileRename" href="/laugh/admin/index.php?s=Plugin/fileRename&dir=.&filename=route.php">改名</a>
    		<a name="fileDelete" href="/laugh/admin/index.php?s=Plugin/fileDelete&dir=.&filename=route.php">删除</a>
    		    			<a name="fileMove" href="/laugh/admin/index.php?s=Plugin/fileMove&dir=.&filename=route.php">移动</a>
    		    	</li>
    	    </ul>
        </div>
<link type="text/css" rel="stylesheet" href="public/plugin/colorbox/colorbox.css" media="screen">
<script type="text/javascript" src="public/plugin/colorbox/jquery.colorbox.js"></script>
<script type="text/javascript">
$(document).ready(function (){
var fileClass = function (){
	var Obj = {
		fileRename: $("a[name=fileRename]"),
		fileDelete: $("a[name=fileDelete]")
	}
	Obj.fileRename.colorbox();
	Obj.fileRename.click(function (){
		$(this).attr("href",$(this).attr("href"));
	});

	//文件删除
	Obj.fileDelete.click(function (){
		var articleid = getArticleID();
		var d = {
			articleid: articleid
		};
		$.post("/laugh/admin/index.php?s=Article/recoverArticle",d,function (data){
			alert(data.info);
			if (!data.status) location.href = location.href;
		},'json');
	});
}
fileClass();
});
</script>
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