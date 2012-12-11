<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="keywords" content="">
<link type="text/css" rel="stylesheet" href="themes/blue/style/common.css" media="screen">
<link type="text/css" rel="stylesheet" href="themes/blue/style/base.css" media="screen">
<link type="text/css" rel="stylesheet" href="themes/blue/style/global.css" media="screen">
<script type="text/javascript" src="themes/blue/js/jquery.js"></script>
<script type="text/javascript" src="themes/blue/js/div_window.js"></script>
<!-- <script type="text/javascript" src="themes/blue/js/PIE.js"></script> -->
<title>管理中心</title>
<script type="text/javascript">
var JS_APP = '/admin';
</script>
</head>

<body>
<div id="control">
	<ul class="controlTop">
		<li class="controlLeftTop"></li>
		<li class="controlRightTop"></li>
	</ul>
	<div id="controlContent">
<div class="formContainer">
	<div class="formtitle"><h5>新角色表单</h5></div>
	<form name="newform" action="/admin/index.php?s=Role/saveRole" method="post" method="post" id="addajaxform" class="newform">
		<input type="hidden" name="id" id="id" value="0" />
		<ul class="formbody">
			<li class="formblock">
				<span>角色名:</span>
				<input type="text" name="name" value="" class="input w150" />
			</li>
			<li class="formblock">
				<span>描述:</span>
				<input type="text" name="remark" value="" class="input w250" />
			</li>
			<li class="formblock">
				<span>状态: </span>
				<div class="item_list fleft">
					<label><input type="radio" name="status" value="1" class="radio" checked="checked" />启用</label>
					<label><input type="radio" name="status" value="0" class="radio"   />禁用</label>
				</div>
			</li>
			<link rel="stylesheet" type="text/css" href="themes/blue/style/nodeTree.css" media="screen" />
