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
<div class="captitle"><h5>组节点列表【目前共有1条数据】</h5></div>
<ul class="table_list_title">
	<li class="table_list_l table_list_l120">用户名</li>
	<li class="table_list_l table_list_l150">拥有权限角色</li>
	<li class="table_list_l table_list_l150">创建时间</li>
	<li class="table_list_l table_list_l150">最后登录时间</li>
	<li class="table_list_l table_list_l120">最后登录IP</li>
	<li class="table_list_l table_list_l80">登录次数</li>
		<li class="table_list_l table_list_l80" accessStatus=1>账户状态</li>
	<li class="table_list_l table_list_l150" accessStatus=1>操作</li>
	</ul>
<div class="contentTableList">
			<ul class="table_list role_send_table">
		<li class="table_list_l table_list_l120">admin</li>
		<li class="table_list_l table_list_l150" name="role" roleid="" title=""></li>
		<li class="table_list_l table_list_l150">2011-12-15 08:47:32</li>
		<li class="table_list_l table_list_l150">2013-05-17 15:19:42</li>
		<li class="table_list_l table_list_l120">127.0.0.1</li>
		<li class="table_list_l table_list_l80">127</li>
				<li class="table_list_l table_list_l80" accessStatus=1>
							启用
					</li>
		<li class="table_list_l table_list_l150" accessStatus=1>
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