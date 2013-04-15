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
		<a href="/laugh/index.php?s=Product/index&columnid=6" class="navon">产品展示</a>
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
		<a href="/laugh/index.php?s=Image/index&columnid=7" class="">客户案例</a>
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
		当前位置: <a href="/laugh">首页</a> > <a href="/laugh/index.php?s=Product/index&columnid=6">产品展示</a>
	</div>
	<div id="CenterShow" class="block mtop5">
		<div id="mainBlock" class="fleft w740">
			<div class="boxBlock">
				<div class="boxBlockTitle">
					<span class="title">4 款 Linux 下开源的个人日记管理软件</span>
				</div>
				<div class="boxBlockBody">
					<div class="contentBlock">
						<div class="productTpl">
	<h2 class="title">4 款 Linux 下开源的个人日记管理软件</h2>
	<div class="status">
		<span class="title">点击次数:</span>
		<span class="content">0 次</span>
		<span class="title">发布时间:</span>
		<span class="content">2013-04-01 16:28:54</span>
		<span class="title">作者:</span>
		<span class="content">admin</span>
	</div>
	<div class="body">
		<div class="ImageShow">
			<div id="mainImage"></div>
			<ul class="galleryFlash galleryImage">
							    <li class="active">
			    	<img src="/laugh/Uploads/Image/201304/02/thumb_1364884599_fye754_8577.png" alt="图1" title="图1">
			    </li>
			    			    <li class="active">
			    	<img src="/laugh/Uploads/Image/201304/02/thumb_1364884614_qub9zq_7492.png" alt="图2" title="图2">
			    </li>
			    			    <li class="active">
			    	<img src="/laugh/Uploads/Image/201304/02/thumb_1364884625_dxb7k2_7142.jpg" alt="图3" title="图3">
			    </li>
			    			</ul>
		</div>
		<div class="productInfo">
			<div class="infoTitle">
				<ul id="productInfoboxTab" class="infoboxTab fleft">
					<li><a tabid="#productInfoboxTab1" href="javascript:;">规格参数</a></li>
					<li><a tabid="#productInfoboxTab2" href="javascript:;">详细描述</a></li>
				</ul>
			</div>
			<div class="infoBody">
				<div id="productInfoboxTab1" class="boxTabContent productInfoContent">
					<dl>
						<dt>型号:</dt>
						<dd>1234</dd>
					</dl>
					<dl>
						<dt>品牌:</dt>
						<dd>222</dd>
					</dl>
					<dl>
						<dt>颜色:</dt>
						<dd>333</dd>
					</dl>
					<dl>
						<dt>材质:</dt>
						<dd></dd>
					</dl>
					<dl>
						<dt>尺寸:</dt>
						<dd>123</dd>
					</dl>
					<dl>
						<dt>价格:</dt>
						<dd></dd>
					</dl>
					<dl>
						<dt>数量:</dt>
						<dd></dd>
					</dl>
				</div>
				<div id="productInfoboxTab2" class="boxTabContent productInfoContent">
					<p>1. RedNotebook</p><p>　　RedNotebook 是一款不错的可以运行在Linux环境桌面日记本，不论是拿来写日记，还是写些简单的每日计划，都非常适用。</p><p>　　界面还是很简洁的。 右边的边栏是个单独的区域，可以在里面建立分类的文本，非常适合来记录计划、灵感，或者今日大事</p><p>2. Lifeograph</p><p>　　Lifeograph 是一个开源的离线和私人的日志和记事应用软件。提供作为一个日记应用的所有标准工具。</p><p>　　功能：</p><p>　　支持加密和非加密日记</p><p>　　长时间未使用自动退出登录</p><p>　　自动格式化条目标题和子标题</p><p>　　类似 Wiki 风格的富文本格式化 (*bold*, _italic_, =strikeout=, etc&hellip;)</p><p>　　基本的搜索、过滤和替换文本功能</p><p>　　编辑器支持主题</p><p>　　可收藏日记</p><p>　　支持标签</p><p>　　拼写检查</p><p>　　条目之间的链接</p><p>　　支持多种 URI 格式(http://, file://, mailto://, etc&hellip;)</p><p>　　自动备份</p><p>　　打印</p><p>　　基本统计图表</p><p>　　图像缩略图</p><p>3. Kontact</p><p>　　Kontact 是KDE的个人信息管理和套装软件。提供日历、通讯簿、笔记、待办事项、新闻和电子邮件的功能。使用KPart来嵌入各种应用程式(KMail、KAddressBook、Akregator等)放入到容器应用程序。</p><p>4. ThotKeeper</p><p>　　ThotKeeper 是一个使用 Python 编写的跨平台的个人日记管理程序。</p><p>　　功能：</p><p>　　跨平台支持</p><p>　　简单易于浏览的接口</p><p>　　XML 存储格式</p><p>　　支持每天多篇日记</p><p>　　支持不同的日记作者</p><p>　　层次化标签</p><p><br /></p>
				</div>
			</div>
		</div>
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
								<a href="/laugh/index.php?s=Product/view&columnid=6&archiveid=9" title="Web服务攻击反侦查痕迹检测">Web服务攻击反侦查痕迹检测</a>
							</dd>
		</dl>
		<dl>
			<dt>下一篇:</dt>
			<dd>
								<a href="/laugh/index.php?s=Product/view&columnid=6&archiveid=12" title="Vim文本编辑器 v7.3 正式版">Vim文本编辑器 v7.3 正式版</a>
							</dd>
		</dl>
	</div>
</div>
<link type="text/css" rel="stylesheet" href="public/plugin/galleria/galleria.css" media="screen">
<script type="text/javascript" src="public/plugin/galleria/jquery.galleria.js"></script>
<style type="text/css">
#mainImage {
	float: left;
	width:550px;
	height:375px;
	margin:0 auto;
	padding-right: 3px;
	overflow: hidden;
	text-align: center;
	border-right: 1px dashed #CCC;
}
#mainImage img {
	width: auto;
	height:auto;
	max-width: 550px;
	max-height: 350px;
}
#mainImage span.caption {
	font: 13px;
	display: block;
}
.galleryImage {
	float: left;
	width: 113px;
	height: 350px;
	padding-left: 2px;
	margin:0 auto;
	overflow: hidden;
	text-align: center;
}
.galleryImage li{
	width:50px;
	height:55px;
	margin: 1px 2px;
	border:1px solid #999;
}
.galleryImage li div {
	text-align: center;
}
</style>
<script type="text/javascript">
$(document).ready(function(){
$('ul.galleryImage').galleria({
	history   : false, // activates the history object for bookmarking, back-button etc.
	clickNext : true, // helper for making the image clickable
	insert    : '#mainImage', // the containing selector for our main image
	// let's add some image effects for demonstration purposes
	onImage   : function(image,caption,thumb) {
		image.css('display','none').toggle();//fadeIn(1);
		caption.css('display','none').toggle();//fadeIn(1);
		
		// fetch the thumbnail container
		var _li = thumb.parents('li');
		
		// fade out inactive thumbnail
		_li.siblings().fadeTo('fast',0.5);
		
		// fade in active thumbnail
		_li.fadeTo('fast',1).addClass('selected');
	},
	onThumb : function(thumb) { // thumbnail effects goes here
		// fetch the thumbnail container
		var _li = thumb.parents('li');
		
		// if thumbnail is active, fade all the way.
		var _fadeTo = _li.is('.active') ? '1' : '0.5';
		
		// fade in the thumbnail when finnished loading
		_li.css({
			display: 'none',
			opacity: _fadeTo
		}).fadeIn(1000);
		
		// hover effects
		_li.hover(
			function() {
				_li.fadeTo('fast',1);
			}, function() {
				_li.not('.active').fadeTo('fast',0.5);
			}
		)
	}
});

//产品信息展示
$(".productInfo ul#productInfoboxTab").idTabs(function(id,list,set){
	$("a",set).removeClass("selected").filter("[tabid='"+id+"']",set).addClass("selected"); 
	for(i in list) $(list[i]).hide();
	$(id).fadeIn();
	return false;
});
});
</script>
<link type="text/css" rel="stylesheet" href="themes/default/style/shCoreDefault.css" media="screen">
<script type="text/javascript" src="themes/default/js/shCore.js"></script>
<script type="text/javascript">
//为了在编辑器之外能展示高亮代码
SyntaxHighlighter.highlight();
//调整左右对齐
for(var i=0,di;di=SyntaxHighlighter.highlightContainers[i++];){
    var tds = di.getElementsByTagName('td');
    for(var j=0,li,ri;li=tds[0].childNodes[j];j++){
        ri = tds[1].firstChild.childNodes[j];
        ri.style.height = li.style.height = ri.offsetHeight + 'px';
    }
}
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