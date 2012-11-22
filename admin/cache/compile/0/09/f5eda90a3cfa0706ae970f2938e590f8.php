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
		<div class="box mtop10">
			<div class="title">
				<h5>角色列表 【目前共有2条数据】</h5>
			</div>
			<div class="table">
				<ul class="table_list_title">
			    	<li class="table_list_l table_list_l150">角色名</li>
			    	<li class="table_list_l table_list_l200">描述</li>
			    	<li class="table_list_l table_list_l150">创建时间</li>
			    	<li class="table_list_l table_list_l100">状态</li>
			    	<li class="table_list_l table_list_l150">操作</li>
			    </ul>
			    			     			    <ul class="table_list">
					<li class="table_list_l table_list_l150">超级管理员</li>
					<li class="table_list_l table_list_l200" title="超级管理员 具有全站管理权限">超级管理员 具有全站管理权限</li>
			    	<li class="table_list_l table_list_l150">2012-03-22 12:47:51</li>
			    	<li class="table_list_l table_list_l100">
			    		<a delurl="/laugh/admin/?s=Role/upRoleStatus&id=1&status=0" href="javascript:;" name="del" msg="确定禁用吗？">启用</a>
			    	</li>
			    	<li class="table_list_l table_list_l150">
			    		<a href="javascript:;" name="modify" id="1" title="<pre class='xdebug-var-dump' dir='ltr'><small>string</small> <font color='#cc0000'>'&lt;font color=red&gt;127.0.0.1 系统发生错误: Undefined index: title, in C:\xampp\htdocs\laugh\admin\cache\compile\baf94ffe4a2fd9d72fac7c09e66fec12d56a582b.file.manage.html.php on line 65&lt;/font&gt;'</font> <i>(length=194)</i>
</pre>" isshow="<pre class='xdebug-var-dump' dir='ltr'><small>string</small> <font color='#cc0000'>'&lt;font color=red&gt;127.0.0.1 系统发生错误: Undefined index: isshow, in C:\xampp\htdocs\laugh\admin\cache\compile\baf94ffe4a2fd9d72fac7c09e66fec12d56a582b.file.manage.html.php on line 66&lt;/font&gt;'</font> <i>(length=195)</i>
</pre>">修改</a>&nbsp;&nbsp;
			    		<a delurl="/laugh/admin/Group/deleteGroup" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
			    	</li>
			    </ul>
			    			    <ul class="table_list">
					<li class="table_list_l table_list_l150">管理员</li>
					<li class="table_list_l table_list_l200" title="普通管理员 管理某些模块">普通管理员 管理某些模块</li>
			    	<li class="table_list_l table_list_l150">2012-03-22 12:47:51</li>
			    	<li class="table_list_l table_list_l100">
			    		<a delurl="/laugh/admin/?s=Role/upRoleStatus&id=2&status=0" href="javascript:;" name="del" msg="确定禁用吗？">启用</a>
			    	</li>
			    	<li class="table_list_l table_list_l150">
			    		<a href="javascript:;" name="modify" id="2" title="<pre class='xdebug-var-dump' dir='ltr'><small>string</small> <font color='#cc0000'>'&lt;font color=red&gt;127.0.0.1 系统发生错误: Undefined index: title, in C:\xampp\htdocs\laugh\admin\cache\compile\baf94ffe4a2fd9d72fac7c09e66fec12d56a582b.file.manage.html.php on line 65&lt;/font&gt;'</font> <i>(length=194)</i>
</pre>" isshow="<pre class='xdebug-var-dump' dir='ltr'><small>string</small> <font color='#cc0000'>'&lt;font color=red&gt;127.0.0.1 系统发生错误: Undefined index: isshow, in C:\xampp\htdocs\laugh\admin\cache\compile\baf94ffe4a2fd9d72fac7c09e66fec12d56a582b.file.manage.html.php on line 66&lt;/font&gt;'</font> <i>(length=195)</i>
</pre>">修改</a>&nbsp;&nbsp;
			    		<a delurl="/laugh/admin/Group/deleteGroup" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
			    	</li>
			    </ul>
			    			        			<div class="pagination pagination-left">
	<div class="results">
		<span>显示数据 1-2 / 2</span>
	</div>
	</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>