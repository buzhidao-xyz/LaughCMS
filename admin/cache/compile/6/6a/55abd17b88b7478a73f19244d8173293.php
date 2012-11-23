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
	<script src="themes/smooth/js/div_window.js" type="text/javascript"></script>
	<script src="themes/smooth/js/common.js" type="text/javascript"></script>
	<script src="themes/smooth/js/ajax.js" type="text/javascript"></script>
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
		<div class="box">
			<div class="title">
				<h5>新管理员表单</h5>
			</div>
			<form name="newform" action="/laugh/admin/?s=Admin/saveAdmin" method="post" id="addajaxform">
			<div class="form">
				<div class="fields">
					<div class="field">
						<div class="label">
							<label for="input-small">账户:</label>
						</div>
						<div class="input" style="float:left;">
							<input type="text" name="username" class="small" />
						</div>
					</div>
					<div class="field">
						<div class="label">
							<label for="input-small">密码:</label>
						</div>
						<div class="input" style="float:left;">
							<input type="password" name="password" class="small" />
						</div>
					</div>
					<div class="field">
						<div class="label">
							<label for="input-small">重复密码:</label>
						</div>
						<div class="input" style="float:left;">
							<input type="password" name="password1" class="small" />
						</div>
					</div>
					<div class="field">
						<div class="label label-radio">
							<label for="input-small">是否启用:</label>
						</div>
						<div class="radios" style="float:left;">
							<div class="radio">
								<input type="radio" name="status" value="1" class="radio" checked="checked" /><label>启用</label>
							</div>
							<div class="radio">
								<input type="radio" name="status" value="0" class="radio" /><label>禁用</label>
							</div>
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
</div>
</body>
</html>