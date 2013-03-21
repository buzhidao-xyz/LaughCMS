<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="keywords" content="">
<link type="text/css" rel="stylesheet" href="themes/default/style/common.css" media="screen">
<link type="text/css" rel="stylesheet" href="themes/default/style/frame.css" media="screen">
<link type="text/css" rel="stylesheet" href="themes/default/style/global.css" media="screen">
<link type="text/css" rel="stylesheet" href="themes/default/style/style.css" media="screen">
<script type="text/javascript" src="public/js/jquery.js"></script>
<script type="text/javascript" src="public/js/jquery.idTabs.min.js"></script>
<script type="text/javascript" src="themes/default/js/common.js"></script>
<script type="text/javascript" src="themes/default/js/frame.js"></script>
<title>Laugh CMS - 内容管理系统</title>
<script type="text/javascript">
var JS_APP = '/laugh';
</script>
</head>

<body>
<div id="Top">
	
</div>
<div id="Header">
	<div id="HeaderMain">
		<div id="HeaderStatus">
			<div class="Logo">
				<a href="/laugh"><img src="/laugh/themes/default/images/logo.png" /></a>
			</div>
			<div class="Center">
				内容管理系统
			</div>
			<div class="Operate">
				<div class="OpTop">
					<a href="javascript:;" id="setHome">设为首页</a> | <a href="javascript:;" id="addFavorite">收藏本站</a>
				</div>
				<div class="Search">
					<form method="POST" action="/laugh/index.php?s=Search">
						<input type="text" onfocus="if (this.value=='搜索...') this.value='';" onblur="if (this.value=='') this.value='搜索...';" value="搜索..." size="20" class="sinput" name="keyword">
						<input type="submit" class="sbutton" value="GO">
					</form>
				</div>
			</div>
		</div>
		<link type="text/css" rel="stylesheet" href="public/plugin/superfish/css/superfish.css" media="screen">
<link type="text/css" rel="stylesheet" href="themes/default/style/navigation.css" media="screen">
<ul class="headerNavigation">
		<li>
		<a href="/laugh/index.php?s=Index/index" class="">网站首页</a>
			</li>
		<li>
		<a href="/laugh/index.php?s=Article/index" class="">新闻资讯</a>
				<ul class="SubNavigation">
						<li>
				<a href="/laugh/index.php?s=Article/index">子栏目一</a>
							</li>
						<li>
				<a href="/laugh/index.php?s=Article/index">子栏目二</a>
								<ul>
										<li><a href="/laugh/index.php?s=Article/index">子子栏目一</a></li>
									</ul>
							</li>
					</ul>
			</li>
		<li>
		<a href="/laugh/index.php?s=Product/index" class="navon">产品展示</a>
			</li>
		<li>
		<a href="/laugh/index.php?s=Image/index" class="">客户案例</a>
			</li>
		<li>
		<a href="/laugh/index.php?s=Download/index" class="">下载中心</a>
			</li>
		<li>
		<a href="/laugh/index.php?s=Cooperate/index" class="">招贤纳士</a>
			</li>
		<li>
		<a href="/laugh/index.php?s=Public/AboutUS" class="">关于我们</a>
			</li>
		<li>
		<a href="/laugh/index.php?s=Public/ContactUS" class="">联系我们</a>
			</li>
	</ul>
<script type="text/javascript" src="public/plugin/superfish/js/hoverIntent.js"></script>
<script type="text/javascript" src="public/plugin/superfish/js/superfish.js"></script>
<script type="text/javascript">
	$('ul.headerNavigation').superfish();
</script>
	</div>
</div>
<script type="text/javascript">
//加入收藏 <a onclick="AddFavorite(window.location,document.title)">加入收藏</a>
function AddFavorite(sURL, sTitle)
{
    try {
        window.external.addFavorite(sURL, sTitle);
    } catch(e) {
        try {
            window.sidebar.addPanel(sTitle, sURL, "");
        } catch(e) {
            alert("加入收藏失败，请使用Ctrl+D进行添加");
        }
    }
}

