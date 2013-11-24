<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="keywords" content="">
<link type="text/css" rel="stylesheet" href="themes/blue/style/common.css" media="screen">
<link type="text/css" rel="stylesheet" href="themes/blue/style/global.css" media="screen">
<script type="text/javascript" src="public/js/jquery.js"></script>
<link type="text/css" rel="stylesheet" href="public/plugin/colorbox/colorbox.css" media="screen">
<script type="text/javascript" src="public/plugin/colorbox/jquery.colorbox.js"></script>
<title>LaughCMS网站管理系统</title>
<script type="text/javascript">
var JS_APP = '/laugh/admin';
var JS_APPM = 'http://localhost/laugh';
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
	<div class="formtitle"><h5>新增组菜单</h5></div>
	<form name="newform" action="/laugh/admin/index.php?s=Group/saveGroup" method="post" id="ajaxform" class="newform">
		<input type="hidden" name="" />
		<ul class="formbody">
			<li class="formblock">
				<span>菜单名称:</span>
				<input type="text" name="title" value="" class="input" style="width:150px;" />
			</li>
			<li class="formblock bordernone bgf6">
				<input type="submit" name="subut" class="button btnblue2" value="添加" />
			</li>
		</ul>
	</form>
</div>
<div class="captitle"><h5>组菜单列表【菜单数6】</h5></div>
<ul class="table_list_title">
	<li class="table_list_l table_list_l150">组菜单名称</li>
	<li class="table_list_l table_list_l170">创建时间</li>
	<li class="table_list_l table_list_l100">是/否显示</li>
		<li class="table_list_l table_list_l150" accessStatus=1>操作</li>
	</ul>
<div class="contentTableList">
			<ul class="table_list">
		<li class="table_list_l table_list_l150">系统管理</li>
		<li class="table_list_l table_list_l170">2012-03-22 12:28:58</li>
		<li class="table_list_l table_list_l100">显</li>
				<li class="table_list_l table_list_l150" accessStatus=1>
    		<a name="colorboxEdit" href="/laugh/admin/index.php?s=Group/GroupEdit&id=1">修改</a>
			<a delurl="/laugh/admin/index.php?s=Group/GroupDelete" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
		</li>
			</ul>
		<ul class="table_list">
		<li class="table_list_l table_list_l150">会员中心</li>
		<li class="table_list_l table_list_l170">2012-03-22 12:28:58</li>
		<li class="table_list_l table_list_l100">显</li>
				<li class="table_list_l table_list_l150" accessStatus=1>
    		<a name="colorboxEdit" href="/laugh/admin/index.php?s=Group/GroupEdit&id=2">修改</a>
			<a delurl="/laugh/admin/index.php?s=Group/GroupDelete" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
		</li>
			</ul>
		<ul class="table_list">
		<li class="table_list_l table_list_l150">核心内容</li>
		<li class="table_list_l table_list_l170">2012-03-22 12:28:58</li>
		<li class="table_list_l table_list_l100">显</li>
				<li class="table_list_l table_list_l150" accessStatus=1>
    		<a name="colorboxEdit" href="/laugh/admin/index.php?s=Group/GroupEdit&id=3">修改</a>
			<a delurl="/laugh/admin/index.php?s=Group/GroupDelete" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
		</li>
			</ul>
		<ul class="table_list">
		<li class="table_list_l table_list_l150">网站更新</li>
		<li class="table_list_l table_list_l170">2012-03-22 12:28:58</li>
		<li class="table_list_l table_list_l100">显</li>
				<li class="table_list_l table_list_l150" accessStatus=1>
    		<a name="colorboxEdit" href="/laugh/admin/index.php?s=Group/GroupEdit&id=4">修改</a>
			<a delurl="/laugh/admin/index.php?s=Group/GroupDelete" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
		</li>
			</ul>
		<ul class="table_list">
		<li class="table_list_l table_list_l150">系统插件</li>
		<li class="table_list_l table_list_l170">2012-03-22 12:28:58</li>
		<li class="table_list_l table_list_l100">显</li>
				<li class="table_list_l table_list_l150" accessStatus=1>
    		<a name="colorboxEdit" href="/laugh/admin/index.php?s=Group/GroupEdit&id=5">修改</a>
			<a delurl="/laugh/admin/index.php?s=Group/GroupDelete" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
		</li>
			</ul>
		<ul class="table_list">
		<li class="table_list_l table_list_l150">系统设置</li>
		<li class="table_list_l table_list_l170">2012-11-19 17:12:15</li>
		<li class="table_list_l table_list_l100">显</li>
				<li class="table_list_l table_list_l150" accessStatus=1>
    		<a name="colorboxEdit" href="/laugh/admin/index.php?s=Group/GroupEdit&id=6">修改</a>
			<a delurl="/laugh/admin/index.php?s=Group/GroupDelete" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
		</li>
			</ul>
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