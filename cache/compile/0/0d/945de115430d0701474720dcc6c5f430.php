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
		当前位置: <a href="/laugh">首页</a> > <a href="/laugh/index.php?s=Article/index&columnid=2">新闻资讯</a>
	</div>
	<div id="CenterShow" class="block mtop5">
		<div id="mainBlock" class="fleft w740">
			<div class="boxBlock">
				<div class="boxBlockTitle">
					<span class="title">新闻资讯</span>
				</div>
				<div class="boxBlockBody">
					<div class="contentBlock">
						<div class="articleTpl">
	<h2 class="title">PHP实现异步操作</h2>
	<div class="status">
		<span class="title">点击次数:</span>
		<span class="content">0 次</span>
		<span class="title">发布时间:</span>
		<span class="content">2013-03-26 09:50:15</span>
		<span class="title">作者:</span>
		<span class="content">admin</span>
	</div>
	<div class="body">
		<div class="articleContent">
			<p style="padding:0px;margin:0px 0px 22px;color:#000000;font-family:verdana, arial, tahoma;font-size:14px;line-height:25px;background-color:#eff4fa;"><span style="font-size:14px;"><span style="font-family:arial, helvetica, sans-serif;">1.为啥PHP需要异步操作？</span></span></p><p style="padding:0px;margin:0px 0px 22px;color:#000000;font-family:verdana, arial, tahoma;font-size:14px;line-height:25px;background-color:#eff4fa;"><span style="font-size:14px;"><span style="font-family:arial, helvetica, sans-serif;">一般来说PHP适用的场合是web页面展示等耗时比较短的任务，如果对于比较花时间的操作如resize图片、大数据导入、批量发送EDM、SMS等，就很容易出现操作超时情况。你可以说我可以设置无限超时时间，等等你也要知道PHP有一个工作模式是fastcgi，PHP无限不超时，不代表 fastcgi相应不超时&hellip;&hellip;如果你还想说要fastcgi相应永不超时，我建议你应该跟你们的运维人员讨论去&hellip;&hellip;</span></span></p><p style="padding:0px;margin:0px 0px 22px;color:#000000;font-family:verdana, arial, tahoma;font-size:14px;line-height:25px;background-color:#eff4fa;"><span style="font-size:14px;"><span style="font-family:arial, helvetica, sans-serif;">这个时候异步的操作就发挥他的作用了，由于是非阻塞操作，操作会即时返回，然后在后台再慢慢干活。管你超时不超时的，我就没有在当前的进程/线程下干活。看吧是不是很美好，不过其实这也是个坑&hellip;&hellip;</span></span></p><p style="padding:0px;margin:0px 0px 22px;color:#000000;font-family:verdana, arial, tahoma;font-size:14px;line-height:25px;background-color:#eff4fa;"><span style="font-size:14px;"><span style="font-family:arial, helvetica, sans-serif;">2.PHP可以实现异步操作吗？</span></span></p><p style="padding:0px;margin:0px 0px 22px;color:#000000;font-family:verdana, arial, tahoma;font-size:14px;line-height:25px;background-color:#eff4fa;"><span style="font-size:14px;"><span style="font-family:arial, helvetica, sans-serif;">答案是肯定的，不过网上各种的纯PHP实现得就有点别扭了。socket模式、挂起进程模式、有的还直接fork进程。很好，各路神仙各显神通。如果运维人员看到的话，一定会�����你们的，不把web server跑死才怪&hellip;&hellip;</span></span></p><p style="padding:0px;margin:0px 0px 22px;color:#000000;font-family:verdana, arial, tahoma;font-size:14px;line-height:25px;background-color:#eff4fa;"><span style="font-size:14px;"><span style="font-family:arial, helvetica, sans-serif;">那还有其他更好的方法去实现这个异步操作的可能么？有，现在我们只有想怎么开外挂了。查一下PECL主流的外挂方案有一堆的��MQ（消息队列），其中有个用于任务分配的外挂进入了我们的视线<a href="http://www.cnblogs.com/cocowool/archive/2011/08/18/2145144.html" style="padding:0px;margin:0px;color:#626f91;text-decoration:initial;" target="_blank">Gearman</a>(其实这家伙才是角，我就不详细介绍了，点连接看介绍)。</span></span></p><p style="padding:0px;margin:0px 0px 22px;color:#000000;font-family:verdana, arial, tahoma;font-size:14px;line-height:25px;background-color:#eff4fa;"><span style="font-size:14px;"><span style="font-family:arial, helvetica, sans-serif;">3.为啥选择Gearman?</span></span></p><p style="padding:0px;margin:0px 0px 22px;color:#000000;font-family:verdana, arial, tahoma;font-size:14px;line-height:25px;background-color:#eff4fa;"><span style="font-size:14px;"><span style="font-family:arial, helvetica, sans-serif;">别的不说，就说他的client多，支持很多语言的client，你可以使用大部分你喜欢的语言去写worker。我个人是很烦语言之争，你喜欢用神码语言写worker都随你喜欢。有数据持久化支持（就是把队列保存到数据库介质中，那故障恢复也好做），有群集支持（其实很多��MQ都有这些功能）。 PECL上有扩展，也有纯PHP实现扩展。反正这个Gearman也活了很久了，杂七杂八的问题都基本上解决了。</span></span></p><p style="padding:0px;margin:0px 0px 22px;color:#000000;font-family:verdana, arial, tahoma;font-size:14px;line-height:25px;background-color:#eff4fa;"><span style="font-size:14px;"><span style="font-family:arial, helvetica, sans-serif;">4.基本思路</span></span></p><p style="padding:0px;margin:0px 0px 22px;color:#000000;font-family:verdana, arial, tahoma;font-size:14px;line-height:25px;background-color:#eff4fa;"><span style="font-size:14px;"><span style="font-family:arial, helvetica, sans-serif;">有了Gearman这外挂就简单多了。就是向gearman发送一个任务，把执行的任务发出去，然后等待worker去调用PHP cli去运行我们的php代码。</span></span></p><p style="padding:0px;margin:0px 0px 22px;color:#000000;font-family:verdana, arial, tahoma;font-size:14px;line-height:25px;background-color:#eff4fa;"><span style="font-size:14px;"><span style="font-family:arial, helvetica, sans-serif;">我就写了一下一个python的worker（别问我为啥用python，1.我会python，2.linux下不用装runtime），你可以自己根据思路写一个PHP的worker，不过嘛，本人是不太信得过PHP跑的worker。其他语言饭可以用java、node.js 或者其他语言实现一个worker试试。对用Golang写worker有兴趣的朋友可以找我。</span></span></p><p style="padding:0px;margin:0px 0px 22px;color:#000000;font-family:verdana, arial, tahoma;font-size:14px;line-height:25px;background-color:#eff4fa;"><span style="font-size:14px;"><span style="font-family:arial, helvetica, sans-serif;"><a href="http://code.google.com/p/phpasync-for-gearman/downloads/detail?name=phpasync_worker_py.zip&amp;can=2&amp;q=" style="padding:0px;margin:0px;color:#626f91;text-decoration:initial;" target="_blank">phpasync_worker_py</a></span></span></p><p style="padding:0px;margin:0px 0px 22px;color:#000000;font-family:verdana, arial, tahoma;font-size:14px;line-height:25px;background-color:#eff4fa;"><span style="font-size:14px;"><span style="font-family:arial, helvetica, sans-serif;">不好意思，里面是没有注释的。一个配置文件，一个py脚本。基本的功能也就是分析一下调用的参数，然后调用PHP Cli，就是那样子而已。要让py脚本跑起来请自行安装python的gearman模块。</span></span></p><p style="padding:0px;margin:0px 0px 22px;color:#000000;font-family:verdana, arial, tahoma;font-size:14px;line-height:25px;background-color:#eff4fa;"><span style="font-size:14px;"><span style="font-family:arial, helvetica, sans-serif;">然后到PHP的部分先上测试代码：</span></span></p><ol style="margin:0px;border-width:0px;color:#000000;font-family:verdana, arial, tahoma;font-size:14px;line-height:25px;background-color:#eff4fa;padding-right:0px;padding-left:0px;"><li style="padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;"><pre style="padding:0px;font-family:&#39;courier new&#39;, monospace;font-size:12px;width:650.421875px;word-wrap:break-word;word-break:break-all;background-color:#f7f7f7;margin-top:0px;"><span style="font-size:14px;"><span style="font-family:arial, helvetica, sans-serif;">&lt;?php &nbsp;</span></span></pre></li><li style="padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;"><p><span style="font-size:14px;"><span style="font-family:arial, helvetica, sans-serif;">require_once &#39;PHPAsyncClient.php&#39;; &nbsp;</span></span></p></li><li style="padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;"><p><span style="font-size:14px;"><span style="font-family:arial, helvetica, sans-serif;">date_default_timezone_set(&#39;Asia/Shanghai&#39;); &nbsp;</span></span></p></li><li style="padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;"><p> </p></li><li style="padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;"><p><span style="font-size:14px;"><span style="font-family:arial, helvetica, sans-serif;">class AsyncTest { &nbsp;</span></span></p></li><li style="padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;"><p> </p></li><li style="padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;"><p><span style="font-size:14px;"><span style="font-family:arial, helvetica, sans-serif;"> &nbsp; &nbsp;const </span></span></p></li><li style="padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;"><p><span style="font-size:14px;"><span style="font-family:arial, helvetica, sans-serif;"> &nbsp; &nbsp; &nbsp; &nbsp;LOG_FILE = &#39;/debug.log&#39;; &nbsp;</span></span></p></li><li style="padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;"><p> </p></li><li style="padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;"><p><span style="font-size:14px;"><span style="font-family:arial, helvetica, sans-serif;"> &nbsp; &nbsp;static public function run() { &nbsp;</span></span></p></li><li style="padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;"><p><span style="font-size:14px;"><span style="font-family:arial, helvetica, sans-serif;"> &nbsp; &nbsp; &nbsp; &nbsp;if (PHPAsyncClient::in_callback(__FILE__)) { &nbsp;</span></span></p></li><li style="padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;"><p><span style="font-size:14px;"><span style="font-family:arial, helvetica, sans-serif;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;self::log(&#39;php Async callback&#39;); &nbsp;</span></span></p></li><li style="padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;"><p><span style="font-size:14px;"><span style="font-family:arial, helvetica, sans-serif;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;PHPAsyncClient::parse(); &nbsp;</span></span></p></li><li style="padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;"><p><span style="font-size:14px;"><span style="font-family:arial, helvetica, sans-serif;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;return; &nbsp;</span></span></p></li><li style="padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;"><p><span style="font-size:14px;"><span style="font-family:arial, helvetica, sans-serif;"> &nbsp; &nbsp; &nbsp; &nbsp;} &nbsp;</span></span></p></li><li style="padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;"><p><span style="font-size:14px;"><span style="font-family:arial, helvetica, sans-serif;"> &nbsp; &nbsp; &nbsp; &nbsp;if (PHPAsyncClient::is_main(__FILE__)) { &nbsp;</span></span></p></li><li style="padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;"><p><span style="font-size:14px;"><span style="font-family:arial, helvetica, sans-serif;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;self::log(&#39;main run&#39;); &nbsp;</span></span></p></li><li style="padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;"><p><span style="font-size:14px;"><span style="font-family:arial, helvetica, sans-serif;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;$async_call = PHPAsyncClient::getInstance(); &nbsp;</span></span></p></li><li style="padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;"><p><span style="font-size:14px;"><span style="font-family:arial, helvetica, sans-serif;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;$async_call-&gt;AsyncCall(&#39;AsyncTest&#39;, &#39;callback&#39;, array( &nbsp;</span></span></p></li><li style="padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;"><p><span style="font-size:14px;"><span style="font-family:arial, helvetica, sans-serif;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&#39;content&#39; =&gt; &#39;Hello World!!!&#39;, &nbsp;</span></span></p></li><li style="padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;"><p><span style="font-size:14px;"><span style="font-family:arial, helvetica, sans-serif;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;), array( &nbsp;</span></span></p></li><li style="padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;"><p><span style="font-size:14px;"><span style="font-family:arial, helvetica, sans-serif;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&#39;class&#39; =&gt; &#39;AsyncTest&#39;, &nbsp;</span></span></p></li><li style="padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;"><p><span style="font-size:14px;"><span style="font-family:arial, helvetica, sans-serif;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&#39;method&#39; =&gt; &#39;callback&#39;, &nbsp;</span></span></p></li><li style="padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;"><p><span style="font-size:14px;"><span style="font-family:arial, helvetica, sans-serif;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&#39;params&#39; =&gt; array( &nbsp;</span></span></p></li><li style="padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;"><p><span style="font-size:14px;"><span style="font-family:arial, helvetica, sans-serif;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&#39;content&#39; =&gt; &#39;Hello Callback!&#39;, &nbsp;</span></span></p></li><li style="padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;"><p><span style="font-size:14px;"><span style="font-family:arial, helvetica, sans-serif;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;), &nbsp;</span></span></p></li><li style="padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;"><p><span style="font-size:14px;"><span style="font-family:arial, helvetica, sans-serif;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;), __FILE__); &nbsp;</span></span></p></li><li style="padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;"><p><span style="font-size:14px;"><span style="font-family:arial, helvetica, sans-serif;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;return; &nbsp;</span></span></p></li><li style="padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;"><p><span style="font-size:14px;"><span style="font-family:arial, helvetica, sans-serif;"> &nbsp; &nbsp; &nbsp; &nbsp;} &nbsp;</span></span></p></li><li style="padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;"><p><span style="font-size:14px;"><span style="font-family:arial, helvetica, sans-serif;"> &nbsp; &nbsp;} &nbsp;</span></span></p></li><li style="padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;"><p> </p></li><li style="padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;"><p><span style="font-size:14px;"><span style="font-family:arial, helvetica, sans-serif;"> &nbsp; &nbsp;static public function callback($args) { &nbsp;</span></span></p></li><li style="padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;"><p><span style="font-size:14px;"><span style="font-family:arial, helvetica, sans-serif;"> &nbsp; &nbsp; &nbsp; &nbsp;self::log(&#39;AsyncTest callback run&#39;); &nbsp;</span></span></p></li><li style="padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;"><p><span style="font-size:14px;"><span style="font-family:arial, helvetica, sans-serif;"> &nbsp; &nbsp; &nbsp; &nbsp;self::log(&#39;AsyncTest callback args:&#39;.print_r($args, true)); &nbsp;</span></span></p></li><li style="padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;"><p><span style="font-size:14px;"><span style="font-family:arial, helvetica, sans-serif;"> &nbsp; &nbsp;} &nbsp;</span></span></p></li><li style="padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;"><p> </p></li><li style="padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;"><p><span style="font-size:14px;"><span style="font-family:arial, helvetica, sans-serif;"> &nbsp; &nbsp;static public function log($content) { &nbsp;</span></span></p></li><li style="padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;"><p><span style="font-size:14px;"><span style="font-family:arial, helvetica, sans-serif;"> &nbsp; &nbsp; &nbsp; &nbsp;$fullname = dirname(__FILE__).self::LOG_FILE; &nbsp;</span></span></p></li><li style="padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;"><p><span style="font-size:14px;"><span style="font-family:arial, helvetica, sans-serif;"> &nbsp; &nbsp; &nbsp; &nbsp;$content = date(&#39;[Y-m-d H:i:s]&#39;).$content.&quot;&quot;; &nbsp;</span></span></p></li><li style="padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;"><p><span style="font-size:14px;"><span style="font-family:arial, helvetica, sans-serif;"> &nbsp; &nbsp; &nbsp; &nbsp;file_put_contents($fullname, $content, FILE_APPEND); &nbsp;</span></span></p></li><li style="padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;"><p><span style="font-size:14px;"><span style="font-family:arial, helvetica, sans-serif;"> &nbsp; &nbsp;} &nbsp;</span></span></p></li><li style="padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;"><p><span style="font-size:14px;"><span style="font-family:arial, helvetica, sans-serif;">} &nbsp;</span></span></p></li><li style="padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;"><p> </p></li><li style="padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;"><p><span style="font-size:14px;"><span style="font-family:arial, helvetica, sans-serif;">AsyncTest::run(); </span></span></p></li></ol><p style="padding:0px;margin:0px 0px 22px;color:#000000;font-family:verdana, arial, tahoma;font-size:14px;line-height:25px;background-color:#eff4fa;"><span style="font-size:14px;"><span style="font-family:arial, helvetica, sans-serif;">就3个静态方法，一个是用于调试的log方法，其他都是字面意思。这个例子是对这种调用方式有个初步印象。然后直接上PHP的所有源码：</span></span></p><p style="padding:0px;margin:0px 0px 22px;color:#000000;font-family:verdana, arial, tahoma;font-size:14px;line-height:25px;background-color:#eff4fa;"><span style="font-size:14px;"><span style="font-family:arial, helvetica, sans-serif;"><a href="http://code.google.com/p/phpasync-for-gearman/downloads/detail?name=php_async.zip&amp;can=2&amp;q=" style="padding:0px;margin:0px;color:#626f91;text-decoration:initial;" target="_blank">php_async.zip</a></span></span></p><p style="padding:0px;margin:0px 0px 22px;color:#000000;font-family:verdana, arial, tahoma;font-size:14px;line-height:25px;background-color:#eff4fa;"><span style="font-size:14px;"><span style="font-family:arial, helvetica, sans-serif;">然后应该会有很多人会说，win下安装不了gearman&hellip;&hellip;所以我把java版的gearman server也放上去吧。</span></span></p><p style="padding:0px;margin:0px 0px 22px;color:#000000;font-family:verdana, arial, tahoma;font-size:14px;line-height:25px;background-color:#eff4fa;"><span style="font-size:14px;"><span style="font-family:arial, helvetica, sans-serif;"><a href="http://code.google.com/p/phpasync-for-gearman/downloads/detail?name=java-gearman-service-0.6.6.zip&amp;can=2&amp;q=" style="padding:0px;margin:0px;color:#626f91;text-decoration:initial;" target="_blank">java-gearman-service-0.6.6.zip</a></span></span></p><p style="padding:0px;margin:0px 0px 22px;color:#000000;font-family:verdana, arial, tahoma;font-size:14px;line-height:25px;background-color:#eff4fa;"><span style="font-size:14px;"><span style="font-family:arial, helvetica, sans-serif;">5.结论</span></span></p><p style="padding:0px;margin:0px 0px 22px;color:#000000;font-family:verdana, arial, tahoma;font-size:14px;line-height:25px;background-color:#eff4fa;"><span style="font-size:14px;"><span style="font-family:arial, helvetica, sans-serif;">经过以上配置犀牛一样大的家伙后（要装一个Gearman，还要跑个Py脚本），我们基本上就使PHP拥有了异步调用功能，当然其中还有一个状态维护神马的要自己去实现。所以发现，其实这个方案不咋样，太复杂了。还是使用一些web service的方式去做web callback会好点（问题是web callback一样会超时&hellip;&hellip;），这个请留意后续。</span></span></p><p><br /></p>
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
								<a href="/laugh/index.php?s=article/view&columnid=2&articleid=6" title="PHP基本点知识">PHP基本点知识</a>
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