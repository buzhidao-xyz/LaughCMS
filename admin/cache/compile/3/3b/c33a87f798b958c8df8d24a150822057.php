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
	<a href="/laugh/admin/index.php?s=Download/index">下载列表</a>
	<a href="/laugh/admin/index.php?s=Download/add">上传新文件</a>
	<a href="/laugh/admin/index.php?s=Download/recover">回收站</a>
</div>
<div class="captitle"><h5>下载列表 【目前共有2条文档】</h5></div>
<ul class="table_list_title">
	<li class="table_list_l table_list_l30"></li>
	<li class="table_list_l table_list_l50">ID</li>
	<li class="table_list_l table_list_l300">文档标题</li>
	<li class="table_list_l table_list_l150">更新时间</li>
	<li class="table_list_l table_list_l120">所属栏目</li>
	<li class="table_list_l table_list_l100">文档作者</li>
	<li class="table_list_l table_list_l80">下载次数</li>
		<li class="table_list_l table_list_l120" accessStatus=1>操作</li>
	</ul>
<div class="contentTableList">
            <ul class="table_list">
		<li class="table_list_l table_list_l30">
			<input type="checkbox" name="archiveid[]" value="17" flag="archiveID" class="checkbox" />
		</li>
		<li class="table_list_l table_list_l50">17</li>
		<li class="table_list_l table_list_l300" title="SCWS中文分词软件">
			SCWS中文分词软件
		</li>
    	<li class="table_list_l table_list_l150">2013-04-11 16:41:18</li>
    	<li class="table_list_l table_list_l120">下载中心</li>
		<li class="table_list_l table_list_l100">admin</li>
		<li class="table_list_l table_list_l80">0</li>
    	    	<li class="table_list_l table_list_l120" accessStatus=1>
    		<a href="/laugh/admin/index.php?s=Download/edit&archiveid=17">修改</a>
    		<a delurl="/laugh/admin/index.php?s=Archive/recoverArchive&archiveid=17" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l30">
			<input type="checkbox" name="archiveid[]" value="16" flag="archiveID" class="checkbox" />
		</li>
		<li class="table_list_l table_list_l50">16</li>
		<li class="table_list_l table_list_l300" title="LaughCMS">
			LaughCMS
		</li>
    	<li class="table_list_l table_list_l150">2013-04-11 10:12:05</li>
    	<li class="table_list_l table_list_l120">下载中心</li>
		<li class="table_list_l table_list_l100">admin</li>
		<li class="table_list_l table_list_l80">0</li>
    	    	<li class="table_list_l table_list_l120" accessStatus=1>
    		<a href="/laugh/admin/index.php?s=Download/edit&archiveid=16">修改</a>
    		<a delurl="/laugh/admin/index.php?s=Archive/recoverArchive&archiveid=16" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        </div>

<div id="opBottom" class="opBottom">
	<a href="javascript:;" name="checkAll">全选</a>
	<a href="javascript:;" name="unCheckAll">取消</a>
	<a href="javascript:;" name="archiveUpdate">更新</a>
	<a href="javascript:;" name="archiveReview">审核</a>
	<a href="/laugh/admin/index.php?s=Download/moveArchive" name="archiveMove">移动</a>
	<a href="javascript:;" name="archiveDelete">删除</a>
</div>
<link type="text/css" rel="stylesheet" href="public/plugin/colorbox/colorbox.css" media="screen">
<script type="text/javascript" src="public/plugin/colorbox/jquery.colorbox.js"></script>
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
		var archiveid = getArchiveID();
		$(this).attr("href",$(this).attr("href")+"&archiveid="+archiveid);
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