<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="keywords" content="">
<link type="text/css" rel="stylesheet" href="themes/default/style/common.css" media="screen">
<link type="text/css" rel="stylesheet" href="themes/default/style/base.css" media="screen">
<link type="text/css" rel="stylesheet" href="themes/default/style/global.css" media="screen">
<script type="text/javascript" src="themes/default/js/jquery.js"></script>
<title>管理中心</title>
<script type="text/javascript">
var JS_APP = '/laugh/admin';
</script>
</head>

<body>
<div id="header">
    <div class="logo">
        <h1>管理中心</h1>
    </div>
    <div class="uinfo">
        <p>您好 , <em>admin</em> [ <a target="_top" href="/laugh/admin/?s=index/logout">退出</a> ]</p>
    </div>
    <div class="nav">
        <ul class="hmenu">
            <li class="navon"><em><a hidefocus="true" href="/laugh/admin/?s=index/body&groupid=0" target="body">管理中心</a></em></li>
                        <li><em><a hidefocus="true" href="/laugh/admin/?s=public/body&groupid=1" target="body">系统管理</a></em></li>
                        <li><em><a hidefocus="true" href="/laugh/admin/?s=public/body&groupid=2" target="body">用户中心</a></em></li>
                    </ul>
        <div id="navlink" class="navlink">
            <p>管理中心&nbsp;&gt;</p>
        </div>
        <div class="navbd"></div>
        <div class="sitemapbtn">
            <p><a target="_blank" href="/laugh/?s=index">网站首页</a></p>
            <p><a hidefocus="true" href="javascript:;" target="body">管理中心</a></p>
            <p><a href="javascript:;">网站地图</a></p>
        </div>
    </div>
</div>
<style>
body {
    overflow:hidden;
}
</style>
<script language="javascript">
$(document).ready(function() {
	//$('#header .nav .hmenu li:eq(0)').attr('class', 'navon');
});
</script>
</body>
<script type="text/javascript" src="themes/default/js/public.js"></script>
<script type="text/javascript" src="themes/default/js/div_window.js"></script>
<script type="text/javascript" src="themes/default/js/common.js"></script>
<script type="text/javascript" src="themes/default/js/ajax.js"></script>
</html>