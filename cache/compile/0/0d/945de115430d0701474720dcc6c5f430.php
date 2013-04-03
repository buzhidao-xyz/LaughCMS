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
		当前位置: <a href="/laugh">首页</a> > <a href="/laugh/index.php?s=Article/index&columnid=2">新闻资讯</a> > <a href="/laugh/index.php?s=Article/index&columnid=3">IT知识</a> > <a href="/laugh/index.php?s=Article/index&columnid=12">PHP知识</a>
	</div>
	<div id="CenterShow" class="block mtop5">
		<div id="mainBlock" class="fleft w740">
			<div class="boxBlock">
				<div class="boxBlockTitle">
					<span class="title">Web服务攻击反侦查痕迹检测</span>
				</div>
				<div class="boxBlockBody">
					<div class="contentBlock">
						<div class="articleTpl">
	<h2 class="title">Web服务攻击反侦查痕迹检测</h2>
	<div class="status">
		<span class="title">点击次数:</span>
		<span class="content">0 次</span>
		<span class="title">发布时间:</span>
		<span class="content">2013-04-01 14:09:10</span>
		<span class="title">作者:</span>
		<span class="content">admin</span>
	</div>
	<div class="body">
		<div class="articleContent">
			<p style="margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;">web站点默认80为服务端口，关于它的各种安全问题不断的发布出来，这些漏洞中一些甚至允许攻击者获得系统管理员的权限进入站点内部，以下是Zenomorph对一些80端口攻击方式的痕迹的研究，和告诉你怎样从日志记录中发现问题。</p><p style="margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;"><strong style="text-align:center;">详细描述</strong></p><p style="margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;">下面部分通过一些列子，展示对web服务器和其上的应用程序普遍的攻击，和其留下的痕迹，这些列子仅仅是代表了主要的攻击方式，并没有列出所有的攻击形式，这部分将详细描述每种攻击的作用，和其怎样利用这些漏洞进行攻击。</p><p style="margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;">（1）&rdquo;.&rdquo; &ldquo;..&rdquo; 和 &ldquo;&hellip;&rdquo; 请求</p><p style="margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;">这些攻击痕迹是非常普遍的用于web应用程序和web服务器，它用于允许攻击者或者蠕虫病毒程序改变web服务器的路径，获得访问非公开的区域。大多数的CGI程序漏洞含有这些&rdquo;..&rdquo;请求。</p><p style="margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;">Example:</p><p style="margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;">http://host/cgi-bin/lame.cgi?file=../../../../etc/motd</p><p style="margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;">这个列子展示了攻击者请求mosd这个文件，如果攻击者有能力突破web服务器根目录，那么可以获得更多的信息，并进一步的获得特权。</p><p style="margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;">（2）&rdquo;%20&Prime; 请求</p><p style="margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;">%20是表示空格的16进制数值，虽然这个并不代表你能够利用什么，但是在你浏览日志的时候会发现它，一些web服务器上运行的应用程序中这个字符可能会被有效的执行，所以，你应该仔细的查看日志。另一方面，这个请求有时可以帮助执行一些命令。</p><p style="margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;">Example:</p><p style="margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;">http://host/cgi-bin/lame.cgi?page=ls%20-al│</p><p style="margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;">这个列子展示了攻击者执行了一个unix的命令，列出请求的整个目录的文件，导致攻击者访问你系统中重要的文件，帮助他进一步取得特权提供条件。</p><p style="margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;">（3）&rdquo;%00&Prime; 请求</p><p style="margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;">%00表示16进制的空字节，他能够用于愚弄web应用程序，并请求不同类型的文件。</p><p style="margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;">Examples:</p><p style="margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;">http://host/cgi-bin/lame.cgi?page=index.html</p><p style="margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;">这可能是个有效的请求在这个机子上，如果攻击者注意到这个请求动作成功，他会进一步寻找这个cgi程序的问题。</p><p style="margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;">http://host/cgi-bin/lame.cgi?page=../../../../etc/motd</p><p style="margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;">也许这个cgi程序不接受这个请求，原因在于它要检查这个请求文件的后缀名，如：html.shtml或者其他类型的文件。大多数的程序会告诉你所请求的文件类型无效，这个时候它会告诉攻击者请求的文件必须是一某个字符后缀的文件类型，这样，攻击者可以获得系统的路径，文件名，导致在你的系统获得更多的敏感信息</p><p style="margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;">http://host/cgi-bin/lame.cgi?page=../../../../etc/motd%00html</p><p style="margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;">注意这个请求，它将骗取cgi程序认为这个文件是个确定的可接受的文件类型，一些应用程序由于愚蠢的检查有效的请求文件，这是攻击者常用的方法。</p><p style="margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;">（4）&rdquo;│&rdquo; 请求</p><p style="margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;">这是个管道字符，在unix系统用于帮助在一个请求中同时执行多个系统命令。</p><p style="margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;">Example:</p><p style="margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;"># cat access_log│ grep -i &ldquo;..&rdquo;</p><p style="margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;">（这个命令将显示日志中的&ldquo;..&ldquo;请求，常用于发现攻击者和蠕虫攻击）</p><p style="margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;">常可以看到有很多web应用程序用这个字符，这也导致IDS日志中错误的报警。</p><p style="margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;">在你的程序仔细的检查中，这样是有好处的，可以降低错误的警报在入侵检测系统中。</p><p style="margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;">下面给出一些列子：</p><p style="margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;">http://host/cgi-bin/lame.cgi?page=../../../../bin/ls│</p><p style="margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;">这个请求命令执行，下面是一些变化的列子</p><p style="margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;">http://host/cgi-bin/lame.cgi?page=../../../../bin/ls%20-al%20/etc│</p><p style="margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;">这个请求在unix系统中列出/etc目录的所有文件</p><p style="margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;">http://host/cgi-bin/lame.cgi?page=cat%20access_log│grep%20-i%20&Prime;lame&rdquo;</p><p style="margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;">这个请求cat命令的执行并且grep命令也将执行，查询出&rdquo;lame&rdquo;</p><p style="margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;">(5)&rdquo;;&rdquo; 请求</p><p style="margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;">在unix系统，这个字符允许多个命令在一行执行</p><p style="margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;">Example:</p><p style="margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;"># id;uname -a</p><p style="margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;">（执行id命令后，紧跟着执行uname命令）</p><p style="margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;">一些web程序用这个字符，可能导致在你的IDS日志中失败的警告，你应该仔细的检查你的web程序，让你的IDS警报失败的几率降低。</p><p style="margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;">（6）&rdquo;&quot; 请求</p><p style="margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;">应该检查你的日志记录中这两个字符，众多的原因中，首要的一个是这个字符表明了添加数据在文件中</p><p style="margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;">Example 1:</p><p style="margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;"># echo &ldquo;your hax0red h0 h0&Prime; &gt;&gt; /etc/motd （请求写信息在motd这个文件中)</p><p style="margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;">一个攻击者可以容易的用象上面的这个请求篡改你的web页面。比如著名的RDS exploit常被攻击者用于更改web主页面。</p><p style="margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;">Example 2:</p><p style="margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;">http://www.2cto.com /something.php=Hi%20mom%20Im%20Bold!</p><p style="margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;">你会注意到这里html语言的标志，他同样用了&ldquo;〈&rdquo;，&ldquo;〉&rdquo;字符，这种攻击不能导致攻击者对系统进行访问，它迷惑人们认为这是个合法的信息在web 站点中（导致人们在访问这个联结的时候访问到攻击者设定的地址，这种请求可能会被转变成16进制的编码字符形式，使攻击的痕迹不那么明显）</p><p style="margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;">（7）&rdquo;!&rdquo;请求</p><p style="margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;">这种字符请求常用语对SS(Server Side Include) I进行攻击，如果攻击者迷惑用户点击被攻击者设定的联结，和上面的一样。</p><p><br /></p>
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
								<a href="/laugh/index.php?s=article/view&columnid=12&archiveid=7" title="PHP实现异步操作">PHP实现异步操作</a>
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