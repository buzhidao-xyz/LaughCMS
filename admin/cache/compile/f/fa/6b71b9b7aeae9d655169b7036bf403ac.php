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
				<h5>新组节点表单</h5>
			</div>
			<form name="newform" action="/laugh/admin/?s=Group/saveGroup" method="post" id="addajaxform">
			<div class="form">
				<div class="fields">
					<div class="field  field-first">
						<div class="label">
							<label for="input-small">名称:</label>
						</div>
						<div class="input" style="float:left;">
							<input type="text" id="input-small" name="title" class="small" />
						</div>
					</div>
					<div class="buttons">
						<input type="submit" name="submit" value="添加" />
					</div>
				</div>
			</div>
			</form>
		</div>
		<div class="box mtop10">
			<div class="title">
				<h5>组节点列表 【目前共有5条数据】</h5>
			</div>
			<div class="table">
				<ul class="table_list_title">
			    	<li class="table_list_l table_list_l150">组节点名称</li>
			    	<li class="table_list_l table_list_l170">创建时间</li>
			    	<li class="table_list_l table_list_l100">是/否显示</li>
			    	<li class="table_list_l table_list_l150">操作</li>
			    </ul>
			    			     			    <ul class="table_list">
					<li class="table_list_l table_list_l150">系统管理</li>
			    	<li class="table_list_l table_list_l170">2012-03-22 12:28:58</li>
			    	<li class="table_list_l table_list_l100">显</li>
			    	<li class="table_list_l table_list_l150">
			    		<a href="javascript:;" name="modify" id="1" title="系统管理" isshow="1">修改</a>&nbsp;&nbsp;
			    		<a delurl="/laugh/admin/Group/deleteGroup" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
			    	</li>
			    </ul>
			    			    <ul class="table_list">
					<li class="table_list_l table_list_l150">用户中心</li>
			    	<li class="table_list_l table_list_l170">2012-03-22 12:28:58</li>
			    	<li class="table_list_l table_list_l100">显</li>
			    	<li class="table_list_l table_list_l150">
			    		<a href="javascript:;" name="modify" id="2" title="用户中心" isshow="1">修改</a>&nbsp;&nbsp;
			    		<a delurl="/laugh/admin/Group/deleteGroup" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
			    	</li>
			    </ul>
			    			    <ul class="table_list">
					<li class="table_list_l table_list_l150">文章管理</li>
			    	<li class="table_list_l table_list_l170">2012-03-22 12:28:58</li>
			    	<li class="table_list_l table_list_l100">显</li>
			    	<li class="table_list_l table_list_l150">
			    		<a href="javascript:;" name="modify" id="3" title="文章管理" isshow="1">修改</a>&nbsp;&nbsp;
			    		<a delurl="/laugh/admin/Group/deleteGroup" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
			    	</li>
			    </ul>
			    			    <ul class="table_list">
					<li class="table_list_l table_list_l150">网站设置</li>
			    	<li class="table_list_l table_list_l170">2012-03-22 12:28:58</li>
			    	<li class="table_list_l table_list_l100">显</li>
			    	<li class="table_list_l table_list_l150">
			    		<a href="javascript:;" name="modify" id="4" title="网站设置" isshow="1">修改</a>&nbsp;&nbsp;
			    		<a delurl="/laugh/admin/Group/deleteGroup" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
			    	</li>
			    </ul>
			    			    <ul class="table_list">
					<li class="table_list_l table_list_l150">系统工具</li>
			    	<li class="table_list_l table_list_l170">2012-03-22 12:28:58</li>
			    	<li class="table_list_l table_list_l100">显</li>
			    	<li class="table_list_l table_list_l150">
			    		<a href="javascript:;" name="modify" id="5" title="系统工具" isshow="1">修改</a>&nbsp;&nbsp;
			    		<a delurl="/laugh/admin/Group/deleteGroup" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
			    	</li>
			    </ul>
			    			        			<div class="pagination pagination-left">
	<div class="results">
		<span>显示数据 1-5 / 5</span>
	</div>
	</div>
			</div>
		</div>
	</div>
</div>
<!--弹出层-->
<div id="modify_div" class="modify_div" style="display:none;">
	<form id="modify_div_form" action="/laugh/admin/?s=Group/upGroup">
		<input name="id" value="" type="hidden" />
		<a href="javascript:;" class="modify_div_close" id="modify_div_close">X</a>
		<div class="form">
			<div class="fields">
				<div class="field field-first">
					<div class="label">
						<label for="input-small">名称:</label>
					</div>
					<div class="input" style="float:left;">
						<input type="text" id="input-small" name="title" class="small" />
					</div>
				</div>
				<div class="field">
					<div class="label label-radio">
						<label for="input-small">是否显示:</label>
					</div>
					<div class="radios" style="float:left;">
						<div class="radio">
							<input type="radio" name="isshow" value="1" class="radio" /><label>是</label>
						</div>
						<div class="radio">
							<input type="radio" name="isshow" value="0" class="radio" /><label>否</label>
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
<!--弹出层-->
<script type="text/javascript" src="themes/smooth/js/div_window.js"></script>
<script type="text/javascript" src="themes/smooth/js/common.js"></script>
<script type="text/javascript" src="themes/smooth/js/ajax.js"></script>
</body>
</html>