//设为首页 <a onclick="SetHome(this,window.location)">设为首页</a>
function SetHome(obj,vrl){
    try {
        obj.style.behavior = 'url(#default#homepage)';
        obj.setHomePage(vrl);
    } catch(e) {
        if(window.netscape) {
            try {
                netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");

	            var prefs = Components.classes['@mozilla.org/preferences-service;1'].getService(Components.interfaces.nsIPrefBranch);
	            prefs.setCharPref('browser.startup.homepage',vrl);
            } catch (e) {
                alert("此操作被浏览器拒绝！\n请在浏览器地址栏输入“about:config”并回车\n然后将 [signed.applets.codebase_principal_support]的值设置为'true',双击即可。");
            }
        }
    }
}
$(document).ready(function (){
	$("#setHome").click(function (){
		SetHome(this,window.location.href);
	});
	$("#addFavorite").click(function (){
		AddFavorite(window.location.href,$("title").text());
	});
});
</script>
<div id="WrapContainer" class="wrap">
	<div class="adBanner block">
		<a href="javascript:;" target="_blank"><img src="themes/default/images/ad_banner.png" width="1000" height="80" /></a>
	</div>
	<div class="CurPosition mtop5">
		当前位置: <a href="/laugh">首页</a> > <a href="/laugh/index.php?s=article">产品展示</a>
	</div>
	<div id="CenterShow" class="block mtop5">
		<div id="mainBlock" class="fleft w740">
			<div id="ImgListBlock" class="boxBlock">
				<div class="boxBlockTitle">
					<span class="title">产品展示</span>
				</div>
				<div class="boxBlockBody">
					<ul class="ProductList">
						<li><a href="/laugh/index.php?s=Product/product"><img src="themes/default/images/product/product_img1.jpg" /></a><a href="/laugh/index.php?s=Product/product">CTI融合通信专业资讯网</a></li>
						<li><a href="javascript:;"><img src="themes/default/images/product/product_img1.jpg" /></a><a href="javascript:;">产品一</a></li>
						<li><a href="javascript:;"><img src="themes/default/images/product/product_img1.jpg" /></a><a href="javascript:;">产品一</a></li>
					</ul>
					<div id="compage" class="pagination">
		<a class="pageprev graya fleft" href="/laugh/index.php?s=Product%2Findex&page=1">首页</a>
		<a class="pageprev graya fleft" href="javascript:;">上一页</a> 
	<span class="pageList none">
									<span class="current fleft" href="" style=""> 1 </span>
								<a class="jumpPageBtn fleft" href="/laugh/index.php?s=Product%2Findex&page=2"> 2 </a>
								<a class="jumpPageBtn fleft" href="/laugh/index.php?s=Product%2Findex&page=3"> 3 </a>
								<a class="jumpPageBtn fleft" href="/laugh/index.php?s=Product%2Findex&page=4"> 4 </a>
								<a class="jumpPageBtn fleft" href="/laugh/index.php?s=Product%2Findex&page=5"> 5 </a>
								<a class="jumpPageBtn fleft" href="/laugh/index.php?s=Product%2Findex&page=6"> 6 </a>
								<a class="jumpPageBtn fleft" href="/laugh/index.php?s=Product%2Findex&page=7"> 7 </a>
								<a class="jumpPageBtn fleft" href="/laugh/index.php?s=Product%2Findex&page=8"> 8 </a>
								<a class="jumpPageBtn fleft" href="/laugh/index.php?s=Product%2Findex&page=9"> 9 </a>
								<a class="jumpPageBtn fleft" href="/laugh/index.php?s=Product%2Findex&page=10"> 10 </a>
								<a class="jumpPageBtn fleft" href="/laugh/index.php?s=Product%2Findex&page=11"> 11 </a>
				</span>
	<a class="pagenext graya fleft" href="/laugh/index.php?s=Product%2Findex&page=2">下一页</a>
		<a class="pageprev graya fleft" href="/laugh/index.php?s=Product%2Findex&page=12">末页</a>
	</div>

