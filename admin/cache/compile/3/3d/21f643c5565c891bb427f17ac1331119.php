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
var JS_APP = '/laugh/admin';
var JS_APPM = 'http://localhost:82/laugh';
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
			<div class="li columnplusmius columnplus" columnid="1"></div>
			<div class="li columnListd700" flag="columnTableList">
				<a href="/laugh/admin/index.php?s=Column/columnContent">栏目1</a>
				<font color="green"></font>			</div>
			<div class="li columnListd300" flag="columnTableList">
				<a href="javascript:;">预览</a> |
				<a href="javascript:;">栏目文档</a> |
				<a href="javascript:;">增加子栏目</a> |
				<a href="javascript:;">编辑</a> |
				<a delurl="/laugh/admin/index.php?s=Column/deleteColumn&columnid=1" href="javascript:;" name="del" msg="确定删除该栏目吗？">删除</a>
			</div>
		</div>
		<div class="ul columnSubList"></div>
				<div class="ul columnlistd">
			<div class="li columnplusmius columnplus" columnid="4"></div>
			<div class="li columnListd700" flag="columnTableList">
				<a href="/laugh/admin/index.php?s=Column/columnContent">栏目2</a>
				<font color="green"></font>			</div>
			<div class="li columnListd300" flag="columnTableList">
				<a href="javascript:;">预览</a> |
				<a href="javascript:;">栏目文档</a> |
				<a href="javascript:;">增加子栏目</a> |
				<a href="javascript:;">编辑</a> |
				<a delurl="/laugh/admin/index.php?s=Column/deleteColumn&columnid=4" href="javascript:;" name="del" msg="确定删除该栏目吗？">删除</a>
			</div>
		</div>
		<div class="ul columnSubList"></div>
					</div>
	<div class="columnList">
	</div>
</div>
<link rel="stylesheet" type="text/css" href="themes/blue/style/column.css" media="screen" />
<script type="text/javascript">
$(document).ready(function(){
	var column = function (){
		var columnObj = {
			columnplusmius: $("#columnList .columnListTable .columnlistd div.columnplusmius"),
			columnmius: $("#columnList .columnListTable .columnlistd div.columnmius"),
		}

		columnObj.showSubColumn = function (){
			columnObj.columnplusmius.live("click", function (){
				var that = $(this);
				var subthat = that.parent().next();
				if (subthat.css("display") == 'block') {
					that.removeClass("columnmius");
					that.addClass("columnplus");
					subthat.css("display","none");
				} else {
					that.removeClass("columnplus");
					that.addClass("columnmius");
					subthat.css("display","block");
					if (!subthat.text().trim()) {
						var d = {
							columnid: $(this).attr("columnid")
						}
						$.post(JS_APP+"/index.php?s=Column/getSubColumn",d,function(data){
							if (!data.status) {
								subthat.html(data.data);
							} else {
								alert(data.info);
							}
						},'json')
					}
				}
			});
		}(window)
	}
	if ($("#columnList .columnListTable .columnlistd").length) {
		column();
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