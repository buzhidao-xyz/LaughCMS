<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="keywords" content="">
<link type="text/css" rel="stylesheet" href="themes/green/style/common.css" media="screen">
<link type="text/css" rel="stylesheet" href="themes/green/style/base.css" media="screen">
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
	<a href="/laugh/admin/index.php?s=Article/index">文章列表</a>
	<a href="/laugh/admin/index.php?s=Article/add">发布新文章</a>
	<a href="/laugh/admin/index.php?s=Article/recover">回收站</a>
</div>
<div class="captitle"><h5>文档列表 【目前共有9条文档】</h5></div>
<ul class="table_list_title">
	<li class="table_list_l table_list_l30"></li>
	<li class="table_list_l table_list_l50">ID</li>
	<li class="table_list_l table_list_l300">文档标题</li>
	<li class="table_list_l table_list_l150">更新时间</li>
	<li class="table_list_l table_list_l120">所属栏目</li>
	<li class="table_list_l table_list_l100">文档作者</li>
	<li class="table_list_l table_list_l80">点击数</li>
	<li class="table_list_l table_list_l80">评论数</li>
		<li class="table_list_l table_list_l120" accessStatus=1>操作</li>
	</ul>
<div class="contentTableList">
            <ul class="table_list">
		<li class="table_list_l table_list_l30">
			<input type="checkbox" name="archiveid[]" value="10" flag="archiveID" class="checkbox" />
		</li>
		<li class="table_list_l table_list_l50">10</li>
		<li class="table_list_l table_list_l300" title="Web服务攻击反侦查痕迹检测">
			Web服务攻击反侦查痕迹检测
		</li>
    	<li class="table_list_l table_list_l150">2013-04-01 15:04:43</li>
    	<li class="table_list_l table_list_l120">PHP知识</li>
		<li class="table_list_l table_list_l100">admin</li>
		<li class="table_list_l table_list_l80">0</li>
		<li class="table_list_l table_list_l80">0</li>
    	    	<li class="table_list_l table_list_l120" accessStatus=1>
    		<a href="http://localhost:82/laugh/index.php?s=Article/View&archiveid=10" target="_blank">预览</a>
    		<a href="/laugh/admin/index.php?s=Article/edit&archiveid=10">修改</a>
    		<a delurl="/laugh/admin/index.php?s=Archive/recoverArchive&archiveid=10" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l30">
			<input type="checkbox" name="archiveid[]" value="8" flag="archiveID" class="checkbox" />
		</li>
		<li class="table_list_l table_list_l50">8</li>
		<li class="table_list_l table_list_l300" title="PHP单例模式经典讲解">
			PHP单例模式经典讲解
		</li>
    	<li class="table_list_l table_list_l150">2013-03-29 14:15:21</li>
    	<li class="table_list_l table_list_l120">IT知识</li>
		<li class="table_list_l table_list_l100">admin</li>
		<li class="table_list_l table_list_l80">0</li>
		<li class="table_list_l table_list_l80">0</li>
    	    	<li class="table_list_l table_list_l120" accessStatus=1>
    		<a href="http://localhost:82/laugh/index.php?s=Article/View&archiveid=8" target="_blank">预览</a>
    		<a href="/laugh/admin/index.php?s=Article/edit&archiveid=8">修改</a>
    		<a delurl="/laugh/admin/index.php?s=Archive/recoverArchive&archiveid=8" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l30">
			<input type="checkbox" name="archiveid[]" value="7" flag="archiveID" class="checkbox" />
		</li>
		<li class="table_list_l table_list_l50">7</li>
		<li class="table_list_l table_list_l300" title="PHP实现异步操作">
			PHP实现异步操作
		</li>
    	<li class="table_list_l table_list_l150">2013-03-26 09:51:57</li>
    	<li class="table_list_l table_list_l120">PHP知识</li>
		<li class="table_list_l table_list_l100">admin</li>
		<li class="table_list_l table_list_l80">0</li>
		<li class="table_list_l table_list_l80">0</li>
    	    	<li class="table_list_l table_list_l120" accessStatus=1>
    		<a href="http://localhost:82/laugh/index.php?s=Article/View&archiveid=7" target="_blank">预览</a>
    		<a href="/laugh/admin/index.php?s=Article/edit&archiveid=7">修改</a>
    		<a delurl="/laugh/admin/index.php?s=Archive/recoverArchive&archiveid=7" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l30">
			<input type="checkbox" name="archiveid[]" value="6" flag="archiveID" class="checkbox" />
		</li>
		<li class="table_list_l table_list_l50">6</li>
		<li class="table_list_l table_list_l300" title="PHP基本点知识">
			PHP基本点知识
		</li>
    	<li class="table_list_l table_list_l150">2013-03-25 16:51:20</li>
    	<li class="table_list_l table_list_l120">网络知识</li>
		<li class="table_list_l table_list_l100">admin</li>
		<li class="table_list_l table_list_l80">0</li>
		<li class="table_list_l table_list_l80">0</li>
    	    	<li class="table_list_l table_list_l120" accessStatus=1>
    		<a href="http://localhost:82/laugh/index.php?s=Article/View&archiveid=6" target="_blank">预览</a>
    		<a href="/laugh/admin/index.php?s=Article/edit&archiveid=6">修改</a>
    		<a delurl="/laugh/admin/index.php?s=Archive/recoverArchive&archiveid=6" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l30">
			<input type="checkbox" name="archiveid[]" value="5" flag="archiveID" class="checkbox" />
		</li>
		<li class="table_list_l table_list_l50">5</li>
		<li class="table_list_l table_list_l300" title="页面(PAGE)标记(TAGS)">
			页面(PAGE)标记(TAGS)
		</li>
    	<li class="table_list_l table_list_l150">2013-03-25 15:51:29</li>
    	<li class="table_list_l table_list_l120">前端知识</li>
		<li class="table_list_l table_list_l100">admin</li>
		<li class="table_list_l table_list_l80">0</li>
		<li class="table_list_l table_list_l80">0</li>
    	    	<li class="table_list_l table_list_l120" accessStatus=1>
    		<a href="http://localhost:82/laugh/index.php?s=Article/View&archiveid=5" target="_blank">预览</a>
    		<a href="/laugh/admin/index.php?s=Article/edit&archiveid=5">修改</a>
    		<a delurl="/laugh/admin/index.php?s=Archive/recoverArchive&archiveid=5" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l30">
			<input type="checkbox" name="archiveid[]" value="4" flag="archiveID" class="checkbox" />
		</li>
		<li class="table_list_l table_list_l50">4</li>
		<li class="table_list_l table_list_l300" title="MongoDB:下一代MySQL？">
			MongoDB:下一代MySQL？
		</li>
    	<li class="table_list_l table_list_l150">2013-03-21 17:06:23</li>
    	<li class="table_list_l table_list_l120">IT知识</li>
		<li class="table_list_l table_list_l100">admin</li>
		<li class="table_list_l table_list_l80">0</li>
		<li class="table_list_l table_list_l80">0</li>
    	    	<li class="table_list_l table_list_l120" accessStatus=1>
    		<a href="http://localhost:82/laugh/index.php?s=Article/View&archiveid=4" target="_blank">预览</a>
    		<a href="/laugh/admin/index.php?s=Article/edit&archiveid=4">修改</a>
    		<a delurl="/laugh/admin/index.php?s=Archive/recoverArchive&archiveid=4" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l30">
			<input type="checkbox" name="archiveid[]" value="3" flag="archiveID" class="checkbox" />
		</li>
		<li class="table_list_l table_list_l50">3</li>
		<li class="table_list_l table_list_l300" title="企业用网站进行网络宣传的优势">
			企业用网站进行网络宣传的优势
		</li>
    	<li class="table_list_l table_list_l150">2013-03-21 16:26:22</li>
    	<li class="table_list_l table_list_l120">网络知识</li>
		<li class="table_list_l table_list_l100">admin</li>
		<li class="table_list_l table_list_l80">132</li>
		<li class="table_list_l table_list_l80">0</li>
    	    	<li class="table_list_l table_list_l120" accessStatus=1>
    		<a href="http://localhost:82/laugh/index.php?s=Article/View&archiveid=3" target="_blank">预览</a>
    		<a href="/laugh/admin/index.php?s=Article/edit&archiveid=3">修改</a>
    		<a delurl="/laugh/admin/index.php?s=Archive/recoverArchive&archiveid=3" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l30">
			<input type="checkbox" name="archiveid[]" value="2" flag="archiveID" class="checkbox" />
		</li>
		<li class="table_list_l table_list_l50">2</li>
		<li class="table_list_l table_list_l300" title="确认在左，取消在右?">
			确认在左，取消在右?
		</li>
    	<li class="table_list_l table_list_l150">2013-03-25 11:49:17</li>
    	<li class="table_list_l table_list_l120">网络知识</li>
		<li class="table_list_l table_list_l100">admin</li>
		<li class="table_list_l table_list_l80">233</li>
		<li class="table_list_l table_list_l80">0</li>
    	    	<li class="table_list_l table_list_l120" accessStatus=1>
    		<a href="http://localhost:82/laugh/index.php?s=Article/View&archiveid=2" target="_blank">预览</a>
    		<a href="/laugh/admin/index.php?s=Article/edit&archiveid=2">修改</a>
    		<a delurl="/laugh/admin/index.php?s=Archive/recoverArchive&archiveid=2" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l30">
			<input type="checkbox" name="archiveid[]" value="1" flag="archiveID" class="checkbox" />
		</li>
		<li class="table_list_l table_list_l50">1</li>
		<li class="table_list_l table_list_l300" title="这是一篇测试文章">
			这是一篇测试文章
		</li>
    	<li class="table_list_l table_list_l150">2013-03-28 15:50:12</li>
    	<li class="table_list_l table_list_l120">新闻资讯</li>
		<li class="table_list_l table_list_l100">admin</li>
		<li class="table_list_l table_list_l80">1352</li>
		<li class="table_list_l table_list_l80">0</li>
    	    	<li class="table_list_l table_list_l120" accessStatus=1>
    		<a href="http://localhost:82/laugh/index.php?s=Article/View&archiveid=1" target="_blank">预览</a>
    		<a href="/laugh/admin/index.php?s=Article/edit&archiveid=1">修改</a>
    		<a delurl="/laugh/admin/index.php?s=Archive/recoverArchive&archiveid=1" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        </div>

<div id="opBottom" class="opBottom">
	<a href="javascript:;" name="checkAll">全选</a>
	<a href="javascript:;" name="unCheckAll">取消</a>
	<a href="javascript:;" name="archiveUpdate">更新</a>
	<a href="javascript:;" name="archiveReview">审核</a>
	<a href="/laugh/admin/index.php?s=Article/moveArchive" name="archiveMove">移动</a>
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