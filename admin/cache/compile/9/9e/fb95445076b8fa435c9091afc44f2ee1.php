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
	$(document).ready(function () {
		var JS_APP = '/laugh/admin';
		var style_path = "themes/smooth/style/colors";

		$("#box-tabs, #box-left-tabs").tabs();
	});
	</script>
</head>

<body>
<div id="content" style="height:100%;background: url('themes/smooth/images/content.png') repeat-y top left;">
	<!-- end content / left -->
	<div id="left">
		<div id="menu">
        				<h6 id="h-menu-menu0"><a href="javascript:#menu0"><span>注册与访问控制</span></a></h6>
			        				<h6 id="h-menu-menu1"><a href="javascript:#menu1"><span>角色管理</span></a></h6>
			        				<h6 id="h-menu-menu2"><a href="javascript:#menu2"><span>日志管理</span></a></h6>
			        				<h6 id="h-menu-menu3"><a href="javascript:#menu3"><span>组管理</span></a></h6>
						<ul id="menu-menu3" class="closed">
								<li><a target="main" hidefocus="true" href="/laugh/admin/?s=Group/manageGroup" class="">管理组</a></li>
								<!--
				<li class="collapsible last">
					<a href="#" class="plus">Offers</a>
					<ul class="collapsed">
						<li><a href="">Coupon Codes</a></li>
						<li class="last"><a href="">Rebates</a></li>
					</ul>
				</li>
				-->
			</ul>
			        				<h6 id="h-menu-menu4"><a href="javascript:#menu4"><span>节点管理</span></a></h6>
						<ul id="menu-menu4" class="closed">
								<li><a target="main" hidefocus="true" href="/laugh/admin/?s=Node/newNode" class="">添加节点</a></li>
								<li><a target="main" hidefocus="true" href="/laugh/admin/?s=Node/manageNode" class="">管理节点</a></li>
								<!--
				<li class="collapsible last">
					<a href="#" class="plus">Offers</a>
					<ul class="collapsed">
						<li><a href="">Coupon Codes</a></li>
						<li class="last"><a href="">Rebates</a></li>
					</ul>
				</li>
				-->
			</ul>
			        				<h6 id="h-menu-menu5"><a href="javascript:#menu5"><span>管理员用户管理</span></a></h6>
			        			</div>
	</div>
	<!-- end content / left -->
</div>
<script type="text/javascript" src="themes/smooth/js/public.js"></script>
<script type="text/javascript" src="themes/smooth/js/div_window.js"></script>
<script type="text/javascript" src="themes/smooth/js/common.js"></script>
<script type="text/javascript" src="themes/smooth/js/ajax.js"></script>
</body>
</html>