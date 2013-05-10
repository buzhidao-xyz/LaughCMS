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
	<div class="formtitle"><h5>栏目顶部广告</h5></div>
	<form name="newform" action="/laugh/admin/index.php?s=Advertise/saveTopAd" method="post" class="newform" enctype="multipart/form-data">
		<ul class="formbody">
			<li class="formblock">
				<span>图片:</span>
				<input type="file" name="AdImage" class="input inputfile" style="width:230px;" />
				*尺寸 1000*80
			</li>
			<li class="formblock">
				<span>标题:</span>
				<input type="text" name="title" value="" class="input" style="width:250px;" />
			</li>
			<li class="formblock">
				<span>链接:</span>
				<input type="text" name="link" value="" class="input" style="width:300px;" />
			</li>
			<li class="formblock">
				<span>是否启用: </span>
				<div class="item_list fleft">
					<label><input type="radio" name="status" value="1" class="radio" checked="checked" />启用</label>
					<label><input type="radio" name="status" value="0" class="radio" />禁用</label>
				</div>
			</li>
			<li class="formblock bordernone bgf6">
				<input type="submit" name="subut" class="button btnblue2" value="添加" />
			</li>
		</ul>
	</form>
</div>
<div class="captitle"><h5>栏目顶部广告列表【总计2】</h5></div>
<ul class="table_list_title">
	<li class="table_list_l table_list_l30 table_list_no"></li>
	<li class="table_list_l table_list_l250">标题</li>
	<li class="table_list_l table_list_l350">链接</li>
	<li class="table_list_l table_list_l50">状态</li>
		<li class="table_list_l table_list_l170" accessStatus=1>管理</li>
	</ul>
<div class="contentTableList">
    		<ul class="table_list">
		<li class="table_list_l table_list_l30 table_list_no">1</li>
		<li class="table_list_l table_list_l250" title="栏目顶部广告">栏目顶部广告</li>
		<li class="table_list_l table_list_l350" title="http://www.baidu.com/">http://www.baidu.com/</li>
		<li class="table_list_l table_list_l50"><font color="green">启用</font></li>
				<li class="table_list_l table_list_l200" accessStatus=1>
			<a name="imageview" href="http://localhost:82/laugh/Uploads/AdImage/1368170151_s68hvp_191_1368168489_ru3un2_8465_ad_banner.png">查看图片</a>
			<a name="ajax" href="/laugh/admin/index.php?s=Advertise/UpdateHomeCenterAdStatus&id=5&status=0">启用/禁用</a>
			<a name="ajax" msg="确定删除吗？" href="/laugh/admin/index.php?s=Advertise/DeleteAdvertise&id=5">删除</a>
		</li>
			</ul>
		<ul class="table_list">
		<li class="table_list_l table_list_l30 table_list_no">1</li>
		<li class="table_list_l table_list_l250" title="栏目顶部广告">栏目顶部广告</li>
		<li class="table_list_l table_list_l350" title="http://www.163.com/">http://www.163.com/</li>
		<li class="table_list_l table_list_l50"><font color="green">启用</font></li>
				<li class="table_list_l table_list_l200" accessStatus=1>
			<a name="imageview" href="http://localhost:82/laugh/Uploads/AdImage/1368170176_qzdzxd_6220_1368168531_sqifub_4518_ad_banner0.png">查看图片</a>
			<a name="ajax" href="/laugh/admin/index.php?s=Advertise/UpdateHomeCenterAdStatus&id=6&status=0">启用/禁用</a>
			<a name="ajax" msg="确定删除吗？" href="/laugh/admin/index.php?s=Advertise/DeleteAdvertise&id=6">删除</a>
		</li>
			</ul>
		</div>
<script type="text/javascript">
$(document).ready(function (){
$("form[name=newform]").submit(function (){
	if (!$("input[name=AdImage]").val()) {
		alert("请选择图片！");
		return false;
	}
	if (!$("input[name=title]").val()) {
		alert("请填写标题！");
		return false;
	}
});
var AdvertiseClass = function (){
	var Obj = {
		imageview: $("a[name=imageview]")
	}
	Obj.imageview.click(function (){
		window.parent.colorboxImage($(this).attr("href"));
		return false;
	});
}
AdvertiseClass();
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