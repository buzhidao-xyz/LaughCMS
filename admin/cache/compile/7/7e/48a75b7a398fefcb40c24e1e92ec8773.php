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
var JS_APPM = 'http://localhost/laugh';
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
<div class="captitle lineOrange">欢迎进入后台管理系统</div>
<div class="box boxLeft">
	<div class="boxTitle">
		<h5>·&nbsp;快捷操作</h5>
		<ul class="boxTab">
			<li><a href="#boxTab1">管理</a></li>
			<li><a href="#boxTab2">新增</a></li>
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
		<h5>·&nbsp;信息统计</h5>
	</div>
	<div class="boxContent">
	</div>
</div>
<div class="box boxLeft">
	<div class="boxTitle">
		<h5>·&nbsp;系统基本信息</h5>
	</div>
	<div class="boxContent">
		<ul>
			<li class="title lineOrange"><span>PHP环境摘要 ------ </span></li>
			<li><span class="sleft">PHP版本：</span><span class="sright">5.3.19</span></li>
			<li><span class="sleft">是否安全模式：</span><span class="sright">否</span></li>
			<li><span class="sleft">Register_Globals：</span><span class="sright">关闭</span></li>
			<li><span class="sleft">Magic_Quotes_Gpc：</span><span class="sright">关闭</span></li>
			<li><span class="sleft">支持上传的最大文件：</span><span class="sright">20M</span></li>
			<li><span class="sleft">是否允许打开远程连接：</span><span class="sright">是</span></li>
		</ul>
	</div>
</div>
<script type="text/javascript">
$(document).ready(function(){
	$(".boxTitle ul.boxTab").idTabs(function(id,list,set){ 
    	$("a",set).removeClass("selected").filter("[href='"+id+"']",set).addClass("selected"); 
    	for(i in list) $(list[i]).hide(); 
    	$(id).fadeIn(); 
    	return false; 
	});
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