<div id="nodeTree">
	<div class="nodeTreeTitle">
		<span class="titleNode w726">节点名称</span>
		<span class="titleAccess w120">浏览权限</span>
		<span class="titleManage w120">操作权限</span>
	</div>
			<ul class="groupTree">
		<li>
			<span class="expand"></span>
			<span class="w700">系统管理</span>
			<span class="w120"><input type="checkbox" name="group1" value="1" class="checkbox" /></span>
			<span class="w120"><input type="checkbox" name="group1" value="1" class="checkbox" /></span>
		</li>
		<ul class="parentNode">
							<li title="管理角色信息 可编辑角色权限/改变用户的角色">
				<span class="expand"></span>
				<span class="w670">角色管理</span>
				<span class="w120"><input type="checkbox" name="node[]" value="2"  flag="pNode" class="checkbox" /></span>
				<span class="w120"><input type="checkbox" name="node[]" value="2"  flag="pNode" class="checkbox" /></span>
			</li>
			<ul class="childNode">
										<li title="">
					<span class="w656">添加角色</span>
					<span class="w120"><input type="checkbox" name="node[]" value="11"  flag="cNode" class="checkbox" /></span>
					<span class="w120"><input type="checkbox" name="node[]" value="11"  flag="cNode" class="checkbox" /></span>
				</li>
							<li title="">
					<span class="w656">管理角色</span>
					<span class="w120"><input type="checkbox" name="node[]" value="12"  flag="cNode" class="checkbox" /></span>
					<span class="w120"><input type="checkbox" name="node[]" value="12"  flag="cNode" class="checkbox" /></span>
				</li>
									</ul>
					<li title="日志模块">
				<span class="expand"></span>
				<span class="w670">日志管理</span>
				<span class="w120"><input type="checkbox" name="node[]" value="3"  flag="pNode" class="checkbox" /></span>
				<span class="w120"><input type="checkbox" name="node[]" value="3"  flag="pNode" class="checkbox" /></span>
			</li>
			<ul class="childNode">
										<li title="">
					<span class="w656">日志列表</span>
					<span class="w120"><input type="checkbox" name="node[]" value="13"  flag="cNode" class="checkbox" /></span>
					<span class="w120"><input type="checkbox" name="node[]" value="13"  flag="cNode" class="checkbox" /></span>
				</li>
									</ul>
					<li title="节点组管理">
				<span class="expand"></span>
				<span class="w670">组管理</span>
				<span class="w120"><input type="checkbox" name="node[]" value="4"  flag="pNode" class="checkbox" /></span>
				<span class="w120"><input type="checkbox" name="node[]" value="4"  flag="pNode" class="checkbox" /></span>
			</li>
			<ul class="childNode">
										<li title="">
					<span class="w656">管理组</span>
					<span class="w120"><input type="checkbox" name="node[]" value="8"  flag="cNode" class="checkbox" /></span>
					<span class="w120"><input type="checkbox" name="node[]" value="8"  flag="cNode" class="checkbox" /></span>
				</li>
									</ul>
					<li title="管理模块下的节点信息">
				<span class="expand"></span>
				<span class="w670">节点管理</span>
				<span class="w120"><input type="checkbox" name="node[]" value="5"  flag="pNode" class="checkbox" /></span>
				<span class="w120"><input type="checkbox" name="node[]" value="5"  flag="pNode" class="checkbox" /></span>
			</li>
			<ul class="childNode">
										<li title="">
					<span class="w656">添加节点</span>
					<span class="w120"><input type="checkbox" name="node[]" value="9"  flag="cNode" class="checkbox" /></span>
					<span class="w120"><input type="checkbox" name="node[]" value="9"  flag="cNode" class="checkbox" /></span>
				</li>
							<li title="">
					<span class="w656">管理节点</span>
					<span class="w120"><input type="checkbox" name="node[]" value="10"  flag="cNode" class="checkbox" /></span>
					<span class="w120"><input type="checkbox" name="node[]" value="10"  flag="cNode" class="checkbox" /></span>
				</li>
									</ul>
					<li title="管理员账号管理中心">
				<span class="expand"></span>
				<span class="w670">管理员用户管理</span>
				<span class="w120"><input type="checkbox" name="node[]" value="6"  flag="pNode" class="checkbox" /></span>
				<span class="w120"><input type="checkbox" name="node[]" value="6"  flag="pNode" class="checkbox" /></span>
			</li>
			<ul class="childNode">
										<li title="">
					<span class="w656">新管理员</span>
					<span class="w120"><input type="checkbox" name="node[]" value="14"  flag="cNode" class="checkbox" /></span>
					<span class="w120"><input type="checkbox" name="node[]" value="14"  flag="cNode" class="checkbox" /></span>
				</li>
							<li title="">
					<span class="w656">管理员列表</span>
					<span class="w120"><input type="checkbox" name="node[]" value="15"  flag="cNode" class="checkbox" /></span>
					<span class="w120"><input type="checkbox" name="node[]" value="15"  flag="cNode" class="checkbox" /></span>
				</li>
									</ul>
						</ul>
	</ul>
		<ul class="groupTree">
		<li>
			<span class="expand"></span>
			<span class="w700">用户中心</span>
			<span class="w120"><input type="checkbox" name="group2" value="2" class="checkbox" /></span>
			<span class="w120"><input type="checkbox" name="group2" value="2" class="checkbox" /></span>
		</li>
		<ul class="parentNode">
							<li title="搜索用户信息">
				<span class="expand"></span>
				<span class="w670">用户搜索</span>
				<span class="w120"><input type="checkbox" name="node[]" value="7"  flag="pNode" class="checkbox" /></span>
				<span class="w120"><input type="checkbox" name="node[]" value="7"  flag="pNode" class="checkbox" /></span>
			</li>
			<ul class="childNode">
						</ul>
						</ul>
	</ul>
		<ul class="groupTree">
		<li>
			<span class="expand"></span>
			<span class="w700">核心内容</span>
			<span class="w120"><input type="checkbox" name="group3" value="3" class="checkbox" /></span>
			<span class="w120"><input type="checkbox" name="group3" value="3" class="checkbox" /></span>
		</li>
		<ul class="parentNode">
							<li title="管理网站栏目">
				<span class="expand"></span>
				<span class="w670">栏目管理</span>
				<span class="w120"><input type="checkbox" name="node[]" value="16"  flag="pNode" class="checkbox" /></span>
				<span class="w120"><input type="checkbox" name="node[]" value="16"  flag="pNode" class="checkbox" /></span>
			</li>
			<ul class="childNode">
										<li title="">
					<span class="w656">网站栏目</span>
					<span class="w120"><input type="checkbox" name="node[]" value="17"  flag="cNode" class="checkbox" /></span>
					<span class="w120"><input type="checkbox" name="node[]" value="17"  flag="cNode" class="checkbox" /></span>
				</li>
									</ul>
					<li title="">
				<span class="expand"></span>
				<span class="w670">文档管理</span>
				<span class="w120"><input type="checkbox" name="node[]" value="18"  flag="pNode" class="checkbox" /></span>
				<span class="w120"><input type="checkbox" name="node[]" value="18"  flag="pNode" class="checkbox" /></span>
			</li>
			<ul class="childNode">
										<li title="">
					<span class="w656">发布新文档</span>
					<span class="w120"><input type="checkbox" name="node[]" value="19"  flag="cNode" class="checkbox" /></span>
					<span class="w120"><input type="checkbox" name="node[]" value="19"  flag="cNode" class="checkbox" /></span>
				</li>
									</ul>
						</ul>
	</ul>
		<ul class="groupTree">
		<li>
			<span class="expand"></span>
			<span class="w700">网站更新</span>
			<span class="w120"><input type="checkbox" name="group4" value="4" class="checkbox" /></span>
			<span class="w120"><input type="checkbox" name="group4" value="4" class="checkbox" /></span>
		</li>
		<ul class="parentNode">
							<li title="">
				<span class="expand"></span>
				<span class="w670">自动更新</span>
				<span class="w120"><input type="checkbox" name="node[]" value="20"  flag="pNode" class="checkbox" /></span>
				<span class="w120"><input type="checkbox" name="node[]" value="20"  flag="pNode" class="checkbox" /></span>
			</li>
			<ul class="childNode">
										<li title="">
					<span class="w656">一键更新网站</span>
					<span class="w120"><input type="checkbox" name="node[]" value="21"  flag="cNode" class="checkbox" /></span>
					<span class="w120"><input type="checkbox" name="node[]" value="21"  flag="cNode" class="checkbox" /></span>
				</li>
							<li title="">
					<span class="w656">更新系统缓存</span>
					<span class="w120"><input type="checkbox" name="node[]" value="22"  flag="cNode" class="checkbox" /></span>
					<span class="w120"><input type="checkbox" name="node[]" value="22"  flag="cNode" class="checkbox" /></span>
				</li>
									</ul>
						</ul>
	</ul>
		<ul class="groupTree">
		<li>
			<span class="expand"></span>
			<span class="w700">系统插件</span>
			<span class="w120"><input type="checkbox" name="group5" value="5" class="checkbox" /></span>
			<span class="w120"><input type="checkbox" name="group5" value="5" class="checkbox" /></span>
		</li>
		<ul class="parentNode">
							<li title="">
				<span class="expand"></span>
				<span class="w670">辅助插件</span>
				<span class="w120"><input type="checkbox" name="node[]" value="23"  flag="pNode" class="checkbox" /></span>
				<span class="w120"><input type="checkbox" name="node[]" value="23"  flag="pNode" class="checkbox" /></span>
			</li>
			<ul class="childNode">
										<li title="">
					<span class="w656">文件管理器</span>
					<span class="w120"><input type="checkbox" name="node[]" value="24"  flag="cNode" class="checkbox" /></span>
					<span class="w120"><input type="checkbox" name="node[]" value="24"  flag="cNode" class="checkbox" /></span>
				</li>
									</ul>
						</ul>
	</ul>
		<ul class="groupTree">
		<li>
			<span class="expand"></span>
			<span class="w700">系统设置</span>
			<span class="w120"><input type="checkbox" name="group6" value="6" class="checkbox" /></span>
			<span class="w120"><input type="checkbox" name="group6" value="6" class="checkbox" /></span>
		</li>
		<ul class="parentNode">
							<li title="">
				<span class="expand"></span>
				<span class="w670">基本设置</span>
				<span class="w120"><input type="checkbox" name="node[]" value="25"  flag="pNode" class="checkbox" /></span>
				<span class="w120"><input type="checkbox" name="node[]" value="25"  flag="pNode" class="checkbox" /></span>
			</li>
			<ul class="childNode">
						</ul>
					<li title="">
				<span class="expand"></span>
				<span class="w670">数据库</span>
				<span class="w120"><input type="checkbox" name="node[]" value="26"  flag="pNode" class="checkbox" /></span>
				<span class="w120"><input type="checkbox" name="node[]" value="26"  flag="pNode" class="checkbox" /></span>
			</li>
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
		pNode: $("#nodeTree ul li input[flag=pNode]"),
		cNode: $("#nodeTree ul li input[flag=cNode]")
	}

	//展开收缩 toggle动态
	nodeTree.ehNode = function() {
		nodeTree.expand.click(function (){
			if ($(this).attr("class").indexOf("back")<0) $(this).addClass("back");
			else $(this).removeClass("back");
			$(this).parent().next("ul").slideToggle(300);
		})
	}(window);

	//选中/不选中全部
	nodeTree.check = function(){
		nodeTree.node.click(function (){
			var nodeObj = $(this).parent().next("ul").find("input[type=checkbox]");
			if ($(this).attr("checked")) nodeObj.attr("checked",true);
			else nodeObj.attr("checked",false);
		})

		//选中子节点 默认选中父节点
		nodeTree.cNode.click(function (){
			var nodeObj = $(this).parent().parent().prev("li").find("input[type=checkbox]");
			var groupObj = $(this).parent().parent().parent().prev("li").find("input[type=checkbox]");
			if ($(this).attr("checked")) {
				nodeObj.attr("checked",true);
				groupObj.attr("checked",true);
			}
		})

		//选中父节点 默认选中组节点
		nodeTree.pNode.click(function (){
			var nodeObj = $(this).parent().parent().prev("li").find("input[type=checkbox]");
			if ($(this).attr("checked")) nodeObj.attr("checked",true);
		})
	}(window);

	//选中组
	var checkGroup = function (){
		nodeTree.pNode.each(function (){
			if ($(this).attr("checked"))
				$(this).parent().parent().prev("li").find("input[type=checkbox]").attr("checked",true);
		});
	}

	//选中组
	if (nodeTree.pNode.length > 0) {
		checkGroup();
	}
}
new nodeTreeClass();
</script>
			<li class="formblock bordernone">
				<input type="submit" name="newRoleButton" class="button btnyellow4 mauto" value="完成提交" />
			</li>
		</ul>
	</form>
</div>
</body>
<script type="text/javascript" src="themes/blue/js/jquery.corner.js"></script>
<script type="text/javascript" src="themes/blue/js/public.js"></script>
<script type="text/javascript" src="themes/blue/js/common.js"></script>
<script type="text/javascript" src="themes/blue/js/ajax.js"></script>
</html>