<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="keywords" content="Laugh,CMS,LaughCMS,内容,管理,系统">
<meta name="description" content="Laugh CMS内容管理系统" />
<link type="text/css" rel="stylesheet" href="themes/default/style/common.css" media="screen">
<link type="text/css" rel="stylesheet" href="themes/default/style/frame.css" media="screen">
<link type="text/css" rel="stylesheet" href="themes/default/style/global.css" media="screen">
<link type="text/css" rel="stylesheet" href="themes/default/style/style.css" media="screen">
<script type="text/javascript" src="public/js/jquery.js"></script>
<script type="text/javascript" src="public/js/jquery.idTabs.min.js"></script>
<script type="text/javascript" src="themes/default/js/common.js"></script>
<script type="text/javascript" src="themes/default/js/frame.js"></script>
<title>Laugh CMS内容管理系统</title>
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
				Laugh CMS内容管理系统
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
		当前位置: <a href="/laugh">首页</a> > <a href="/laugh/index.php?s=Article/index&columnid=2">新闻资讯</a> > <a href="/laugh/index.php?s=Article/index&columnid=3">IT知识</a>
	</div>
	<div id="CenterShow" class="block mtop5">
		<div id="mainBlock" class="fleft w740">
			<div class="boxBlock">
				<div class="boxBlockTitle">
					<span class="title">VI命令大全</span>
				</div>
				<div class="boxBlockBody">
					<div class="contentBlock">
						<div class="articleTpl">
	<h2 class="title">VI命令大全</h2>
	<div class="status">
		<span class="title">点击次数:</span>
		<span class="content">0 次</span>
		<span class="title">发布时间:</span>
		<span class="content">2013-04-27 18:43:05</span>
		<span class="title">作者:</span>
		<span class="content">admin</span>
	</div>
	<div class="body">
		<div class="articleContent">
			<p> &nbsp; &nbsp;进入vi的命令<br /> &nbsp; &nbsp;vi filename :打开或新建文件，并将光标置于第一行首<br /> &nbsp; &nbsp;vi +n filename ：打开文件，并将光标置于第n行首<br /> &nbsp; &nbsp;vi + filename ：打开文件，并将光标置于最后一行首<br /> &nbsp; &nbsp;vi +/pattern filename：打开文件，并将光标置于第一个与pattern匹配的串处<br /> &nbsp; &nbsp;vi -r filename ：在上次正用vi编辑时发生系统崩溃，恢复filename<br /> &nbsp; &nbsp;vi filename&hellip;.filename ：打开多个文件，依次编辑<br /><br /> &nbsp; &nbsp;移动光标类命令<br /> &nbsp; &nbsp;h ：光标左移一个字符<br /> &nbsp; &nbsp;l ：光标右移一个字符<br /> &nbsp; &nbsp;space：光标右移一个字符<br /> &nbsp; &nbsp;Backspace：光标左移一个字符<br /> &nbsp; &nbsp;k或Ctrl+p：光标上移一行<br /> &nbsp; &nbsp;j或Ctrl+n ：光标下移一行<br /> &nbsp; &nbsp;Enter ：光标下移一行<br /> &nbsp; &nbsp;w或W ：光标右移一个字至字首<br /> &nbsp; &nbsp;b或B ：光标左移一个字至字首<br /> &nbsp; &nbsp;e或E ：光标右移一个字j至字尾<br /> &nbsp; &nbsp;) ：光标移至句尾<br /> &nbsp; &nbsp;( ：光标移至句首<br /> &nbsp; &nbsp;}：光标移至段落开头<br /> &nbsp; &nbsp;{：光标移至段落结尾<br /> &nbsp; &nbsp;nG：光标移至第n行首<br /> &nbsp; &nbsp;n+：光标下移n行<br /> &nbsp; &nbsp;n-：光标上移n行<br /> &nbsp; &nbsp;n$：光标移至第n行尾<br /> &nbsp; &nbsp;H ：光标移至屏幕顶行<br /> &nbsp; &nbsp;M ：光标移至屏幕中间行<br /> &nbsp; &nbsp;L ：光标移至屏幕最后行<br /> &nbsp; &nbsp;0：（注意是数字零）光标移至当前行首<br /> &nbsp; &nbsp;$：光标移至当前行尾<br /><br /> &nbsp; &nbsp;屏幕翻滚类命令<br /> &nbsp; &nbsp;Ctrl+u：向文件首翻半屏<br /> &nbsp; &nbsp;Ctrl+d：向文件尾翻半屏<br /> &nbsp; &nbsp;Ctrl+f：向文件尾翻一屏<br /> &nbsp; &nbsp;Ctrl＋b；向文件首翻一屏<br /> &nbsp; &nbsp;nz：将第n行滚至屏幕顶部，不指定n时将当前行滚至屏幕顶部。<br /> &nbsp; &nbsp;插入文本类命令<br /> &nbsp; &nbsp;i ：在光标前<br /> &nbsp; &nbsp;I ：在当前行首<br /> &nbsp; &nbsp;a：光标后<br /> &nbsp; &nbsp;A：在当前行尾<br /> &nbsp; &nbsp;o：在当前行之下新开一行<br /> &nbsp; &nbsp;O：在当前行之上新开一行<br /> &nbsp; &nbsp;r：替换当前字符<br /> &nbsp; &nbsp;R：替换当前字符及其后的字符，直至按ESC键<br /> &nbsp; &nbsp;s：从当前光标位置处开始，以输入的文本替代指定数目的字符<br /> &nbsp; &nbsp;S：删除指定数目的行，并以所输入文本代替之<br /> &nbsp; &nbsp;ncw或nCW：修改指定数目的字<br /> &nbsp; &nbsp;nCC：修改指定数目的行<br /><br /> &nbsp; &nbsp;删除命令<br /> &nbsp; &nbsp;ndw或ndW：删除光标处开始及其后的n-1个字<br /> &nbsp; &nbsp;do：删至行首<br /> &nbsp; &nbsp;d$：删至行尾<br /> &nbsp; &nbsp;ndd：删除当前行及其后n-1行<br /> &nbsp; &nbsp;dd：删除当前行<br /> &nbsp; &nbsp;x或X：删除一个字符，x删除光标后的，而X删除光标前的<br /> &nbsp; &nbsp;Ctrl+u：删除输入方式下所输入的文本<br /> &nbsp; &nbsp;dnl:向右删除n个字母<br /> &nbsp; &nbsp;dnh:向左删除n个字母<br /> &nbsp; &nbsp;dnj:向下删除n行<br /> &nbsp; &nbsp;dnk:向上删除n行<br /> &nbsp; &nbsp;搜索及替换命令 :<br /> &nbsp; &nbsp;/pattern：从光标开始处向文件尾搜索pattern<br /> &nbsp; &nbsp;?pattern：从光标开始处向文件首搜索pattern<br /> &nbsp; &nbsp;n：在同一方向重复上一次搜索命令<br /> &nbsp; &nbsp;N：在反方向上重复上一次搜索命令<br /> &nbsp; &nbsp;：s/p1/p2/g：将当前行中所有p1均用p2替代<br /> &nbsp; &nbsp;：n1,n2s/p1/p2/g：将第n1至n2行中所有p1均用p2替代<br /> &nbsp; &nbsp;：g/p1/s//p2/g：将文件中所有p1均用p2替换<br /><br /> &nbsp; &nbsp;选项设置<br /> &nbsp; &nbsp;all：列出所有选项设置情况<br /> &nbsp; &nbsp;term：设置终端类型<br /> &nbsp; &nbsp;ignorance：在搜索中忽略大小写<br /> &nbsp; &nbsp;list：显示制表位(Ctrl+I)和行尾标志（$)<br /> &nbsp; &nbsp;number：显示行号<br /> &nbsp; &nbsp;report：显示由面向行的命令修改过的数目<br /> &nbsp; &nbsp;terse：显示简短的警告信息<br /> &nbsp; &nbsp;warn：在转到别的文件时若没保存当前文件则显示NO write信息<br /> &nbsp; &nbsp;nomagic：允许在搜索模式中，使用前面不带&ldquo;&rdquo;的特殊字符<br /> &nbsp; &nbsp;nowrapscan：禁止vi在搜索到达文件两端时，又从另一端开始<br /> &nbsp; &nbsp;mesg：允许vi显示其他用户用write写到自己终端上的信息<br /><br /> &nbsp; &nbsp;最后行方式命令<br /> &nbsp; &nbsp;：n1,n2 co n3：将n1行到n2行之间的内容拷贝到第n3行下<br /> &nbsp; &nbsp;：n1,n2 m n3：将n1行到n2行之间的内容移至到第n3行下<br /> &nbsp; &nbsp;：n1,n2 d ：将n1行到n2行之间的内容删除<br /> &nbsp; &nbsp;：w ：保存当前文件<br /> &nbsp; &nbsp;：e filename：打开文件filename进行编辑<br /> &nbsp; &nbsp;：x：保存当前文件并退出<br /> &nbsp; &nbsp;：q：退出vi<br /> &nbsp; &nbsp;：q!：不保存文件并退出vi<br /> &nbsp; &nbsp;：!command：执行shell命令command<br /> &nbsp; &nbsp;：n1,n2 w!command：将文件中n1行至n2行的内容作为command的输入并执行之，若不指<br /> &nbsp; &nbsp;定n1，n2，则表示将整个文件内容作为command的输入<br /> &nbsp; &nbsp;：r!command：将命令command的输出结果放到当前行。</p>
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
								<a href="/laugh/index.php?s=article/view&columnid=3&archiveid=10" title="Web服务攻击反侦查痕迹检测">Web服务攻击反侦查痕迹检测</a>
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
		<div class="boxBlockBody">
			<ul class="SideNavList">
				
				<li><a href="javascript:;">新闻资讯</a></li>
				
			</ul>
		</div>
	</div>
	<div class="boxBlock mtop10">
		<div class="boxBlockTitle">
			<span class="title">联系我们</span>
		</div>
		<div class="boxBlockBody">
			<div class="contactUS">
				<h5><font color="#FF6600"><b>Laugh CMS内容管理系统</b></font></h5>
<h5><font color="#FF6600">Laugh CMS</font></h5>
<h5>电 话: 0512-36607986 15962257765</h5>
<h5>传 真: 0512-36607986</h5>
<h5>网 址: www.laughcms.net</h5>
<h5>地 址: 江苏省苏州市</h5>
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
						<li><a tabid="#flinkboxTab2" href="javascript:;" >分类二</a></li>
								</ul>
	</div>
	<div class="FlinkBody">
						<div id="flinkboxTab1" class="boxTabContent">
			<ul class="flinkList">
												<li><a href="http://www.baidu.com/" target="_blank">百度</a></li>
											</ul>
		</div>
				<div id="flinkboxTab2" class="boxTabContent">
			<ul class="flinkList">
												<li><a href="http://www.weibo.com/" target="_blank">新浪微博</a></li>
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
						<li class="bordernone"><a href="http://localhost:82/laugh/index.php?s=Plugin/Cooperate&amp;columnid=9">招贤纳士</a></li>
				<li ><a href="http://localhost:82/laugh/index.php?s=Public/AboutUS&amp;columnid=10">关于我们</a></li>
				<li ><a href="http://localhost:82/laugh/index.php?s=Public/ContactUS&amp;columnid=11">联系我们</a></li>
				<li ><a href="javascript:;">在线手册</a></li>
				<li ><a href="javascript:;">帮助中心</a></li>
					</ul>
	<div id="copyright">
		Laugh CMS内容管理系统
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