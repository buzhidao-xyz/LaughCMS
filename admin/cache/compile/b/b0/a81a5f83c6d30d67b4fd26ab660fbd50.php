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
<div id="perstatus" pers="<pre class='xdebug-var-dump' dir='ltr'><small>string</small> <font color='#cc0000'>'&lt;font color=red&gt;127.0.0.1 系统发生错误: Undefined index: perstatus, in C:\xampp\htdocs\laugh\admin\cache\compile\17bb88dfc3c502f5583ddea8497cb9817c009f78.file.manage.html.php on line 31&lt;/font&gt;'</font> <i>(length=198)</i>
</pre><pre class='xdebug-var-dump' dir='ltr'><small>string</small> <font color='#cc0000'>'&lt;font color=red&gt;127.0.0.1 系统发生错误: Trying to get property of non-object, in C:\xampp\htdocs\laugh\admin\cache\compile\17bb88dfc3c502f5583ddea8497cb9817c009f78.file.manage.html.php on line 31&lt;/font&gt;'</font> <i>(length=208)</i>
</pre>"></div>
<div id="control">
	<div class="control_nav">
		<h3>添加组</h3>
	</div>
	<div class="captitle"><h5>新组节点表单</h5></div>
	<form name="newform" action="/laugh/admin/?s=Group/saveGroup" method="post" id="addajaxform">
		<input type="hidden" name="" />
		<ul class="formbody">
			<li class="formblock colorblock">
				<span>名称:</span>
				<input type="text" name="title" value="" class="input" style="width:150px;" />
			</li>
			<li class="formblock">
				<input type="submit" name="subut" class="button" value="添加" />
			</li>
		</ul>
	</form>
	<div class="control_nav">
		<h3>组节点列表</h3>
	</div>
	<div class="captitle"><h5>兑奖申请列表【目前共有6条数据】</h5></div>
    <ul class="table_list_title">
    	<li class="table_list_l table_list_l150">组节点名称</li>
    	<li class="table_list_l table_list_l170">创建时间</li>
    	<li class="table_list_l table_list_l100">是/否显示</li>
    	<li class="table_list_l table_list_l150">操作</li>
    </ul>
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
	<form id="modify_div_form" action="/laugh/admin/?s=Group/upGroup">
		<input name="id" value="" type="hidden" />
		<a href="javascript:;" class="modify_div_close" id="modify_div_close">X</a>
		<ul class="formbody modify_div_box">
			<li class="formblock colorblock">
				<span>组节点名称: </span>
				<input type="text" name="title" value="" class="input" style="width:150px;" />
			</li>
			<li class="auto colorblock">
				<span>是否显示: </span>
				<div class="show_list fleft">
					<label><input type="radio" name="isshow" value="1" class="radio" />是</label>
					<label><input type="radio" name="isshow" value="0" class="radio" />否</label>
				</div>
			</li>
			<li class="formblock">
				<input type="submit" name="subut" class="button" value="修改" />
			</li>
		</ul>
	</form>
</div>
<!--弹出层-->
</body>
<script type="text/javascript" src="themes/blue/js/public.js"></script>
<script type="text/javascript" src="themes/blue/js/div_window.js"></script>
<script type="text/javascript" src="themes/blue/js/common.js"></script>
<script type="text/javascript" src="themes/blue/js/ajax.js"></script>
</html>