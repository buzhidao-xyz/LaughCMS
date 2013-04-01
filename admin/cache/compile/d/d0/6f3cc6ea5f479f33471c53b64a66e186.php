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
	<form name="newform" action="/laugh/admin/index.php?s=Product/saveEdit" enctype="multipart/form-data" method="post" class="newform">
		<input type="hidden" name="archiveid" value="12" />
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
					<input type="text" name="title" value="CTI融合通信专业资讯网" class="input w300" />
				</li>
				<li class="formblock">
					<span>文档标签:</span>
					<input type="text" name="tag" value="" class="input w300" /> (','号分开)
				</li>
				<li class="formblock">
					<span>文档主栏目: </span>
					<select id="select" name="columnid" style="width:230px;">
						<option value="">|-请选择栏目...</option><option value="1">&nbsp;&nbsp;|-网站首页</option><option value="2">&nbsp;&nbsp;|-新闻资讯</option><option value="3">&nbsp;&nbsp;&nbsp;&nbsp;|-IT知识</option><option value="12">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|-PHP知识</option><option value="4">&nbsp;&nbsp;&nbsp;&nbsp;|-网络知识</option><option value="5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|-前端知识</option><option value="13">&nbsp;&nbsp;&nbsp;&nbsp;|-数据库知识</option><option value="6">&nbsp;&nbsp;|-产品展示</option><option value="14">&nbsp;&nbsp;&nbsp;&nbsp;|-网络产品</option><option value="7">&nbsp;&nbsp;|-客户案例</option><option value="8">&nbsp;&nbsp;|-下载中心</option><option value="9">&nbsp;&nbsp;|-招贤纳士</option><option value="10">&nbsp;&nbsp;|-关于我们</option><option value="11">&nbsp;&nbsp;|-联系我们</option>
					</select>
				</li>
				<li class="formblock">
					<span>文档缩略图:</span>
					<input type="file" name="image" value="/Uploads/Image/201304/01/1364805937_ukep6i_1138.jpg" class="input w150" style="height: 22px;" />
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
					<input type="text" id="dpicker0" name="publishtime" value="2013-04-01 16:45:49" onClick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})" class="input w150" />
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
					<input type="text" name="seotitle" value="CTI融合通信专业资讯网" class="input w300" />
				</li>
				<li class="formautoblock">
					<span>关键字:</span>
					<textarea name="keyword" rows="1" cols="47"></textarea>
				</li>
				<li class="formautoblock">
					<span>摘要内容:</span>
					<textarea name="description" rows="2" cols="47">CTI融合通信专业资讯网</textarea>
				</li>
			</div>
			<div class="shtabcontent">
				<li class="formblock">
					<span>型号:</span>
					<input type="text" name="model" value="asd" class="input w150" />
				</li>
				<li class="formblock">
					<span>品牌:</span>
					<input type="text" name="brand" value="" class="input w200" />
				</li>
				<li class="formblock">
					<span>颜色:</span>
					<input type="text" name="color" value="1" class="input w200" />
					多种颜色逗号,隔开
				</li>
				<li class="formblock">
					<span>材质:</span>
					<input type="text" name="material" value="" class="input w300" />
				</li>
				<li class="formblock">
					<span>尺寸:</span>
					<input type="text" name="size" value="" class="input w100" />
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
				<input type="hidden" name="imageids[]" value="7" />
				<span class="imageBlockimage">
					<img src="http://localhost:82/laugh/Uploads/Image/201304/01/1364805925_z5oqwm_6762.jpg" width="150" height="auto" />
				</span>
				<span class="imageBlocktitle">产品图片1</span>
			</div>
						<div class="imageBlock">
				<input type="hidden" name="imageids[]" value="8" />
				<span class="imageBlockimage">
					<img src="http://localhost:82/laugh/Uploads/Image/201304/01/1364805935_emcm7q_9353.jpg" width="150" height="auto" />
				</span>
				<span class="imageBlocktitle">图片2</span>
			</div>
						<div class="imageBlock">
				<input type="hidden" name="imageids[]" value="9" />
				<span class="imageBlockimage">
					<img src="http://localhost:82/laugh/Uploads/Image/201304/01/1364805947_quf74b_9652.jpg" width="150" height="auto" />
				</span>
				<span class="imageBlocktitle">图片3</span>
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
						<textarea name="content" id="myEditor" rows="3" cols="50"></textarea>
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