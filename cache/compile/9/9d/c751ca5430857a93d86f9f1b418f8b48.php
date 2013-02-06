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
		<a href="/laugh/index.php" class="navon">网站首页</a>
	</li>
	<li>
		<a href="/laugh/index.php?s=article">新闻资讯</a>
		<ul class="SubNavigation">
			<li>
				<a href="#">子菜单一</a>
			</li>
			<li>
				<a href="#">子菜单二</a>
				<ul>
					<li><a href="#">子子栏目一</a></li>
					<li><a href="#">子子栏目一</a></li>
					<li><a href="#">子子栏目一</a></li>
				</ul>
			</li>
		</ul>
	</li>
	<li>
		<a href="/laugh/index.php?s=Product">产品展示</a>
	</li>
	<li>
		<a href="/laugh/index.php?s=Download">下载中心</a>
	</li>
	<li>
		<a href="/laugh/index.php?s=Image">客户案例</a>
	</li>
	<li>
		<a href="/laugh/index.php?s=Cooperate">招贤纳士</a>
	</li>
	<li>
		<a href="/laugh/index.php?s=Public/AboutUS">关于我们</a>
	</li>
	<li>
		<a href="/laugh/index.php?s=Public/ContactUS">联系我们</a>
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
		当前位置: <a href="/laugh">首页</a> > <a href="/laugh/index.php?s=article">新闻资讯</a>
	</div>
	<div id="CenterShow" class="block mtop5">
		<div id="mainBlock" class="fleft w740">
			<div class="boxBlock">
				<div class="boxBlockTitle">
					<span class="title">新闻资讯</span>
					<!-- <span class="link"><a href="javascript:;">更多>></a></span> -->
				</div>
				<div class="boxBlockBody">
					<div class="contentBlock">
						<div class="articleTpl">
	<h2 class="title">企业用网站进行网络宣传的优势</h2>
	<div class="status">
		<span class="title">点击次数:</span>
		<span class="content">202次</span>
		<span class="title">发布时间:</span>
		<span class="content">2012-02-06 10:13:55</span>
		<span class="title">作者:</span>
		<span class="content">admin</span>
	</div>
	<div class="body">
		<div><div>
	<strong><span style="font-size:14px;">网络宣传是多维宣传&nbsp;</span></strong></div>
<div>
	&#12288;&#12288;传统媒体是二维的，而网络宣传则是多维的，它能将文字、图像和声音有机的组合在一起，传递多感官的信息，让顾客如身临其境般感受商品或服务。使消费者能亲身体验产品、服务与品牌。这种图、文、声、像相结合的宣传形式，增强了网络宣传的实效。</div>
<div>
	&nbsp;</div>
<div>
	<strong><span style="font-size:14px;">网络宣传拥有最有活力的消费群体</span></strong></div>
<div>
	&#12288;&#12288;互联网用户70.54%集中在经济较为发达地区，64%家庭人均月收入高于1000元，85.8%年龄在18岁到35岁之间，83%受过大学以上教育。因此，网络宣传的目标群体是目前社会上层次最高、收入最高、消费能力最高的最具活力的消费群体。这一群体的消费总额往往大于其他消费层次之和。</div>
<div>
	&nbsp;</div>
<div>
	<strong><span style="font-size:14px;">网络宣传制作成本低，速度快，更改灵活</span></strong></div>
<div>
	&#12288;&#12288;网络宣传制作周期短，即使在较短的周期进行投放，也可以根据客户的需求很快完成制作，而传统宣传制作成本高，投放周期固定。另外，在传统媒体上做宣传发布后很难更改即使可以改动往往也须付出很大的经济代价。而在互联网上做宣传能够按照客户需要及时变更宣传内容。这样，经营决策的变化就能及时实施和推广。</div>
<div>
	&nbsp;</div>
<div>
	<strong><span style="font-size:14px;">网络宣传具有交互性和纵深性</span></strong></div>
<div>
	&#12288;&#12288;交互性强是互联网络媒体的最大的优势，它不同于传统媒体的信息单向传播，而是信息互动传播。通过链接，用户只需简单地点击鼠标，就可以从厂商的相关站点中得到更多、更详尽的信息。另外，用户可以通过网络直接填写并提交在线表单信息，厂商可以随时得到宝贵的用户反馈信息，进一步减少了用户和宣传客户之间的距离。同时，网络宣传可以提供进一步的产品查询需求。</div>
<div>
	&nbsp;</div>
<div>
	<strong><span style="font-size:14px;">网络宣传能进行完善的统计</span></strong></div>
