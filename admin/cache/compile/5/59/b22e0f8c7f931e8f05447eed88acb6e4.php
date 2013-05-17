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
	<div class="formtitle"><h5>添加新导航</h5></div>
	<form name="newform" action="/laugh/admin/index.php?s=Plugin/footNavigationSave" method="post" id="ajaxform" class="newform">
		<ul class="formbody">
			<li class="formblock">
				<span>导航名称: </span>
				<input type="text" name="title" value="" class="input w200" />
			</li>
			<li class="formblock">
				<span>导航地址: </span>
				<input type="text" name="link" value="" class="input w350" />
			</li>
			<li class="formblock bordernone bgf6">
				<input type="submit" name="subut" class="button btnblue2" value="添加" />
			</li>
		</ul>
	</form>
</div>
<div class="captitle"><h5>底部导航列表【总计5】</h5></div>
<ul class="table_list_title">
	<li class="table_list_l table_list_l30"></li>
	<li class="table_list_l table_list_l120">导航标题</li>
	<li class="table_list_l table_list_l500">导航地址</li>
	<li class="table_list_l table_list_l150">添加时间</li>
		<li class="table_list_l table_list_l100" accessStatus=1>操作</li>
	</ul>
<div class="contentTableList">
            <ul class="table_list">
		<li class="table_list_l table_list_l30 table_list_no">1</li>
		<li class="table_list_l table_list_l120">招贤纳士</li>
		<li class="table_list_l table_list_l500"><a href="http://localhost:82/laugh/index.php?s=Plugin/Cooperate&amp;columnid=9" target="_blank">http://localhost:82/laugh/index.php?s=Plugin/Cooperate&amp;columnid=9</a></li>
    	<li class="table_list_l table_list_l150">2013-05-16 11:44:53</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a name="NavigationEdit" href="/laugh/admin/index.php?s=Plugin/NavigationEdit&id=1">修改</a>
    		<a delurl="/laugh/admin/index.php?s=Plugin/NavigationDelete&id=1" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l30 table_list_no">1</li>
		<li class="table_list_l table_list_l120">关于我们</li>
		<li class="table_list_l table_list_l500"><a href="http://localhost:82/laugh/index.php?s=Public/AboutUS&amp;columnid=10" target="_blank">http://localhost:82/laugh/index.php?s=Public/AboutUS&amp;columnid=10</a></li>
    	<li class="table_list_l table_list_l150">2013-05-17 16:57:00</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a name="NavigationEdit" href="/laugh/admin/index.php?s=Plugin/NavigationEdit&id=3">修改</a>
    		<a delurl="/laugh/admin/index.php?s=Plugin/NavigationDelete&id=3" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l30 table_list_no">1</li>
		<li class="table_list_l table_list_l120">联系我们</li>
		<li class="table_list_l table_list_l500"><a href="http://localhost:82/laugh/index.php?s=Public/ContactUS&amp;columnid=11" target="_blank">http://localhost:82/laugh/index.php?s=Public/ContactUS&amp;columnid=11</a></li>
    	<li class="table_list_l table_list_l150">2013-05-17 16:57:17</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a name="NavigationEdit" href="/laugh/admin/index.php?s=Plugin/NavigationEdit&id=4">修改</a>
    		<a delurl="/laugh/admin/index.php?s=Plugin/NavigationDelete&id=4" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l30 table_list_no">1</li>
		<li class="table_list_l table_list_l120">在线手册</li>
		<li class="table_list_l table_list_l500"><a href="javascript:;" target="_blank">javascript:;</a></li>
    	<li class="table_list_l table_list_l150">2013-05-17 16:57:52</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a name="NavigationEdit" href="/laugh/admin/index.php?s=Plugin/NavigationEdit&id=5">修改</a>
    		<a delurl="/laugh/admin/index.php?s=Plugin/NavigationDelete&id=5" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l30 table_list_no">1</li>
		<li class="table_list_l table_list_l120">帮助中心</li>
		<li class="table_list_l table_list_l500"><a href="javascript:;" target="_blank">javascript:;</a></li>
    	<li class="table_list_l table_list_l150">2013-05-17 16:58:08</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a name="NavigationEdit" href="/laugh/admin/index.php?s=Plugin/NavigationEdit&id=6">修改</a>
    		<a delurl="/laugh/admin/index.php?s=Plugin/NavigationDelete&id=6" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        </div>

<script type="text/javascript">
$(document).ready(function (){
	$("a[name=NavigationEdit]").click(function (){
		window.parent.colorboxAjaxHtml($(this).attr("href"));
		return false;
	});
});
</script>
    </div>
</div>
</body>
<script type="text/javascript" src="themes/blue/js/jquery.corner.js"></script>
<script type="text/javascript" src="themes/blue/js/public.js"></script>
<script type="text/javascript" src="themes/blue/js/common.js"></script>
<script type="text/javascript" src="themes/blue/js/ajax.js"></script>
<script type="text/javascript" src="public/js/jquery.idTabs.min.js"></script>
</html>