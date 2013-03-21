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
		<input type="hidden" name="articleid" value="4" />
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
					<input type="text" name="title" value="MongoDB:下一代MySQL？" class="input w300" />
				</li>
				<li class="formblock">
					<span>文档标签:</span>
					<input type="text" name="tag" value="" class="input w300" /> (','号分开)
				</li>
				<li class="formblock">
					<span>文档主栏目: </span>
					<select id="select" name="columnid" style="width:230px;">
						<option value="">|-请选择栏目...</option><option value="1">&nbsp;&nbsp;|-网站首页</option><option value="2">&nbsp;&nbsp;|-新闻资讯</option><option value="3" >&nbsp;&nbsp;&nbsp;&nbsp;|-IT知识</option><option value="4" >&nbsp;&nbsp;&nbsp;&nbsp;|-网络知识</option><option value="5" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|-前端知识</option><option value="6">&nbsp;&nbsp;|-产品展示</option><option value="7">&nbsp;&nbsp;|-客户案例</option><option value="8">&nbsp;&nbsp;|-下载中心</option><option value="9">&nbsp;&nbsp;|-招贤纳士</option><option value="10">&nbsp;&nbsp;|-关于我们</option><option value="11">&nbsp;&nbsp;|-联系我们</option>
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
					<input type="text" id="dpicker0" name="publishtime" value="2013-03-21 16:57:51" onClick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})" class="input w150" />
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
						<textarea name="content" id="myEditor" rows="3" cols="50">&lt;p&gt;&lt;strong&gt;&lt;span style=&quot;font-size:20px;&quot;&gt;MongoDB的特性&lt;/span&gt;&lt;/strong&gt;&lt;br /&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;简单的查询语句，没有Join操作&lt;/p&gt;&lt;p&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;文档型存储，其数据是用二进制的Json格式Bson存储的。其数据就像Ruby的hashes，或者Python的字典，或者PHP的数组&lt;/p&gt;&lt;p&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;Sharding，MongoDB提供auto-sharding实现数据的扩展性&lt;/p&gt;&lt;p&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;GridFS，MongoDB的提供的文件存储API&lt;/p&gt;&lt;p&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;数组索引，你可以对文档中的某个数组属性建立索引&lt;/p&gt;&lt;p&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;MapReduce，可以用于进行复杂的统计和并行计算&lt;/p&gt;&lt;p&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;高性能，通过使用mmap和定时fsync的方法，避免了频繁IO，使其性能更高&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;strong&gt;&lt;span style=&quot;font-size:20px;&quot;&gt;MongoDB的优点&lt;/span&gt;&lt;/strong&gt;&lt;br /&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;高性能，速度非常快（如果你的内存足够的话）&lt;br /&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;没有固定的表结构，不用为了修改表结构而进行数据迁移&lt;br /&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;查询语言简单，容易上手&lt;br /&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;使用Sharding实现水平扩展&lt;br /&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;部署方便&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;br /&gt;&lt;strong&gt;&lt;span style=&quot;font-size:20px;&quot;&gt;使用MongoDB，你得记住以下几点：&lt;/span&gt;&lt;/strong&gt;&lt;br /&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;MongoDB 假设你有大磁盘空间&lt;br /&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;MongoDB 假设你的内存也足够大于放下你的热数据&lt;br /&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;MongoDB 假设你是部署在64位系统上的（32位有2G的限制，试用还可以）&lt;br /&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;MongoDB 假设你的系统是little-endian的&lt;br /&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;MongoDB 假设你有多台机器（并不专注于单机可靠性）&lt;br /&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;MongoDB 假设你希望用安全换性能，同时允许你用性能换安全&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;br /&gt;&lt;strong&gt;&lt;span style=&quot;font-size:20px;&quot;&gt;MongoDB在下面领域不太擅长&lt;/span&gt;&lt;/strong&gt;&lt;br /&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;不太稳定，特别是auto-sharding目前还有很多问题&lt;br /&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;不支持SQL，这意味着你很多通过SQL接口的工具不再适用&lt;br /&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;持久化，MongoDB单机可靠性不太好，宕机可能丢失一段时间的数据&lt;br /&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;相关文档比较少，新功能都有这个问题&lt;br /&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;相关人才比较难找，这也是新功能的问题之一&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;/p&gt;</textarea>
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