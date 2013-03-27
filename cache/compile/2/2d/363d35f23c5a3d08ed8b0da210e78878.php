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
		<a href="/laugh/index.php?s=Index/index&columnid=1" class="navon">网站首页</a>
			</li>
		<li>
		<a href="/laugh/index.php?s=Article/index&columnid=2" class="">新闻资讯</a>
				<ul class="SubNavigation">
						<li>
				<a href="/laugh/index.php?s=Article/index&columnid=3">IT知识</a>
								<ul>
										<li><a href="/laugh/index.php?s=Index/index&columnid=12">PHP知识</a></li>
									</ul>
							</li>
						<li>
				<a href="/laugh/index.php?s=Article/index&columnid=4">网络知识</a>
								<ul>
										<li><a href="/laugh/index.php?s=Article/index&columnid=5">前端知识</a></li>
									</ul>
							</li>
					</ul>
			</li>
		<li>
		<a href="/laugh/index.php?s=Product/index&columnid=6" class="">产品展示</a>
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
		当前位置: <a href="/laugh">首页</a> > <a href="/laugh/index.php?s=/&columnid="></a>
	</div>
	<div id="CenterShow" class="block mtop5">
		<div id="mainBlock" class="fleft w740">
			<div class="boxBlock">
				<div class="boxBlockTitle">
					<span class="title"></span>
				</div>
				<div class="boxBlockBody">
					<div class="contentBlock">
						<div class="articleTpl">
	<h2 class="title">页面(PAGE)标记(TAGS)</h2>
	<div class="status">
		<span class="title">点击次数:</span>
		<span class="content">0 次</span>
		<span class="title">发布时间:</span>
		<span class="content">2013-03-25 15:21:48</span>
		<span class="title">作者:</span>
		<span class="content">admin</span>
	</div>
	<div class="body">
		<div class="articleContent">
			<h2>HTML 文件结构(Document Structures)</h2><h3>&lt;html&gt;...&lt;/html&gt;<br />&lt;head&gt;...&lt;/head&gt;<br />&lt;body&gt;...&lt;/body&gt;</h3><dl><dd><pre>&lt;HTML&gt;
&lt;HEAD&gt;
     &lt;title&gt;, &lt;base&gt;, &lt;link&gt;, &lt;isindex&gt;, &lt;meta&gt;
&lt;/HEAD&gt;
&lt;BODY&gt;
    HTML 文件的正文写在这里... ... 
