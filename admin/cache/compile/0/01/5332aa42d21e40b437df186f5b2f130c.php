<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="keywords" content="">
<link type="image/ico" rel="shortcut icon" href="../favicon.ico">
<link type="text/css" rel="stylesheet" href="themes/blue/style/common.css" media="screen">
<link type="text/css" rel="stylesheet" href="themes/blue/style/global.css" media="screen">
<script type="text/javascript" src="public/js/jquery.js"></script>
<link type="text/css" rel="stylesheet" href="public/plugin/colorbox/colorbox.css" media="screen">
<script type="text/javascript" src="public/plugin/colorbox/jquery.colorbox.js"></script>
<title>LaughCMS网站管理系统</title>
<script type="text/javascript">
var JS_APP = '/laugh/admin';
var JS_APPM = 'http://localhost/laugh';
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
<!-- <div class="control_nav">
	<h3>添加组</h3>
</div> -->
<div class="formContainer" accessStatus=1>
	<div class="formtitle"><h5>新管理员表单</h5></div>
	<form name="newform" action="/laugh/admin/index.php?s=Admin/saveAdmin" method="post" id="ajaxform" class="newform">
		<ul class="formbody">
			<li class="formblock">
				<span>账户:</span>
				<input type="text" name="adminname" autocomplete="off" value="" class="input w150" />
			</li>
			<li class="formblock">
				<span>密码:</span>
				<input type="password" name="password" autocomplete="off" value="" class="input w150" />
			</li>
			<li class="formblock">
				<span>重复密码:</span>
				<input type="password" name="password1" autocomplete="off" value="" class="input w150" />
			</li>
			<li class="formblock">
				<span>是否启用: </span>
				<div class="item_list fleft">
					<label><input type="radio" name="status" value="1" class="radio" checked="checked" />启用</label>
					<label><input type="radio" name="status" value="0" class="radio" />禁用</label>
				</div>
			</li>
			<li class="formautoblock">
				<span>选择管理栏目:</span>
				<div id="ColumnTree" style="float:left;">
					<div id="ColumnListObject" class="ColumnList">
	<div class="ColumnBlock ColumnBlock1 ColumnBLine">
		<span class="ColumnBox ColumnBoxT">
			<input type="checkbox" name="ColumnID[]" value="1" />栏目1
		</span>
		<div class="ColumnList">
			<div class="ColumnBlock ColumnBlock2">
				<span class="ColumnBox ColumnBoxT">
					<p class="hl">&nbsp;</p><input type="checkbox" name="ColumnID[]" value="1" />栏目11
				</span>
				<div class="ColumnList">
					<div class="ColumnBlock ColumnBlock3">
						<span class="ColumnBox">
							<input type="checkbox" name="ColumnID[]" value="1" />栏目111
						</span>
						<span class="ColumnBox">
							<input type="checkbox" name="ColumnID[]" value="1" />栏目112
						</span>
						<span class="ColumnBox">
							<input type="checkbox" name="ColumnID[]" value="1" />栏目113
						</span>
						<span class="ColumnBox">
							<input type="checkbox" name="ColumnID[]" value="1" />栏目114
						</span>
						<span class="ColumnBox">
							<input type="checkbox" name="ColumnID[]" value="1" />栏目115
						</span>
						<span class="ColumnBox">
							<input type="checkbox" name="ColumnID[]" value="1" />栏目115
						</span>
						<span class="ColumnBox">
							<input type="checkbox" name="ColumnID[]" value="1" />栏目115
						</span>
						<span class="ColumnBox">
							<input type="checkbox" name="ColumnID[]" value="1" />栏目115
						</span>
						<span class="ColumnBox">
							<input type="checkbox" name="ColumnID[]" value="1" />栏目115
						</span>
						<span class="ColumnBox">
							<input type="checkbox" name="ColumnID[]" value="1" />栏目115
						</span>
						<span class="ColumnBox">
							<input type="checkbox" name="ColumnID[]" value="1" />栏目115
						</span>
						<span class="ColumnBox">
							<input type="checkbox" name="ColumnID[]" value="1" />栏目115
						</span>
					</div>
				</div>
			</div>
			<div class="ColumnBlock ColumnBlock2">
				<span class="ColumnBox ColumnBoxT">
					<p class="hl">&nbsp;</p><input type="checkbox" name="ColumnID[]" value="1" />栏目12
				</span>
			</div>
			<div class="ColumnBlock ColumnBlock2">
				<span class="ColumnBox ColumnBoxT">
					<p class="hl">&nbsp;</p><input type="checkbox" name="ColumnID[]" value="1" />栏目13
				</span>
				<div class="ColumnList">
					<div class="ColumnBlock ColumnBlock3">
						<span class="ColumnBox">
							<input type="checkbox" name="ColumnID[]" value="1" />栏目111
						</span>
						<span class="ColumnBox">
							<input type="checkbox" name="ColumnID[]" value="1" />栏目112
						</span>
						<span class="ColumnBox">
							<input type="checkbox" name="ColumnID[]" value="1" />栏目113
						</span>
						<span class="ColumnBox">
							<input type="checkbox" name="ColumnID[]" value="1" />栏目114
						</span>
						<span class="ColumnBox">
							<input type="checkbox" name="ColumnID[]" value="1" />栏目115
						</span>
						<span class="ColumnBox">
							<input type="checkbox" name="ColumnID[]" value="1" />栏目115
						</span>
						<span class="ColumnBox">
							<input type="checkbox" name="ColumnID[]" value="1" />栏目115
						</span>
						<span class="ColumnBox">
							<input type="checkbox" name="ColumnID[]" value="1" />栏目115
						</span>
						<span class="ColumnBox">
							<input type="checkbox" name="ColumnID[]" value="1" />栏目115
						</span>
						<span class="ColumnBox">
							<input type="checkbox" name="ColumnID[]" value="1" />栏目115
						</span>
						<span class="ColumnBox">
							<input type="checkbox" name="ColumnID[]" value="1" />栏目115
						</span>
						<span class="ColumnBox">
							<input type="checkbox" name="ColumnID[]" value="1" />栏目115
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="ColumnBlock ColumnBlock1 ColumnBLine">
		<span class="ColumnBox ColumnBoxT">
			<input type="checkbox" name="ColumnID[]" value="1" />栏目2
		</span>
		<div class="ColumnList">
			<div class="ColumnBlock ColumnBlock2">
				<span class="ColumnBox ColumnBoxT">
					<p class="hl">&nbsp;</p><input type="checkbox" name="ColumnID[]" value="1" />栏目21
				</span>
			</div>
		</div>
	</div>
