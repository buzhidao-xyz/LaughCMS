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
	<a href="/laugh/admin/index.php?s=System/systemInfo">系统参数设置</a> |
	<a href="/laugh/admin/index.php?s=System/addSystemcfg" class="opTopOn">添加新变量</a>
	<a href="/laugh/admin/index.php?s=System/makeCacheConfig">生成配置缓存文件</a>
</div>
<div class="formContainer" accessStatus=1>
	<div class="formtitle"><h5>添加新系统变量参数</h5></div>
	<form name="newform" action="/laugh/admin/index.php?s=System/saveSystemcfg" method="post" class="newform" id="ajaxform">
		<ul class="formbody">
			<li class="formblock">
				<span>变量名称:</span>
				<input type="text" name="cfgname" value="" class="input w200" />
			</li>
			<li class="formblock">
				<span>变量值:</span>
				<input type="text" name="cfgvalue" value="" class="input w200" />
			</li>
			<li class="formblock">
				<span>参数说明:</span>
				<input type="text" name="cfginfo" value="" class="input w300" />
			</li>
			<li class="formblock">
				<span>变量类型:</span>
				<div class="item_list fleft">
					<label><input type="radio" name="cfgtype" value="string" class="radio" checked="checked" />文本</label>
					<label><input type="radio" name="cfgtype" value="number" class="radio" />数字</label>
					<label><input type="radio" name="cfgtype" value="boolean" class="radio" />布尔(Y/N)</label>
					<label><input type="radio" name="cfgtype" value="text" class="radio" />多行文本</label>
				</div>
			</li>
			<li class="formblock">
				<span>所属组:</span>
				<select name="cfggroupid" style="width:200px;">
					<option value="">--请选择--</option>
					<option value="1">站点设置</option>
					<option value="2">核心设置</option>
				</select>
			</li>
			<li class="formblock bordernone bgf6">
				<input type="submit" name="subut" class="button btnblue2" value="确定" />
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