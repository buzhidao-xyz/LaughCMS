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
var JS_APP = '/laugh/admin';
</script>
</head>

<body>
<div id="control">
	<ul class="controlTop">
		<li class="controlLeftTop"></li>
		<li class="controlRightTop"></li>
	</ul>
	<div id="controlContent">
<div class="captitle"><h5>角色列表 【目前共有2条数据】</h5></div>
<ul class="table_list_title">
	<li class="table_list_l table_list_l150">角色名</li>
	<li class="table_list_l table_list_l200">描述</li>
	<li class="table_list_l table_list_l150">创建时间</li>
	<li class="table_list_l table_list_l100">状态</li>
	<li class="table_list_l table_list_l150">操作</li>
</ul>
<div class="contentTableList">
             <ul class="table_list">
		<li class="table_list_l table_list_l150">超级管理员</li>
		<li class="table_list_l table_list_l200" title="超级管理员 具有全站管理权限">超级管理员 具有全站管理权限</li>
    	<li class="table_list_l table_list_l150">2012-03-22 12:47:51</li>
    	<li class="table_list_l table_list_l100">
    		<a delurl="/laugh/admin/index.php?s=Role/upRoleStatus&id=1&status=0" href="javascript:;" name="del" msg="确定禁用吗？">启用</a>
    	</li>
    	<li class="table_list_l table_list_l150">
    		<a href="/laugh/admin/index.php?s=Role/newRole&id=1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Role/deleteRole&id=1" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">管理员</li>
		<li class="table_list_l table_list_l200" title="普通管理员 管理某些模块">普通管理员 管理某些模块</li>
    	<li class="table_list_l table_list_l150">2012-03-22 12:47:51</li>
    	<li class="table_list_l table_list_l100">
    		<a delurl="/laugh/admin/index.php?s=Role/upRoleStatus&id=2&status=0" href="javascript:;" name="del" msg="确定禁用吗？">启用</a>
    	</li>
    	<li class="table_list_l table_list_l150">
    		<a href="/laugh/admin/index.php?s=Role/newRole&id=2">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Role/deleteRole&id=2" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    </ul>
        </div>

    </div>
    <ul class="controlBottom">
		<li class="controlLeftBottom"></li>
		<li class="controlRightBottom"></li>
	</ul>
</div>
</body>
<script type="text/javascript" src="themes/blue/js/jquery.corner.js"></script>
<script type="text/javascript" src="themes/blue/js/public.js"></script>
<script type="text/javascript" src="themes/blue/js/common.js"></script>
<script type="text/javascript" src="themes/blue/js/ajax.js"></script>
</html>