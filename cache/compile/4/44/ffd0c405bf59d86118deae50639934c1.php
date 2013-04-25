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
		<a href="/laugh/index.php?s=Index/index&columnid=1" class="">网站首页</a>
			</li>
		<li>
		<a href="/laugh/index.php?s=Article/index&columnid=2" class="">新闻资讯</a>
				<ul class="SubNavigation">
						<li>
				<a href="/laugh/index.php?s=Article/index&columnid=3">IT知识</a>
								<ul>
										<li><a href="/laugh/index.php?s=Article/index&columnid=12">PHP知识</a></li>
									</ul>
							</li>
						<li>
				<a href="/laugh/index.php?s=Article/index&columnid=4">网络知识</a>
								<ul>
										<li><a href="/laugh/index.php?s=Article/index&columnid=5">前端知识</a></li>
									</ul>
							</li>
						<li>
				<a href="/laugh/index.php?s=Article/index&columnid=13">数据库知识</a>
							</li>
					</ul>
			</li>
		<li>
		<a href="/laugh/index.php?s=Product/index&columnid=6" class="">产品展示</a>
				<ul class="SubNavigation">
						<li>
				<a href="/laugh/index.php?s=Product/index&columnid=14">网络产品</a>
							</li>
						<li>
				<a href="/laugh/index.php?s=Product/index&columnid=15">电子产品</a>
							</li>
					</ul>
			</li>
		<li>
		<a href="/laugh/index.php?s=Image/index&columnid=7" class="navon">客户案例</a>
			</li>
		<li>
		<a href="/laugh/index.php?s=Download/index&columnid=8" class="">下载中心</a>
			</li>
		<li>
		<a href="/laugh/index.php?s=Plugin/Cooperate&columnid=9" class="">招贤纳士</a>
			</li>
		<li>
		<a href="/laugh/index.php?s=Public/AboutUS&columnid=10" class="">关于我们</a>
			</li>
		<li>
		<a href="/laugh/index.php?s=Public/ContactUS&columnid=11" class="">联系我们</a>
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
		当前位置: <a href="/laugh">首页</a> > <a href="/laugh/index.php?s=Image/index&columnid=7">客户案例</a>
	</div>
	<div id="CenterShow" class="block mtop5">
		<div id="mainBlock" class="fleft w740">
			<div class="boxBlock">
				<div class="boxBlockTitle">
					<span class="title">客户案例一</span>
				</div>
				<div class="boxBlockBody">
					<div class="contentBlock">
						<div class="articleTpl imageTpl">
	<h2 class="title">客户案例一</h2>
	<div class="status">
		<span class="title">点击次数:</span>
		<span class="content">0 次</span>
		<span class="title">发布时间:</span>
		<span class="content">2013-04-11 16:49:17</span>
		<span class="title">作者:</span>
		<span class="content">admin</span>
	</div>
	<div class="body">
		<div id="container" class="transitions-enabled infinite-scroll clearfix">
								  	<div class="box col2">
		    	<p>
		      		<a rel="group" href="/laugh/Uploads/Image/201304/08/1365413641_bydp7p_7088.jpg" title="案例图片一"><img src="/laugh/Uploads/Image/201304/08/thumb_1365413641_bydp7p_7088.jpg" alt="案例图片一" /></a>
		    	</p>
		  	</div>
		  			  	<div class="box col2">
		    	<p>
		      		<a rel="group" href="/laugh/Uploads/Image/201304/09/1365474374_4s7jxa_5777.jpg" title="案例图片二"><img src="/laugh/Uploads/Image/201304/09/thumb_1365474374_4s7jxa_5777.jpg" alt="案例图片二" /></a>
		    	</p>
		  	</div>
		  			  	<div class="box col2">
		    	<p>
		      		<a rel="group" href="/laugh/Uploads/Image/201304/09/1365474384_lld6f7_2865.jpg" title="案例图片三"><img src="/laugh/Uploads/Image/201304/09/thumb_1365474384_lld6f7_2865.jpg" alt="案例图片三" /></a>
		    	</p>
		  	</div>
		  			  	<div class="box col2">
		    	<p>
		      		<a rel="group" href="/laugh/Uploads/Image/201304/09/1365474406_tzcrus_885.jpg" title="案例图片四"><img src="/laugh/Uploads/Image/201304/09/thumb_1365474406_tzcrus_885.jpg" alt="案例图片四" /></a>
		    	</p>
		  	</div>
		  			  	<div class="box col2">
		    	<p>
		      		<a rel="group" href="/laugh/Uploads/Image/201304/09/1365474438_z5r3pz_3874.jpg" title="案例图片五"><img src="/laugh/Uploads/Image/201304/09/thumb_1365474438_z5r3pz_3874.jpg" alt="案例图片五" /></a>
		    	</p>
		  	</div>
		  			  	<div class="box col2">
		    	<p>
		      		<a rel="group" href="/laugh/Uploads/Image/201304/09/1365474465_e4anmy_3273.jpg" title="案例图片六"><img src="/laugh/Uploads/Image/201304/09/thumb_1365474465_e4anmy_3273.jpg" alt="案例图片六" /></a>
		    	</p>
		  	</div>
		  			  	<div class="box col2">
		    	<p>
		      		<a rel="group" href="/laugh/Uploads/Image/201304/09/1365474477_zuf1eo_2534.JPG" title="案例图片七"><img src="/laugh/Uploads/Image/201304/09/thumb_1365474477_zuf1eo_2534.JPG" alt="案例图片七" /></a>
		    	</p>
		  	</div>
		  			  	<div class="box col2">
		    	<p>
		      		<a rel="group" href="/laugh/Uploads/Image/201304/09/1365474490_nc8o3r_168.jpg" title="案例图片八"><img src="/laugh/Uploads/Image/201304/09/thumb_1365474490_nc8o3r_168.jpg" alt="案例图片八" /></a>
		    	</p>
		  	</div>
		  			  			</div>
		<nav id="page-nav"><a href="/laugh/index.php?s=Image/Msonary&columnid=7&archiveid=14&page=2"></a></nav>
	</div>
	<div class="operate">
		<!-- Baidu Button BEGIN -->
