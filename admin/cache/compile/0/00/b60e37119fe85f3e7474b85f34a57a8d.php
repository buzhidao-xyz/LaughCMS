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
<div class="opTop">
	<a href="/laugh/admin/index.php?s=CTModel/addColumnModel" class="opTopOn">新增模型</a>
	<a href="/laugh/admin/index.php?s=CTModel/ColumnModel">模型管理</a>
</div>
<div class="formContainer" accessStatus=1>
	<div class="formtitle"><h5>添加新内容模型</h5></div>
	<form name="newcolumnform" action="/laugh/admin/index.php?s=CTModel/saveColumnModel" method="post" class="newform">
		<ul class="formbody">
			<li class="formblock">
				<span>模型名称: </span>
				<input type="text" name="name" value="" class="input w200" />
			</li>
			<li class="formblock">
				<span>模型表名: </span>
				<input type="text" name="table" value="" class="input w150" />
			</li>
			<li class="formblock">
				<span>模型控制器: </span>
				<input type="text" name="control" value="" class="input w150" />
			</li>
			<li class="formblock">
				<span>前台调用字段:</span>
				<input type="text" name="" value="*" class="input w250" />
				*代表所有字段
			</li>
			<li class="formautoblock">
				<span>模型简介:</span>
				<textarea name="description" rows="4" cols="47"></textarea>
			</li>
			<li class="formblock bordernone">
				<input type="submit" name="subut" class="button btngreen2" value="添加" />
			</li>
		</ul>
	</form>
</div>
    </div>
</div>
</body>
<script type="text/javascript" src="themes/blue/js/jquery.corner.js"></script>
<script type="text/javascript" src="themes/blue/js/public.js"></script>
<script type="text/javascript" src="themes/blue/js/common.js"></script>
<script type="text/javascript" src="themes/blue/js/ajax.js"></script>
<script type="text/javascript" src="public/js/jquery.idTabs.min.js"></script>
</html>