<script>
var bindpage = function($obj){
    $obj.find('.pagecur').hover(function(){
		$obj.find('.pageList').show();
	},function(){
		$obj.find('.pageList').hide();
	})
}
if($('#compage').length>0){
    //bindpage($('#compage'));
} else if ($('#facepage').length>0) {
    //bindpage($('#facepage'));   
}
</script>


				</div>
			</div>
		</div>
		<div id="sideBlock" class="fleft w250 mleft10">
	<div class="boxBlock">
		<div class="boxBlockTitle">
			<span class="title">快捷导航</span>
		</div>
		<div class="boxBlockBody h200">
			<ul class="SideNavList">
				<li><a href="javascript:;">新闻资讯</a></li>
				<li><a href="javascript:;">产品展示</a></li>
				<li><a href="javascript:;">招贤纳士</a></li>
				<li><a href="javascript:;">关于我们</a></li>
				<li><a href="javascript:;">联系我们</a></li>
			</ul>
		</div>
	</div>
	<div class="boxBlock mtop10">
		<div class="boxBlockTitle">
			<span class="title">联系我们</span>
		</div>
		<div class="boxBlockBody h250">
			<div class="contactUS">
				<h5>电 话: XXXXXXXX</h5>
				<h5>邮 编: XXXXXXXX</h5>
				<h5>网 址: www.xxx.com</h5>
				<h5>Email: admin@admin.com</h5>
				<h5>联系地址: 江苏省苏州市工业园区若水路1号</h5>
				<h5>联系人: XXX</h5>
				<h4>Laugh CMS 软件科技公司</h4>
			</div>
		</div>
	</div>
</div>
		<div class="clear"></div>
	</div>
	<div id="Flink" class="boxBlock block">
	<div class="FlinkTitle">
		<span class="title">友情链接</span>
		<ul id="FlinkboxTab" class="boxTab fleft">
			<li><a tabid="#flinkboxTab1" href="javascript:;" class="bordernone">分类一</a></li>
			<li><a tabid="#flinkboxTab2" href="javascript:;">分类二</a></li>
		</ul>
	</div>
	<div class="FlinkBody">
		<div id="flinkboxTab1" class="boxTabContent">
			<ul class="flinkList">
				<li><a href="javascript:;">链接一</a></li>
				<li><a href="javascript:;">链接二三</a></li>
				<li><a href="javascript:;">链接四四四四</a></li>
				<li><a href="javascript:;">链接六六六</a></li>
				<li><a href="javascript:;">链接五六七八九十</a></li>
			</ul>
		</div>
		<div id="flinkboxTab2" class="boxTabContent">
			<ul class="flinkList">
				<li><a href="javascript:;">链接二</a></li>
			</ul>
		</div>
	</div>
</div>
<script type="text/javascript">
$(document).ready(function() {
//友情链接切换tab
$("#Flink ul#FlinkboxTab").idTabs(function(id,list,set){
	$("a",set).removeClass("selected").filter("[tabid='"+id+"']",set).addClass("selected"); 
	for(i in list) $(list[i]).hide();
	$(id).fadeIn();
	return false;
});
});
</script>
</div>
<div id="Footer">
	<ul id="Link">
		<li class="bordernone"><a href="/laugh/index.php?s=Cooperate">招贤纳士</a></li>
		<li><a href="/laugh/index.php?s=Public/AboutUS">关于我们</a></li>
		<li><a href="/laugh/index.php?s=Cooperate">联系我们</a></li>
		<li><a href="javascript:;">在线手册</a></li>
		<li><a href="/laugh/index.php?s=Plugin/QA">帮助中心</a></li>
	</ul>
	<div id="copyright">
		Laugh CMS 软件科技公司
		<br/>
		Powered by <a target="_blank" href="javascript:;">LaughCMS v1.0 Released</a> 版权所有 © 2012-2013, All right reserved. 
	</div>
</div>
<script type="text/javascript" src="public/js/scrollToTop.js"></script>
<!-- Baidu Button BEGIN -->
<script type="text/javascript" id="bdshare_js" data="type=slide&amp;img=1&amp;pos=left&amp;uid=6599680" ></script>
<script type="text/javascript" id="bdshell_js"></script>
<script type="text/javascript">
var bds_config = {
	"bdTop": 170
};
document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000);
</script>
<!-- Baidu Button END -->
</body>
</html>