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
		<input type="hidden" name="articleid" value="2" />
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
					<input type="text" name="title" value="第二篇测试文章" class="input w300" />
				</li>
				<li class="formblock">
					<span>文档标签:</span>
					<input type="text" name="tag" value="文章" class="input w300" /> (','号分开)
				</li>
				<li class="formblock">
					<span>文档主栏目: </span>
					<select id="select" name="columnid" style="width:230px;">
						<option value="">|-请选择栏目...</option><option value="1">&nbsp;&nbsp;|-栏目1</option><option value="2" >&nbsp;&nbsp;&nbsp;&nbsp;|-子栏目1</option><option value="3" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|-子子栏目1</option><option value="4">&nbsp;&nbsp;|-栏目2</option>
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
					<input type="text" id="dpicker0" name="publishtime" value="2013-01-09 11:13:22" onClick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})" class="input w150" />
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
						<textarea name="content" id="myEditor" rows="3" cols="50">&lt;p&gt;开篇 &amp;nbsp;&lt;/p&gt;&lt;p&gt;　　确认框，顾名思义，就是对用户的关键行为进行确认。比如在Windows操作系统中，删除某个文件的时候，都会询问&ldquo;确实要把此文件放入回收站吗?&rdquo;，用户可以选择&ldquo;是&rdquo;或&ldquo;否&rdquo;。 &amp;nbsp;&lt;/p&gt;&lt;p&gt;　　大家对于确认框的感觉大抵如此，觉得非常多余，打断了我的操作。这就像我着急上厕所，却被告知要先收费一样让人不爽。不能否认，确认框是一种打断，有时甚至是打扰。 &amp;nbsp;&lt;/p&gt;&lt;p&gt;　　所以这里要把握住一个原则：能不用确认框就尽量不要用。除非用户的操作具有很大的风险，一定需要他来确认一下。 &lt;/p&gt;&lt;p&gt;　　&lt;strong&gt;确认在左，取消在右?&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;　　根据windows多年培养的用户习惯，大家都已经默认一个原则，就是确认在左，取消在右。但是，这样做是否真的合理呢?我们今天就来探讨一下这个问题。 &lt;span style=&quot;color:#ffffff;&quot;&gt;一些事&lt;/span&gt;&lt;/p&gt;&lt;p&gt;　　如果不是误操作，相信用户做事情前都是经过了一定思考。所以当弹出确认框的时候，我们猜测大部分用户都会去选择&ldquo;确认&rdquo;/&rdquo;是&rdquo;，继续之前的操作。之后本文的探讨，都讲建立在这样一种假设的基础上，即用户是想去选择&ldquo;确认&rdquo;/&rdquo;是&rdquo;。 &lt;/p&gt;&lt;p&gt;　　&lt;strong&gt;以视觉流的角度分析&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;　　如果将&ldquo;确认&rdquo;放在左边，&ldquo;取消&rdquo;放在右边。 &lt;/p&gt;&lt;p&gt; 　　我们相信大部分用户在决定采取哪一个操作之前，都会把所有可以选择的操作都看一遍，以免做出错误的操作(当然不排除会有专家级用户 选择只看自己想进行的操作)。根据从左到右的阅读习惯，用户会首先看到左侧的&ldquo;确认&rdquo;，然后看一下在它旁边的&ldquo;取消&rdquo;，了解到所有可以进行的操作后，再回到&ldquo;确认&rdquo;按钮上，最后点击。&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;</textarea>
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
    	if ($(this).val()=="2") $(this).attr("selected",true);
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