<div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare">
<span class="bds_more">分享到：</span>
<a class="bds_tsina"></a>
<a class="bds_tqq"></a>
<a class="bds_t163"></a>
<a class="bds_renren"></a>
<a class="bds_qzone"></a>
<a class="bds_douban"></a>
<a class="shareCount"></a>
</div>
<!-- Baidu Button END -->
		<div class="operateLink"><a href="javascript:;">[打印此页]</a>&nbsp;&nbsp;&nbsp;<a href="javascript:self.close();">[关闭]</a></div>
	</div>
	<div class="about">
		<dl>
			<dt>上一篇:</dt>
			<dd>
								<font color="grey">没有了！</font>
							</dd>
		</dl>
		<dl>
			<dt>下一篇:</dt>
			<dd>
								<a href="/laugh/index.php?s=Image/view&columnid=7&archiveid=15" title="客户案例二">客户案例二</a>
							</dd>
		</dl>
	</div>
</div>
<link type="text/css" rel="stylesheet" href="public/plugin/masonry/style.css" media="screen">
<script type="text/javascript" src="public/plugin/masonry/jquery.masonry.js"></script>
<script type="text/javascript" src="public/plugin/masonry/jquery.infinitescroll.min.js"></script>
<script type="text/javascript" src="public/plugin/masonry/modernizr-transitions.js"></script>
<link type="text/css" rel="stylesheet" href="public/plugin/colorbox/colorbox.css" media="screen">
<script type="text/javascript" src="public/plugin/colorbox/jquery.colorbox.js"></script>
<script type="text/javascript">
$(function(){
    var $container = $('#container');

    $container.imagesLoaded(function(){
		$container.masonry({
			itemSelector: '.box',
			columnWidth: 1,
        	isAnimated: !Modernizr.csstransitions
		});
    });
    
    $container.infinitescroll({
		navSelector  : '#page-nav',    // selector for the paged navigation 
		nextSelector : '#page-nav a',  // selector for the NEXT link (to page 2)
		itemSelector : '.box',     // selector for all items you'll retrieve
			loading: {
				finishedMsg: '没有了',
				img: JS_APP+'/public/plugin/masonry/loading.gif'
			}
		},
		// trigger Masonry as a callback
		function( newElements ) {
			// hide new items while they are loading
			var $newElems = $( newElements ).css({ opacity: 0 });
			// ensure that images load before adding to masonry layout
			$newElems.imagesLoaded(function(){
				// show elems now they're ready
				$newElems.animate({ opacity: 1 });
				$container.masonry( 'appended', $newElems, true );

				colorBoxImageShow();
			});
		}
    );

	//colorbox展示大图
	var colorBoxImageShow = function (){
	    $("#container .box a").colorbox({
	    	//图集标记
	    	rel: "group",
	    	//图集图片自动切换
	    	slideshow: true,
	    	//图片切换时间间隔
	    	slideshowSpeed : 30000,
	    	//图片标题
	    	title: function (){
	    		return $(this).attr("title");
	    	}
	    });
	}
    colorBoxImageShow();
});
</script>
					</div>
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