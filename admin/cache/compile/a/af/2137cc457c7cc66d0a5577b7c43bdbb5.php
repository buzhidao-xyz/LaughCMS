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
	<a href="/laugh/admin/index.php?s=CTModel/addSinglePage">新增单页模型</a>
	<a href="/laugh/admin/index.php?s=CTModel/singlePage">单页模型管理</a>
</div>
<div class="captitle"><h5>单页页面列表 【页面数4】</h5></div>
<ul class="table_list_title">
	<li class="table_list_l table_list_l30"></li>
	<li class="table_list_l table_list_l50">ID</li>
	<li class="table_list_l table_list_l300">页面名称</li>
	<li class="table_list_l table_list_l150">更新时间</li>
	<li class="table_list_l table_list_l100">文档作者</li>
	<li class="table_list_l table_list_l80">点击数</li>
	<li class="table_list_l table_list_l80">评论数</li>
	<li class="table_list_l table_list_l70">状态</li>
		<li class="table_list_l table_list_l120" accessStatus=1>操作</li>
	</ul>
<div class="contentTableList">
            <ul class="table_list">
		<li class="table_list_l table_list_l30">
			<input type="checkbox" name="singlepageid[]" value="1" flag="SinglePageID" class="checkbox" />
		</li>
		<li class="table_list_l table_list_l50">1</li>
		<li class="table_list_l table_list_l300" title="关于我们页面123">关于我们页面123</li>
    	<li class="table_list_l table_list_l150">2013-04-03 16:55:39</li>
		<li class="table_list_l table_list_l100">admin</li>
		<li class="table_list_l table_list_l80">0</li>
		<li class="table_list_l table_list_l80">0</li>
		<li class="table_list_l table_list_l70"><font color="green">正常</font></li>
    	    	<li class="table_list_l table_list_l120" accessStatus=1>
    		<a href="http://localhost:82/laugh/index.php?s=SinglePage/View&singlepageid=1" target="_blank">预览</a>
    		<a href="/laugh/admin/index.php?s=CTModel/editSinglePage&singlepageid=1">修改</a>
    		<a delurl="/laugh/admin/index.php?s=CTModel/deleteSinglePage&singlepageid=1" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l30">
			<input type="checkbox" name="singlepageid[]" value="2" flag="SinglePageID" class="checkbox" />
		</li>
		<li class="table_list_l table_list_l50">2</li>
		<li class="table_list_l table_list_l300" title="关于我们页面">关于我们页面</li>
    	<li class="table_list_l table_list_l150">2013-04-03 16:54:12</li>
		<li class="table_list_l table_list_l100">admin</li>
		<li class="table_list_l table_list_l80">0</li>
		<li class="table_list_l table_list_l80">0</li>
		<li class="table_list_l table_list_l70"><font color="green">正常</font></li>
    	    	<li class="table_list_l table_list_l120" accessStatus=1>
    		<a href="http://localhost:82/laugh/index.php?s=SinglePage/View&singlepageid=2" target="_blank">预览</a>
    		<a href="/laugh/admin/index.php?s=CTModel/editSinglePage&singlepageid=2">修改</a>
    		<a delurl="/laugh/admin/index.php?s=CTModel/deleteSinglePage&singlepageid=2" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l30">
			<input type="checkbox" name="singlepageid[]" value="3" flag="SinglePageID" class="checkbox" />
		</li>
		<li class="table_list_l table_list_l50">3</li>
		<li class="table_list_l table_list_l300" title="关于我们页面1">关于我们页面1</li>
    	<li class="table_list_l table_list_l150">2013-04-03 16:54:28</li>
		<li class="table_list_l table_list_l100">admin</li>
		<li class="table_list_l table_list_l80">0</li>
		<li class="table_list_l table_list_l80">0</li>
		<li class="table_list_l table_list_l70"><font color="gray">已删除</font></li>
    	    	<li class="table_list_l table_list_l120" accessStatus=1>
    		<a href="http://localhost:82/laugh/index.php?s=SinglePage/View&singlepageid=3" target="_blank">预览</a>
    		<a href="/laugh/admin/index.php?s=CTModel/editSinglePage&singlepageid=3">修改</a>
    		<a delurl="/laugh/admin/index.php?s=CTModel/deleteSinglePage&singlepageid=3" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l30">
			<input type="checkbox" name="singlepageid[]" value="4" flag="SinglePageID" class="checkbox" />
		</li>
		<li class="table_list_l table_list_l50">4</li>
		<li class="table_list_l table_list_l300" title="关于我们页面">关于我们页面</li>
    	<li class="table_list_l table_list_l150">2013-04-03 16:54:37</li>
		<li class="table_list_l table_list_l100">admin</li>
		<li class="table_list_l table_list_l80">0</li>
		<li class="table_list_l table_list_l80">0</li>
		<li class="table_list_l table_list_l70"><font color="green">正常</font></li>
    	    	<li class="table_list_l table_list_l120" accessStatus=1>
    		<a href="http://localhost:82/laugh/index.php?s=SinglePage/View&singlepageid=4" target="_blank">预览</a>
    		<a href="/laugh/admin/index.php?s=CTModel/editSinglePage&singlepageid=4">修改</a>
    		<a delurl="/laugh/admin/index.php?s=CTModel/deleteSinglePage&singlepageid=4" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        </div>

<div id="opBottom" class="opBottom">
	<a href="javascript:;" name="checkAll">全选</a>
	<a href="javascript:;" name="unCheckAll">取消</a>
	<a href="javascript:;" name="singlepageDelete">删除</a>
</div>
<link type="text/css" rel="stylesheet" href="public/plugin/colorbox/colorbox.css" media="screen">
<script type="text/javascript" src="public/plugin/colorbox/jquery.colorbox.js"></script>
<script type="text/javascript">
$(document).ready(function (){
var singlepageClass = function (){
	var singlepageObj = {
		checkAll: $("#opBottom a[name=checkAll]"),
		unCheckAll: $("#opBottom a[name=unCheckAll]"),
		singlepageDelete: $("#opBottom a[name=singlepageDelete]")
	}
	var getSinglePageID = function (){
		var singlepageid= "";
		$("input[name='singlepageid[]']").each(function (){
			if ($(this).attr("checked")) singlepageid += singlepageid ? ","+$(this).val() : $(this).val();
		});
		return singlepageid;
	};
	singlepageObj.checkAll.click(function (){
		$("input[flag=SinglePageID]").attr("checked","checked");
	});
	singlepageObj.unCheckAll.click(function (){
		$("input[flag=SinglePageID]").attr("checked",false);
	});
	
	//删除单页页面
	singlepageObj.singlepageDelete.click(function (){
		var singlepageid = getSinglePageID();
		var d = {
			singlepageid: singlepageid
		};
		$.post("/laugh/admin/index.php?s=CTModel/deleteSinglePage",d,function (data){
			alert(data.info);
			if (!data.status) location.href = location.href;
		},'json');
	});
}
singlepageClass();
});
</script>
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