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
	<form name="newform" action="/laugh/admin/index.php?s=Product/saveEdit" enctype="multipart/form-data" method="post" class="newform">
		<input type="hidden" name="archiveid" value="11" />
		<ul class="formbody">
			<div class="shtabtitlec">
				<div class="shtabtitle shtabcurrent"><a href="javascript:;"><span>常规内容</span></a></div>
				<div class="shtabtitle"><a href="javascript:;"><span>高级内容</span></a></div>
				<div class="shtabtitle"><a href="javascript:;"><span>产品详情</span></a></div>
				<div class="shtabtitle"><a href="javascript:;"><span>产品图片</span></a></div>
				<div class="shtabtitle"><a href="javascript:;"><span>产品描述</span></a></div>
			</div>
			<div class="shtabcontentc">
			<div class="shtabcontent shtabcontentcurrent">
				<li class="formblock">
					<span>文档标题:</span>
					<input type="text" name="title" value="4 款 Linux 下开源的个人日记管理软件" class="input w300" />
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
					<input type="file" name="image" value="/Uploads/Image/201304/02/1364884636_tpajd4_786.png" class="input w150" style="height: 22px;" />
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
					<input type="text" id="dpicker0" name="publishtime" value="2013-04-02 14:37:16" onClick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})" class="input w150" />
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
					<input type="text" name="seotitle" value="4 款 Linux 下开源的个人日记管理软件" class="input w300" />
				</li>
				<li class="formautoblock">
					<span>关键字:</span>
					<textarea name="keyword" rows="1" cols="47"></textarea>
				</li>
				<li class="formautoblock">
					<span>摘要内容:</span>
					<textarea name="description" rows="2" cols="47">4 款 Linux 下开源的个人日记管理软件</textarea>
				</li>
			</div>
			<div class="shtabcontent">
				<li class="formblock">
					<span>型号:</span>
					<input type="text" name="model" value="1234" class="input w150" />
				</li>
				<li class="formblock">
					<span>品牌:</span>
					<input type="text" name="brand" value="222" class="input w200" />
				</li>
				<li class="formblock">
					<span>颜色:</span>
					<input type="text" name="color" value="333" class="input w200" />
					多种颜色逗号,隔开
				</li>
				<li class="formblock">
					<span>材质:</span>
					<input type="text" name="material" value="" class="input w300" />
				</li>
				<li class="formblock">
					<span>尺寸:</span>
					<input type="text" name="size" value="123" class="input w100" />
				</li>
				<li class="formblock">
					<span>价格:</span>
					<input type="text" name="price" value="" class="input w150" />
				</li>
				<li class="formblock">
					<span>数量:</span>
					<input type="text" name="total" value="" class="input w200" />
				</li>
			</div>
			<div class="shtabcontent">
				<div id="imageUpload">
	<div id="imageTitle">产品图片:</div>
	<div id="imageBody">
		<div id="imageBox">
									<div class="imageBlock">
				<input type="hidden" name="imageids[]" value="4" />
				<span class="imageBlockimage">
					<img src="http://localhost:82/laugh/Uploads/Image/201304/02/thumb_1364884599_fye754_8577.png" width="150" height="auto" />
				</span>
				<span class="imageBlocktitle">图1</span>
			</div>
						<div class="imageBlock">
				<input type="hidden" name="imageids[]" value="5" />
				<span class="imageBlockimage">
					<img src="http://localhost:82/laugh/Uploads/Image/201304/02/thumb_1364884614_qub9zq_7492.png" width="150" height="auto" />
				</span>
				<span class="imageBlocktitle">图2</span>
			</div>
						<div class="imageBlock">
				<input type="hidden" name="imageids[]" value="6" />
				<span class="imageBlockimage">
					<img src="http://localhost:82/laugh/Uploads/Image/201304/02/thumb_1364884625_dxb7k2_7142.jpg" width="150" height="auto" />
				</span>
				<span class="imageBlocktitle">图3</span>
			</div>
								</div>
		<div id="imageUploadBox" ajaxUrl="/laugh/admin/index.php?s=Image/saveUploadImage">
			<span>
				图片: <input type="file" id="images" name="images" class="input w230 inputfile" />
			</span>
			<span>
				描述: <input type="text" name="imageTitle" value="" class="input w300" />
			</span>
			<span>
				<input type="hidden" name="imageUploadAction" value="<pre class='xdebug-var-dump' dir='ltr'><small>string</small> <font color='#cc0000'>'&lt;font color=red&gt;127.0.0.1 系统发生错误: Undefined index: imageUploadAction, in C:\xampp\htdocs\laugh\admin\cache\compile\e85b124b8e6f4a08ed514b4a3dda0baddb158a74.file.imageUpload.html.php on line 59&lt;/font&gt;'</font> <i>(length=211)</i>
