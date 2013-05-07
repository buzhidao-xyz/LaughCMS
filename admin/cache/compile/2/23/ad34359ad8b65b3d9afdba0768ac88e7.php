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
	<a href="/laugh/admin/index.php?s=Product/index" class="opTopOn">产品列表</a>
	<a href="/laugh/admin/index.php?s=Product/add">新产品</a>
	<a href="/laugh/admin/index.php?s=Product/recover">回收站</a>
</div>
<div class="captitle"><h5>文档列表 【目前共有3条文档】</h5></div>
<ul class="table_list_title">
	<li class="table_list_l table_list_l30"></li>
	<li class="table_list_l table_list_l50">ID</li>
	<li class="table_list_l table_list_l300">文档标题</li>
	<li class="table_list_l table_list_l150">更新时间</li>
	<li class="table_list_l table_list_l120">所属栏目</li>
	<li class="table_list_l table_list_l80">文档作者</li>
	<li class="table_list_l table_list_l80">点击数</li>
	<li class="table_list_l table_list_l80">评论数</li>
		<li class="table_list_l table_list_l120" accessStatus=1>操作</li>
	</ul>
<div class="contentTableList">
            <ul class="table_list">
		<li class="table_list_l table_list_l30">
			<input type="checkbox" name="archiveid[]" value="12" flag="archiveID" class="checkbox" />
		</li>
		<li class="table_list_l table_list_l50">12</li>
		<li class="table_list_l table_list_l300" title="Vim文本编辑器 v7.3 正式版">
			Vim文本编辑器 v7.3 正式版
		</li>
    	<li class="table_list_l table_list_l150">2013-04-02 14:42:26</li>
    	<li class="table_list_l table_list_l120">网络产品</li>
		<li class="table_list_l table_list_l80">admin</li>
		<li class="table_list_l table_list_l80">0</li>
		<li class="table_list_l table_list_l80">0</li>
    	    	<li class="table_list_l table_list_l120" accessStatus=1>
    		<a href="http://localhost:82/laugh/index.php?s=Product/View&columnid=14&archiveid=12" target="_blank">预览</a>
    		<a href="/laugh/admin/index.php?s=Product/edit&archiveid=12">修改</a>
    		<a delurl="/laugh/admin/index.php?s=Archive/recoverArchive&archiveid=12" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l30">
			<input type="checkbox" name="archiveid[]" value="11" flag="archiveID" class="checkbox" />
		</li>
		<li class="table_list_l table_list_l50">11</li>
		<li class="table_list_l table_list_l300" title="4 款 Linux 下开源的个人日记管理软件">
			4 款 Linux 下开源的个人日记管理软件
		</li>
    	<li class="table_list_l table_list_l150">2013-04-02 14:37:16</li>
    	<li class="table_list_l table_list_l120">网络产品</li>
		<li class="table_list_l table_list_l80">admin</li>
		<li class="table_list_l table_list_l80">0</li>
		<li class="table_list_l table_list_l80">0</li>
    	    	<li class="table_list_l table_list_l120" accessStatus=1>
    		<a href="http://localhost:82/laugh/index.php?s=Product/View&columnid=14&archiveid=11" target="_blank">预览</a>
    		<a href="/laugh/admin/index.php?s=Product/edit&archiveid=11">修改</a>
    		<a delurl="/laugh/admin/index.php?s=Archive/recoverArchive&archiveid=11" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l30">
			<input type="checkbox" name="archiveid[]" value="9" flag="archiveID" class="checkbox" />
		</li>
		<li class="table_list_l table_list_l50">9</li>
		<li class="table_list_l table_list_l300" title="Web服务攻击反侦查痕迹检测">
			Web服务攻击反侦查痕迹检测
		</li>
    	<li class="table_list_l table_list_l150">2013-04-02 14:34:38</li>
    	<li class="table_list_l table_list_l120">电子产品</li>
		<li class="table_list_l table_list_l80">admin</li>
		<li class="table_list_l table_list_l80">0</li>
		<li class="table_list_l table_list_l80">0</li>
    	    	<li class="table_list_l table_list_l120" accessStatus=1>
    		<a href="http://localhost:82/laugh/index.php?s=Product/View&columnid=15&archiveid=9" target="_blank">预览</a>
    		<a href="/laugh/admin/index.php?s=Product/edit&archiveid=9">修改</a>
    		<a delurl="/laugh/admin/index.php?s=Archive/recoverArchive&archiveid=9" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        </div>

<div id="opBottom" class="opBottom">
	<a href="javascript:;" name="checkAll">全选</a>
	<a href="javascript:;" name="unCheckAll">取消</a>
	<a href="javascript:;" name="archiveUpdate">更新</a>
	<a href="javascript:;" name="archiveReview">审核</a>
	<a href="/laugh/admin/index.php?s=Product/moveArchive" name="archiveMove">移动</a>
	<a href="javascript:;" name="archiveDelete">删除</a>
</div>
<script type="text/javascript">
$(document).ready(function (){
var archiveClass = function (){
	var archiveObj = {
		checkAll: $("#opBottom a[name=checkAll]"),
		unCheckAll: $("#opBottom a[name=unCheckAll]"),
		archiveUpdate: $("#opBottom a[name=archiveUpdate]"),
		archiveReview: $("#opBottom a[name=archiveReview]"),
		archiveMove: $("#opBottom a[name=archiveMove]"),
		archiveDelete: $("#opBottom a[name=archiveDelete]")
	}
	var getArchiveID = function (){
		var archiveid= "";
		$("input[name='archiveid[]']").each(function (){
			if ($(this).attr("checked")) archiveid += archiveid ? ","+$(this).val() : $(this).val();
		});
		return archiveid;
	};
	archiveObj.checkAll.click(function (){
		$("input[flag=archiveID]").attr("checked","checked");
	});
	archiveObj.unCheckAll.click(function (){
		$("input[flag=archiveID]").attr("checked",false);
	});

	//移动栏目
	archiveObj.archiveMove.colorbox();
	archiveObj.archiveMove.click(function (){
		var href = $(this).attr("href")+"&archiveid="+getArchiveID();
		window.parent.colorboxAjaxHtml(href);
		return false;
	});
	
	//删除文档
	archiveObj.archiveDelete.click(function (){
		var archiveid = getArchiveID();
		var d = {
			archiveid: archiveid
		};
		$.post("/laugh/admin/index.php?s=Archive/recoverArchive",d,function (data){
			alert(data.info);
			if (!data.status) location.href = location.href;
		},'json');
	});
}
archiveClass();
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