&lt;/BODY&gt;
&lt;/HTML&gt;
</pre></dd></dl><p><a name="lang"></a></p><h2>语言字符集(Charsets)的信息</h2><h3>&lt;meta http-equiv=&quot;Content-Type&quot; &nbsp; &nbsp; &nbsp; content=&quot;text/html;charset=#&quot;&gt;<br /></h3><dl compact="compact"><dt>#= &nbsp; &nbsp; &nbsp; &nbsp; </dt><dd>us-ascii, iso-8859-1, x-mac-roman, iso-8859-2, &nbsp; &nbsp; &nbsp; &nbsp; x-mac-ce,<br />iso-2022-jp, x-sjis, x-euc-jp,<br />euc-kr, &nbsp; &nbsp; &nbsp; &nbsp; iso-2022-kr,<br />gb2312, gb_2312-80,<br />x-euc-tw, x-cns11643-1, &nbsp; &nbsp; &nbsp; &nbsp; x-cns11643-2, big5 </dd></dl><p>可在 HTML 文件中设置 MIME 字符集信息。<br />您在浏览主页时，最好自己在浏览器的选项菜单内选择相应的语言(language &nbsp; &nbsp; &nbsp; encoding)。<br />但是如果 HTML 文件里写明了设置，浏览器就会自动设置语言选项。<br />尤其是主页里用到了<a href="http://www.php100.com/cover/html/entities.html">字符实体(entities)</a>，则该主页就应该写明字符集信息。<br />否则，您在浏览该主页时，若未正确设置语言选项，显示将可能混乱。</p><p><a name="bgcolor"></a></p><h2>背景色彩和文字色彩</h2><h3>&lt;body bgcolor=# text=# link=# alink=# vlink=#&gt;</h3><dl><dd>bgcolor --- 背景色彩 &nbsp; &nbsp; &nbsp; &nbsp; </dd><dd>text --- 非可链接文字的色彩 &nbsp; &nbsp; &nbsp; &nbsp; </dd><dd>link --- 可链接文字的色彩 &nbsp; &nbsp; &nbsp; &nbsp; </dd><dd>alink --- 正被点击的可链接文字的色彩 &nbsp; &nbsp; &nbsp; &nbsp; </dd><dd>vlink --- 已经点击(访问)过的可链接文字的色彩 &nbsp; &nbsp; &nbsp; &nbsp; </dd><dd><h3>#=rrggbb</h3></dd><dd>色彩是用 16 进制的 红－绿－蓝(red-green-blue, RGB) 值来表示。<br />16 进制的数码有: &nbsp; &nbsp; &nbsp; &nbsp; 0,1,2,3,4,5,6,7,8,9,a,b,c,d,e,f. &nbsp; &nbsp; &nbsp; &nbsp; </dd><dd>　 </dd></dl><h3>背景图象 &lt;body background=&quot;image-URL&quot;&gt;<br /> &nbsp; &nbsp; &nbsp; &nbsp;Non Scrolling Background &lt;body bgproperties=FIXED&gt;</h3><p><a name="margin"></a></p><h2>页面空白(Margin)</h2><h3>页面左边的空白 &lt;body leftmargin=#&gt;<br />页面上方的空白(天头) &lt;body &nbsp; &nbsp; &nbsp; topmargin=#&gt; #=margin amount</h3><p><a name="link"></a></p><h2>链接(Link)</h2><h3>基本语法 &lt;a href=&quot;URL&quot;&gt; ... &lt;/a&gt;</h3><dl><dd><tt>这是一个<br />&lt;a href=&quot;samp/link.html&quot;&gt;链接的例子&lt;/a&gt;。 &nbsp; &nbsp; &nbsp; &nbsp; <br />点一下带下划线的文字!</tt><br /></dd></dl><p>这是一个<a href="http://www.php100.com/cover/html/samp/link.html">链接的例子</a>。点一下带下划线的文字!</p><h3>跳转到页面的另外一个地方<br />&lt;a href=&quot;#name&quot;&gt; ... &lt;/a&gt;<br />&lt;a &nbsp; &nbsp; &nbsp; name=&quot;name&quot;&gt; ... &lt;/a&gt; </h3><dl><dd><tt>&lt;a &nbsp; &nbsp; &nbsp; &nbsp; href=&quot;#jump-test&quot;&gt;跳转到下一个&quot;链接点&quot;&lt;/a&gt;&lt;P&gt;<br />&lt;a &nbsp; &nbsp; &nbsp; &nbsp; name=&quot;jump-test&quot;&gt;下一个链接点&lt;/a&gt; </tt></dd></dl><p><a href="http://www.php100.com/cover/html/page.htm#jump-test">跳转到下一个&quot;链接点&quot;</a></p><p><a name="jump-test"></a>下一个链接点</p><p><a name="jump2"></a></p><h3>跳转到另一个页面的某个地方<br />&lt;a href=&quot;URL#name&quot;&gt; ... &lt;/a&gt;<br />&lt;a &nbsp; &nbsp; &nbsp; name=&quot;name&quot;&gt; ... &lt;/a&gt; </h3><dl><dd><tt>跳转到另一个页面的&lt;a &nbsp; &nbsp; &nbsp; &nbsp; href=&quot;samp/link.html#jump-test&quot;&gt;某个地方&lt;/a&gt;。<br /></tt></dd></dl><p>跳转到另一个页面的<a href="http://www.php100.com/cover/html/samp/link.html#jump-test">某个地方</a>。</p><p><a name="window"></a></p><h2>开一个新的(浏览器)窗口 (Target Window) &nbsp; &nbsp; &nbsp; </h2><h3>&lt;a href=&quot;URL&quot; target=&quot;Window_Name&quot;&gt; ... &lt;/a&gt;</h3><dl><dd><tt>&lt;a href=&quot;samp/window.html&quot; &nbsp; &nbsp; &nbsp; &nbsp; target=&quot;window_name&quot;&gt;<br />开一个新窗口!<br />&lt;/a&gt; </tt></dd></dl><p><a href="http://www.php100.com/cover/html/samp/window.html" target="window_name">开一个新窗口!</a></p><p><a name="hr"></a></p><h2>标尺线</h2><h3>&lt;hr&gt;</h3><p><tt>&lt;hr&gt; </tt></p><hr /><h3>&lt;hr size=#&gt;</h3><p><tt>&lt;hr size=10&gt; </tt></p><hr size="10" /><h3>&lt;hr width=#&gt;</h3><p><tt>&lt;hr width=50&gt;<br />&lt;hr width=50%&gt; </tt></p><hr width="50" /><hr width="50%" /><h3>&lt;hr align=#&gt; #=left, right</h3><p><tt>&lt;hr width=50% align=left&gt;<br />&lt;hr width=50% align=right&gt; &nbsp; &nbsp; &nbsp; </tt></p><hr align="left" width="50%" /><hr align="right" width="50%" /><h3>&lt;hr noshade&gt;</h3><p><tt>&lt;hr noshade&gt; </tt></p><hr noshade="noshade" /><h3>&lt;hr color=#&gt;</h3><dl><dd>#=rrggbb 16 进制 RGB 数码，或者是下列预定义色彩：<br /><span style="color:#000000;">Black</span>, <span style="color:#808000;">Olive</span>, <span style="color:#008080;">Teal</span>, <span style="color:#ff0000;">Red</span>, <span style="color:#0000ff;">Blue</span>, <span style="color:#800000;">Maroon</span>, <span style="color:#000080;">Navy</span>, <span style="color:#808080;">Gray</span>, <span style="color:#00ff00;">Lime</span>, <br /><span style="color:#ff00ff;">Fuchsia</span>, <span style="color:#ffffff;">White</span>, <span style="color:#008000;">Green</span>, <span style="color:#800080;">Purple</span>, <span style="color:#c0c0c0;">Silver</span>, <span style="color:#ffff00;">Yellow</span>, <span style="color:#00ffff;">Aqua</span></dd></dl><p><tt>&lt;hr color=&quot;red&quot;&gt; </tt></p><p><br /></p>
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
								<font color="grey">没有了！</font>
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