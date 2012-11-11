<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Laugh Admin Center</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<!-- stylesheets -->
	<link rel="stylesheet" type="text/css" href="themes/smooth/style/reset.css" />
	<link rel="stylesheet" type="text/css" href="themes/smooth/style/style.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="themes/smooth/style/table.css" />
	<link id="color" rel="stylesheet" type="text/css" href="themes/smooth/style/colors/blue.css" />
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
		<div class="box">
			<div class="title">
				<h5>新节点表单</h5>
			</div>
			<form name="newform" action="/laugh/admin/?s=Node/saveNode" method="post" id="addajaxform">
			<div class="form">
				<div class="fields">
					<div class="field  field-first">
						<div class="label">
							<label for="select">组:</label>
						</div>
						<div class="select">
							<select id="select" name="groupid">
								<option value="" >|-组菜单</option>
																<option value="1">&nbsp;|-系统管理</option>
																<option value="2">&nbsp;|-用户中心</option>
																<option value="3">&nbsp;|-文章管理</option>
																<option value="4">&nbsp;|-网站设置</option>
																<option value="5">&nbsp;|-系统工具</option>
															</select>
						</div>
					</div>
					<div class="field">
						<div class="label">
							<label for="select">父节点:</label>
						</div>
						<div class="select" id="nodepid">
							<select name="pid">
								<option value="" >|-节点菜单</option>
							</select>
						</div>
					</div>
					<div class="field">
						<div class="label">
							<label for="input-small">名称:</label>
						</div>
						<div class="input" style="float:left;">
							<input type="text" id="input-small" name="title" class="small" />
						</div>
					</div>
					<div class="field">
						<div class="label">
							<label for="input-small">描述:</label>
						</div>
						<div class="input" style="float:left;">
							<input type="text" id="input-small" name="remark" class="small" />
						</div>
					</div>
					<div class="field">
						<div class="label">
							<label for="input-small">Control:</label>
						</div>
						<div class="input" style="float:left;">
							<input type="text" id="input-small" name="control" class="small" />
						</div>
					</div>
					<div class="field">
						<div class="label">
							<label for="input-small">Action:</label>
						</div>
						<div class="input" style="float:left;">
							<input type="text" id="input-small" name="action" class="small" />
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
<script type="text/javascript" src="themes/smooth/js/div_window.js"></script>
<script type="text/javascript" src="themes/smooth/js/common.js"></script>
<script type="text/javascript" src="themes/smooth/js/ajax.js"></script>
</body>
</html>