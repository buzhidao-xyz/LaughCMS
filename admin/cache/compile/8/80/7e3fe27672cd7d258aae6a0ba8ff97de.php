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
	<ul class="controlTop">
		<li class="controlLeftTop"></li>
		<li class="controlRightTop"></li>
	</ul>
	<div id="controlContent">
<div class="formContainer" accessStatus=1>
	<div class="formtitle"><h5>添加首页轮播图片</h5></div>
	<form name="newform" action="/laugh/admin/index.php?s=Image/saveHomeScrollImage" method="post" class="newform" enctype="multipart/form-data">
		<ul class="formbody">
			<li class="formblock">
				<span>图片:</span>
				<input type="file" name="scrollImage" class="input inputfile" style="width:230px;" />
				*尺寸 730*300
			</li>
			<li class="formblock">
				<span>标题:</span>
				<input type="text" name="title" value="" class="input" style="width:250px;" />
			</li>
			<li class="formblock">
				<span>链接:</span>
				<input type="text" name="link" value="" class="input" style="width:300px;" />
			</li>
			<li class="formblock bordernone">
				<input type="submit" name="subut" class="button btngreen2" value="添加" />
			</li>
		</ul>
	</form>
</div>
<div class="captitle"><h5>内容模型列表【目前共有3条数据】</h5></div>
<ul class="table_list_title">
	<li class="table_list_l table_list_l250">标题</li>
	<li class="table_list_l table_list_l350">链接</li>
	<li class="table_list_l table_list_l50">状态</li>
		<li class="table_list_l table_list_l170" accessStatus=1>管理操作</li>
	</ul>
<div class="contentTableList">
			<ul class="table_list">
		<li class="table_list_l table_list_l250" title="剑侠情缘叁明教">剑侠情缘叁明教</li>
		<li class="table_list_l table_list_l350" title="#">#</li>
		<li class="table_list_l table_list_l50"><font color="green">显示</font></li>
				<li class="table_list_l table_list_l200" accessStatus=1>
			<a name="imageview" href="http://localhost:82/laugh/Uploads/ScrollImage/1364279943_qg83i3_3808.jpg">查看图片</a>
			<a href="/laugh/admin/index.php?s=Image/UpdateHomeScrollImage&id=1">修改</a>
			<a name="ajax" href="/laugh/admin/index.php?s=Image/UpdateHomeScrollImageStatus&id=1&isshow=0">显示/隐藏</a>
			<a name="ajax" msg="确定删除吗？" href="/laugh/admin/index.php?s=Image/DeleteHomeScrollImage&id=1">删除</a>
		</li>
			</ul>
		<ul class="table_list">
		<li class="table_list_l table_list_l250" title="绿色屏保">绿色屏保</li>
		<li class="table_list_l table_list_l350" title="#">#</li>
		<li class="table_list_l table_list_l50"><font color="green">显示</font></li>
				<li class="table_list_l table_list_l200" accessStatus=1>
			<a name="imageview" href="http://localhost:82/laugh/Uploads/ScrollImage/1364280038_2l6n4e_8019.jpg">查看图片</a>
			<a href="/laugh/admin/index.php?s=Image/UpdateHomeScrollImage&id=2">修改</a>
			<a name="ajax" href="/laugh/admin/index.php?s=Image/UpdateHomeScrollImageStatus&id=2&isshow=0">显示/隐藏</a>
			<a name="ajax" msg="确定删除吗？" href="/laugh/admin/index.php?s=Image/DeleteHomeScrollImage&id=2">删除</a>
		</li>
			</ul>
		<ul class="table_list">
		<li class="table_list_l table_list_l250" title="豪车">豪车</li>
		<li class="table_list_l table_list_l350" title="#">#</li>
		<li class="table_list_l table_list_l50"><font color="green">显示</font></li>
				<li class="table_list_l table_list_l200" accessStatus=1>
			<a name="imageview" href="http://localhost:82/laugh/Uploads/ScrollImage/1364280067_duvmp8_5013.jpg">查看图片</a>
			<a href="/laugh/admin/index.php?s=Image/UpdateHomeScrollImage&id=3">修改</a>
			<a name="ajax" href="/laugh/admin/index.php?s=Image/UpdateHomeScrollImageStatus&id=3&isshow=0">显示/隐藏</a>
			<a name="ajax" msg="确定删除吗？" href="/laugh/admin/index.php?s=Image/DeleteHomeScrollImage&id=3">删除</a>
		</li>
			</ul>
		</div>
<script type="text/javascript">
$(document).ready(function (){
$("form[name=newform]").submit(function (){
	if (!$("input[name=path]").val()) {
		alert("请选择图片！");
		return false;
	}
	if (!$("input[name=link]").val()) {
		alert("请填写链接！");
		return false;
	}
});
var ImageClass = function (){
	var Obj = {
		imageview: $("a[name=imageview]"),
		updatestatus: $("a[name=updatestatus]")
	}
	Obj.imageview.click(function (){
		window.parent.colorboxImage($(this).attr("href"));
		return false;
	});
}
ImageClass();
});
</script>
    </div>
    <ul class="controlBottom">
		<li class="controlLeftBottom"></li>
		<li class="controlRightBottom"></li>
	</ul>
</div>
</body>
<script type="text/javascript" src="themes/blue/js/jquery.corner.js"></script>
<script type="text/javascript" src="themes/blue/js/public.js"></script>
<script type="text/javascript" src="themes/blue/js/common.js"></script>
<script type="text/javascript" src="themes/blue/js/ajax.js"></script>
<script type="text/javascript" src="public/js/jquery.idTabs.min.js"></script>
</html>