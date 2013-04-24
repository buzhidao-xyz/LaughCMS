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
<link type="text/css" rel="stylesheet" href="public/plugin/colorbox/colorbox.css" media="screen">
<script type="text/javascript" src="public/plugin/colorbox/jquery.colorbox.js"></script>
<title>管理中心</title>
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
<link rel="stylesheet" type="text/css" href="themes/blue/style/frame.css" />
<link rel="stylesheet" type="text/css" href="themes/blue/style/header.css" />
<div id="header">
<!-- header -->
<div class="headerTop">
    <div class="logo"><a href="/laugh/admin"><img src="themes/green/images/logo.png" width="180" height="60" /></a></div>
    <div class="headerNav">
        <div class="uinfo">
            您好 , admin [ <a href="/laugh/admin/index.php?s=index/logout">退出</a> ] | <a href="/laugh/admin/index.php?s=index">系统主页</a> | <a href="http://localhost:82/laugh/index.php?s=index" target="_blank">网站主页</a>
        </div>
        <div class="nav">
            <ul class="hmenu">
                <li class="navon"><a hidefocus="true" href="javascript:;" groupid="0" title="管理中心" class="navHeadMenu">管理中心</a></li>
                                <li><a hidefocus="true" href="javascript:;" groupid="1" title="系统管理" class="navHeadMenu">系统管理</a></li>
                                <li><a hidefocus="true" href="javascript:;" groupid="2" title="会员中心" class="navHeadMenu">会员中心</a></li>
                                <li><a hidefocus="true" href="javascript:;" groupid="3" title="核心内容" class="navHeadMenu">核心内容</a></li>
                                <li><a hidefocus="true" href="javascript:;" groupid="4" title="网站更新" class="navHeadMenu">网站更新</a></li>
                                <li><a hidefocus="true" href="javascript:;" groupid="5" title="系统插件" class="navHeadMenu">系统插件</a></li>
                                <li><a hidefocus="true" href="javascript:;" groupid="6" title="系统设置" class="navHeadMenu">系统设置</a></li>
                            </ul>
        </div>
    </div>
</div>
<div class="headerFoot"></div>
<!-- header -->
</div>
<div id="menuTree">
<!-- menu -->
<div class="menu">
    <ul>
        <li class="menulist">
			<div class="menutree1"><a target="main" hidefocus="true" href="javascript:;" class="plus">基本信息</a></div>
			<ul class="menusub">
				<li class="menuTopLine"></li>
				<li><a hidefocus="true" href="/laugh/admin/index.php?s=Public/welcome" target="main">系统主页</a></li>
				<li><a hidefocus="true" href="/laugh/admin/index.php?s=Admin/profile" target="main">个人信息</a></li>
			</ul>
		</li>
    </ul>
</div>
<script type="text/javascript">
$(document).ready(function (){
	$("li.menulist:eq(0) > div.menutree1 > a").addClass("mius");
	$("li.menulist > ul.menusub").css("display","block");
	// $("li.menulist:eq(0) > ul.menusub > li:eq(1) > a").addClass('tabon');
});
</script>
</div>
<div id="main">
<iframe frameborder="0" id="mainframe" name="main" src="/laugh/admin/index.php?s=public/welcome" scrolling="yes"></iframe>
</div>
<div id="bottom">
Copyright &copy; xxx. 2012-2015
</div>
</body>
<script type="text/javascript" src="themes/green/js/jquery.corner.js"></script>
<script type="text/javascript" src="themes/green/js/public.js"></script>
<script type="text/javascript" src="themes/green/js/common.js"></script>
<script type="text/javascript" src="themes/green/js/ajax.js"></script>
<script type="text/javascript" src="public/js/jquery.idTabs.min.js"></script>
</html>