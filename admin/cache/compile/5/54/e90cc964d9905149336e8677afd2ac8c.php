<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="keywords" content="">
<link type="text/css" rel="stylesheet" href="themes/blue/style/common.css" media="screen">
<link type="text/css" rel="stylesheet" href="themes/blue/style/global.css" media="screen">
<script type="text/javascript" src="public/js/jquery.js"></script>
<script type="text/javascript" src="themes/blue/js/div_window.js"></script>
<link type="text/css" rel="stylesheet" href="public/plugin/colorbox/colorbox.css" media="screen">
<script type="text/javascript" src="public/plugin/colorbox/jquery.colorbox.js"></script>
<title>LaughCMS网站管理系统</title>
<script type="text/javascript">
var JS_APP = '/laugh/admin';
var JS_APPM = 'http://localhost:82/laugh';
function colorboxAjaxHtml(url) {
	$.post(url,{},function (data){
		$.colorbox({ html: data });
	});
}
function colorboxHtml(url) {
	$.colorbox({ href: url });
}
function colorboxImage(url) {
	$.colorbox({ href: url });
}
</script>
</head>

<body>
<style type="text/css">
	body { background: none; }
</style>
<div id="control">
	<div id="controlContent">
<div class="formContainer" accessStatus=1>
	<div class="formtitle"><h5>新角色表单</h5></div>
	<form name="newform" action="/laugh/admin/index.php?s=Role/saveRole" method="post" method="post" id="ajaxform" class="newform">
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
				<span>状态:</span>
				<div class="item_list fleft">
					<label><input type="radio" name="status" value="1" class="radio" checked="checked" />启用</label>
					<label><input type="radio" name="status" value="0" class="radio"  />禁用</label>
				</div>
			</li>
			<li class="formblock">
				<span>是否配置该角色的功能节点:</span>
				<div class="item_list fleft">
					<label><input type="radio" name="nodeAccess" isSetNode=1 class="radio" />是</label>
				</div>
			</li>
			<li style="height:auto;overflow:hidden;">
				<link rel="stylesheet" type="text/css" href="themes/green/style/nodeTree.css" media="screen" />