<div>
	&#12288;&#12288;"无法衡量的东西就无法管理。"网络宣传通过及时和精确的统计机制，使用户能够直接对信息的发布进行在线监控。而传统的信息发布形式只能通过并不精确的收视率、发行量等来统计投放的受众数量。</div>
<div>
	&nbsp;</div>
<div>
	<strong><span style="font-size:14px;">网络宣传可以跟踪和衡量宣传的效果</span></strong></div>
<div>
	&#12288;&#12288;用户能通过Internet即时衡量宣传的效果。通过监视宣传的浏览量、点击率等指标，用户可以统计出多少人看到了发布的信息，其中有多少人对发布的信息感兴趣进而进一步了解了信息的详细信息。因此，较之其他任何宣传，网络宣传使用户能够更好地跟踪受众的反应，及时了解用户和潜在用户的情况。</div>
<div>
	&nbsp;</div>
<div>
	<strong><span style="font-size:14px;">网络宣传的投放更具有针对性</span></strong></div>
<div>
	&#12288;&#12288;通过提供众多的免费服务，网站一般都能建立完整的用户数据库，包括用户的地域分布、年龄、性别、收入、职业、婚姻状况、爱好等。这些资料可帮助用户分析市场与受众，根据信息发布目标受众的特点，有针对性地进行信息发布，并根据用户特点作定点投放和跟踪分析，对投放效果作出客观准确的评价。</div>
<div>
	另外，网络宣传还可以提供有针对性的内容环境。不同的网站或者是同一网站不同的频道所提供的服务是不同质且具有很强的类分别的，这就为密切迎合用户的兴趣提供了可能。</div>
<div>
	&nbsp;</div>
<div>
	<strong><span style="font-size:14px;">网络宣传的受众关注度高</span></strong></div>
<div>
	&#12288;&#12288;据资料显示，电视并不能集中人的注意力，电视观众40%的人同时在阅读，21%的人同时在做家务，13%的人在吃喝，12%的人在玩赏它物，10%在烹饪，9%在写作，8%在打电话。而网上用户55%在使用计算机时不做任何它事，只有6%同时在打电话，只有5%在吃喝，只有4%在写作。</div>
<div>
	&nbsp;</div>
<div>
	<strong><span style="font-size:14px;">网络宣传缩短了媒体投放的进程</span></strong></div>
<div>
	&#12288;&#12288;用户在传统媒体上进行市场推广一般要经过三个阶段：市场开发期、市场巩固期和市场维持期。在这三个阶段中，厂商要首先获取注意力，创立品牌知名度；在消费者获得品牌的初步信息后，推广更为详细的产品信息。然后是建立和消费者之间较为牢固的联系，以建立品牌忠诚。而互联网将这三个阶段合并在一次信息发布中实现：消费者看到网络宣传，点击后获得详细信息，并填写用户资料或直接参与用户的市场活动甚至直接在网上实施购买行为。</div>
<div>
	&nbsp;</div>
<div>
	<span style="font-size:14px;"><strong>网络宣传传播范围广、不受时空限制</strong></span></div>
<div>
	&#12288;&#12288;通过国际互联网络，网络宣传可以将信息24小时不间断地传播到世界的每一个角落。只要具备上网条件，任何人，在任何地点都可以阅读。这是传统媒体无法达到的。</div>
<div>
	&nbsp;</div>
<div>
	<strong><span style="font-size:14px;">网络宣传具有可重复性和可检索性</span></strong></div>
<div>
	&#12288;&#12288;网络宣传可以将文字、声音、画面完美地结合之后供用户主动检索，重复观看。而与之相比电视宣传却是让用户被动地接受宣传内容。如果错过宣传时间，就不能再得到发布信息。另外，显而易见，较之网络宣传的检索平面宣传的检索要费时、费事的多。</div>
<div>
	&nbsp;</div>
<div>
	<strong><span style="font-size:14px;">网络宣传具有价格优势</span></strong></div>
<div>
	&#12288;&#12288;从价格方面考虑，与报纸杂志或电视宣传相比，目前网络宣传费用还是较为低廉的。获得同等的宣传效应，网络宣传的有效千人成本远远低于传统宣传媒体。一个宣传主页一年的费用大致为几千元人民币，而且主页内容可以随企业经营决策的变更随时改变，这是传统宣传媒体不可想像的。网络宣传将成为企业市场推广必不可少的高效途径。</div>
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
			<dd><a href="javascript:;">新手使用MetInfo建站步骤？</a></dd>
		</dl>
		<dl>
			<dt>下一篇:</dt>
			<dd><a href="javascript:;">新手使用MetInfo建站步骤？</a></dd>
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