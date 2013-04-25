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
<div class="captitle lineGray">欢迎进入后台管理系统</div>
<div class="box boxLeft">
	<div class="boxTitle">
		<h5><b>快捷操作</b><span>Navigation Link</span></h5>
		<ul class="boxTab">
			<li><a tabid="#boxTab1" href="javascript:;">管理</a></li>
			<li><a tabid="#boxTab2" href="javascript:;">新增</a></li>
		</ul>
	</div>
	<div id="boxTab1" class="boxContent boxTabContent">
		<a href="/laugh/admin/index.php?s=Column/index">栏目管理</a>
		<a href="/laugh/admin/index.php?s=Article/index">文档管理</a>
		<a href="#">评论管理</a>
		<a href="/laugh/admin/index.php?s=Article/newArticle">内容发布</a>
		<a href="#">系统设置</a>
	</div>
	<div id="boxTab2" class="boxContent boxTabContent">
		<div class="boxFrom">
			<form name="boxform" action="/laugh/admin/index.php?s=Public/saveFastOp" method="post" id="ajaxform">
				<ul>
					<li>
						<span>名称：</span>
						<input type="text" name="title" autocomplete="off" value="" class="input w150" />
					</li>
					<li>
						<span>链接：</span>
						<input type="text" name="remark" autocomplete="off" value="" class="input w250" />
					</li>
					<li class="bordernone">
						<input type="submit" name="subut" class="button btngreen2" value="添加" />
					</li>
				</ul>
			</form>
		</div>
	</div>
</div>
<div class="box boxRight">
	<div class="boxTitle">
		<h5><b>统计信息</b><span>Site Stats</span></h5>
	</div>
	<div class="boxContent">
	</div>
</div>
<div class="box boxLeft">
	<div class="boxTitle">
		<h5><b>系统基本信息</b><span>System Info</span></h5>
	</div>
	<div class="boxContent">
		<ul>
			<li class="title lineOrange"><span>PHP环境摘要 ------ </span></li>
			<li><span class="sleft">PHP版本：</span><span class="sright">5.3.8</span></li>
			<li><span class="sleft">是否安全模式：</span><span class="sright">否</span></li>
			<li><span class="sleft">Register_Globals：</span><span class="sright">关闭</span></li>
			<li><span class="sleft">Magic_Quotes_Gpc：</span><span class="sright">关闭</span></li>
			<li><span class="sleft">支持上传的最大文件：</span><span class="sright">128M</span></li>
			<li><span class="sleft">是否允许打开远程连接：</span><span class="sright">是</span></li>
		</ul>
	</div>
</div>
<script type="text/javascript">
$(document).ready(function(){
	$(".boxTitle ul.boxTab").idTabs(function(id,list,set){
    	$("a",set).removeClass("selected").filter("[tabid='"+id+"']",set).addClass("selected"); 
    	for(i in list) $(list[i]).hide();
    	$(id).fadeIn();
    	return false;
	});
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