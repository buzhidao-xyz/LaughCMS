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
<div class="opTop">
	<a href="/laugh/admin/index.php?s=Plugin/CooperateIndex">人才招聘列表</a>
	<a href="/laugh/admin/index.php?s=Plugin/CooperateAdd">发布新招聘信息</a>
</div>
<div class="captitle"><h5>人才招聘信息列表 【信息数4】</h5></div>
<ul class="table_list_title">
	<li class="table_list_l table_list_l30"></li>
	<li class="table_list_l table_list_l200">招聘职位</li>
	<li class="table_list_l table_list_l80">招聘人数</li>
	<li class="table_list_l table_list_l100">学历要求</li>
	<li class="table_list_l table_list_l100">工作性质</li>
	<li class="table_list_l table_list_l150">发布时间</li>
	<li class="table_list_l table_list_l150">更新时间</li>
	<li class="table_list_l table_list_l100">工资待遇</li>
		<li class="table_list_l table_list_l100" accessStatus=1>操作</li>
	</ul>
<div class="contentTableList">
            <ul class="table_list">
		<li class="table_list_l table_list_l30">1</li>
		<li class="table_list_l table_list_l200">UI设计师</li>
		<li class="table_list_l table_list_l80">2</li>
		<li class="table_list_l table_list_l100">本科</li>
		<li class="table_list_l table_list_l100">全职</li>
    	<li class="table_list_l table_list_l150">2013-04-12 15:29:12</li>
    	<li class="table_list_l table_list_l150">2013-04-12 15:29:52</li>
		<li class="table_list_l table_list_l100">6000-7999</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="/laugh/admin/index.php?s=Plugin/CooperateEdit&id=4">修改</a>
    		<a delurl="/laugh/admin/index.php?s=Plugin/CooperateDelete&id=4" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l30">1</li>
		<li class="table_list_l table_list_l200">PHP工程师</li>
		<li class="table_list_l table_list_l80">10</li>
		<li class="table_list_l table_list_l100">本科</li>
		<li class="table_list_l table_list_l100">全职</li>
    	<li class="table_list_l table_list_l150">2013-04-12 14:58:15</li>
    	<li class="table_list_l table_list_l150">2013-04-12 15:10:40</li>
		<li class="table_list_l table_list_l100">6000-7999</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="/laugh/admin/index.php?s=Plugin/CooperateEdit&id=3">修改</a>
    		<a delurl="/laugh/admin/index.php?s=Plugin/CooperateDelete&id=3" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l30">1</li>
		<li class="table_list_l table_list_l200">PHP工程师</li>
		<li class="table_list_l table_list_l80">10</li>
		<li class="table_list_l table_list_l100">本科</li>
		<li class="table_list_l table_list_l100">全职</li>
    	<li class="table_list_l table_list_l150">2013-04-12 14:58:15</li>
    	<li class="table_list_l table_list_l150">2013-04-12 15:10:51</li>
		<li class="table_list_l table_list_l100">6000-7999</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="/laugh/admin/index.php?s=Plugin/CooperateEdit&id=2">修改</a>
    		<a delurl="/laugh/admin/index.php?s=Plugin/CooperateDelete&id=2" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l30">1</li>
		<li class="table_list_l table_list_l200">PHP工程师</li>
		<li class="table_list_l table_list_l80">10</li>
		<li class="table_list_l table_list_l100">大专</li>
		<li class="table_list_l table_list_l100">全职</li>
    	<li class="table_list_l table_list_l150">2013-04-12 11:53:45</li>
    	<li class="table_list_l table_list_l150">2013-04-12 15:37:39</li>
		<li class="table_list_l table_list_l100">8000-9999</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="/laugh/admin/index.php?s=Plugin/CooperateEdit&id=1">修改</a>
    		<a delurl="/laugh/admin/index.php?s=Plugin/CooperateDelete&id=1" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
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