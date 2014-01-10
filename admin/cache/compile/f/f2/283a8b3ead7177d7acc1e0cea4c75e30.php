<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="keywords" content="">
<link type="image/ico" rel="shortcut icon" href="../favicon.ico">
<link type="text/css" rel="stylesheet" href="themes/blue/style/common.css" media="screen">
<link type="text/css" rel="stylesheet" href="themes/blue/style/global.css" media="screen">
<script type="text/javascript" src="public/js/jquery.js"></script>
<link type="text/css" rel="stylesheet" href="public/plugin/colorbox/colorbox.css" media="screen">
<script type="text/javascript" src="public/plugin/colorbox/jquery.colorbox.js"></script>
<title>LaughCMS网站管理系统</title>
<script type="text/javascript">
var JS_APP = '/laugh/admin';
var JS_APPM = 'http://localhost/laugh';
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
<div class="box boxWrap box970">
	<div class="boxTitle">
		<h5><b>快捷操作</b><span>Navigation Link</span></h5>
		<!-- <ul class="boxTab">
			<li><a tabid="#boxTab1" href="javascript:;">管理</a></li>
			<li><a tabid="#boxTab2" href="javascript:;">新增</a></li>
		</ul> -->
	</div>
	<div id="boxTab1" class="boxContent boxTabContent">
		<a href="/laugh/admin/index.php?s=Column/index">栏目管理</a>
		<a href="/laugh/admin/index.php?s=Article/index">文档管理</a>
		<a href="#">评论管理</a>
		<a href="/laugh/admin/index.php?s=Article/newArticle">内容发布</a>
		<a href="#">系统设置</a>
	</div>
	<!-- <div id="boxTab2" class="boxContent boxTabContent">
		<div class="boxNewFrom">
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
	</div> -->
</div>
<div class="box boxWrap">
	<div class="boxTitle">
		<h5><b>个人信息</b><span>Profile Info</span></h5>
	</div>
	<div class="boxContent">
		<ul class="tableBlock">
			<li><span>会员名:</span>admin</li>
			<li><span>所属会员组:</span>管理员</li>
			<li><span>最后登陆时间:</span>2013-12-29 21:37:59</li>
			<li><span>最后登陆IP:</span></li>
			<li><span>登陆次数:</span>128次</li>
		</ul>
	</div>
</div>
<div class="box boxWrap">
	<div class="boxTitle">
		<h5><b>统计信息</b><span>Site Stats</span></h5>
	</div>
	<div class="boxContent">
		<ul class="statsBlock">
			<li><b>单页模型</b><br><span>0</span></li>
			<li><b>文章模型</b><br><span>0</span></li>
			<li><b>产品模型</b><br><span>0</span></li>
			<li><b>图片模型</b><br><span>0</span></li>
			<li><b>下载模型</b><br><span>0</span></li>
			<li><b>信息反馈</b><br><span>0</span></li>
			<li><b>在线留言</b><br><span>0</span></li>
			<li><b>会员总数</b><br><span>0</span></li>
			<li><b>栏目总数</b><br><span>0</span></li>
			<li><b></b><span></span></li>
			<li><b></b><span></span></li>
			<li><b></b><span></span></li>
			<li><b></b><span></span></li>
			<li><b></b><span></span></li>
			<li><b></b><span></span></li>
			<li><b></b><span></span></li>
			<li><b></b><span></span></li>
			<li><b></b><span></span></li>
			<li><b></b><span></span></li>
			<li><b></b><span></span></li>
		</ul>
	</div>
</div>
<div class="box boxWrap">
	<div class="boxTitle">
		<h5><b>系统基本信息</b><span>System Info</span></h5>
	</div>
	<div class="boxContent">
		<ul class="tableBlock">
			<li><span>PHP版本:</span>5.3.19</li>
			<li><span>是否安全模式:</span>否</li>
			<li><span>Register_Globals:</span>关闭</li>
			<li><span>Magic_Quotes_Gpc:</span>关闭</li>
			<li><span>支持上传的最大文件:</span>2M</li>
			<li><span>是否允许打开远程连接:</span>是</li>
		</ul>
	</div>
</div>
<div class="box boxWrap">
	<div class="boxTitle">
		<h5><b>官方动态</b><span>Official Info</span></h5>
	</div>
	<div class="boxContent">
		<ul class="tableBlock">
			<li><span>LaughCMS版本:</span>v1.0 Released 20130426</li>
			<li><span>授权类型:</span>已授权[免费]</li>
			<li><span>序列号:</span></li>
			<li><span>程序更新:</span>无</li>
			<li><span>最后更新时间:</span>2013-04-26</li>
		</ul>
	</div>
</div>
<style type="text/css">
.boxWrap {
	width: 480px;
	padding: 0 10px 10px 0;
}
.boxWrap .boxContent {
	border: 1px solid #DDDDDD;
  	border-bottom: 0;
}
.box970 {
	width: 970px;
}
.box970 .boxContent {
	border-bottom: 1px solid #DDDDDD;
}
</style>
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