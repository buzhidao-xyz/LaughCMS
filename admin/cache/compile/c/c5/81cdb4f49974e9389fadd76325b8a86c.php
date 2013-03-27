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
var JS_APPM = 'http://localhost:82/laugh';
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
	<div class="formtitle"><h5>新组节点表单</h5></div>
	<form name="newform" action="/laugh/admin/index.php?s=Image/saveUpdateHomeScrollImage" method="post" class="newform" enctype="multipart/form-data">
		<input type="hidden" name="id" value="1" />
		<ul class="formbody">
			<li class="formautoblock">
				<span>原图片:</span>
				<img src="http://localhost:82/laugh/Uploads/ScrollImage/1364279943_qg83i3_3808.jpg" />
			</li>
			<li class="formblock">
				<span>图片:</span>
				<input type="file" name="path" class="input inputfile" style="width:230px;" />
				*尺寸 730*300
			</li>
			<li class="formblock">
				<span>标题:</span>
				<input type="text" name="title" value="剑侠情缘叁明教" value="" class="input" style="width:250px;" />
			</li>
			<li class="formblock">
				<span>链接:</span>
				<input type="text" name="link" value="#" value="" class="input" style="width:300px;" />
			</li>
			<li class="formblock bordernone">
				<input type="submit" name="subut" class="button btngreen2" value="确定" />
			</li>
		</ul>
	</form>
</div>
<script type="text/javascript">
$(document).ready(function (){
$("form[name=newform]").submit(function (){
	if (!$("input[name=link]").val()) {
		alert("请填写链接！");
		return false;
	}
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