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
var JS_APPM = 'http://localhost/laugh';
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
	<a href="/laugh/admin/index.php?s=System/systemInfo" class="opTopOn">系统参数设置</a> |
	<a href="/laugh/admin/index.php?s=System/addSystemcfg">添加新变量</a>
	<a href="/laugh/admin/index.php?s=System/makeCacheConfig">生成配置缓存文件</a>
</div>
<div class="formContainer" accessStatus=1>
	<div class="formtitle"><h5>系统参数设置</h5></div>
	<form name="newform" action="/laugh/admin/index.php?s=System/saveSystemInfo" method="post" class="newform">
		<ul class="formbody">
			<div class="shtabtitlec">
				<div class="shtabtitle shtabcurrent"><a href="javascript:;"><span>站点设置</span></a></div>
				<div class="shtabtitle"><a href="javascript:;"><span>核心设置</span></a></div>
			</div>
			<div class="shtabcontentc">
									<div class="shtabcontent shtabcontentcurrent">
														<li class="formblockauto">
						<span>网站地址:</span>
						<input type="text" name="host" value="http://localhost/laugh" class="input w350" />
					</li>
																			<li class="formblockauto">
						<span>网站名称:</span>
						<input type="text" name="sitename" value="Laugh CMS内容管理系统" class="input w350" />
					</li>
																			<li class="formblockauto">
						<span>网站关键字:</span>
						<textarea name="keywords" rows="4" cols="47">Laugh,CMS,LaughCMS,内容,管理,系统</textarea>
					</li>
																			<li class="formblockauto">
						<span>网站描述:</span>
						<textarea name="description" rows="4" cols="47">Laugh CMS内容管理系统</textarea>
					</li>
																			<li class="formblockauto">
						<span>首页网站标题:</span>
						<input type="text" name="HomeSiteTitle" value="Laugh CMS内容管理系统" class="input w350" />
					</li>
												</div>
						<div class="shtabcontent ">
														<li class="formblockauto">
						<span>管理中心目录:</span>
						<input type="text" name="admin_path" value="admin" class="input w350" />
					</li>
																			<li class="formblockauto">
						<span>文章回收站(是/否)开启:</span>
						<div class="item_list fleft">
							<label><input type="radio" name="archive_recover" value="1" class="radio" checked="checked" />是</label>
							<label><input type="radio" name="archive_recover" value="0" class="radio"  />否</label>
						</div>
					</li>
																			<li class="formblockauto">
						<span>联系我们基本信息:</span>
						<textarea name="AboutUs" rows="4" cols="47"><h5><font color="#FF6600"><b>Laugh CMS内容管理系统</b></font></h5>
<h5><font color="#FF6600">Laugh CMS</font></h5>
<h5>电 话: 0512-36607986 15962257765</h5>
<h5>传 真: 0512-36607986</h5>
<h5>网 址: www.laughcms.net</h5>
<h5>地 址: 江苏省苏州市</h5></textarea>
					</li>
												</div>
									</div>
			<li class="formblock bordernone bgf6">
				<input type="submit" name="subut" class="button btnblue2" value="确定" />
			</li>
		</ul>
	</form>
</div>
<style type="text/css">
ul.formbody li.formblockauto {
    border-bottom: 1px dashed #E1E1E1;
    height: auto;
    overflow: hidden;
    padding: 5px 0;
    width: auto;
}
ul.formbody li.formblockauto span {
	width: 300px;
    padding-top: 10px;
    text-indent: 0;
    padding-left: 30px;
    text-align: center;
}
</style>
<script type="text/javascript">
$(document).ready(function (){
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