</div>
<style type="text/css">
#ColumnListObject {
	float: left;
	min-width: 850px;
	max-width: 900px;
	padding-bottom: 20px;
}
#ColumnListObject .ColumnBlock {
	clear: both;
	overflow: hidden;
}
#ColumnListObject .ColumnBLine {
	padding: 10px 0;
	border-bottom: 1px dashed #CCCCCC;
}
#ColumnListObject .ColumnBlock span.ColumnBox {
	padding: 0;
	width: auto;
	height: auto;
	line-height: 24px;
	display: inline-block;
}
#ColumnListObject .ColumnBlock span.ColumnBoxT {
	display: block;
	clear: both;
}
#ColumnListObject .ColumnBlock .ColumnList {
	margin: 0 6px;
	clear: both;
	overflow: hidden;
	background: url(themes/blue/images/line_v1.png) repeat-y;
}
#ColumnListObject .ColumnBlock1 {
	
}
#ColumnListObject .ColumnBlock2 {
	
}
#ColumnListObject .ColumnBlock2 span.ColumnBoxT {
	
}
#ColumnListObject .ColumnBlock2 span.ColumnBoxT p.hl {
	margin-left: 5px;
	width: 20px;
	display: inline-block;
	background: url(themes/blue/images/line_h1.png) repeat-x 0 11px;
}
#ColumnListObject .ColumnBlock2 .ColumnList {
	margin-left: 32px;
}
#ColumnListObject .ColumnBlock3 {
	padding-left: 20px;
}
</style>
<script type="text/javascript">
$(document).ready(function (){
var ColumnClass = function (){
	var ColumnListObject = $("#ColumnListObject");


}();
});
</script>
				</div>
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