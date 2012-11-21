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
<link rel="stylesheet" href="themes/smooth/js/plugin/zTreeStyle/zTreeStyle.css" type="text/css">
<link rel="stylesheet" href="themes/smooth/js/plugin/zTreeStyle/roletree.css" type="text/css">
<div id="content">
	<div id="control">
		<div class="box">
			<div class="title">
				<h5>新角色表单</h5>
			</div>
			<form name="newform" action="/laugh/admin/Role/roleModify" method="post" method="post" id="roleform">
			<input type="hidden"  name="id" id="id" value="" />
			<div class="form">
				<div class="fields">
					<div id="step1" class="stable_box">
						<div class="field">
							<div class="label">
								<label for="input-small">角色名:</label>
							</div>
							<div class="input" style="float:left;">
								<input type="text" name="name" value="" class="small" />
							</div>
						</div>
						<div class="field">
							<div class="label">
								<label for="input-small">描述:</label>
							</div>
							<div class="input" style="float:left;">
								<input type="text" name="remark" value="" class="small" />
							</div>
						</div>
						<div class="field">
							<div class="label">
								<label for="input-small">状态:</label>
							</div>
							<div class="radio">
								<input  type="radio" name="status"  value="1" checked="checked" />启用&nbsp;&nbsp;
		  	 					<input  type="radio" name="status"  value="0"  />禁用
							</div>
						</div>
						<div class="buttons">
							<input type="submit" name="subutstep" value="下一步" />
						</div>
					</div>
					<div id="step2" class="field stable_box stable_box1">
						<table class="stable" border="0" cellspacing="0" cellpadding="0">
						   <tr>
							 <td colspan="4"><b>选择节点权限</b></td>
						   </tr> 
							 <tr>
							 <td colspan="4"><ul id="treeDemo" class="tree"></ul></td>
						   </tr>
						   <tr>
							<td colspan="4">
								<div class="buttons">
									<input type="button" name="subutstep" value="展开/收缩" /> <input type="button" name="subutstep" value="上一步" /> <input type="button" name="subutstep" value="下一步" />
								</div>
							</td>
						   </tr>
						</table>
					</div>
					<div id="step3" class="field stable_box stable_box1">
						<table class="stable" border="0" cellspacing="0" cellpadding="0">
						   <tr  id="rolelist">
							 <td colspan="4"><b></b></td>
						   </tr>
						   <tr>
							 <td colspan="4"><b></b></td>
						   </tr> 
						   <tr>
							 <td>
								<div class="buttons">
									<input type="button" name="subutstep" value="上一步" />
									<input type="submit" name="subutstep" class="button buttonml10" value="完成提交" />
								</div>
							</td>
						   </tr>
						</table>
					</div>
				</div>
			</div>
			</form>
		</div>
	</div>
</div>
<script src="themes/smooth/js/role.js" type="text/javascript"></script>
<script src="themes/smooth/js/plugin/zTreeStyle/jquery.ztree-2.6.js" type="text/javascript"></script>
</body>
</html>