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
				<h5>新角色表单</h5>
			</div>
			<form name="newform" action="/laugh/admin/?s=Role/roleModify" method="post" method="post" id="roleform">
			<input type="hidden"  name="roleid" id="roleid" value="" />
			<div class="form">
				<div class="fields">
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
					<link rel="stylesheet" type="text/css" href="themes/smooth/style/nodeTree.css" media="screen" />
<div id="nodeTree">
	<span class="nodeTreeTitle">请选择节点</span>
			<ul class="groupTree">
		<li><span class="expand"></span><input type="checkbox" name="group1" />系统管理</li>
		<ul class="parentNode">
							<li title="注册与访问控制 管理注册与访客的信息"><span class="expand"></span><input type="checkbox" name="parentNode1" />注册与访问控制</li>
			<ul class="childNode">
						</ul>
					<li title="管理角色信息 可编辑角色权限/改变用户的角色"><span class="expand"></span><input type="checkbox" name="parentNode1" />角色管理</li>
			<ul class="childNode">
										<li title=""><input type="checkbox" name="childNode1" />添加角色</li>
							<li title=""><input type="checkbox" name="childNode1" />管理角色</li>
									</ul>
					<li title="日志模块"><span class="expand"></span><input type="checkbox" name="parentNode1" />日志管理</li>
			<ul class="childNode">
										<li title=""><input type="checkbox" name="childNode1" />日志列表</li>
									</ul>
					<li title="节点组管理"><span class="expand"></span><input type="checkbox" name="parentNode1" />组管理</li>
			<ul class="childNode">
										<li title=""><input type="checkbox" name="childNode1" />管理组</li>
									</ul>
					<li title="管理模块下的节点信息"><span class="expand"></span><input type="checkbox" name="parentNode1" />节点管理</li>
			<ul class="childNode">
										<li title=""><input type="checkbox" name="childNode1" />添加节点</li>
							<li title=""><input type="checkbox" name="childNode1" />管理节点</li>
									</ul>
					<li title="管理员账号管理中心"><span class="expand"></span><input type="checkbox" name="parentNode1" />管理员用户管理</li>
			<ul class="childNode">
										<li title=""><input type="checkbox" name="childNode1" />新管理员</li>
							<li title=""><input type="checkbox" name="childNode1" />管理员列表</li>
									</ul>
						</ul>
	</ul>
		<ul class="groupTree">
		<li><span class="expand"></span><input type="checkbox" name="group2" />用户中心</li>
		<ul class="parentNode">
							<li title="搜索用户信息"><span class="expand"></span><input type="checkbox" name="parentNode2" />用户搜索</li>
			<ul class="childNode">
						</ul>
						</ul>
	</ul>
		<ul class="groupTree">
		<li><span class="expand"></span><input type="checkbox" name="group3" />核心内容</li>
		<ul class="parentNode">
							<li title="管理网站栏目"><span class="expand"></span><input type="checkbox" name="parentNode3" />栏目管理</li>
			<ul class="childNode">
										<li title=""><input type="checkbox" name="childNode3" />网站栏目</li>
									</ul>
					<li title=""><span class="expand"></span><input type="checkbox" name="parentNode3" />文档管理</li>
			<ul class="childNode">
										<li title=""><input type="checkbox" name="childNode3" />发布新文档</li>
									</ul>
						</ul>
	</ul>
		<ul class="groupTree">
		<li><span class="expand"></span><input type="checkbox" name="group4" />网站更新</li>
		<ul class="parentNode">
							<li title=""><span class="expand"></span><input type="checkbox" name="parentNode4" />自动更新</li>
			<ul class="childNode">
										<li title=""><input type="checkbox" name="childNode4" />一键更新网站</li>
							<li title=""><input type="checkbox" name="childNode4" />更新系统缓存</li>
									</ul>
						</ul>
	</ul>
		<ul class="groupTree">
		<li><span class="expand"></span><input type="checkbox" name="group5" />系统插件</li>
		<ul class="parentNode">
							<li title=""><span class="expand"></span><input type="checkbox" name="parentNode5" />辅助插件</li>
			<ul class="childNode">
										<li title=""><input type="checkbox" name="childNode5" />文件管理器</li>
									</ul>
						</ul>
	</ul>
		<ul class="groupTree">
		<li><span class="expand"></span><input type="checkbox" name="group6" />系统设置</li>
		<ul class="parentNode">
							<li title=""><span class="expand"></span><input type="checkbox" name="parentNode6" />基本设置</li>
			<ul class="childNode">
						</ul>
					<li title=""><span class="expand"></span><input type="checkbox" name="parentNode6" />数据库</li>
			<ul class="childNode">
						</ul>
						</ul>
	</ul>
		</div>
<script type="text/javascript">
$(document).ready(function (){
$("#nodeTree ul li span.expand").click(function(){
	alert($(this).index());
	// $(this).parent().parent().find("ul:eq(0)").css('display','none').css("position","");
});
});
</script>
					<div class="buttons">
						<input type="submit" name="newRoleButton" value="完成提交" />
					</div>
				</div>
			</div>
			</form>
		</div>
	</div>
</div>
<script src="themes/smooth/js/role.js" type="text/javascript"></script>
</body>
</html>