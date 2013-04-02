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
		<a href="/laugh/index.php?s=Article/index&columnid=2" class="navon">新闻资讯</a>
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
					</ul>
			</li>
		<li>
		<a href="/laugh/index.php?s=Image/index&columnid=7" class="">客户案例</a>
			</li>
		<li>
		<a href="/laugh/index.php?s=Download/index&columnid=8" class="">下载中心</a>
			</li>
		<li>
		<a href="/laugh/index.php?s=Cooperate/index&columnid=9" class="">招贤纳士</a>
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
		当前位置: <a href="/laugh">首页</a> > <a href="/laugh/index.php?s=Article/index&columnid=2">新闻资讯</a>
	</div>
	<div id="CenterShow" class="block mtop5">
		<div id="mainBlock" class="fleft w740">
			<div class="boxBlock">
				<div class="boxBlockTitle">
					<span class="title">DNS污染【备忘】</span>
				</div>
				<div class="boxBlockBody">
					<div class="contentBlock">
						<div class="articleTpl">
	<h2 class="title">DNS污染【备忘】</h2>
	<div class="status">
		<span class="title">点击次数:</span>
		<span class="content">0 次</span>
		<span class="title">发布时间:</span>
		<span class="content">2013-04-02 14:50:13</span>
		<span class="title">作者:</span>
		<span class="content">admin</span>
	</div>
	<div class="body">
		<div class="articleContent">
			<p>DNS污染，又称为<strong>域名服务器缓存污染</strong>（DNS cache pollution）或<strong>域名服务器缓存投毒</strong>（DNS cache poisoning）</p><p>是指一些刻意制造或无意中制造出来的域名服务器<a href="http://zh.wikipedia.org/wiki/%E5%B0%81%E5%8C%85" title="分组" class="mw-redirect">分组</a>，把域名指往不正确的IP地址。一般来说，外间在<a href="http://zh.wikipedia.org/wiki/%E4%BA%92%E8%81%AF%E7%B6%B2" title="互联网" class="mw-redirect">互联网</a>上一般都有可信赖的<a href="http://zh.wikipedia.org/wiki/%E5%9F%9F%E5%90%8D%E6%9C%8D%E5%8A%A1%E5%99%A8" title="域名服务器" class="mw-redirect">域名服务器</a>，但为减免网络上的交通，一般的域名都会把外间的域名服务器数据暂存起来，待下次有其他机器要求解析域名时，可以立即提供服务。一旦有关网域的局域域名服务器的缓存受到污染，就会把网域内的电脑导引往错误的服务器或服务器的网址。</p><p>域名服务器缓存污染可能是通过域名服务器软件上的设计错误而产生，但亦可能由别有用心者通过研究<a href="http://zh.wikipedia.org/w/index.php?title=%E9%96%8B%E6%94%BE%E6%9E%B6%E6%A7%8B&amp;action=edit&amp;redlink=1" class="new" title="开放架构（页面不存在）">开放架构</a>的域名服务器系统来利用当中的漏洞。</p><h2><a name="t0"></a><span class="mw-headline" id=".E7.B7.A9.E5.AD.98.E6.B1.A1.E6.9F.93.E6.94.BB.E6.93.8A">缓存污染攻击</span></h2><p>一般来说，一部连上了互联网的电脑都会使用<a href="http://zh.wikipedia.org/wiki/%E4%BA%92%E8%81%AF%E7%B6%B2%E6%9C%8D%E5%8B%99%E4%BE%9B%E6%87%89%E5%95%86" title="互联网服务提供商" class="mw-redirect">互联网服务提供商</a>提供的域名服务器。这个服务器一般只会为供应商的客户来服务，通常都会储蓄起部分客户曾经请求过的域名的缓存。缓存污染攻击就是针对这一种服务器，以影响服务器的用户或下游服务。</p><h2><a name="t1"></a><span class="mw-headline" id=".E9.98.B2.E7.81.AB.E9.95.B7.E5.9F.8E.E7.9A.84.E7.B7.A9.E5.AD.98.E6.B1.A1.E6.9F.93.E6.94.BB.E6.93.8A">防火长城的缓存污染攻击</span></h2><p>在中国大陆，对于所有经过<a href="http://zh.wikipedia.org/wiki/%E9%98%B2%E7%81%AB%E9%95%B7%E5%9F%8E" title="防火长城" class="mw-redirect">防火长城</a>的在UDP的53端口上的域名查询进行IDS<a href="http://zh.wikipedia.org/wiki/%E5%85%A5%E4%BE%B5%E6%A3%80%E6%B5%8B" title="入侵检测" class="mw-redirect">入侵检测</a>，一经发现与黑名单关键词相匹配的域名查询请求，其会马上伪装成目标域名的解析服务器给查询者返回虚假结果。由于通常的域名查询没有任何认证机制，而且域名查询通常基于的UDP协议是无连接不可靠的协议，查询者只能接受最先到达的格式正确结果，并丢弃之后的结果。<sup id="cite_ref-gfw_2-0" class="reference"><a href="http://zh.wikipedia.org/wiki/DNS%E6%B1%A1%E6%9F%93#cite_note-gfw-2">[2]</a></sup></p><ul class=" list-paddingleft-2"><li><p>对于不了解相关知识的网民来说也就是，由于系统默认使用的<a href="http://zh.wikipedia.org/wiki/ISP" title="ISP">ISP</a>提供的域名查询服务器查询国外的权威服务器时即被防火长城被污染，使其缓存受到污染，因而默认情况下查询ISP的服务器就会获得虚假IP地址；而用户直接查询境外域名查询服务器（比如<a href="http://zh.wikipedia.org/wiki/Google_Public_DNS" title="Google Public DNS">Google Public DNS</a>）有可能会被防火长城污染，从而在没有任何防范机制的情况下仍然不能获得目标网站正确的IP地址。<sup id="cite_ref-gfw_2-1" class="reference"><a href="http://zh.wikipedia.org/wiki/DNS%E6%B1%A1%E6%9F%93#cite_note-gfw-2">[2]</a></sup></p></li></ul><ul class=" list-paddingleft-2"><li><p>防火长城暂时未对TCP协议下的域名查询进行污染，故现在能通过强制使用TCP协议查询真实的IP地址：Windows下打开<a href="http://zh.wikipedia.org/wiki/%E5%91%BD%E4%BB%A4%E6%8F%90%E7%A4%BA%E7%AC%A6" title="命令提示符" class="mw-redirect">命令提示符</a>，输入nslookup -vc 要查询的域名 境外DNS服务器的IP地址（必须支持TCP协议查询，否则不会返回查询结果），回车后能返回正确的目标服务器IP地址。而现实的情况是，防火长城对于真实的IP地址也可能会采取其它的手段进行封锁，故能否真正访问可能还需要其它<a href="http://zh.wikipedia.org/wiki/%E7%BF%BB%E5%A2%99" title="翻墙" class="mw-redirect">翻墙</a>的手段。</p></li></ul><h2 class="headline-1 bk-sidecatalog-title"><a name="t2"></a><span class="headline-content">验证DNS污染的办法</span></h2><div class="para">我们在命令行下通过这样一条命令 nslookup 域名 144.223.234.234，即可判断该域名是否被污染，由于144.223.234.234不存在，理应没有任何返回。但我们却得到了一个错误的IP（不确定）。即可证明这个域名已经被DNS污染了。</div><p><br /></p><div><span style="font-size:14px"><strong>解决DNS污染方案</strong></span></div><div></div><div>1、修改hosts文件，操作系统中Hosts文件的优先级高于DNS服务器，操作系统在访问某个域名时，会先检测HOSTS文件，然后再查询DNS服务器。可以在hosts添加受到污染的DNS地址来解决DNS污染和DNS劫持。</div><div></div><div>2、如果你是Firefox only用户，并且只用Firefox，又懒得折腾，直接打开Firefox的远程DNS解析就行了。在地址栏中输入about:config找到network.proxy.socks_remote_dns一项改成true。</div><div></div><div>3、使用各种SSH加密代理，在加密代理里进行远程DNS解析，或者使用VPN上网。</div><div></div><div>4、通过一些软件编程处理，可以直接忽略返回结果是虚假IP地址的数据包，直接解决DNS污染的问题。</div><p><br /></p>
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
								<a href="/laugh/index.php?s=article/view&columnid=2&archiveid=10" title="Web服务攻击反侦查痕迹检测">Web服务攻击反侦查痕迹检测</a>
							</dd>
		</dl>
		<dl>
			<dt>下一篇:</dt>
			<dd>
								<font color="grey">没有了！</font>
							</dd>
		</dl>
	</div>
</div>
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