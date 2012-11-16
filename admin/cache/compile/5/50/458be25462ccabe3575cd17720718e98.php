<!DOCTYPE html>
<html>
<head>
	<title>Laugh Admin Center</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<!-- stylesheets -->
	<link rel="stylesheet" type="text/css" href="themes/smooth/style/reset.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="themes/smooth/style/style.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="themes/smooth/style/table.css" media="screen" />
	<link id="color" rel="stylesheet" type="text/css" href="themes/smooth/style/colors/blue.css" />
	<link rel="stylesheet" type="text/css" href="themes/smooth/style/common.css" media="screen" />
	<!-- scripts (jquery) -->
	<script src="themes/smooth/js/jquery-1.4.2.min.js" type="text/javascript"></script>
	<!--[if IE]><script language="javascript" type="text/javascript" src="themes/smooth/js/excanvas.min.js"></script><![endif]-->
	<script src="themes/smooth/js/jquery-ui-1.8.custom.min.js" type="text/javascript"></script>
	<script src="themes/smooth/js/jquery.ui.selectmenu.js" type="text/javascript"></script>
	<script src="themes/smooth/js/jquery.flot.min.js" type="text/javascript"></script>
	<script src="themes/smooth/js/tiny_mce/tiny_mce.js" type="text/javascript"></script>
	<script src="themes/smooth/js/tiny_mce/jquery.tinymce.js" type="text/javascript"></script>
	<!-- scripts (custom) -->
	<script src="themes/smooth/js/smooth.js" type="text/javascript"></script>
	<script src="themes/smooth/js/smooth.menu.js" type="text/javascript"></script>
	<script src="themes/smooth/js/smooth.chart.js" type="text/javascript"></script>
	<script src="themes/smooth/js/smooth.table.js" type="text/javascript"></script>
	<script src="themes/smooth/js/smooth.form.js" type="text/javascript"></script>
	<script src="themes/smooth/js/smooth.dialog.js" type="text/javascript"></script>
	<script src="themes/smooth/js/smooth.autocomplete.js" type="text/javascript"></script>
	<script type="text/javascript">
	var JS_APP = '/laugh/admin';
	var style_path = "themes/smooth/style/colors";
	$(document).ready(function () {
		$("#box-tabs, #box-left-tabs").tabs();
	});
	</script>
</head>

<body>
<div id="content">
	<div id="control">
		<div class="captitle">欢迎进入后台管理系统</div>
		<!-- box / left -->
		<div id="box-left-tabs" class="box box-left box-padding">
			<!-- box / title -->
			<div class="title">
				<h5>快捷操作</h5>
				<ul class="links">
					<li><a href="#box-left-forms">管理</a></li>
					<li><a href="#box-left-other">新增</a></li>
				</ul>
			</div>
			<!-- end box / title -->
			<div id="box-left-forms">
				<a href="#">栏目管理</a>
				<a href="#">文档管理</a>
				<a href="#">评论管理</a>
				<a href="#">内容发布</a>
				<a href="#">系统设置</a>
			</div>
			<div id="box-left-other">
				<form action="/laugh/admin/?s=Public/newFastOperation" method="post" name="newOpform" id="addajaxform">
				<div class="form">
					<div class="fields">
						<div class="field field-first">
							<div class="label">
								<label for="input">链接标题:</label>
							</div>
							<div class="input">
								<input type="text" name="opname" value="" />
							</div>
						</div>
						<div class="field">
							<div class="label">
								<label for="input">链接地址:</label>
							</div>
							<div class="input">
								<input type="text" name="oplink" value="" />
							</div>
						</div>
						<div class="buttons">
							<input type="submit" name="submit" value="添加" />
						</div>
					</div>
				</div>
				</form>
			</div>
		</div>
		<!-- end box / left -->
		<!-- box / right -->
		<div class="box box-right">
			<!-- box / title -->
			<div class="title">
				<h5>信息统计</h5>
			</div>
			<!-- end box / title -->
		</div>
		<!-- end box / right -->
		<!-- box / left -->
		<div class="box box-left box-padding mtop15" style="clear:both;">
			<div class="title">
				<h5>系统基本信息</h5>
			</div>
			<div class="content">
				<ul>
					<li class="title">PHP环境摘要---></li>
					<li><span class="sleft">PHP版本: </span><span class="sright">5.3.8</span></li>
					<li><span class="sleft">是否安全模式: </span><span class="sright"></span></li>
					<li><span class="sleft">Register_Globals: </span><span class="sright"></span></li>
					<li><span class="sleft">Magic_Quotes_Gpc: </span><span class="sright"></span></li>
					<li><span class="sleft">支持上传的最大文件: </span><span class="sright"></span></li>
					<li><span class="sleft">是否允许打开远程连接: </span><span class="sright"></span></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="themes/smooth/js/div_window.js"></script>
<script type="text/javascript" src="themes/smooth/js/common.js"></script>
<script type="text/javascript" src="themes/smooth/js/ajax.js"></script>
</body>
</html>