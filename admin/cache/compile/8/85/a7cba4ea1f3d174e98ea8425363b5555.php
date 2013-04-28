<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="keywords" content="">
<link type="text/css" rel="stylesheet" href="themes/blue/style/common.css" media="screen">
<link type="text/css" rel="stylesheet" href="themes/blue/style/global.css" media="screen">
<script type="text/javascript" src="public/js/jquery.js"></script>
<script type="text/javascript" src="themes/blue/js/div_window.js"></script>
<link type="text/css" rel="stylesheet" href="public/plugin/colorbox/colorbox.css" media="screen">
<script type="text/javascript" src="public/plugin/colorbox/jquery.colorbox.js"></script>
<title>LaughCMS网站管理系统</title>
<script type="text/javascript">
var JS_APP = '/laugh/admin';
var JS_APPM = 'http://localhost:82/laugh';
function colorboxAjaxHtml(url) {
	$.post(url,{},function (data){
		$.colorbox({ html: data });
	});
}
function colorboxHtml(url) {
	$.colorbox({ href: url });
}
function colorboxImage(url) {
	$.colorbox({ href: url });
}
</script>
</head>

<body>
<style type="text/css">
	body { background: none; }
</style>
<div id="control">
	<div id="controlContent">
<div class="formContainer" accessStatus=1>
	<div class="formtitle"><h5>修改文档资料</h5></div>
	<form name="newform" action="/laugh/admin/index.php?s=Article/saveEdit" enctype="multipart/form-data" method="post" class="newform">
		<input type="hidden" name="archiveid" value="13" />
		<ul class="formbody">
			<div class="shtabtitlec">
				<div class="shtabtitle shtabcurrent"><a href="javascript:;"><span>常规内容</span></a></div>
				<div class="shtabtitle"><a href="javascript:;"><span>高级内容</span></a></div>
				<div class="shtabtitle"><a href="javascript:;"><span>文档内容</span></a></div>
			</div>
			<div class="shtabcontentc">
			<div class="shtabcontent shtabcontentcurrent">
				<li class="formblock">
					<span>文档标题:</span>
					<input type="text" name="title" value="DNS污染【备忘】" class="input w300" />
				</li>
				<li class="formblock">
					<span>文档标签:</span>
					<input type="text" name="tag" value="" class="input w300" /> (','号分开)
				</li>
				<li class="formblock">
					<span>文档主栏目: </span>
					<select id="select" name="columnid" style="width:230px;">
						<option value="">|-请选择栏目...</option><option value="1">&nbsp;&nbsp;|-网站首页</option><option value="2">&nbsp;&nbsp;|-新闻资讯</option><option value="3">&nbsp;&nbsp;&nbsp;&nbsp;|-IT知识</option><option value="12">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|-PHP知识</option><option value="4">&nbsp;&nbsp;&nbsp;&nbsp;|-网络知识</option><option value="5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|-前端知识</option><option value="13">&nbsp;&nbsp;&nbsp;&nbsp;|-数据库知识</option><option value="6">&nbsp;&nbsp;|-产品展示</option><option value="14">&nbsp;&nbsp;&nbsp;&nbsp;|-网络产品</option><option value="15">&nbsp;&nbsp;&nbsp;&nbsp;|-电子产品</option><option value="7">&nbsp;&nbsp;|-客户案例</option><option value="8">&nbsp;&nbsp;|-下载中心</option><option value="9">&nbsp;&nbsp;|-招贤纳士</option><option value="10">&nbsp;&nbsp;|-关于我们</option><option value="11">&nbsp;&nbsp;|-联系我们</option>
					</select>
				</li>
				<li class="formblock">
					<span>文档缩略图:</span>
					<input type="file" name="image" value="" class="input w150" style="height: 22px;" />
				</li>
				<li class="formblock">
					<span>文档来源:</span>
					<input type="text" name="source" value="" class="input w200" />
				</li>
				<li class="formblock">
					<span>作者:</span>
					<input type="text" name="author" value="admin" class="input w150" />
				</li>
				<li class="formblock">
					<span>更新时间:</span>
					<input type="text" id="dpicker0" name="publishtime" value="2013-04-02 14:51:07" onClick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})" class="input w150" />
					<img width="16" height="22" align="absmiddle" onclick="WdatePicker({el:'dpicker0',dateFmt:'yyyy-MM-dd HH:mm:ss'})" style="cursor:pointer" src="public/plugin/My97DatePicker/skin/datePicker.gif">
				</li>
				<li class="formblock">
					<span>是否允许评论: </span>
					<div class="item_list fleft">
						<label><input type="radio" name="status" value="1" class="radio" checked />允许</label>
						<label><input type="radio" name="status" value="0" class="radio"  />禁止</label>
					</div>
				</li>
			</div>
			<div class="shtabcontent">
				<li class="formblock">
					<span>SEO标题:</span>
					<input type="text" name="seotitle" value="DNS污染【备忘】" class="input w300" />
				</li>
				<li class="formautoblock">
					<span>关键字:</span>
					<textarea name="keyword" rows="1" cols="47"></textarea>
				</li>
				<li class="formautoblock">
					<span>摘要内容:</span>
					<textarea name="description" rows="2" cols="47">DNS污染【备忘】</textarea>
				</li>
			</div>
			<div class="shtabcontent">
				<li class="formautoblock">
					<span>文档内容:</span>
					<div class="FullTextEditor">
						<textarea name="content" id="myEditor" rows="3" cols="50">&lt;p&gt;DNS污染，又称为&lt;strong&gt;域名服务器缓存污染&lt;/strong&gt;（DNS cache pollution）或&lt;strong&gt;域名服务器缓存投毒&lt;/strong&gt;（DNS cache poisoning）&lt;/p&gt;&lt;p&gt;是指一些刻意制造或无意中制造出来的域名服务器&lt;a href=&quot;http://zh.wikipedia.org/wiki/%E5%B0%81%E5%8C%85&quot; title=&quot;分组&quot; class=&quot;mw-redirect&quot;&gt;分组&lt;/a&gt;，把域名指往不正确的IP地址。一般来说，外间在&lt;a href=&quot;http://zh.wikipedia.org/wiki/%E4%BA%92%E8%81%AF%E7%B6%B2&quot; title=&quot;互联网&quot; class=&quot;mw-redirect&quot;&gt;互联网&lt;/a&gt;上一般都有可信赖的&lt;a href=&quot;http://zh.wikipedia.org/wiki/%E5%9F%9F%E5%90%8D%E6%9C%8D%E5%8A%A1%E5%99%A8&quot; title=&quot;域名服务器&quot; class=&quot;mw-redirect&quot;&gt;域名服务器&lt;/a&gt;，但为减免网络上的交通，一般的域名都会把外间的域名服务器数据暂存起来，待下次有其他机器要求解析域名时，可以立即提供服务。一旦有关网域的局域域名服务器的缓存受到污染，就会把网域内的电脑导引往错误的服务器或服务器的网址。&lt;/p&gt;&lt;p&gt;域名服务器缓存污染可能是通过域名服务器软件上的设计错误而产生，但亦可能由别有用心者通过研究&lt;a href=&quot;http://zh.wikipedia.org/w/index.php?title=%E9%96%8B%E6%94%BE%E6%9E%B6%E6%A7%8B&amp;amp;action=edit&amp;amp;redlink=1&quot; class=&quot;new&quot; title=&quot;开放架构（页面不存在）&quot;&gt;开放架构&lt;/a&gt;的域名服务器系统来利用当中的漏洞。&lt;/p&gt;&lt;h2&gt;&lt;a name=&quot;t0&quot;&gt;&lt;/a&gt;&lt;span class=&quot;mw-headline&quot; id=&quot;.E7.B7.A9.E5.AD.98.E6.B1.A1.E6.9F.93.E6.94.BB.E6.93.8A&quot;&gt;缓存污染攻击&lt;/span&gt;&lt;/h2&gt;&lt;p&gt;一般来说，一部连上了互联网的电脑都会使用&lt;a href=&quot;http://zh.wikipedia.org/wiki/%E4%BA%92%E8%81%AF%E7%B6%B2%E6%9C%8D%E5%8B%99%E4%BE%9B%E6%87%89%E5%95%86&quot; title=&quot;互联网服务提供商&quot; class=&quot;mw-redirect&quot;&gt;互联网服务提供商&lt;/a&gt;提供的域名服务器。这个服务器一般只会为供应商的客户来服务，通常都会储蓄起部分客户曾经请求过的域名的缓存。缓存污染攻击就是针对这一种服务器，以影响服务器的用户或下游服务。&lt;/p&gt;&lt;h2&gt;&lt;a name=&quot;t1&quot;&gt;&lt;/a&gt;&lt;span class=&quot;mw-headline&quot; id=&quot;.E9.98.B2.E7.81.AB.E9.95.B7.E5.9F.8E.E7.9A.84.E7.B7.A9.E5.AD.98.E6.B1.A1.E6.9F.93.E6.94.BB.E6.93.8A&quot;&gt;防火长城的缓存污染攻击&lt;/span&gt;&lt;/h2&gt;&lt;p&gt;在中国大陆，对于所有经过&lt;a href=&quot;http://zh.wikipedia.org/wiki/%E9%98%B2%E7%81%AB%E9%95%B7%E5%9F%8E&quot; title=&quot;防火长城&quot; class=&quot;mw-redirect&quot;&gt;防火长城&lt;/a&gt;的在UDP的53端口上的域名查询进行IDS&lt;a href=&quot;http://zh.wikipedia.org/wiki/%E5%85%A5%E4%BE%B5%E6%A3%80%E6%B5%8B&quot; title=&quot;入侵检测&quot; class=&quot;mw-redirect&quot;&gt;入侵检测&lt;/a&gt;，一经发现与黑名单关键词相匹配的域名查询请求，其会马上伪装成目标域名的解析服务器给查询者返回虚假结果。由于通常的域名查询没有任何认证机制，而且域名查询通常基于的UDP协议是无连接不可靠的协议，查询者只能接受最先到达的格式正确结果，并丢弃之后的结果。&lt;sup id=&quot;cite_ref-gfw_2-0&quot; class=&quot;reference&quot;&gt;&lt;a href=&quot;http://zh.wikipedia.org/wiki/DNS%E6%B1%A1%E6%9F%93#cite_note-gfw-2&quot;&gt;[2]&lt;/a&gt;&lt;/sup&gt;&lt;/p&gt;&lt;ul class=&quot; list-paddingleft-2&quot;&gt;&lt;li&gt;&lt;p&gt;对于不了解相关知识的网民来说也就是，由于系统默认使用的&lt;a href=&quot;http://zh.wikipedia.org/wiki/ISP&quot; title=&quot;ISP&quot;&gt;ISP&lt;/a&gt;提供的域名查询服务器查询国外的权威服务器时即被防火长城被污染，使其缓存受到污染，因而默认情况下查询ISP的服务器就会获得虚假IP地址；而用户直接查询境外域名查询服务器（比如&lt;a href=&quot;http://zh.wikipedia.org/wiki/Google_Public_DNS&quot; title=&quot;Google Public DNS&quot;&gt;Google Public DNS&lt;/a&gt;）有可能会被防火长城污染，从而在没有任何防范机制的情况下仍然不能获得目标网站正确的IP地址。&lt;sup id=&quot;cite_ref-gfw_2-1&quot; class=&quot;reference&quot;&gt;&lt;a href=&quot;http://zh.wikipedia.org/wiki/DNS%E6%B1%A1%E6%9F%93#cite_note-gfw-2&quot;&gt;[2]&lt;/a&gt;&lt;/sup&gt;&lt;/p&gt;&lt;/li&gt;&lt;/ul&gt;&lt;ul class=&quot; list-paddingleft-2&quot;&gt;&lt;li&gt;&lt;p&gt;防火长城暂时未对TCP协议下的域名查询进行污染，故现在能通过强制使用TCP协议查询真实的IP地址：Windows下打开&lt;a href=&quot;http://zh.wikipedia.org/wiki/%E5%91%BD%E4%BB%A4%E6%8F%90%E7%A4%BA%E7%AC%A6&quot; title=&quot;命令提示符&quot; class=&quot;mw-redirect&quot;&gt;命令提示符&lt;/a&gt;，输入nslookup -vc 要查询的域名 境外DNS服务器的IP地址（必须支持TCP协议查询，否则不会返回查询结果），回车后能返回正确的目标服务器IP地址。而现实的情况是，防火长城对于真实的IP地址也可能会采取其它的手段进行封锁，故能否真正访问可能还需要其它&lt;a href=&quot;http://zh.wikipedia.org/wiki/%E7%BF%BB%E5%A2%99&quot; title=&quot;翻墙&quot; class=&quot;mw-redirect&quot;&gt;翻墙&lt;/a&gt;的手段。&lt;/p&gt;&lt;/li&gt;&lt;/ul&gt;&lt;h2 class=&quot;headline-1 bk-sidecatalog-title&quot;&gt;&lt;a name=&quot;t2&quot;&gt;&lt;/a&gt;&lt;span class=&quot;headline-content&quot;&gt;验证DNS污染的办法&lt;/span&gt;&lt;/h2&gt;&lt;div class=&quot;para&quot;&gt;我们在命令行下通过这样一条命令 nslookup 域名 144.223.234.234，即可判断该域名是否被污染，由于144.223.234.234不存在，理应没有任何返回。但我们却得到了一个错误的IP（不确定）。即可证明这个域名已经被DNS污染了。&lt;/div&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;&lt;div&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;strong&gt;解决DNS污染方案&lt;/strong&gt;&lt;/span&gt;&lt;/div&gt;&lt;div&gt;&lt;/div&gt;&lt;div&gt;1、修改hosts文件，操作系统中Hosts文件的优先级高于DNS服务器，操作系统在访问某个域名时，会先检测HOSTS文件，然后再查询DNS服务器。可以在hosts添加受到污染的DNS地址来解决DNS污染和DNS劫持。&lt;/div&gt;&lt;div&gt;&lt;/div&gt;&lt;div&gt;2、如果你是Firefox only用户，并且只用Firefox，又懒得折腾，直接打开Firefox的远程DNS解析就行了。在地址栏中输入about:config找到network.proxy.socks_remote_dns一项改成true。&lt;/div&gt;&lt;div&gt;&lt;/div&gt;&lt;div&gt;3、使用各种SSH加密代理，在加密代理里进行远程DNS解析，或者使用VPN上网。&lt;/div&gt;&lt;div&gt;&lt;/div&gt;&lt;div&gt;4、通过一些软件编程处理，可以直接忽略返回结果是虚假IP地址的数据包，直接解决DNS污染的问题。&lt;/div&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;</textarea>
					</div>
				</li>
			</div>
			<li class="formblock bordernone bgf6">
				<input type="submit" name="subut" class="button btnblue2" value="修改" />
			</li>
		</ul>
	</form>
</div>
<script src="public/plugin/UEditor/editor_config.js" type="text/javascript"></script>
<script src="public/plugin/UEditor/editor_all_min.js" type="text/javascript"></script>
<script src="public/plugin/My97DatePicker/WdatePicker.js" type="text/javascript"></script>
<script type="text/javascript">
    UE.getEditor('myEditor',{
    });
    $("form[name=newform]").submit(function(){
    	var title = $(this).find("input[name=title]").val();
    	if (!title) {
    		alert("请填写文档标题!");
    		return false;
    	}
    	var columnid = $(this).find("select[name=columnid]").val();
    	if (!columnid) {
    		alert("请选择文档所在主栏目!");
    		return false;
    	}
    });
    $("select[name=columnid]").find("option").each(function (){
    	if ($(this).val()=="4") $(this).attr("selected",true);
    });
</script>
    </div>
</div>
</body>
<script type="text/javascript" src="themes/blue/js/jquery.corner.js"></script>
<script type="text/javascript" src="themes/blue/js/public.js"></script>
<script type="text/javascript" src="themes/blue/js/common.js"></script>
<script type="text/javascript" src="themes/blue/js/ajax.js"></script>
<script type="text/javascript" src="public/js/jquery.idTabs.min.js"></script>
</html>