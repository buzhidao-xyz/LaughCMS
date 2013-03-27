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
	<form name="newform" action="/laugh/admin/index.php?s=Article/saveUpArticle" enctype="multipart/form-data" method="post" class="newform">
		<input type="hidden" name="articleid" value="5" />
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
					<input type="text" name="title" value="页面(PAGE)标记(TAGS)" class="input w300" />
				</li>
				<li class="formblock">
					<span>文档标签:</span>
					<input type="text" name="tag" value="" class="input w300" /> (','号分开)
				</li>
				<li class="formblock">
					<span>文档主栏目: </span>
					<select id="select" name="columnid" style="width:230px;">
						<option value="">|-请选择栏目...</option><option value="1">&nbsp;&nbsp;|-网站首页</option><option value="2">&nbsp;&nbsp;|-新闻资讯</option><option value="3" >&nbsp;&nbsp;&nbsp;&nbsp;|-IT知识</option><option value="12" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|-PHP知识</option><option value="4" >&nbsp;&nbsp;&nbsp;&nbsp;|-网络知识</option><option value="5" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|-前端知识</option><option value="6">&nbsp;&nbsp;|-产品展示</option><option value="7">&nbsp;&nbsp;|-客户案例</option><option value="8">&nbsp;&nbsp;|-下载中心</option><option value="9">&nbsp;&nbsp;|-招贤纳士</option><option value="10">&nbsp;&nbsp;|-关于我们</option><option value="11">&nbsp;&nbsp;|-联系我们</option>
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
					<input type="text" id="dpicker0" name="publishtime" value="2013-03-25 15:51:29" onClick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})" class="input w150" />
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
					<input type="text" name="seotitle" value="" class="input w300" />
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
						<textarea name="content" id="myEditor" rows="3" cols="50">&lt;h2&gt;HTML 文件结构(Document Structures)&lt;/h2&gt;&lt;h3&gt;&amp;lt;html&amp;gt;...&amp;lt;/html&amp;gt;&lt;br /&gt;&amp;lt;head&amp;gt;...&amp;lt;/head&amp;gt;&lt;br /&gt;&amp;lt;body&amp;gt;...&amp;lt;/body&amp;gt;&lt;/h3&gt;&lt;dl&gt;&lt;dd&gt;&lt;pre&gt;&amp;lt;HTML&amp;gt;
&amp;lt;HEAD&amp;gt;
     &amp;lt;title&amp;gt;, &amp;lt;base&amp;gt;, &amp;lt;link&amp;gt;, &amp;lt;isindex&amp;gt;, &amp;lt;meta&amp;gt;
&amp;lt;/HEAD&amp;gt;
&amp;lt;BODY&amp;gt;
    HTML 文件的正文写在这里... ... 