<div id="nodeTree">
	<div id="notice">*注意操作权限包含浏览权限 如果两个都勾选则只赋予操作权限</div>
	<div class="nodeTreeTitle">
		<span class="titleNode w726">节点名称</span>
		<span class="titleAccess w120">浏览权限</span>
		<span class="titleManage w120">操作权限</span>
	</div>
			<div ul=1 class="ul groupTree">
		<div class="li" li=1>
			<span class="expand"></span>
			<span class="w700">系统管理</span>
			<span class="w120"><input type="checkbox" name="group1" value="1" flag="groupNode1" class="checkbox" /></span>
			<span class="w120"><input type="checkbox" name="group1" value="1" flag="groupNode2" class="checkbox" /></span>
		</div>
		<div class="ul parentNode" ul=1>
							<div title="管理角色信息 可编辑角色权限/改变用户的角色" li=1 class="li">
				<span class="expand"></span>
				<span class="w670">角色管理</span>
				<span class="w120"><input type="checkbox" name="node[]" value="1,0"  node="pNode" flag="pNode1" class="checkbox" /></span>
				<span class="w120"><input type="checkbox" name="node[]" value="1,1"  node="pNode" flag="pNode2" class="checkbox" /></span>
			</div>
			<div class="ul childNode" ul=1>
										<div flag=1 title="" li=1 class="li">
					<span class="w656">添加角色</span>
					<span class="w120"><input type="checkbox" name="node[]" value="2,0"  node="cNode" flag="cNode1" class="checkbox" /></span>
					<span class="w120"><input type="checkbox" name="node[]" value="2,1"  node="cNode" flag="cNode2" class="checkbox" /></span>
				</div>
							<div flag=1 title="" li=1 class="li">
					<span class="w656">管理角色</span>
					<span class="w120"><input type="checkbox" name="node[]" value="3,0"  node="cNode" flag="cNode1" class="checkbox" /></span>
					<span class="w120"><input type="checkbox" name="node[]" value="3,1"  node="cNode" flag="cNode2" class="checkbox" /></span>
				</div>
									</div>
					<div title="" li=1 class="li">
				<span class="expand"></span>
				<span class="w670">日志管理</span>
				<span class="w120"><input type="checkbox" name="node[]" value="4,0"  node="pNode" flag="pNode1" class="checkbox" /></span>
				<span class="w120"><input type="checkbox" name="node[]" value="4,1"  node="pNode" flag="pNode2" class="checkbox" /></span>
			</div>
			<div class="ul childNode" ul=1>
										<div flag=1 title="" li=1 class="li">
					<span class="w656">日志列表</span>
					<span class="w120"><input type="checkbox" name="node[]" value="5,0"  node="cNode" flag="cNode1" class="checkbox" /></span>
					<span class="w120"><input type="checkbox" name="node[]" value="5,1"  node="cNode" flag="cNode2" class="checkbox" /></span>
				</div>
									</div>
					<div title="" li=1 class="li">
				<span class="expand"></span>
				<span class="w670">组管理</span>
				<span class="w120"><input type="checkbox" name="node[]" value="6,0"  node="pNode" flag="pNode1" class="checkbox" /></span>
				<span class="w120"><input type="checkbox" name="node[]" value="6,1"  node="pNode" flag="pNode2" class="checkbox" /></span>
			</div>
			<div class="ul childNode" ul=1>
										<div flag=1 title="" li=1 class="li">
					<span class="w656">管理组</span>
					<span class="w120"><input type="checkbox" name="node[]" value="7,0"  node="cNode" flag="cNode1" class="checkbox" /></span>
					<span class="w120"><input type="checkbox" name="node[]" value="7,1"  node="cNode" flag="cNode2" class="checkbox" /></span>
				</div>
									</div>
					<div title="" li=1 class="li">
				<span class="expand"></span>
				<span class="w670">节点管理</span>
				<span class="w120"><input type="checkbox" name="node[]" value="8,0"  node="pNode" flag="pNode1" class="checkbox" /></span>
				<span class="w120"><input type="checkbox" name="node[]" value="8,1"  node="pNode" flag="pNode2" class="checkbox" /></span>
			</div>
			<div class="ul childNode" ul=1>
										<div flag=1 title="" li=1 class="li">
					<span class="w656">添加节点</span>
					<span class="w120"><input type="checkbox" name="node[]" value="9,0"  node="cNode" flag="cNode1" class="checkbox" /></span>
					<span class="w120"><input type="checkbox" name="node[]" value="9,1"  node="cNode" flag="cNode2" class="checkbox" /></span>
				</div>
							<div flag=1 title="" li=1 class="li">
					<span class="w656">管理节点</span>
					<span class="w120"><input type="checkbox" name="node[]" value="10,0"  node="cNode" flag="cNode1" class="checkbox" /></span>
					<span class="w120"><input type="checkbox" name="node[]" value="10,1"  node="cNode" flag="cNode2" class="checkbox" /></span>
				</div>
									</div>
					<div title="管理员账号管理中心" li=1 class="li">
				<span class="expand"></span>
				<span class="w670">管理员用户管理</span>
				<span class="w120"><input type="checkbox" name="node[]" value="11,0"  node="pNode" flag="pNode1" class="checkbox" /></span>
				<span class="w120"><input type="checkbox" name="node[]" value="11,1"  node="pNode" flag="pNode2" class="checkbox" /></span>
			</div>
			<div class="ul childNode" ul=1>
										<div flag=1 title="" li=1 class="li">
					<span class="w656">新管理员</span>
					<span class="w120"><input type="checkbox" name="node[]" value="12,0"  node="cNode" flag="cNode1" class="checkbox" /></span>
					<span class="w120"><input type="checkbox" name="node[]" value="12,1"  node="cNode" flag="cNode2" class="checkbox" /></span>
				</div>
							<div flag=1 title="" li=1 class="li">
					<span class="w656">管理员列表</span>
					<span class="w120"><input type="checkbox" name="node[]" value="13,0"  node="cNode" flag="cNode1" class="checkbox" /></span>
					<span class="w120"><input type="checkbox" name="node[]" value="13,1"  node="cNode" flag="cNode2" class="checkbox" /></span>
				</div>
									</div>
						</div>
	</div>
		<div ul=1 class="ul groupTree">
		<div class="li" li=1>
			<span class="expand"></span>
			<span class="w700">会员中心</span>
			<span class="w120"><input type="checkbox" name="group2" value="2" flag="groupNode1" class="checkbox" /></span>
			<span class="w120"><input type="checkbox" name="group2" value="2" flag="groupNode2" class="checkbox" /></span>
		</div>
		<div class="ul parentNode" ul=1>
							<div title="" li=1 class="li">
				<span class="expand"></span>
				<span class="w670">会员管理</span>
				<span class="w120"><input type="checkbox" name="node[]" value="14,0"  node="pNode" flag="pNode1" class="checkbox" /></span>
				<span class="w120"><input type="checkbox" name="node[]" value="14,1"  node="pNode" flag="pNode2" class="checkbox" /></span>
			</div>
			<div class="ul childNode" ul=1>
										<div flag=1 title="" li=1 class="li">
					<span class="w656">会员列表</span>
					<span class="w120"><input type="checkbox" name="node[]" value="15,0"  node="cNode" flag="cNode1" class="checkbox" /></span>
					<span class="w120"><input type="checkbox" name="node[]" value="15,1"  node="cNode" flag="cNode2" class="checkbox" /></span>
				</div>
							<div flag=1 title="" li=1 class="li">
					<span class="w656">会员级别</span>
					<span class="w120"><input type="checkbox" name="node[]" value="16,0"  node="cNode" flag="cNode1" class="checkbox" /></span>
					<span class="w120"><input type="checkbox" name="node[]" value="16,1"  node="cNode" flag="cNode2" class="checkbox" /></span>
				</div>
									</div>
						</div>
	</div>
		<div ul=1 class="ul groupTree">
		<div class="li" li=1>
			<span class="expand"></span>
			<span class="w700">核心内容</span>
			<span class="w120"><input type="checkbox" name="group3" value="3" flag="groupNode1" class="checkbox" /></span>
			<span class="w120"><input type="checkbox" name="group3" value="3" flag="groupNode2" class="checkbox" /></span>
		</div>
		<div class="ul parentNode" ul=1>
							<div title="管理网站栏目" li=1 class="li">
				<span class="expand"></span>
				<span class="w670">栏目管理</span>
				<span class="w120"><input type="checkbox" name="node[]" value="17,0"  node="pNode" flag="pNode1" class="checkbox" /></span>
				<span class="w120"><input type="checkbox" name="node[]" value="17,1"  node="pNode" flag="pNode2" class="checkbox" /></span>
			</div>
			<div class="ul childNode" ul=1>
										<div flag=1 title="" li=1 class="li">
					<span class="w656">添加栏目</span>
					<span class="w120"><input type="checkbox" name="node[]" value="18,0"  node="cNode" flag="cNode1" class="checkbox" /></span>
					<span class="w120"><input type="checkbox" name="node[]" value="18,1"  node="cNode" flag="cNode2" class="checkbox" /></span>
				</div>
							<div flag=1 title="" li=1 class="li">
					<span class="w656">网站栏目</span>
					<span class="w120"><input type="checkbox" name="node[]" value="19,0"  node="cNode" flag="cNode1" class="checkbox" /></span>
					<span class="w120"><input type="checkbox" name="node[]" value="19,1"  node="cNode" flag="cNode2" class="checkbox" /></span>
				</div>
									</div>
					<div title="" li=1 class="li">
				<span class="expand"></span>
				<span class="w670">内容管理</span>
				<span class="w120"><input type="checkbox" name="node[]" value="20,0"  node="pNode" flag="pNode1" class="checkbox" /></span>
				<span class="w120"><input type="checkbox" name="node[]" value="20,1"  node="pNode" flag="pNode2" class="checkbox" /></span>
			</div>
			<div class="ul childNode" ul=1>
										<div flag=1 title="" li=1 class="li">
					<span class="w656">文章管理</span>
					<span class="w120"><input type="checkbox" name="node[]" value="21,0"  node="cNode" flag="cNode1" class="checkbox" /></span>
					<span class="w120"><input type="checkbox" name="node[]" value="21,1"  node="cNode" flag="cNode2" class="checkbox" /></span>
				</div>
							<div flag=1 title="" li=1 class="li">
					<span class="w656">产品管理</span>
					<span class="w120"><input type="checkbox" name="node[]" value="22,0"  node="cNode" flag="cNode1" class="checkbox" /></span>
					<span class="w120"><input type="checkbox" name="node[]" value="22,1"  node="cNode" flag="cNode2" class="checkbox" /></span>
				</div>
							<div flag=1 title="" li=1 class="li">
					<span class="w656">图集管理</span>
					<span class="w120"><input type="checkbox" name="node[]" value="23,0"  node="cNode" flag="cNode1" class="checkbox" /></span>
					<span class="w120"><input type="checkbox" name="node[]" value="23,1"  node="cNode" flag="cNode2" class="checkbox" /></span>
				</div>
							<div flag=1 title="" li=1 class="li">
					<span class="w656">下载管理</span>
					<span class="w120"><input type="checkbox" name="node[]" value="47,0"  node="cNode" flag="cNode1" class="checkbox" /></span>
					<span class="w120"><input type="checkbox" name="node[]" value="47,1"  node="cNode" flag="cNode2" class="checkbox" /></span>
				</div>
							<div flag=1 title="" li=1 class="li">
					<span class="w656">专题管理</span>
					<span class="w120"><input type="checkbox" name="node[]" value="49,0"  node="cNode" flag="cNode1" class="checkbox" /></span>
					<span class="w120"><input type="checkbox" name="node[]" value="49,1"  node="cNode" flag="cNode2" class="checkbox" /></span>
				</div>
							<div flag=1 title="" li=1 class="li">
					<span class="w656">软件管理</span>
					<span class="w120"><input type="checkbox" name="node[]" value="50,0"  node="cNode" flag="cNode1" class="checkbox" /></span>
					<span class="w120"><input type="checkbox" name="node[]" value="50,1"  node="cNode" flag="cNode2" class="checkbox" /></span>
				</div>
									</div>
					<div title="" li=1 class="li">
				<span class="expand"></span>
				<span class="w670">模型管理</span>
				<span class="w120"><input type="checkbox" name="node[]" value="24,0"  node="pNode" flag="pNode1" class="checkbox" /></span>
				<span class="w120"><input type="checkbox" name="node[]" value="24,1"  node="pNode" flag="pNode2" class="checkbox" /></span>
			</div>
			<div class="ul childNode" ul=1>
										<div flag=1 title="" li=1 class="li">
					<span class="w656">单页模型</span>
					<span class="w120"><input type="checkbox" name="node[]" value="25,0"  node="cNode" flag="cNode1" class="checkbox" /></span>
					<span class="w120"><input type="checkbox" name="node[]" value="25,1"  node="cNode" flag="cNode2" class="checkbox" /></span>
				</div>
							<div flag=1 title="" li=1 class="li">
					<span class="w656">内容模型</span>
					<span class="w120"><input type="checkbox" name="node[]" value="26,0"  node="cNode" flag="cNode1" class="checkbox" /></span>
					<span class="w120"><input type="checkbox" name="node[]" value="26,1"  node="cNode" flag="cNode2" class="checkbox" /></span>
				</div>
									</div>
					<div title="" li=1 class="li">
				<span class="expand"></span>
				<span class="w670">图片管理</span>
				<span class="w120"><input type="checkbox" name="node[]" value="45,0"  node="pNode" flag="pNode1" class="checkbox" /></span>
				<span class="w120"><input type="checkbox" name="node[]" value="45,1"  node="pNode" flag="pNode2" class="checkbox" /></span>
			</div>
			<div class="ul childNode" ul=1>
										<div flag=1 title="" li=1 class="li">
					<span class="w656">首页轮播图片</span>
					<span class="w120"><input type="checkbox" name="node[]" value="46,0"  node="cNode" flag="cNode1" class="checkbox" /></span>
					<span class="w120"><input type="checkbox" name="node[]" value="46,1"  node="cNode" flag="cNode2" class="checkbox" /></span>
				</div>
									</div>
						</div>
	</div>
		<div ul=1 class="ul groupTree">
		<div class="li" li=1>
			<span class="expand"></span>
			<span class="w700">网站更新</span>
			<span class="w120"><input type="checkbox" name="group4" value="4" flag="groupNode1" class="checkbox" /></span>
			<span class="w120"><input type="checkbox" name="group4" value="4" flag="groupNode2" class="checkbox" /></span>
		</div>
		<div class="ul parentNode" ul=1>
							<div title="" li=1 class="li">
				<span class="expand"></span>
				<span class="w670">自动更新</span>
				<span class="w120"><input type="checkbox" name="node[]" value="27,0"  node="pNode" flag="pNode1" class="checkbox" /></span>
				<span class="w120"><input type="checkbox" name="node[]" value="27,1"  node="pNode" flag="pNode2" class="checkbox" /></span>
			</div>
			<div class="ul childNode" ul=1>
										<div flag=1 title="" li=1 class="li">
					<span class="w656">一键更新网站</span>
					<span class="w120"><input type="checkbox" name="node[]" value="28,0"  node="cNode" flag="cNode1" class="checkbox" /></span>
					<span class="w120"><input type="checkbox" name="node[]" value="28,1"  node="cNode" flag="cNode2" class="checkbox" /></span>
				</div>
							<div flag=1 title="" li=1 class="li">
					<span class="w656">更新系统缓存</span>
					<span class="w120"><input type="checkbox" name="node[]" value="29,0"  node="cNode" flag="cNode1" class="checkbox" /></span>
					<span class="w120"><input type="checkbox" name="node[]" value="29,1"  node="cNode" flag="cNode2" class="checkbox" /></span>
				</div>
									</div>
						</div>
	</div>
		<div ul=1 class="ul groupTree">
		<div class="li" li=1>
			<span class="expand"></span>
			<span class="w700">系统插件</span>
			<span class="w120"><input type="checkbox" name="group5" value="5" flag="groupNode1" class="checkbox" /></span>
			<span class="w120"><input type="checkbox" name="group5" value="5" flag="groupNode2" class="checkbox" /></span>
		</div>
		<div class="ul parentNode" ul=1>
							<div title="" li=1 class="li">
				<span class="expand"></span>
				<span class="w670">常规插件</span>
				<span class="w120"><input type="checkbox" name="node[]" value="30,0"  node="pNode" flag="pNode1" class="checkbox" /></span>
				<span class="w120"><input type="checkbox" name="node[]" value="30,1"  node="pNode" flag="pNode2" class="checkbox" /></span>
			</div>
			<div class="ul childNode" ul=1>
										<div flag=1 title="" li=1 class="li">
					<span class="w656">留言板</span>
					<span class="w120"><input type="checkbox" name="node[]" value="31,0"  node="cNode" flag="cNode1" class="checkbox" /></span>
					<span class="w120"><input type="checkbox" name="node[]" value="31,1"  node="cNode" flag="cNode2" class="checkbox" /></span>
				</div>
							<div flag=1 title="" li=1 class="li">
					<span class="w656">人才招聘</span>
					<span class="w120"><input type="checkbox" name="node[]" value="32,0"  node="cNode" flag="cNode1" class="checkbox" /></span>
					<span class="w120"><input type="checkbox" name="node[]" value="32,1"  node="cNode" flag="cNode2" class="checkbox" /></span>
				</div>
							<div flag=1 title="" li=1 class="li">
					<span class="w656">友情链接</span>
					<span class="w120"><input type="checkbox" name="node[]" value="33,0"  node="cNode" flag="cNode1" class="checkbox" /></span>
					<span class="w120"><input type="checkbox" name="node[]" value="33,1"  node="cNode" flag="cNode2" class="checkbox" /></span>
				</div>
							<div flag=1 title="" li=1 class="li">
					<span class="w656">文件管理器</span>
					<span class="w120"><input type="checkbox" name="node[]" value="48,0"  node="cNode" flag="cNode1" class="checkbox" /></span>
					<span class="w120"><input type="checkbox" name="node[]" value="48,1"  node="cNode" flag="cNode2" class="checkbox" /></span>
				</div>
									</div>
					<div title="" li=1 class="li">
				<span class="expand"></span>
				<span class="w670">广告管理</span>
				<span class="w120"><input type="checkbox" name="node[]" value="42,0"  node="pNode" flag="pNode1" class="checkbox" /></span>
				<span class="w120"><input type="checkbox" name="node[]" value="42,1"  node="pNode" flag="pNode2" class="checkbox" /></span>
			</div>
			<div class="ul childNode" ul=1>
										<div flag=1 title="" li=1 class="li">
					<span class="w656">顶部广告</span>
					<span class="w120"><input type="checkbox" name="node[]" value="43,0"  node="cNode" flag="cNode1" class="checkbox" /></span>
					<span class="w120"><input type="checkbox" name="node[]" value="43,1"  node="cNode" flag="cNode2" class="checkbox" /></span>
				</div>
							<div flag=1 title="" li=1 class="li">
					<span class="w656">首页中部banner</span>
					<span class="w120"><input type="checkbox" name="node[]" value="44,0"  node="cNode" flag="cNode1" class="checkbox" /></span>
					<span class="w120"><input type="checkbox" name="node[]" value="44,1"  node="cNode" flag="cNode2" class="checkbox" /></span>
				</div>
									</div>
						</div>
	</div>
		<div ul=1 class="ul groupTree">
		<div class="li" li=1>
			<span class="expand"></span>
			<span class="w700">系统设置</span>
			<span class="w120"><input type="checkbox" name="group6" value="6" flag="groupNode1" class="checkbox" /></span>
			<span class="w120"><input type="checkbox" name="group6" value="6" flag="groupNode2" class="checkbox" /></span>
		</div>
		<div class="ul parentNode" ul=1>
							<div title="" li=1 class="li">
				<span class="expand"></span>
				<span class="w670">基本设置</span>
				<span class="w120"><input type="checkbox" name="node[]" value="34,0"  node="pNode" flag="pNode1" class="checkbox" /></span>
				<span class="w120"><input type="checkbox" name="node[]" value="34,1"  node="pNode" flag="pNode2" class="checkbox" /></span>
			</div>
			<div class="ul childNode" ul=1>
										<div flag=1 title="" li=1 class="li">
					<span class="w656">系统基本参数</span>
					<span class="w120"><input type="checkbox" name="node[]" value="35,0"  node="cNode" flag="cNode1" class="checkbox" /></span>
					<span class="w120"><input type="checkbox" name="node[]" value="35,1"  node="cNode" flag="cNode2" class="checkbox" /></span>
				</div>
							<div flag=1 title="" li=1 class="li">
					<span class="w656">系统日志管理</span>
					<span class="w120"><input type="checkbox" name="node[]" value="36,0"  node="cNode" flag="cNode1" class="checkbox" /></span>
					<span class="w120"><input type="checkbox" name="node[]" value="36,1"  node="cNode" flag="cNode2" class="checkbox" /></span>
				</div>
							<div flag=1 title="" li=1 class="li">
					<span class="w656">图片水印设置</span>
					<span class="w120"><input type="checkbox" name="node[]" value="37,0"  node="cNode" flag="cNode1" class="checkbox" /></span>
					<span class="w120"><input type="checkbox" name="node[]" value="37,1"  node="cNode" flag="cNode2" class="checkbox" /></span>
				</div>
									</div>
					<div title="" li=1 class="li">
				<span class="expand"></span>
				<span class="w670">数据库管理</span>
				<span class="w120"><input type="checkbox" name="node[]" value="38,0"  node="pNode" flag="pNode1" class="checkbox" /></span>
				<span class="w120"><input type="checkbox" name="node[]" value="38,1"  node="pNode" flag="pNode2" class="checkbox" /></span>
			</div>
			<div class="ul childNode" ul=1>
										<div flag=1 title="" li=1 class="li">
					<span class="w656">数据库备份</span>
					<span class="w120"><input type="checkbox" name="node[]" value="39,0"  node="cNode" flag="cNode1" class="checkbox" /></span>
					<span class="w120"><input type="checkbox" name="node[]" value="39,1"  node="cNode" flag="cNode2" class="checkbox" /></span>
				</div>
							<div flag=1 title="" li=1 class="li">
					<span class="w656">数据库还原</span>
					<span class="w120"><input type="checkbox" name="node[]" value="40,0"  node="cNode" flag="cNode1" class="checkbox" /></span>
					<span class="w120"><input type="checkbox" name="node[]" value="40,1"  node="cNode" flag="cNode2" class="checkbox" /></span>
				</div>
							<div flag=1 title="" li=1 class="li">
					<span class="w656">SQL命令行工具</span>
					<span class="w120"><input type="checkbox" name="node[]" value="41,0"  node="cNode" flag="cNode1" class="checkbox" /></span>
					<span class="w120"><input type="checkbox" name="node[]" value="41,1"  node="cNode" flag="cNode2" class="checkbox" /></span>
				</div>
									</div>
						</div>
	</div>
		</div>
