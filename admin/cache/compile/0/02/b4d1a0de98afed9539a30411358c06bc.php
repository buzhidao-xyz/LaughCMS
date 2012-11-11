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
				<h5>节点列表 【目前共有10条数据】</h5>
			</div>
			<div class="table">
				<ul class="table_list_title">
			    	<li class="table_list_l table_list_l150">名称</li>
			    	<li class="table_list_l table_list_l200">描述</li>
			    	<li class="table_list_l table_list_l100">Control</li>
			    	<li class="table_list_l table_list_l120">Action</li>
			    	<li class="table_list_l table_list_l150">创建时间</li>
			    	<li class="table_list_l table_list_l80">是/否显示</li>
			    	<li class="table_list_l table_list_l100">操作</li>
			    </ul>
			    			     			    <ul class="table_list">
					<li class="table_list_l table_list_l150">注册与访问控制</li>
					<li class="table_list_l table_list_l200" tooltip=1 title="注册与访问控制 管理注册与访客的信息">注册与访问控制 管理注册与访客的信息</li>
			    	<li class="table_list_l table_list_l100"></li>
			    	<li class="table_list_l table_list_l120"></li>
			    	<li class="table_list_l table_list_l150"></li>
			    	<li class="table_list_l table_list_l80">显</li>
			    	<li class="table_list_l table_list_l100">
			    		<a href="javascript:;" name="modify" id="1" title="注册与访问控制" isshow="1">修改</a>&nbsp;&nbsp;
			    		<a delurl="/laugh/admin/Group/deleteGroup" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
			    	</li>
			    </ul>
			    			    <ul class="table_list">
					<li class="table_list_l table_list_l150">角色管理</li>
					<li class="table_list_l table_list_l200" tooltip=1 title="管理角色信息 可编辑角色权限/改变用户的角色">管理角色信息 可编辑角色权限/改变用户的角色</li>
			    	<li class="table_list_l table_list_l100"></li>
			    	<li class="table_list_l table_list_l120"></li>
			    	<li class="table_list_l table_list_l150"></li>
			    	<li class="table_list_l table_list_l80">显</li>
			    	<li class="table_list_l table_list_l100">
			    		<a href="javascript:;" name="modify" id="2" title="角色管理" isshow="1">修改</a>&nbsp;&nbsp;
			    		<a delurl="/laugh/admin/Group/deleteGroup" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
			    	</li>
			    </ul>
			    			    <ul class="table_list">
					<li class="table_list_l table_list_l150">日志管理</li>
					<li class="table_list_l table_list_l200" tooltip=1 title="日志模块">日志模块</li>
			    	<li class="table_list_l table_list_l100"></li>
			    	<li class="table_list_l table_list_l120"></li>
			    	<li class="table_list_l table_list_l150"></li>
			    	<li class="table_list_l table_list_l80">显</li>
			    	<li class="table_list_l table_list_l100">
			    		<a href="javascript:;" name="modify" id="3" title="日志管理" isshow="1">修改</a>&nbsp;&nbsp;
			    		<a delurl="/laugh/admin/Group/deleteGroup" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
			    	</li>
			    </ul>
			    			    <ul class="table_list">
					<li class="table_list_l table_list_l150">组管理</li>
					<li class="table_list_l table_list_l200" tooltip=1 title="节点组管理">节点组管理</li>
			    	<li class="table_list_l table_list_l100"></li>
			    	<li class="table_list_l table_list_l120"></li>
			    	<li class="table_list_l table_list_l150"></li>
			    	<li class="table_list_l table_list_l80">显</li>
			    	<li class="table_list_l table_list_l100">
			    		<a href="javascript:;" name="modify" id="4" title="组管理" isshow="1">修改</a>&nbsp;&nbsp;
			    		<a delurl="/laugh/admin/Group/deleteGroup" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
			    	</li>
			    </ul>
			    			    <ul class="table_list">
					<li class="table_list_l table_list_l150">节点管理</li>
					<li class="table_list_l table_list_l200" tooltip=1 title="管理模块下的节点信息">管理模块下的节点信息</li>
			    	<li class="table_list_l table_list_l100"></li>
			    	<li class="table_list_l table_list_l120"></li>
			    	<li class="table_list_l table_list_l150"></li>
			    	<li class="table_list_l table_list_l80">显</li>
			    	<li class="table_list_l table_list_l100">
			    		<a href="javascript:;" name="modify" id="5" title="节点管理" isshow="1">修改</a>&nbsp;&nbsp;
			    		<a delurl="/laugh/admin/Group/deleteGroup" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
			    	</li>
			    </ul>
			    			    <ul class="table_list">
					<li class="table_list_l table_list_l150">管理员用户管理</li>
					<li class="table_list_l table_list_l200" tooltip=1 title="管理员账号管理中心">管理员账号管理中心</li>
			    	<li class="table_list_l table_list_l100"></li>
			    	<li class="table_list_l table_list_l120"></li>
			    	<li class="table_list_l table_list_l150"></li>
			    	<li class="table_list_l table_list_l80">显</li>
			    	<li class="table_list_l table_list_l100">
			    		<a href="javascript:;" name="modify" id="6" title="管理员用户管理" isshow="1">修改</a>&nbsp;&nbsp;
			    		<a delurl="/laugh/admin/Group/deleteGroup" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
			    	</li>
			    </ul>
			    			    <ul class="table_list">
					<li class="table_list_l table_list_l150">用户搜索</li>
					<li class="table_list_l table_list_l200" tooltip=1 title="搜索用户信息">搜索用户信息</li>
			    	<li class="table_list_l table_list_l100"></li>
			    	<li class="table_list_l table_list_l120"></li>
			    	<li class="table_list_l table_list_l150"></li>
			    	<li class="table_list_l table_list_l80">显</li>
			    	<li class="table_list_l table_list_l100">
			    		<a href="javascript:;" name="modify" id="7" title="用户搜索" isshow="1">修改</a>&nbsp;&nbsp;
			    		<a delurl="/laugh/admin/Group/deleteGroup" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
			    	</li>
			    </ul>
			    			    <ul class="table_list">
					<li class="table_list_l table_list_l150">管理组</li>
					<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
			    	<li class="table_list_l table_list_l100">Group</li>
			    	<li class="table_list_l table_list_l120">manageGroup</li>
			    	<li class="table_list_l table_list_l150"></li>
			    	<li class="table_list_l table_list_l80">显</li>
			    	<li class="table_list_l table_list_l100">
			    		<a href="javascript:;" name="modify" id="8" title="管理组" isshow="1">修改</a>&nbsp;&nbsp;
			    		<a delurl="/laugh/admin/Group/deleteGroup" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
			    	</li>
			    </ul>
			    			    <ul class="table_list">
					<li class="table_list_l table_list_l150">添加节点</li>
					<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
			    	<li class="table_list_l table_list_l100">Node</li>
			    	<li class="table_list_l table_list_l120">newNode</li>
			    	<li class="table_list_l table_list_l150"></li>
			    	<li class="table_list_l table_list_l80">显</li>
			    	<li class="table_list_l table_list_l100">
			    		<a href="javascript:;" name="modify" id="9" title="添加节点" isshow="1">修改</a>&nbsp;&nbsp;
			    		<a delurl="/laugh/admin/Group/deleteGroup" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
			    	</li>
			    </ul>
			    			    <ul class="table_list">
					<li class="table_list_l table_list_l150">管理节点</li>
					<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
			    	<li class="table_list_l table_list_l100">Node</li>
			    	<li class="table_list_l table_list_l120">manageNode</li>
			    	<li class="table_list_l table_list_l150"></li>
			    	<li class="table_list_l table_list_l80">显</li>
			    	<li class="table_list_l table_list_l100">
			    		<a href="javascript:;" name="modify" id="10" title="管理节点" isshow="1">修改</a>&nbsp;&nbsp;
			    		<a delurl="/laugh/admin/Group/deleteGroup" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
			    	</li>
			    </ul>
			    			        			<div class="pagination pagination-left">
	<div class="results">
		<span>显示数据 1-10 / 10</span>
	</div>
	</div>
			</div>
		</div>
	</div>
</div>
<!--弹出层-->
<div id="modify_div" class="modify_div" style="display:none;">
	<form id="modify_div_form" action="/laugh/admin/?s=Node/upNode">
		<input name="id" value="" type="hidden" />
		<a href="javascript:;" class="modify_div_close" id="modify_div_close">X</a>
		<div class="form">
			<div class="fields">
				<div class="field field-first">
					<div class="label">
						<label for="select">组:</label>
					</div>
					<div class="select">
						<select name="groupid">
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
<!--弹出层-->
<script type="text/javascript" src="themes/smooth/js/div_window.js"></script>
<script type="text/javascript" src="themes/smooth/js/common.js"></script>
<script type="text/javascript" src="themes/smooth/js/ajax.js"></script>
</body>
</html>