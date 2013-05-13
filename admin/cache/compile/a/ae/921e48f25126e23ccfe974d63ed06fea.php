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
	<a href="/laugh/admin/index.php?s=System/systemInfo" class="opTopOn">系统参数设置</a> |
	<a href="/laugh/admin/index.php?s=System/addSystemcfg">添加新变量</a>
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
						<input type="text" name="host" value="" class="input w350" />
					</li>
																			<li class="formblockauto">
						<span>网站名称:</span>
						<input type="text" name="sitename" value="" class="input w350" />
					</li>
																			<li class="formblockauto">
						<span>网站关键字:</span>
						<textarea name="keywords" rows="3" cols="47"></textarea>
					</li>
												</div>
						<div class="shtabcontent ">
														<li class="formblockauto">
						<span>管理中心目录:</span>
						<input type="text" name="admin_path" value="" class="input w350" />
					</li>
																			<li class="formblockauto">
						<span>文章回收站(是/否)开启:</span>
						<div class="item_list fleft">
							<label><input type="radio" name="archive_recover" value="1" class="radio" checked="checked" />是</label>
							<label><input type="radio" name="archive_recover" value="0" class="radio" />否</label>
						</div>
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