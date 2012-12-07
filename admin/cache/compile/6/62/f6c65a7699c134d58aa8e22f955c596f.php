<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="keywords" content="">
<link type="text/css" rel="stylesheet" href="themes/blue/style/common.css" media="screen">
<link type="text/css" rel="stylesheet" href="themes/blue/style/base.css" media="screen">
<link type="text/css" rel="stylesheet" href="themes/blue/style/global.css" media="screen">
<script type="text/javascript" src="themes/blue/js/jquery.js"></script>
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
<!-- <div class="control_nav">
	<h3>添加组</h3>
</div> -->
<div class="formContainer">
	<div class="formtitle"><h5>新组节点表单</h5></div>
	<form name="newform" action="/laugh/admin/?s=Group/saveGroup" method="post" id="addajaxform" class="newform">
		<input type="hidden" name="" />
		<ul class="formbody">
			<li class="formblock">
				<span>名称:</span>
				<input type="text" name="title" value="" class="input" style="width:150px;" />
			</li>
			<li class="formblock bordernone">
				<input type="submit" name="subut" class="button btnyellow2" value="添加" />
			</li>
		</ul>
	</form>
</div>
<div class="captitle"><h5>组节点列表【目前共有6条数据】</h5></div>
<ul class="table_list_title">
	<li class="table_list_l table_list_l150">组节点名称</li>
	<li class="table_list_l table_list_l170">创建时间</li>
	<li class="table_list_l table_list_l100">是/否显示</li>
	<li class="table_list_l table_list_l150">操作</li>
</ul>
<div class="contentTableList">
			<ul class="table_list">
		<li class="table_list_l table_list_l150">系统管理</li>
		<li class="table_list_l table_list_l170">2012-03-22 12:28:58</li>
		<li class="table_list_l table_list_l100">显</li>
		<li class="table_list_l table_list_l150">
			<a href="javascript:;" name="modify" id="1" title="系统管理" isshow="1">修改</a>&nbsp;&nbsp;
			<a delurl="/laugh/admin/Group/deleteGroup" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
		</li>
	</ul>
		<ul class="table_list">
		<li class="table_list_l table_list_l150">用户中心</li>
		<li class="table_list_l table_list_l170">2012-03-22 12:28:58</li>
		<li class="table_list_l table_list_l100">显</li>
		<li class="table_list_l table_list_l150">
			<a href="javascript:;" name="modify" id="2" title="用户中心" isshow="1">修改</a>&nbsp;&nbsp;
			<a delurl="/laugh/admin/Group/deleteGroup" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
		</li>
	</ul>
		<ul class="table_list">
		<li class="table_list_l table_list_l150">核心内容</li>
		<li class="table_list_l table_list_l170">2012-03-22 12:28:58</li>
		<li class="table_list_l table_list_l100">显</li>
		<li class="table_list_l table_list_l150">
			<a href="javascript:;" name="modify" id="3" title="核心内容" isshow="1">修改</a>&nbsp;&nbsp;
			<a delurl="/laugh/admin/Group/deleteGroup" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
		</li>
	</ul>
		<ul class="table_list">
		<li class="table_list_l table_list_l150">网站更新</li>
		<li class="table_list_l table_list_l170">2012-03-22 12:28:58</li>
		<li class="table_list_l table_list_l100">显</li>
		<li class="table_list_l table_list_l150">
			<a href="javascript:;" name="modify" id="4" title="网站更新" isshow="1">修改</a>&nbsp;&nbsp;
			<a delurl="/laugh/admin/Group/deleteGroup" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
		</li>
	</ul>
		<ul class="table_list">
		<li class="table_list_l table_list_l150">系统插件</li>
		<li class="table_list_l table_list_l170">2012-03-22 12:28:58</li>
		<li class="table_list_l table_list_l100">显</li>
		<li class="table_list_l table_list_l150">
			<a href="javascript:;" name="modify" id="5" title="系统插件" isshow="1">修改</a>&nbsp;&nbsp;
			<a delurl="/laugh/admin/Group/deleteGroup" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
		</li>
	</ul>
		<ul class="table_list">
		<li class="table_list_l table_list_l150">系统设置</li>
		<li class="table_list_l table_list_l170">2012-11-19 17:12:15</li>
		<li class="table_list_l table_list_l100">显</li>
		<li class="table_list_l table_list_l150">
			<a href="javascript:;" name="modify" id="6" title="系统设置" isshow="1">修改</a>&nbsp;&nbsp;
			<a delurl="/laugh/admin/Group/deleteGroup" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
		</li>
	</ul>
		</div>

<!--弹出层-->
<div id="modify_div" class="modify_div" style="display:none;">
	<div class="modify_div_Top">
		<h5>编辑组节点信息</h5>
		<a href="javascript:;" id="modify_div_close" class="close">×</a>
	</div>
	<form id="modify_div_form" action="/laugh/admin/?s=Group/upGroup">
		<input name="id" value="" type="hidden" />
		<ul class="formbody modify_div_box">
			<li class="formblock">
				<span>组节点名称: </span>
				<input type="text" name="title" value="" class="input" style="width:150px;" />
			</li>
			<li class="formblock">
				<span>是否显示: </span>
				<div class="item_list fleft">
					<label><input type="radio" name="isshow" value="1" class="radio" />是</label>
					<label><input type="radio" name="isshow" value="0" class="radio" />否</label>
				</div>
			</li>
			<li class="formblock bordernone">
				<input type="submit" name="subut" class="button btnyellow2" value="修改" />
			</li>
		</ul>
	</form>
	<div class="modify_div_Bottom"></div>
</div>
<!--弹出层-->
    </div>
    <ul class="controlBottom">
		<li class="controlLeftBottom"></li>
		<li class="controlRightBottom"></li>
	</ul>
</div>
</body>
<script type="text/javascript" src="themes/blue/js/jquery.corner.js"></script>
<script type="text/javascript" src="themes/blue/js/public.js"></script>
<script type="text/javascript" src="themes/blue/js/div_window.js"></script>
<script type="text/javascript" src="themes/blue/js/common.js"></script>
<script type="text/javascript" src="themes/blue/js/ajax.js"></script>
</html>