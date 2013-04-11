<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="keywords" content="">
<link type="text/css" rel="stylesheet" href="themes/green/style/common.css" media="screen">
<link type="text/css" rel="stylesheet" href="themes/green/style/global.css" media="screen">
<script type="text/javascript" src="public/js/jquery.js"></script>
<script type="text/javascript" src="themes/green/js/div_window.js"></script>
<!-- <script type="text/javascript" src="themes/blue/js/PIE.js"></script> -->
<title>管理中心</title>
<script type="text/javascript">
var JS_APP = '/laugh/admin';
var JS_APPM = 'http://localhost:82/laugh';
</script>
</head>

<body>
<style type="text/css">
	body { background: none; }
</style>
<div id="control">
	<ul class="controlTop">
		<li class="controlLeftTop"></li>
		<li class="controlRightTop"></li>
	</ul>
	<div id="controlContent">
<div class="opTop">
	<a href="/laugh/admin/index.php?s=CTModel/addColumnModel">新增模型</a>
	<a href="/laugh/admin/index.php?s=CTModel/ColumnModel">模型管理</a>
</div>
<div class="captitle"><h5>内容模型列表【目前共有9条数据】</h5></div>
<ul class="table_list_title">
	<li class="table_list_l table_list_l120">模型名称</li>
	<li class="table_list_l table_list_l120">模型表名</li>
	<li class="table_list_l table_list_l100">控制器</li>
	<li class="table_list_l table_list_l300">模型描述</li>
		<li class="table_list_l table_list_l170" accessStatus=1>管理操作</li>
	</ul>