<script type="text/javascript">
var nodeTreeClass = function(){
	//定义对象属性
	var nodeTree = {
		expand: $("#nodeTree div[ul=1] div[li=1] span.expand"),
		node: $("#nodeTree div[ul=1] div[li=1] input[type=checkbox]"),
		pNode: $("#nodeTree div[ul=1] div[li=1] input[node=pNode]"),
		cNode: $("#nodeTree div[ul=1] div[li=1] input[node=cNode]")
	}

	//展开收缩 toggle动态
	nodeTree.ehNode = function() {
		nodeTree.expand.click(function (){
			if ($(this).attr("class").indexOf("back")<0) $(this).addClass("back");
			else $(this).removeClass("back");
			$(this).parent().next("div[ul=1]").slideToggle(300);
		})
	}(window);

	//选中/不选中全部
	nodeTree.check = function(){
		nodeTree.node.click(function (){
			var nodeObj;
			if ($(this).attr("flag") == "groupNode1") {
				var nodeObj = $(this).parent().parent().next("div[ul=1]").find("input[flag=pNode1],input[flag=cNode1]");
			} else if ($(this).attr("flag") == "groupNode2") {
				var nodeObj = $(this).parent().parent().next("div[ul=1]").find("input[flag=pNode2],input[flag=cNode2]");
			} else if ($(this).attr("flag") == "pNode1") {
				var nodeObj = $(this).parent().parent().next("div[ul=1]").find("input[flag=cNode1]");
			} else if ($(this).attr("flag") == "pNode2") {
				var nodeObj = $(this).parent().parent().next("div[ul=1]").find("input[flag=cNode2]");
			}
			if (nodeObj) {
				if ($(this).attr("checked")) nodeObj.attr("checked",true);
				else nodeObj.attr("checked",false);
			}
		})

		//选中子节点 默认选中父节点
		nodeTree.cNode.click(function (){
			if ($(this).attr("flag") == "cNode1") {
				var nodeObj = $(this).parent().parent().parent().prev("div[li=1]").find("input[flag=pNode1]");
				var groupObj = $(this).parent().parent().parent().parent().prev("div[li=1]").find("input[flag=groupNode1]");
			} else if ($(this).attr("flag") == "cNode2") {
				var nodeObj = $(this).parent().parent().parent().prev("div[li=1]").find("input[flag=pNode2]");
				var groupObj = $(this).parent().parent().parent().parent().prev("div[li=1]").find("input[flag=groupNode2]");
			}
			if ($(this).attr("checked")) {
				nodeObj.attr("checked",true);
				groupObj.attr("checked",true);
			}
		})

		//选中父节点 默认选中组节点
		nodeTree.pNode.click(function (){
			if ($(this).attr("flag") == "pNode1") {
				var nodeObj = $(this).parent().parent().parent().prev("div[li=1]").find("input[flag=groupNode1]");
			} else if ($(this).attr("flag") == "pNode2") {
				var nodeObj = $(this).parent().parent().parent().prev("div[li=1]").find("input[flag=groupNode2]");
			}
			if ($(this).attr("checked")) nodeObj.attr("checked",true);
		})
	}(window);

	//选中组
	var checkGroup = function (){
		nodeTree.pNode.each(function (){
			if ($(this).attr("checked")) {
				if ($(this).attr("flag") == "pNode1") {
					$(this).parent().parent().parent().prev("div[li=1]").find("input[flag=groupNode1]").attr("checked",true);
				} else if ($(this).attr("flag") == "pNode2") {
					$(this).parent().parent().parent().prev("div[li=1]").find("input[flag=groupNode2]").attr("checked",true);
				}
			}
		});
	}

	//选中组
	if (nodeTree.pNode.length > 0) {
		if ($("input[name=id]").val()>0) {
			$("input[isSetNode=1]").click();
			$("#nodeTree").slideDown(300);
		}
		checkGroup();
		$("#nodeTree ul li").each(function (){
			if (!$(this).next().attr("flag"))
				$(this).css("border-bottom",0);
		});

	}
}
new nodeTreeClass();
</script>
			</li>
			<li class="formblock bordernone">
				<input type="submit" name="newRoleButton" class="button btngreen4 mauto" value="完成提交" />
			</li>
		</ul>
	</form>
</div>
    </div>
</div>
</body>
<script type="text/javascript" src="themes/blue/js/jquery.corner.js"></script>
<script type="text/javascript" src="themes/blue/js/public.js"></script>
<script type="text/javascript" src="themes/blue/js/common.js"></script>
<script type="text/javascript" src="themes/blue/js/ajax.js"></script>
<script type="text/javascript" src="public/js/jquery.idTabs.min.js"></script>
</html>