&amp;lt;/BODY&amp;gt;
&amp;lt;/HTML&amp;gt;
&lt;/pre&gt;&lt;/dd&gt;&lt;/dl&gt;&lt;p&gt;&lt;a name=&quot;lang&quot;&gt;&lt;/a&gt;&lt;/p&gt;&lt;h2&gt;语言字符集(Charsets)的信息&lt;/h2&gt;&lt;h3&gt;&amp;lt;meta http-equiv=&amp;quot;Content-Type&amp;quot; &amp;nbsp; &amp;nbsp; &amp;nbsp; content=&amp;quot;text/html;charset=#&amp;quot;&amp;gt;&lt;br /&gt;&lt;/h3&gt;&lt;dl compact=&quot;compact&quot;&gt;&lt;dt&gt;#= &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &lt;/dt&gt;&lt;dd&gt;us-ascii, iso-8859-1, x-mac-roman, iso-8859-2, &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; x-mac-ce,&lt;br /&gt;iso-2022-jp, x-sjis, x-euc-jp,&lt;br /&gt;euc-kr, &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; iso-2022-kr,&lt;br /&gt;gb2312, gb_2312-80,&lt;br /&gt;x-euc-tw, x-cns11643-1, &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; x-cns11643-2, big5 &lt;/dd&gt;&lt;/dl&gt;&lt;p&gt;可在 HTML 文件中设置 MIME 字符集信息。&lt;br /&gt;您在浏览主页时，最好自己在浏览器的选项菜单内选择相应的语言(language &amp;nbsp; &amp;nbsp; &amp;nbsp; encoding)。&lt;br /&gt;但是如果 HTML 文件里写明了设置，浏览器就会自动设置语言选项。&lt;br /&gt;尤其是主页里用到了&lt;a href=&quot;http://www.php100.com/cover/html/entities.html&quot;&gt;字符实体(entities)&lt;/a&gt;，则该主页就应该写明字符集信息。&lt;br /&gt;否则，您在浏览该主页时，若未正确设置语言选项，显示将可能混乱。&lt;/p&gt;&lt;p&gt;&lt;a name=&quot;bgcolor&quot;&gt;&lt;/a&gt;&lt;/p&gt;&lt;h2&gt;背景色彩和文字色彩&lt;/h2&gt;&lt;h3&gt;&amp;lt;body bgcolor=# text=# link=# alink=# vlink=#&amp;gt;&lt;/h3&gt;&lt;dl&gt;&lt;dd&gt;bgcolor --- 背景色彩 &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &lt;/dd&gt;&lt;dd&gt;text --- 非可链接文字的色彩 &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &lt;/dd&gt;&lt;dd&gt;link --- 可链接文字的色彩 &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &lt;/dd&gt;&lt;dd&gt;alink --- 正被点击的可链接文字的色彩 &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &lt;/dd&gt;&lt;dd&gt;vlink --- 已经点击(访问)过的可链接文字的色彩 &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &lt;/dd&gt;&lt;dd&gt;&lt;h3&gt;#=rrggbb&lt;/h3&gt;&lt;/dd&gt;&lt;dd&gt;色彩是用 16 进制的 红－绿－蓝(red-green-blue, RGB) 值来表示。&lt;br /&gt;16 进制的数码有: &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; 0,1,2,3,4,5,6,7,8,9,a,b,c,d,e,f. &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &lt;/dd&gt;&lt;dd&gt;　 &lt;/dd&gt;&lt;/dl&gt;&lt;h3&gt;背景图象 &amp;lt;body background=&amp;quot;image-URL&amp;quot;&amp;gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;Non Scrolling Background &amp;lt;body bgproperties=FIXED&amp;gt;&lt;/h3&gt;&lt;p&gt;&lt;a name=&quot;margin&quot;&gt;&lt;/a&gt;&lt;/p&gt;&lt;h2&gt;页面空白(Margin)&lt;/h2&gt;&lt;h3&gt;页面左边的空白 &amp;lt;body leftmargin=#&amp;gt;&lt;br /&gt;页面上方的空白(天头) &amp;lt;body &amp;nbsp; &amp;nbsp; &amp;nbsp; topmargin=#&amp;gt; #=margin amount&lt;/h3&gt;&lt;p&gt;&lt;a name=&quot;link&quot;&gt;&lt;/a&gt;&lt;/p&gt;&lt;h2&gt;链接(Link)&lt;/h2&gt;&lt;h3&gt;基本语法 &amp;lt;a href=&amp;quot;URL&amp;quot;&amp;gt; ... &amp;lt;/a&amp;gt;&lt;/h3&gt;&lt;dl&gt;&lt;dd&gt;&lt;tt&gt;这是一个&lt;br /&gt;&amp;lt;a href=&amp;quot;samp/link.html&amp;quot;&amp;gt;链接的例子&amp;lt;/a&amp;gt;。 &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &lt;br /&gt;点一下带下划线的文字!&lt;/tt&gt;&lt;br /&gt;&lt;/dd&gt;&lt;/dl&gt;&lt;p&gt;这是一个&lt;a href=&quot;http://www.php100.com/cover/html/samp/link.html&quot;&gt;链接的例子&lt;/a&gt;。点一下带下划线的文字!&lt;/p&gt;&lt;h3&gt;跳转到页面的另外一个地方&lt;br /&gt;&amp;lt;a href=&amp;quot;#name&amp;quot;&amp;gt; ... &amp;lt;/a&amp;gt;&lt;br /&gt;&amp;lt;a &amp;nbsp; &amp;nbsp; &amp;nbsp; name=&amp;quot;name&amp;quot;&amp;gt; ... &amp;lt;/a&amp;gt; &lt;/h3&gt;&lt;dl&gt;&lt;dd&gt;&lt;tt&gt;&amp;lt;a &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; href=&amp;quot;#jump-test&amp;quot;&amp;gt;跳转到下一个&amp;quot;链接点&amp;quot;&amp;lt;/a&amp;gt;&amp;lt;P&amp;gt;&lt;br /&gt;&amp;lt;a &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; name=&amp;quot;jump-test&amp;quot;&amp;gt;下一个链接点&amp;lt;/a&amp;gt; &lt;/tt&gt;&lt;/dd&gt;&lt;/dl&gt;&lt;p&gt;&lt;a href=&quot;http://www.php100.com/cover/html/page.htm#jump-test&quot;&gt;跳转到下一个&amp;quot;链接点&amp;quot;&lt;/a&gt;&lt;/p&gt;&lt;p&gt;&lt;a name=&quot;jump-test&quot;&gt;&lt;/a&gt;下一个链接点&lt;/p&gt;&lt;p&gt;&lt;a name=&quot;jump2&quot;&gt;&lt;/a&gt;&lt;/p&gt;&lt;h3&gt;跳转到另一个页面的某个地方&lt;br /&gt;&amp;lt;a href=&amp;quot;URL#name&amp;quot;&amp;gt; ... &amp;lt;/a&amp;gt;&lt;br /&gt;&amp;lt;a &amp;nbsp; &amp;nbsp; &amp;nbsp; name=&amp;quot;name&amp;quot;&amp;gt; ... &amp;lt;/a&amp;gt; &lt;/h3&gt;&lt;dl&gt;&lt;dd&gt;&lt;tt&gt;跳转到另一个页面的&amp;lt;a &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; href=&amp;quot;samp/link.html#jump-test&amp;quot;&amp;gt;某个地方&amp;lt;/a&amp;gt;。&lt;br /&gt;&lt;/tt&gt;&lt;/dd&gt;&lt;/dl&gt;&lt;p&gt;跳转到另一个页面的&lt;a href=&quot;http://www.php100.com/cover/html/samp/link.html#jump-test&quot;&gt;某个地方&lt;/a&gt;。&lt;/p&gt;&lt;p&gt;&lt;a name=&quot;window&quot;&gt;&lt;/a&gt;&lt;/p&gt;&lt;h2&gt;开一个新的(浏览器)窗口 (Target Window) &amp;nbsp; &amp;nbsp; &amp;nbsp; &lt;/h2&gt;&lt;h3&gt;&amp;lt;a href=&amp;quot;URL&amp;quot; target=&amp;quot;Window_Name&amp;quot;&amp;gt; ... &amp;lt;/a&amp;gt;&lt;/h3&gt;&lt;dl&gt;&lt;dd&gt;&lt;tt&gt;&amp;lt;a href=&amp;quot;samp/window.html&amp;quot; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; target=&amp;quot;window_name&amp;quot;&amp;gt;&lt;br /&gt;开一个新窗口!&lt;br /&gt;&amp;lt;/a&amp;gt; &lt;/tt&gt;&lt;/dd&gt;&lt;/dl&gt;&lt;p&gt;&lt;a href=&quot;http://www.php100.com/cover/html/samp/window.html&quot; target=&quot;window_name&quot;&gt;开一个新窗口!&lt;/a&gt;&lt;/p&gt;&lt;p&gt;&lt;a name=&quot;hr&quot;&gt;&lt;/a&gt;&lt;/p&gt;&lt;h2&gt;标尺线&lt;/h2&gt;&lt;h3&gt;&amp;lt;hr&amp;gt;&lt;/h3&gt;&lt;p&gt;&lt;tt&gt;&amp;lt;hr&amp;gt; &lt;/tt&gt;&lt;/p&gt;&lt;hr /&gt;&lt;h3&gt;&amp;lt;hr size=#&amp;gt;&lt;/h3&gt;&lt;p&gt;&lt;tt&gt;&amp;lt;hr size=10&amp;gt; &lt;/tt&gt;&lt;/p&gt;&lt;hr size=&quot;10&quot; /&gt;&lt;h3&gt;&amp;lt;hr width=#&amp;gt;&lt;/h3&gt;&lt;p&gt;&lt;tt&gt;&amp;lt;hr width=50&amp;gt;&lt;br /&gt;&amp;lt;hr width=50%&amp;gt; &lt;/tt&gt;&lt;/p&gt;&lt;hr width=&quot;50&quot; /&gt;&lt;hr width=&quot;50%&quot; /&gt;&lt;h3&gt;&amp;lt;hr align=#&amp;gt; #=left, right&lt;/h3&gt;&lt;p&gt;&lt;tt&gt;&amp;lt;hr width=50% align=left&amp;gt;&lt;br /&gt;&amp;lt;hr width=50% align=right&amp;gt; &amp;nbsp; &amp;nbsp; &amp;nbsp; &lt;/tt&gt;&lt;/p&gt;&lt;hr align=&quot;left&quot; width=&quot;50%&quot; /&gt;&lt;hr align=&quot;right&quot; width=&quot;50%&quot; /&gt;&lt;h3&gt;&amp;lt;hr noshade&amp;gt;&lt;/h3&gt;&lt;p&gt;&lt;tt&gt;&amp;lt;hr noshade&amp;gt; &lt;/tt&gt;&lt;/p&gt;&lt;hr noshade=&quot;noshade&quot; /&gt;&lt;h3&gt;&amp;lt;hr color=#&amp;gt;&lt;/h3&gt;&lt;dl&gt;&lt;dd&gt;#=rrggbb 16 进制 RGB 数码，或者是下列预定义色彩：&lt;br /&gt;&lt;span style=&quot;color:#000000;&quot;&gt;Black&lt;/span&gt;, &lt;span style=&quot;color:#808000;&quot;&gt;Olive&lt;/span&gt;, &lt;span style=&quot;color:#008080;&quot;&gt;Teal&lt;/span&gt;, &lt;span style=&quot;color:#ff0000;&quot;&gt;Red&lt;/span&gt;, &lt;span style=&quot;color:#0000ff;&quot;&gt;Blue&lt;/span&gt;, &lt;span style=&quot;color:#800000;&quot;&gt;Maroon&lt;/span&gt;, &lt;span style=&quot;color:#000080;&quot;&gt;Navy&lt;/span&gt;, &lt;span style=&quot;color:#808080;&quot;&gt;Gray&lt;/span&gt;, &lt;span style=&quot;color:#00ff00;&quot;&gt;Lime&lt;/span&gt;, &lt;br /&gt;&lt;span style=&quot;color:#ff00ff;&quot;&gt;Fuchsia&lt;/span&gt;, &lt;span style=&quot;color:#ffffff;&quot;&gt;White&lt;/span&gt;, &lt;span style=&quot;color:#008000;&quot;&gt;Green&lt;/span&gt;, &lt;span style=&quot;color:#800080;&quot;&gt;Purple&lt;/span&gt;, &lt;span style=&quot;color:#c0c0c0;&quot;&gt;Silver&lt;/span&gt;, &lt;span style=&quot;color:#ffff00;&quot;&gt;Yellow&lt;/span&gt;, &lt;span style=&quot;color:#00ffff;&quot;&gt;Aqua&lt;/span&gt;&lt;/dd&gt;&lt;/dl&gt;&lt;p&gt;&lt;tt&gt;&amp;lt;hr color=&amp;quot;red&amp;quot;&amp;gt; &lt;/tt&gt;&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;</textarea>
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
    	initialFrameWidth: 900,
    	initialFrameHeight: 320
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
    	if ($(this).val()=="5") $(this).attr("selected",true);
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