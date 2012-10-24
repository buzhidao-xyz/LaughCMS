<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="keywords" content="">
<link type="text/css" rel="stylesheet" href="themes/default/style/common.css" media="screen">
<link type="text/css" rel="stylesheet" href="themes/default/style/base.css" media="screen">
<link type="text/css" rel="stylesheet" href="themes/default/style/global.css" media="screen">
<script type="text/javascript" src="themes/default/js/jquery.js"></script>
<title>管理中心</title>
<script type="text/javascript">
var JS_APP = '/laugh/admin';
</script>
</head>

<body>
<div class="menu">
    <ul>
        		<li class="menulist">
			<div><a target="main" hidefocus="true" href="javascript:;" class="">注册与访问控制</a></div>
					</li>
        		<li class="menulist">
			<div><a target="main" hidefocus="true" href="javascript:;" class="">角色管理</a></div>
					</li>
        		<li class="menulist">
			<div><a target="main" hidefocus="true" href="javascript:;" class="">日志管理</a></div>
					</li>
        		<li class="menulist">
			<div><a target="main" hidefocus="true" href="javascript:;" class="">组管理</a></div>
						<ul class="menusub">
							<li><a target="main" hidefocus="true" href="/laugh/admin/?s=Group/manageGroup" class="">管理组</a></li>
						</ul>
					</li>
        		<li class="menulist">
			<div><a target="main" hidefocus="true" href="javascript:;" class="">节点管理</a></div>
						<ul class="menusub">
							<li><a target="main" hidefocus="true" href="/laugh/admin/?s=Node/newNode" class="">添加节点</a></li>
							<li><a target="main" hidefocus="true" href="/laugh/admin/?s=Node/manageNode" class="">管理节点</a></li>
						</ul>
					</li>
        		<li class="menulist">
			<div><a target="main" hidefocus="true" href="javascript:;" class="">管理员用户管理</a></div>
					</li>
            </ul>
</div>
<script language="javascript">
$(document).ready(function() {
	// $('.menu ul li a:eq(0)').attr('class', 'tabon');
});
</script>
</body>
<script type="text/javascript" src="themes/default/js/public.js"></script>
<script type="text/javascript" src="themes/default/js/div_window.js"></script>
<script type="text/javascript" src="themes/default/js/common.js"></script>
<script type="text/javascript" src="themes/default/js/ajax.js"></script>
</html>