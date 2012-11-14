<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Laugh Admin Center</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<!-- stylesheets -->
	<link rel="stylesheet" type="text/css" href="themes/smooth/style/reset.css" />
	<link rel="stylesheet" type="text/css" href="themes/smooth/style/style.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="themes/smooth/style/table.css" />
	<link id="color" rel="stylesheet" type="text/css" href="themes/smooth/style/colors/blue.css" />
	<!-- scripts (jquery) -->
	<script src="themes/smooth/js/jquery-1.4.2.min.js" type="text/javascript"></script>
	<!--[if IE]><script language="javascript" type="text/javascript" src="themes/smooth/js/excanvas.min.js"></script><![endif]-->
	<script src="themes/smooth/js/jquery-ui-1.8.custom.min.js" type="text/javascript"></script>
	<script src="themes/smooth/js/jquery.ui.selectmenu.js" type="text/javascript"></script>
	<script src="themes/smooth/js/jquery.flot.min.js" type="text/javascript"></script>
	<script src="themes/smooth/js/tiny_mce/tiny_mce.js" type="text/javascript"></script>
	<script src="themes/smooth/js/tiny_mce/jquery.tinymce.js" type="text/javascript"></script>
	<!-- scripts (custom) -->
	<script src="themes/smooth/js/smooth.js" type="text/javascript"></script>
	<script src="themes/smooth/js/smooth.menu.js" type="text/javascript"></script>
	<script src="themes/smooth/js/smooth.chart.js" type="text/javascript"></script>
	<script src="themes/smooth/js/smooth.table.js" type="text/javascript"></script>
	<script src="themes/smooth/js/smooth.form.js" type="text/javascript"></script>
	<script src="themes/smooth/js/smooth.dialog.js" type="text/javascript"></script>
	<script src="themes/smooth/js/smooth.autocomplete.js" type="text/javascript"></script>
	<script type="text/javascript">
	var JS_APP = '/laugh/admin';
	var style_path = "themes/smooth/style/colors";
	$(document).ready(function () {
		$("#box-tabs, #box-left-tabs").tabs();
	});
	</script>
</head>

<body>
<!-- header -->
<div id="header">
    <!-- logo -->
    <div id="logo">
        <h1><a hidefocus="true" href="/laugh/admin/?s=index/body&groupid=0" title="管理中心" target="body">管理中心</a></h1>
    </div>
    <!-- end logo -->
    <!-- user -->
    <ul id="user">
        <li class="first">您好 , <em>admin</em> [ <a target="_top" href="/laugh/admin/?s=index/logout">退出</a> ]</li>
        <li><a target="_blank" href="/laugh/?s=index">网站首页</a></li>
        <li class="last"><a href="javascript:;">网站地图</a></li>
    </ul>
    <!-- end user -->
    <div id="header-inner">
        <div id="home">
            <a hidefocus="true" href="/laugh/admin/?s=index/body&groupid=0" title="管理中心" target="body"></a>
        </div>
        <!-- quick -->
        <ul id="quick">
            <li>
                <a hidefocus="true" href="/laugh/admin/?s=index/body&groupid=0" title="管理中心" target="body"><span class="normal">管理中心</span></a>
            </li>
                        <li>
                <a href="/laugh/admin/?s=public/body&groupid=1" title="系统管理" target="body"><span>系统管理</span></a>
                <!--
                <ul>
                    <li><a href="#">Manage Products</a></li>
                    <li><a href="#">Add Product</a></li>
                    <li>
                        <a href="#" class="childs">Sales</a>
                        <ul>
                            <li><a href="">Today</a></li>
                            <li class="last"><a href="">Yesterday</a></li>
                        </ul>
                    </li>
                    <li class="last">
                        <a href="#" class="childs">Offers</a>
                        <ul>
                            <li><a href="">Coupon Codes</a></li>
                            <li class="last"><a href="">Rebates</a></li>
                        </ul>
                    </li>
                </ul>
                -->
            </li>
                        <li>
                <a href="/laugh/admin/?s=public/body&groupid=2" title="用户中心" target="body"><span>用户中心</span></a>
                <!--
                <ul>
                    <li><a href="#">Manage Products</a></li>
                    <li><a href="#">Add Product</a></li>
                    <li>
                        <a href="#" class="childs">Sales</a>
                        <ul>
                            <li><a href="">Today</a></li>
                            <li class="last"><a href="">Yesterday</a></li>
                        </ul>
                    </li>
                    <li class="last">
                        <a href="#" class="childs">Offers</a>
                        <ul>
                            <li><a href="">Coupon Codes</a></li>
                            <li class="last"><a href="">Rebates</a></li>
                        </ul>
                    </li>
                </ul>
                -->
            </li>
                    </ul>
        <!-- end quick -->
        <div class="corner tl"></div>
        <div class="corner tr"></div>
    </div>
</div>
<!-- end header -->
<style>
body {
    overflow:hidden;
}
</style>
<script type="text/javascript" src="themes/smooth/js/div_window.js"></script>
<script type="text/javascript" src="themes/smooth/js/common.js"></script>
<script type="text/javascript" src="themes/smooth/js/ajax.js"></script>
</body>
</html>