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
<div class="captitle">
	<h5>文件管理 >> 修改文件</h5>
</div>
<div class="formContainer">
	<div class="formtitle"><h5>修改文件</h5></div>
	<form name="newform" action="/laugh/admin/index.php?s=Plugin/fileEdit&action=save" method="post" class="newform">
		<input type="hidden" name="dir" value="./admin" />
		<input type="hidden" name="oldfilename" value=".htaccess" />
		<ul class="formbody">
			<li class="formblock">
				<span>文件目录:</span>
				<input type="text" name="newdir" value="./admin" class="input w250" />（. 表示根目录 ，不允许用 “..” 形式的路径） 
			</li>
			<li class="formblock">
				<span>文件名称:</span>
				<input type="text" name="newfilename" value=".htaccess" class="input w250" />
			</li>
			<li class="formautoblock">
				<span>文件内容:</span>
				<textarea name="filecontent" rows="35" cols="110"># Author: Laucen wang
# Filename: .htaccess
# Create date: 2011-12-27
# Description: URL Rewrite

&lt;IfModule mod_rewrite.c&gt;

#开启引擎
RewriteEngine on

RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^(.*)$ index.php$1 [QSA,PT,L]

#文章详细页匹配


#自定义错误页 - 404
ErrorDocument 404 ./errors/e404.html

&lt;/IfModule&gt;
</textarea>
			</li>
			<li class="formblock bordernone">
				<input type="submit" name="subut" class="button btngreen2 fleft" value="保存" />
				<input type="button" id="goback" name="goback" class="button btngreen2 fleft" value="返回" style="margin-left:50px;" />
			</li>
		</ul>
	</form>
</div>
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