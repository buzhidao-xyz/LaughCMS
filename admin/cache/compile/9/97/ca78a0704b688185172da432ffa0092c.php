<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="keywords" content="">
<link type="text/css" rel="stylesheet" href="themes/blue/style/common.css" media="screen">
<link type="text/css" rel="stylesheet" href="themes/blue/style/global.css" media="screen">
<script type="text/javascript" src="public/js/jquery.js"></script>
<link type="text/css" rel="stylesheet" href="public/plugin/colorbox/colorbox.css" media="screen">
<script type="text/javascript" src="public/plugin/colorbox/jquery.colorbox.js"></script>
<title>LaughCMS网站管理系统</title>
<script type="text/javascript">
var JS_APP = '/laugh/admin';
var JS_APPM = 'http://localhost/laugh';
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
	<div class="formtitle"><h5>添加新栏目</h5></div>
	<form name="newcolumnform" action="/laugh/admin/index.php?s=Column/saveColumn" enctype="multipart/form-data" method="post" class="newform">
		<ul class="formbody">
			<div class="shtabtitlec">
				<div class="shtabtitle shtabcurrent"><a href="javascript:;"><span>常规内容</span></a></div>
				<div class="shtabtitle"><a href="javascript:;"><span>高级内容</span></a></div>
				<div class="shtabtitle"><a href="javascript:;"><span>栏目内容</span></a></div>
			</div>
			<div class="shtabcontentc">
			<div class="shtabcontent shtabcontentcurrent">
				<li class="formblock">
					<span>上级栏目: </span>
					<select name="parentid" style="width:230px;">
						<option value="">|-请选择栏目...</option><option value="1">&nbsp;&nbsp;|-网站首页</option><option value="2">&nbsp;&nbsp;|-新闻资讯</option><option value="3">&nbsp;&nbsp;&nbsp;&nbsp;|-IT知识</option><option value="12">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|-PHP知识</option><option value="4">&nbsp;&nbsp;&nbsp;&nbsp;|-网络知识</option><option value="5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|-前端知识</option><option value="13">&nbsp;&nbsp;&nbsp;&nbsp;|-数据库知识</option><option value="6">&nbsp;&nbsp;|-产品展示</option><option value="14">&nbsp;&nbsp;&nbsp;&nbsp;|-网络产品</option><option value="15">&nbsp;&nbsp;&nbsp;&nbsp;|-电子产品</option><option value="7">&nbsp;&nbsp;|-客户案例</option><option value="8">&nbsp;&nbsp;|-下载中心</option><option value="9">&nbsp;&nbsp;|-招贤纳士</option><option value="10">&nbsp;&nbsp;|-关于我们</option><option value="11">&nbsp;&nbsp;|-联系我们</option>
					</select>
				</li>
				<li class="formblock">
					<span>内容模型: </span>
					<select name="columnmodel" style="width:230px;">
						<option value="">|-请选择内容模型...</option><option value="1">&nbsp;&nbsp;|-文章模型</option><option value="2">&nbsp;&nbsp;|-图片模型</option><option value="3">&nbsp;&nbsp;|-下载模型</option><option value="4">&nbsp;&nbsp;|-专题模型</option><option value="5">&nbsp;&nbsp;|-软件模型</option><option value="6">&nbsp;&nbsp;|-产品模型</option><option value="7">&nbsp;&nbsp;|-分类信息模型</option><option value="8">&nbsp;&nbsp;|-公共模型</option><option value="9">&nbsp;&nbsp;|-插件模型</option>
					</select>
				</li>
				<li class="formblock">
					<span>栏目名称:</span>
					<input type="text" name="columnname" value="" class="input w200 ruler" />
				</li>
				<!-- <li class="formblock">
					<span>访问Action:</span>
					<input type="text" name="action" value="Index" class="input w200" />
					<font color="#999999">*如非必要请勿更改</font>
				</li> -->
				<li class="formblock">
					<span>排列顺序:</span>
					<input type="text" name="sortrank" value="" class="input w200" />
				</li>
				<li class="formautoblock">
					<span>栏目属性:</span>
					<div class="item_listh fleft">
						<label style="float:none;"><input type="radio" name="columntype" value="1" class="radio" />频道封面（栏目本身不允许发布文档） </label>
						<label style="float:none;"><input type="radio" name="columntype" value="2" class="radio" checked="checked" />最终列表栏目（允许在本栏目发布文档，并生成文档列表） </label>
						<label style="float:none;"><input type="radio" name="columntype" value="3" class="radio" />外部连接（在"文件保存目录"处填写网址） </label>
					</div>
				</li>
				<li class="formblock">
					<span>是否隐藏: </span>
					<div class="item_list fleft">
						<label><input type="radio" name="isshow" value="1" class="radio" checked="checked" />显示</label>
						<label><input type="radio" name="isshow" value="0" class="radio" />隐藏</label>
					</div>
				</li>
			</div>
			<div class="shtabcontent">
				<li class="formblock">
					<span>栏目封面页模板:</span>
					<input type="text" name="template_index" value="" class="input w300" />
				</li>
				<li class="formblock">
					<span>栏目列表页模板:</span>
					<input type="text" name="template_list" value="" class="input w300" />
				</li>
				<li class="formblock">
					<span>栏目文档详细页模板:</span>
					<input type="text" name="template_body" value="" class="input w300" />
				</li>
				<li class="formblock">
					<span>SEO标题:</span>
					<input type="text" name="title" value="" class="input w300" />
				</li>
				<li class="formautoblock">
					<span>关键字:</span>
					<textarea name="keyword" rows="1" cols="47"></textarea>
				</li>
				<li class="formautoblock">
					<span>栏目描述:</span>
					<textarea name="description" rows="2" cols="47"></textarea>
				</li>
			</div>
			<div class="shtabcontent">
				<li class="formautoblock">
					<span>栏目内容:</span>
					<div class="FullTextEditor">
						<textarea name="content" id="myEditor" rows="3" cols="50"></textarea>
					</div>
				</li>
			</div>
			</div>
			<li class="formblock bordernone bgf6">
				<input type="submit" name="subut" class="button btnblue2" value="添加" />
			</li>
		</ul>
	</form>
</div>
<script src="public/plugin/UEditor/editor_config.js" type="text/javascript"></script>
<script src="public/plugin/UEditor/editor_all_min.js" type="text/javascript"></script>
<script type="text/javascript">
UE.getEditor('myEditor',{
});
$("form[name=newcolumnform]").submit(function(){
	var columnname = $(this).find("input[name=columnname]").val();
	if (!columnname) {
		alert("请填写栏目名称!");
		return false;
	}
	var columnmodel = $(this).find("select[name=columnmodel]").val();
	if (!columnmodel) {
		alert("请选择栏目模型!");
		return false;
	}
	var sortrank = $(this).find("input[name=sortrank]").val();
	if (!sortrank) {
		alert("请填写栏目排序位置!");
		return false;
	}
});
$("select[name=parentid]").find("option").each(function (){
	if ($(this).val()=="") $(this).attr("selected",true);
});

//根据内容模型获取模型模板
$("select[name=columnmodel]").change(function (){
	var d = {
		columnmodel : $(this).val()
	}
	$.post(JS_APP+"/index.php?s=CTModel/getCTModelTemplate",d,function(data){
		$("input[name=template_index]").val(data.data['template_index']);
		$("input[name=template_list]").val(data.data['template_list']);
		$("input[name=template_body]").val(data.data['template_body']);
	},'json')
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