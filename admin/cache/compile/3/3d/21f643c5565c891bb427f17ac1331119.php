<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="keywords" content="">
<link type="text/css" rel="stylesheet" href="themes/blue/style/common.css" media="screen">
<link type="text/css" rel="stylesheet" href="themes/blue/style/base.css" media="screen">
<link type="text/css" rel="stylesheet" href="themes/blue/style/global.css" media="screen">
<script type="text/javascript" src="themes/blue/js/jquery.js"></script>
<script type="text/javascript" src="themes/blue/js/div_window.js"></script>
<!-- <script type="text/javascript" src="themes/blue/js/PIE.js"></script> -->
<title>管理中心</title>
<script type="text/javascript">
var JS_APP = '/admin';
var JS_APPM = 'http://localhost:81';
</script>
</head>

<body>
<div id="control">
	<ul class="controlTop">
		<li class="controlLeftTop"></li>
		<li class="controlRightTop"></li>
	</ul>
	<div id="controlContent">
<div class="captitle"><h5>栏目列表</h5></div>
<div id="columnList">
	<div class="ul columnListTitle">
		<div class="li columnListd700" flag="columnListTitle" style="text-indent:0;">栏目名称</div>
		<div class="li columnListd300" flag="columnListTitle">操作</div>
	</div>
	<div class="ul columnListTable">
						<div class="ul columnlistd">
			<div class="li columnplus" columnid="1"></div>
			<div class="li columnListd700" flag="columnTableList">栏目1<font color="green"></font></div>
			<div class="li columnListd300" flag="columnTableList">
				<a href="javascript:;">预览</a> |
				<a href="javascript:;">栏目文档</a> |
				<a href="javascript:;">增加子栏目</a> |
				<a href="javascript:;">编辑</a> |
				<a href="javascript:;">删除</a>
			</div>
		</div>
		<div class="ul columnSubList">
		</div>
				<div class="ul columnlistd">
			<div class="li columnplus" columnid="4"></div>
			<div class="li columnListd700" flag="columnTableList">栏目2<font color="green"></font></div>
			<div class="li columnListd300" flag="columnTableList">
				<a href="javascript:;">预览</a> |
				<a href="javascript:;">栏目文档</a> |
				<a href="javascript:;">增加子栏目</a> |
				<a href="javascript:;">编辑</a> |
				<a href="javascript:;">删除</a>
			</div>
		</div>
		<div class="ul columnSubList">
		</div>
					</div>
	<div class="columnList">
	</div>
</div>
<link rel="stylesheet" type="text/css" href="themes/blue/style/column.css" media="screen" />
<script type="text/javascript">
$(document).ready(function(){
	var column = function (){
		var columnObj = {
			columnplus: $("#columnList .columnListTable .columnlistd div.columnplus"),
			columnmius: $("#columnList .columnListTable .columnlistd div.columnmius"),
		}
	}
});
</script>
    </div>
    <ul class="controlBottom">
		<li class="controlLeftBottom"></li>
		<li class="controlRightBottom"></li>
	</ul>
</div>
</body>
<script type="text/javascript" src="themes/blue/js/jquery.corner.js"></script>
<script type="text/javascript" src="themes/blue/js/public.js"></script>
<script type="text/javascript" src="themes/blue/js/common.js"></script>
<script type="text/javascript" src="themes/blue/js/ajax.js"></script>
</html>