</pre><pre class='xdebug-var-dump' dir='ltr'><small>string</small> <font color='#cc0000'>'&lt;font color=red&gt;127.0.0.1 系统发生错误: Trying to get property of non-object, in C:\xampp\htdocs\laugh\admin\cache\compile\e85b124b8e6f4a08ed514b4a3dda0baddb158a74.file.imageUpload.html.php on line 59&lt;/font&gt;'</font> <i>(length=213)</i>
</pre>" />
				<input type="button" name="imageUploadButton" class="button btngreen2 btupload" value="上传" />
			</span>
		</div>
	</div>
</div>
<link type="text/css" rel="stylesheet" href="themes/green/style/imageUpload.css" media="screen">
<script type="text/javascript" src="themes/green/js/ajaxfileupload.js"></script>
<script type="text/javascript" src="themes/green/js/imageUpload.js"></script>
			</div>
			<div class="shtabcontent">
				<li class="formautoblock">
					<span>详细描述:</span>
					<div class="FullTextEditor">
						<textarea name="content" id="myEditor" rows="3" cols="50">&lt;p&gt;1. RedNotebook&lt;/p&gt;&lt;p&gt;　　RedNotebook 是一款不错的可以运行在Linux环境桌面日记本，不论是拿来写日记，还是写些简单的每日计划，都非常适用。&lt;/p&gt;&lt;p&gt;　　界面还是很简洁的。 右边的边栏是个单独的区域，可以在里面建立分类的文本，非常适合来记录计划、灵感，或者今日大事&lt;/p&gt;&lt;p&gt;2. Lifeograph&lt;/p&gt;&lt;p&gt;　　Lifeograph 是一个开源的离线和私人的日志和记事应用软件。提供作为一个日记应用的所有标准工具。&lt;/p&gt;&lt;p&gt;　　功能：&lt;/p&gt;&lt;p&gt;　　支持加密和非加密日记&lt;/p&gt;&lt;p&gt;　　长时间未使用自动退出登录&lt;/p&gt;&lt;p&gt;　　自动格式化条目标题和子标题&lt;/p&gt;&lt;p&gt;　　类似 Wiki 风格的富文本格式化 (*bold*, _italic_, =strikeout=, etc&hellip;)&lt;/p&gt;&lt;p&gt;　　基本的搜索、过滤和替换文本功能&lt;/p&gt;&lt;p&gt;　　编辑器支持主题&lt;/p&gt;&lt;p&gt;　　可收藏日记&lt;/p&gt;&lt;p&gt;　　支持标签&lt;/p&gt;&lt;p&gt;　　拼写检查&lt;/p&gt;&lt;p&gt;　　条目之间的链接&lt;/p&gt;&lt;p&gt;　　支持多种 URI 格式(http://, file://, mailto://, etc&hellip;)&lt;/p&gt;&lt;p&gt;　　自动备份&lt;/p&gt;&lt;p&gt;　　打印&lt;/p&gt;&lt;p&gt;　　基本统计图表&lt;/p&gt;&lt;p&gt;　　图像缩略图&lt;/p&gt;&lt;p&gt;3. Kontact&lt;/p&gt;&lt;p&gt;　　Kontact 是KDE的个人信息管理和套装软件。提供日历、通讯簿、笔记、待办事项、新闻和电子邮件的功能。使用KPart来嵌入各种应用程式(KMail、KAddressBook、Akregator等)放入到容器应用程序。&lt;/p&gt;&lt;p&gt;4. ThotKeeper&lt;/p&gt;&lt;p&gt;　　ThotKeeper 是一个使用 Python 编写的跨平台的个人日记管理程序。&lt;/p&gt;&lt;p&gt;　　功能：&lt;/p&gt;&lt;p&gt;　　跨平台支持&lt;/p&gt;&lt;p&gt;　　简单易于浏览的接口&lt;/p&gt;&lt;p&gt;　　XML 存储格式&lt;/p&gt;&lt;p&gt;　　支持每天多篇日记&lt;/p&gt;&lt;p&gt;　　支持不同的日记作者&lt;/p&gt;&lt;p&gt;　　层次化标签&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;</textarea>
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
    	if ($(this).val()=="14") $(this).attr("selected",true);
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