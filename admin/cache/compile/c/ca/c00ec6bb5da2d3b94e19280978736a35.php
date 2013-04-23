<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="keywords" content="">
<link type="text/css" rel="stylesheet" href="themes/green/style/common.css" media="screen">
<link type="text/css" rel="stylesheet" href="themes/green/style/global.css" media="screen">
<script type="text/javascript" src="public/js/jquery.js"></script>
<script type="text/javascript" src="themes/green/js/div_window.js"></script>
<!-- <script type="text/javascript" src="themes/blue/js/PIE.js"></script> -->
<link type="text/css" rel="stylesheet" href="public/plugin/colorbox/colorbox.css" media="screen">
<script type="text/javascript" src="public/plugin/colorbox/jquery.colorbox.js"></script>
<title>管理中心</title>
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
<div class="opTop">
	<a href="/laugh/admin/index.php?s=Plugin/FlinkIndex">友情链接管理</a>
	<a href="/laugh/admin/index.php?s=Plugin/FlinkCatalogIndex">分类管理</a>
</div>
<div class="formContainer" accessStatus=1>
	<div class="formtitle"><h5>新链接分类</h5></div>
	<form name="newform" action="/laugh/admin/index.php?s=Plugin/FlinkCatalogSave" method="post" id="ajaxform" class="newform">
		<ul class="formbody">
			<li class="formblock">
				<span>分类名称:</span>
				<input type="text" name="catalogname" value="" class="input w200" />
			</li>
			<li class="formblock">
				<span>是/否显示: </span>
				<div class="item_list fleft">
					<label><input type="radio" name="state" value="1" class="radio" checked="checked" />显示</label>
					<label><input type="radio" name="state" value="0" class="radio" />隐藏</label>
				</div>
			</li>
			<li class="formblock bordernone">
				<input type="submit" name="subut" class="button btngreen2" value="确定" />
			</li>
		</ul>
	</form>
</div>
<div class="captitle"><h5>链接分类列表【目前共有2条数据】</h5></div>
<ul class="table_list_title">
	<li class="table_list_l table_list_l50"></li>
	<li class="table_list_l table_list_l150">链接分类名称</li>
	<li class="table_list_l table_list_l170">创建时间</li>
	<li class="table_list_l table_list_l100">是/否显示</li>
		<li class="table_list_l table_list_l150" accessStatus=1>操作</li>
	</ul>
<div class="contentTableList">
			<ul class="table_list">
		<li class="table_list_l table_list_l50">1</li>
		<li class="table_list_l table_list_l150">分类一</li>
		<li class="table_list_l table_list_l170">2013-04-15 13:27:44</li>
		<li class="table_list_l table_list_l100">显示</li>
				<li class="table_list_l table_list_l150" accessStatus=1>
			<a name="FlinkCatalogEdit" href="/laugh/admin/index.php?s=Plugin/FlinkCatalogEdit&id=1">修改</a>
			<a delurl="/laugh/admin/index.php?s=Plugin/FlinkCatalogDelete&id=1" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
		</li>
			</ul>
		<ul class="table_list">
		<li class="table_list_l table_list_l50">2</li>
		<li class="table_list_l table_list_l150">分类二</li>
		<li class="table_list_l table_list_l170">2013-04-15 13:27:53</li>
		<li class="table_list_l table_list_l100">隐藏</li>
				<li class="table_list_l table_list_l150" accessStatus=1>
			<a name="FlinkCatalogEdit" href="/laugh/admin/index.php?s=Plugin/FlinkCatalogEdit&id=2">修改</a>
			<a delurl="/laugh/admin/index.php?s=Plugin/FlinkCatalogDelete&id=2" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
		</li>
			</ul>
		</div>

<script type="text/javascript">
$(document).ready(function (){
	$("a[name=FlinkCatalogEdit]").click(function (){
		window.parent.colorboxAjaxHtml($(this).attr("href"));
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