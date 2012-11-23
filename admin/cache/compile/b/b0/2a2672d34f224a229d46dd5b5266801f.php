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
			<form name="newform" action="/laugh/admin/?s=Role/saveRole" method="post" method="post" id="roleform">
			<input type="hidden"  name="id" id="id" value="0" />
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
		<li><span class="expand"></span><input type="checkbox" name="group1" value="1" />系统管理</li>
		<ul class="parentNode">
							<li title="注册与访问控制 管理注册与访客的信息"><span class="expand"></span><input type="checkbox" name="node[]" value="1"   flag="pNode" />注册与访问控制</li>
			<ul class="childNode">
						</ul>
					<li title="管理角色信息 可编辑角色权限/改变用户的角色"><span class="expand"></span><input type="checkbox" name="node[]" value="2"   flag="pNode" />角色管理</li>
			<ul class="childNode">
										<li title=""><input type="checkbox" name="node[]" value="11"   flag="cNode" />添加角色</li>
							<li title=""><input type="checkbox" name="node[]" value="12"   flag="cNode" />管理角色</li>
									</ul>
					<li title="日志模块"><span class="expand"></span><input type="checkbox" name="node[]" value="3"   flag="pNode" />日志管理</li>
			<ul class="childNode">
										<li title=""><input type="checkbox" name="node[]" value="13"   flag="cNode" />日志列表</li>
									</ul>
					<li title="节点组管理"><span class="expand"></span><input type="checkbox" name="node[]" value="4"   flag="pNode" />组管理</li>
			<ul class="childNode">
										<li title=""><input type="checkbox" name="node[]" value="8"   flag="cNode" />管理组</li>
									</ul>
					<li title="管理模块下的节点信息"><span class="expand"></span><input type="checkbox" name="node[]" value="5"   flag="pNode" />节点管理</li>
			<ul class="childNode">
										<li title=""><input type="checkbox" name="node[]" value="9"   flag="cNode" />添加节点</li>
							<li title=""><input type="checkbox" name="node[]" value="10"   flag="cNode" />管理节点</li>
									</ul>
					<li title="管理员账号管理中心"><span class="expand"></span><input type="checkbox" name="node[]" value="6"   flag="pNode" />管理员用户管理</li>
			<ul class="childNode">
										<li title=""><input type="checkbox" name="node[]" value="14"   flag="cNode" />新管理员</li>
							<li title=""><input type="checkbox" name="node[]" value="15"   flag="cNode" />管理员列表</li>
									</ul>
						</ul>
	</ul>
		<ul class="groupTree">
		<li><span class="expand"></span><input type="checkbox" name="group2" value="2" />用户中心</li>
		<ul class="parentNode">
							<li title="搜索用户信息"><span class="expand"></span><input type="checkbox" name="node[]" value="7"   flag="pNode" />用户搜索</li>
			<ul class="childNode">
						</ul>
						</ul>
	</ul>
		<ul class="groupTree">
		<li><span class="expand"></span><input type="checkbox" name="group3" value="3" />核心内容</li>
		<ul class="parentNode">
							<li title="管理网站栏目"><span class="expand"></span><input type="checkbox" name="node[]" value="16"   flag="pNode" />栏目管理</li>
			<ul class="childNode">
										<li title=""><input type="checkbox" name="node[]" value="17"   flag="cNode" />网站栏目</li>
									</ul>
					<li title=""><span class="expand"></span><input type="checkbox" name="node[]" value="18"   flag="pNode" />文档管理</li>
			<ul class="childNode">
										<li title=""><input type="checkbox" name="node[]" value="19"   flag="cNode" />发布新文档</li>
									</ul>
						</ul>
	</ul>
		<ul class="groupTree">
		<li><span class="expand"></span><input type="checkbox" name="group4" value="4" />网站更新</li>
		<ul class="parentNode">
							<li title=""><span class="expand"></span><input type="checkbox" name="node[]" value="20"   flag="pNode" />自动更新</li>
			<ul class="childNode">
										<li title=""><input type="checkbox" name="node[]" value="21"   flag="cNode" />一键更新网站</li>
							<li title=""><input type="checkbox" name="node[]" value="22"   flag="cNode" />更新系统缓存</li>
									</ul>
						</ul>
	</ul>
		<ul class="groupTree">
		<li><span class="expand"></span><input type="checkbox" name="group5" value="5" />系统插件</li>
		<ul class="parentNode">
							<li title=""><span class="expand"></span><input type="checkbox" name="node[]" value="23"   flag="pNode" />辅助插件</li>
			<ul class="childNode">
										<li title=""><input type="checkbox" name="node[]" value="24"   flag="cNode" />文件管理器</li>
									</ul>
						</ul>
	</ul>
		<ul class="groupTree">
		<li><span class="expand"></span><input type="checkbox" name="group6" value="6" />系统设置</li>
		<ul class="parentNode">
							<li title=""><span class="expand"></span><input type="checkbox" name="node[]" value="25"   flag="pNode" />基本设置</li>
			<ul class="childNode">
						</ul>
					<li title=""><span class="expand"></span><input type="checkbox" name="node[]" value="26"   flag="pNode" />数据库</li>
			<ul class="childNode">
						</ul>
						</ul>
	</ul>
		</div>
<script type="text/javascript">
var nodeTreeClass = function(){
	//定义对象属性
	var nodeTree = {
		expand: $("#nodeTree ul li span.expand"),
		node: $("#nodeTree ul li input[type=checkbox]"),
		pNode: $("#nodeTree ul li input[flag=pNode]")
	}

	//展开收缩 toggle动态
	nodeTree.ehNode = function() {
		nodeTree.expand.click(function (){
			if ($(this).attr("class").indexOf("back")<0) $(this).addClass("back");
			else $(this).removeClass("back");
			$(this).parent().next("ul").toggle(300);
		})
	}(window);

	//选中/不选中全部
	nodeTree.check = function(){
		nodeTree.node.click(function (){
			var nodeObj = $(this).parent().next("ul").find("input[type=checkbox]");
			if ($(this).attr("checked")) nodeObj.attr("checked",true);
			else nodeObj.attr("checked",false);
		})
	}(window);

	//选中组
	if (nodeTree.pNode.length > 0) {
		nodeTree.pNode.each(function (){
			if ($(this).attr("checked"))
				$(this).parent().parent().prev("li").find("input[type=checkbox]").attr("checked",true);
		});
	}
}
new nodeTreeClass();
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