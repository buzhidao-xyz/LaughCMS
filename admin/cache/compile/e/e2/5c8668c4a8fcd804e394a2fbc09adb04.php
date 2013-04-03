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
<div class="box">
<div class="boxContent">
<div class="boxFrom">
	<div class="boxTitle">
		<h5>系统提示信息</h5>
	</div>
	<div class="boxMessage">
		<div class="message"><font color="green">新增内容模型成功！</font></div>
		<div class="jump">
			页面即将自动跳转 
			等待时间 <b id="wait">3</b> 秒
		</div>
		<div class="jumpUrl">
			<a id="href" href="http://localhost:82/laugh/admin/index.php?s=CTModel/addColumnModel">如果你的浏览器没反应，请点击这里...</a>
		</div>
	</div>
</div>
</div>
</div>
<style type="text/css">
.box {
	margin-top: 30px;
}
.box .boxTitle h5 {
	float: none;
	display: block;
	padding: 0;
	text-align: center;
}
.box .boxMessage {
	height: 150px;
}
.box .boxMessage .message {
	padding-top: 30px;
	text-align: center;
	color: #FF6600;
}
.box .boxMessage .jump {
	padding-top: 5px;
	text-align: center;
}
.box .boxMessage .jumpUrl {
	padding-top: 5px;
	text-align: center;
}
.box .boxMessage .jumpUrl a {
	text-decoration: underline;
}
</style>
<script type="text/javascript">
(function(){
var interval = setInterval(function(){
	var time = parseInt($("#wait").text())-1;
	$("#wait").text(time);
	if(time == 0) {
		location.href = $("#href").attr("href");
		clearInterval(interval);
	};
}, 1000);
})();
</script>
</body>
<script type="text/javascript" src="themes/green/js/jquery.corner.js"></script>
<script type="text/javascript" src="themes/green/js/public.js"></script>
<script type="text/javascript" src="themes/green/js/common.js"></script>
<script type="text/javascript" src="themes/green/js/ajax.js"></script>
<script type="text/javascript" src="public/js/jquery.idTabs.min.js"></script>
</html>