<div class="contentTableList">
			<ul class="table_list">
		<li class="table_list_l table_list_l120">文章模型</li>
		<li class="table_list_l table_list_l120">article</li>
		<li class="table_list_l table_list_l100">Article</li>
		<li class="table_list_l table_list_l300">文章模型</li>
				<li class="table_list_l table_list_l170" accessStatus=1>
			<a href="/laugh/admin/index.php?s=CTModel/ModelField">模型字段</a>
			<a href="/laugh/admin/index.php?s=CTModel/UpdateModel">修改</a>
			<a href="/laugh/admin/index.php?s=CTModel/UpdateModelStatus&status=0">已启用</a>
			<a href="/laugh/admin/index.php?s=CTModel/DeleteModel">删除</a>
		</li>
			</ul>
		<ul class="table_list">
		<li class="table_list_l table_list_l120">图片模型</li>
		<li class="table_list_l table_list_l120">image</li>
		<li class="table_list_l table_list_l100">Image</li>
		<li class="table_list_l table_list_l300">图集模型</li>
				<li class="table_list_l table_list_l170" accessStatus=1>
			<a href="/laugh/admin/index.php?s=CTModel/ModelField">模型字段</a>
			<a href="/laugh/admin/index.php?s=CTModel/UpdateModel">修改</a>
			<a href="/laugh/admin/index.php?s=CTModel/UpdateModelStatus&status=0">已启用</a>
			<a href="/laugh/admin/index.php?s=CTModel/DeleteModel">删除</a>
		</li>
			</ul>
		<ul class="table_list">
		<li class="table_list_l table_list_l120">下载模型</li>
		<li class="table_list_l table_list_l120">download</li>
		<li class="table_list_l table_list_l100">Download</li>
		<li class="table_list_l table_list_l300">下载模型</li>
				<li class="table_list_l table_list_l170" accessStatus=1>
			<a href="/laugh/admin/index.php?s=CTModel/ModelField">模型字段</a>
			<a href="/laugh/admin/index.php?s=CTModel/UpdateModel">修改</a>
			<a href="/laugh/admin/index.php?s=CTModel/UpdateModelStatus&status=0">已启用</a>
			<a href="/laugh/admin/index.php?s=CTModel/DeleteModel">删除</a>
		</li>
			</ul>
		<ul class="table_list">
		<li class="table_list_l table_list_l120">专题模型</li>
		<li class="table_list_l table_list_l120">topic</li>
		<li class="table_list_l table_list_l100">Topic</li>
		<li class="table_list_l table_list_l300">专题模型</li>
				<li class="table_list_l table_list_l170" accessStatus=1>
			<a href="/laugh/admin/index.php?s=CTModel/ModelField">模型字段</a>
			<a href="/laugh/admin/index.php?s=CTModel/UpdateModel">修改</a>
			<a href="/laugh/admin/index.php?s=CTModel/UpdateModelStatus&status=0">已启用</a>
			<a href="/laugh/admin/index.php?s=CTModel/DeleteModel">删除</a>
		</li>
			</ul>
		<ul class="table_list">
		<li class="table_list_l table_list_l120">软件模型</li>
		<li class="table_list_l table_list_l120">soft</li>
		<li class="table_list_l table_list_l100">Soft</li>
		<li class="table_list_l table_list_l300"></li>
				<li class="table_list_l table_list_l170" accessStatus=1>
			<a href="/laugh/admin/index.php?s=CTModel/ModelField">模型字段</a>
			<a href="/laugh/admin/index.php?s=CTModel/UpdateModel">修改</a>
			<a href="/laugh/admin/index.php?s=CTModel/UpdateModelStatus&status=0">已启用</a>
			<a href="/laugh/admin/index.php?s=CTModel/DeleteModel">删除</a>
		</li>
			</ul>
		<ul class="table_list">
		<li class="table_list_l table_list_l120">产品模型</li>
		<li class="table_list_l table_list_l120">product</li>
		<li class="table_list_l table_list_l100">Product</li>
		<li class="table_list_l table_list_l300"></li>
				<li class="table_list_l table_list_l170" accessStatus=1>
			<a href="/laugh/admin/index.php?s=CTModel/ModelField">模型字段</a>
			<a href="/laugh/admin/index.php?s=CTModel/UpdateModel">修改</a>
			<a href="/laugh/admin/index.php?s=CTModel/UpdateModelStatus&status=0">已启用</a>
			<a href="/laugh/admin/index.php?s=CTModel/DeleteModel">删除</a>
		</li>
			</ul>
		<ul class="table_list">
		<li class="table_list_l table_list_l120">分类信息模型</li>
		<li class="table_list_l table_list_l120">info</li>
		<li class="table_list_l table_list_l100">Info</li>
		<li class="table_list_l table_list_l300"></li>
				<li class="table_list_l table_list_l170" accessStatus=1>
			<a href="/laugh/admin/index.php?s=CTModel/ModelField">模型字段</a>
			<a href="/laugh/admin/index.php?s=CTModel/UpdateModel">修改</a>
			<a href="/laugh/admin/index.php?s=CTModel/UpdateModelStatus&status=0">已启用</a>
			<a href="/laugh/admin/index.php?s=CTModel/DeleteModel">删除</a>
		</li>
			</ul>
		<ul class="table_list">
		<li class="table_list_l table_list_l120">公共模型</li>
		<li class="table_list_l table_list_l120">public</li>
		<li class="table_list_l table_list_l100">Public</li>
		<li class="table_list_l table_list_l300">公共模型 关于我们、联系我们等</li>
				<li class="table_list_l table_list_l170" accessStatus=1>
			<a href="/laugh/admin/index.php?s=CTModel/ModelField">模型字段</a>
			<a href="/laugh/admin/index.php?s=CTModel/UpdateModel">修改</a>
			<a href="/laugh/admin/index.php?s=CTModel/UpdateModelStatus&status=0">已启用</a>
			<a href="/laugh/admin/index.php?s=CTModel/DeleteModel">删除</a>
		</li>
			</ul>
		<ul class="table_list">
		<li class="table_list_l table_list_l120">插件模型</li>
		<li class="table_list_l table_list_l120">plugin</li>
		<li class="table_list_l table_list_l100">Plugin</li>
		<li class="table_list_l table_list_l300">所有使用插件的栏目的模型控制器入口</li>
				<li class="table_list_l table_list_l170" accessStatus=1>
			<a href="/laugh/admin/index.php?s=CTModel/ModelField">模型字段</a>
			<a href="/laugh/admin/index.php?s=CTModel/UpdateModel">修改</a>
			<a href="/laugh/admin/index.php?s=CTModel/UpdateModelStatus&status=0">已启用</a>
			<a href="/laugh/admin/index.php?s=CTModel/DeleteModel">删除</a>
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
<script type="text/javascript" src="themes/green/js/jquery.corner.js"></script>
<script type="text/javascript" src="themes/green/js/public.js"></script>
<script type="text/javascript" src="themes/green/js/common.js"></script>
<script type="text/javascript" src="themes/green/js/ajax.js"></script>
<script type="text/javascript" src="public/js/jquery.idTabs.min.js"></script>
</html>