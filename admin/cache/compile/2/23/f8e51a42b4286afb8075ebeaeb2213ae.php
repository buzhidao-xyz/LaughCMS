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
	<div class="formtitle"><h5>添加友情链接</h5></div>
	<form name="newform" action="/laugh/admin/index.php?s=Plugin/FlinkSave" method="post" id="ajaxform" class="newform">
		<ul class="formbody">
			<li class="formblock">
				<span>选择分类: </span>
				<select name="catalogid" style="width:150px;">
					<option value="">|-分类列表</option>
										<option value="1">&nbsp;|-分类一</option>
										<option value="2">&nbsp;|-分类二</option>
									</select>
			</li>
			<li class="formblock">
				<span>链接名称: </span>
				<input type="text" name="linkname" value="" class="input w150" />
			</li>
			<li class="formblock">
				<span>链接地址: </span>
				<input type="text" name="linkurl" value="" class="input w250" />
			</li>
			<li class="formblock bordernone">
				<input type="submit" name="subut" class="button btngreen2" value="添加" />
			</li>
		</ul>
	</form>
</div>
<div class="captitle"><h5>友情链接列表 【链接数2】</h5></div>
<ul class="table_list_title">
	<li class="table_list_l table_list_l30"></li>
	<li class="table_list_l table_list_l170">链接名称</li>
	<li class="table_list_l table_list_l400">链接地址</li>
	<li class="table_list_l table_list_l150">分类</li>
	<li class="table_list_l table_list_l150">添加时间</li>
		<li class="table_list_l table_list_l100" accessStatus=1>操作</li>
	</ul>
<div class="contentTableList">
            <ul class="table_list">
		<li class="table_list_l table_list_l30">1</li>
		<li class="table_list_l table_list_l170">百度</li>
		<li class="table_list_l table_list_l400"><a href="http://www.baidu.com/" target="_blank">http://www.baidu.com/</a></li>
		<li class="table_list_l table_list_l150">分类一</li>
    	<li class="table_list_l table_list_l150">2013-04-16 17:21:04</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a name="FlinkEdit" href="/laugh/admin/index.php?s=Plugin/FlinkEdit&id=1">修改</a>
    		<a delurl="/laugh/admin/index.php?s=Plugin/FlinkDelete&id=1" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l30">2</li>
		<li class="table_list_l table_list_l170">新浪微博</li>
		<li class="table_list_l table_list_l400"><a href="http://www.weibo.com/" target="_blank">http://www.weibo.com/</a></li>
		<li class="table_list_l table_list_l150">分类二</li>
    	<li class="table_list_l table_list_l150">2013-04-16 17:23:02</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a name="FlinkEdit" href="/laugh/admin/index.php?s=Plugin/FlinkEdit&id=2">修改</a>
    		<a delurl="/laugh/admin/index.php?s=Plugin/FlinkDelete&id=2" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        </div>

<script type="text/javascript">
$(document).ready(function (){
	$("a[name=FlinkEdit]").click(function (){
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