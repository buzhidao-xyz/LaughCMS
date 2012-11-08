<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Laugh Admin Center</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<!-- stylesheets -->
	<link rel="stylesheet" type="text/css" href="themes/smooth/style/reset.css" />
	<link rel="stylesheet" type="text/css" href="themes/smooth/style/style.css" media="screen" />
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
	$(document).ready(function () {
		var JS_APP = '/laugh/admin';
		var style_path = "themes/smooth/style/colors";

		$("#box-tabs, #box-left-tabs").tabs();
	});
	</script>
</head>

<body>
<div id="perstatus" pers="<pre class='xdebug-var-dump' dir='ltr'><small>string</small> <font color='#cc0000'>'&lt;font color=red&gt;127.0.0.1 系统发生错误: Undefined index: perstatus, in C:\xampp\htdocs\laugh\admin\cache\compile\4cbcface976adb29c67794d68ddef4fd4fd6feab.file.add.html.php on line 30&lt;/font&gt;'</font> <i>(length=195)</i>
</pre><pre class='xdebug-var-dump' dir='ltr'><small>string</small> <font color='#cc0000'>'&lt;font color=red&gt;127.0.0.1 系统发生错误: Trying to get property of non-object, in C:\xampp\htdocs\laugh\admin\cache\compile\4cbcface976adb29c67794d68ddef4fd4fd6feab.file.add.html.php on line 30&lt;/font&gt;'</font> <i>(length=205)</i>
</pre>"></div>
<div id="control">
	<div class="control_nav">
		<h3>添加模块</h3>
		<!--
		<ul class="control_nav_tab">
			<li><a href="/laugh/admin/?r=system/role"><span>角色列表</span></a></li>
			<li class="current"><a href="/laugh/admin/?r=system/newRole"><span>新角色</span></a></li>
		</ul>
		-->
	</div>
	<div class="captitle"><h5>新节点表单</h5></div>
	<form name="newform" action="/laugh/admin/?s=Node/saveNode" method="post" id="addajaxform">
		<input type="hidden" name="" />
		<ul class="formbody">
			<li class="formblock colorblock">
				<span>组: </span>
				<select name="groupid" class="input" style="width:150px;">
					<option value="" >|-组菜单</option>
										<option value="5">&nbsp;|-5</option>
										<option value="<pre class='xdebug-var-dump' dir='ltr'><small>string</small> <font color='#cc0000'>'&lt;font color=red&gt;127.0.0.1 系统发生错误: Undefined index: id, in C:\xampp\htdocs\laugh\admin\cache\compile\4cbcface976adb29c67794d68ddef4fd4fd6feab.file.add.html.php on line 55&lt;/font&gt;'</font> <i>(length=188)</i>
</pre>">&nbsp;|-<pre class='xdebug-var-dump' dir='ltr'><small>string</small> <font color='#cc0000'>'&lt;font color=red&gt;127.0.0.1 系统发生错误: Undefined index: title, in C:\xampp\htdocs\laugh\admin\cache\compile\4cbcface976adb29c67794d68ddef4fd4fd6feab.file.add.html.php on line 56&lt;/font&gt;'</font> <i>(length=191)</i>
</pre></option>
									</select>
			</li>
			<li class="formblock colorblock">
				<span>父节点: </span>
				<select name="pid" flag="nodepid" class="input" style="width:150px;">
					<option value="" >|-节点菜单</option>
				</select>
			</li>
			<li class="formblock colorblock">
				<span>名称:</span>
				<input type="text" name="title" value="" class="input" style="width:150px;" />
			</li>
			<li class="formblock colorblock">
				<span>描述: </span>
				<input type="text" name="remark" value="" class="input" style="width:150px;" />
			</li>
			<li class="formblock colorblock">
				<span>Control: </span>
				<input type="text" name="control" value="" class="input" style="width:150px;" />
			</li>
			<li class="formblock colorblock">
				<span>Action: </span>
				<input type="text" name="action" value="" class="input" style="width:150px;" />
			</li>
			<li class="formblock">
				<input type="submit" name="subut" class="button" value="完成提交" />
			</li>
		</ul>
	</form>
</div>
</body>
</html>