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
<div class="control_nav"><h3>系统提示</h3></div>
<div class="opinfo">
	<div class="opinfo_msg">操作成功！</div>
	<div class="opinfo_Link">
						<a href="/laugh/admin/index.php?s=Column/updateColumn&columnid=10">查看修改</a>&nbsp;&nbsp;&nbsp;
					</div>
</div>
<style type="text/css">
#control #controlContent {
    border: 1px solid #3A6EA5;
}
.opinfo {
	height: auto;
	overflow: hidden;
	padding: 10px 21px 20px 21px;
	border-top: 1px solid #3A6EA5;
}
.opinfo .opinfo_msg {
	padding: 10px 0;
	color: #006600;
	font-weight: 600;
	border-bottom: 1px dashed #E2E9EA;
}
.opinfo .opinfo_Link {
	padding-top: 10px;
}
</style>
    </div>
</div>
</body>
<script type="text/javascript" src="themes/blue/js/jquery.corner.js"></script>
<script type="text/javascript" src="themes/blue/js/public.js"></script>
<script type="text/javascript" src="themes/blue/js/common.js"></script>
<script type="text/javascript" src="themes/blue/js/ajax.js"></script>
<script type="text/javascript" src="public/js/jquery.idTabs.min.js"></script>
</html>