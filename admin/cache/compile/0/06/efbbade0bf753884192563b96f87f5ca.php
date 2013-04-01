<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="keywords" content="">
<link type="text/css" rel="stylesheet" href="themes/green/style/common.css" media="screen">
<link type="text/css" rel="stylesheet" href="themes/green/style/base.css" media="screen">
<link type="text/css" rel="stylesheet" href="themes/green/style/global.css" media="screen">
<script type="text/javascript" src="public/js/jquery.js"></script>
<script type="text/javascript" src="themes/green/js/div_window.js"></script>
<!-- <script type="text/javascript" src="themes/blue/js/PIE.js"></script> -->
<title>管理中心</title>
<script type="text/javascript">
var JS_APP = '/laugh/admin';
var JS_APPM = 'http://localhost:82/laugh';
</script>
</head>

<body>
<style type="text/css">
	body { background: none; }
</style>
<div id="control">
	<ul class="controlTop">
		<li class="controlLeftTop"></li>
		<li class="controlRightTop"></li>
	</ul>
	<div id="controlContent">
<div class="formContainer" accessStatus=1>
	<div class="formtitle"><h5>修改文档资料</h5></div>
	<form name="newform" action="/laugh/admin/index.php?s=Article/saveEdit" enctype="multipart/form-data" method="post" class="newform">
		<input type="hidden" name="archiveid" value="10" />
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
					<input type="text" name="title" value="Web服务攻击反侦查痕迹检测" class="input w300" />
				</li>
				<li class="formblock">
					<span>文档标签:</span>
					<input type="text" name="tag" value="" class="input w300" /> (','号分开)
				</li>
				<li class="formblock">
					<span>文档主栏目: </span>
					<select id="select" name="columnid" style="width:230px;">
						<option value="">|-请选择栏目...</option><option value="1">&nbsp;&nbsp;|-网站首页</option><option value="2">&nbsp;&nbsp;|-新闻资讯</option><option value="3">&nbsp;&nbsp;&nbsp;&nbsp;|-IT知识</option><option value="12">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|-PHP知识</option><option value="4">&nbsp;&nbsp;&nbsp;&nbsp;|-网络知识</option><option value="5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|-前端知识</option><option value="13">&nbsp;&nbsp;&nbsp;&nbsp;|-数据库知识</option><option value="6">&nbsp;&nbsp;|-产品展示</option><option value="7">&nbsp;&nbsp;|-客户案例</option><option value="8">&nbsp;&nbsp;|-下载中心</option><option value="9">&nbsp;&nbsp;|-招贤纳士</option><option value="10">&nbsp;&nbsp;|-关于我们</option><option value="11">&nbsp;&nbsp;|-联系我们</option>
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
					<input type="text" id="dpicker0" name="publishtime" value="2013-04-01 15:04:43" onClick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})" class="input w150" />
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
					<input type="text" name="seotitle" value="Web服务攻击反侦查痕迹检测" class="input w300" />
				</li>
				<li class="formautoblock">
					<span>关键字:</span>
					<textarea name="keyword" rows="1" cols="47"></textarea>
				</li>
				<li class="formautoblock">
					<span>摘要内容:</span>
					<textarea name="description" rows="2" cols="47"></textarea>
				</li>
			</div>
			<div class="shtabcontent">
				<li class="formautoblock">
					<span>文档内容:</span>
					<div class="FullTextEditor">
						<textarea name="content" id="myEditor" rows="3" cols="50">&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;web站点默认80为服务端口，关于它的各种安全问题不断的发布出来，这些漏洞中一些甚至允许攻击者获得系统管理员的权限进入站点内部，以下是Zenomorph对一些80端口攻击方式的痕迹的研究，和告诉你怎样从日志记录中发现问题。&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;&lt;strong style=&quot;text-align:center;&quot;&gt;详细描述&lt;/strong&gt;&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;下面部分通过一些列子，展示对web服务器和其上的应用程序普遍的攻击，和其留下的痕迹，这些列子仅仅是代表了主要的攻击方式，并没有列出所有的攻击形式，这部分将详细描述每种攻击的作用，和其怎样利用这些漏洞进行攻击。&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;（1）&rdquo;.&rdquo; &ldquo;..&rdquo; 和 &ldquo;&hellip;&rdquo; 请求&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;这些攻击痕迹是非常普遍的用于web应用程序和web服务器，它用于允许攻击者或者蠕虫病毒程序改变web服务器的路径，获得访问非公开的区域。大多数的CGI程序漏洞含有这些&rdquo;..&rdquo;请求。&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;Example:&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;http://host/cgi-bin/lame.cgi?file=../../../../etc/motd&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;这个列子展示了攻击者请求mosd这个文件，如果攻击者有能力突破web服务器根目录，那么可以获得更多的信息，并进一步的获得特权。&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;（2）&rdquo;%20&Prime; 请求&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;%20是表示空格的16进制数值，虽然这个并不代表你能够利用什么，但是在你浏览日志的时候会发现它，一些web服务器上运行的应用程序中这个字符可能会被有效的执行，所以，你应该仔细的查看日志。另一方面，这个请求有时可以帮助执行一些命令。&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;Example:&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;http://host/cgi-bin/lame.cgi?page=ls%20-al│&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;这个列子展示了攻击者执行了一个unix的命令，列出请求的整个目录的文件，导致攻击者访问你系统中重要的文件，帮助他进一步取得特权提供条件。&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;（3）&rdquo;%00&Prime; 请求&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;%00表示16进制的空字节，他能够用于愚弄web应用程序，并请求不同类型的文件。&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;Examples:&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;http://host/cgi-bin/lame.cgi?page=index.html&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;这可能是个有效的请求在这个机子上，如果攻击者注意到这个请求动作成功，他会进一步寻找这个cgi程序的问题。&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;http://host/cgi-bin/lame.cgi?page=../../../../etc/motd&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;也许这个cgi程序不接受这个请求，原因在于它要检查这个请求文件的后缀名，如：html.shtml或者其他类型的文件。大多数的程序会告诉你所请求的文件类型无效，这个时候它会告诉攻击者请求的文件必须是一某个字符后缀的文件类型，这样，攻击者可以获得系统的路径，文件名，导致在你的系统获得更多的敏感信息&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;http://host/cgi-bin/lame.cgi?page=../../../../etc/motd%00html&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;注意这个请求，它将骗取cgi程序认为这个文件是个确定的可接受的文件类型，一些应用程序由于愚蠢的检查有效的请求文件，这是攻击者常用的方法。&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;（4）&rdquo;│&rdquo; 请求&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;这是个管道字符，在unix系统用于帮助在一个请求中同时执行多个系统命令。&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;Example:&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;# cat access_log│ grep -i &ldquo;..&rdquo;&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;（这个命令将显示日志中的&ldquo;..&ldquo;请求，常用于发现攻击者和蠕虫攻击）&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;常可以看到有很多web应用程序用这个字符，这也导致IDS日志中错误的报警。&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;在你的程序仔细的检查中，这样是有好处的，可以降低错误的警报在入侵检测系统中。&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;下面给出一些列子：&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;http://host/cgi-bin/lame.cgi?page=../../../../bin/ls│&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;这个请求命令执行，下面是一些变化的列子&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;http://host/cgi-bin/lame.cgi?page=../../../../bin/ls%20-al%20/etc│&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;这个请求在unix系统中列出/etc目录的所有文件&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;http://host/cgi-bin/lame.cgi?page=cat%20access_log│grep%20-i%20&Prime;lame&rdquo;&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;这个请求cat命令的执行并且grep命令也将执行，查询出&rdquo;lame&rdquo;&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;(5)&rdquo;;&rdquo; 请求&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;在unix系统，这个字符允许多个命令在一行执行&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;Example:&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;# id;uname -a&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;（执行id命令后，紧跟着执行uname命令）&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;一些web程序用这个字符，可能导致在你的IDS日志中失败的警告，你应该仔细的检查你的web程序，让你的IDS警报失败的几率降低。&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;（6）&rdquo;&amp;quot; 请求&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;应该检查你的日志记录中这两个字符，众多的原因中，首要的一个是这个字符表明了添加数据在文件中&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;Example 1:&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;# echo &ldquo;your hax0red h0 h0&Prime; &amp;gt;&amp;gt; /etc/motd （请求写信息在motd这个文件中)&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;一个攻击者可以容易的用象上面的这个请求篡改你的web页面。比如著名的RDS exploit常被攻击者用于更改web主页面。&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;Example 2:&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;http://www.2cto.com /something.php=Hi%20mom%20Im%20Bold!&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;你会注意到这里html语言的标志，他同样用了&ldquo;〈&rdquo;，&ldquo;〉&rdquo;字符，这种攻击不能导致攻击者对系统进行访问，它迷惑人们认为这是个合法的信息在web 站点中（导致人们在访问这个联结的时候访问到攻击者设定的地址，这种请求可能会被转变成16进制的编码字符形式，使攻击的痕迹不那么明显）&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;（7）&rdquo;!&rdquo;请求&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;这种字符请求常用语对SS(Server Side Include) I进行攻击，如果攻击者迷惑用户点击被攻击者设定的联结，和上面的一样。&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;</textarea>
					</div>
				</li>
			</div>
			<li class="formblock bordernone">
				<input type="submit" name="subut" class="button btngreen2" value="修改" />
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
    	if ($(this).val()=="12") $(this).attr("selected",true);
    });
</script>
    </div>
    <ul class="controlBottom">
		<li class="controlLeftBottom"></li>
		<li class="controlRightBottom"></li>
	</ul>
</div>
</body>
<script type="text/javascript" src="themes/green/js/jquery.corner.js"></script>
<script type="text/javascript" src="themes/green/js/public.js"></script>
<script type="text/javascript" src="themes/green/js/common.js"></script>
<script type="text/javascript" src="themes/green/js/ajax.js"></script>
<script type="text/javascript" src="public/js/jquery.idTabs.min.js"></script>
</html>