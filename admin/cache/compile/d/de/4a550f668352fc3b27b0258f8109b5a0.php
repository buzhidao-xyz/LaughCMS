<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="keywords" content="">
<link type="text/css" rel="stylesheet" href="themes/green/style/common.css" media="screen">
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
	<div class="formtitle"><h5>修改图集信息</h5></div>
	<form name="newform" action="/laugh/admin/index.php?s=Image/saveEdit" enctype="multipart/form-data" method="post" class="newform">
		<input type="hidden" name="archiveid" value="14" />
		<ul class="formbody">
			<div class="shtabtitlec">
				<div class="shtabtitle shtabcurrent"><a href="javascript:;"><span>常规内容</span></a></div>
				<div class="shtabtitle"><a href="javascript:;"><span>高级内容</span></a></div>
				<div class="shtabtitle"><a href="javascript:;"><span>图集图片</span></a></div>
			</div>
			<div class="shtabcontentc">
			<div class="shtabcontent shtabcontentcurrent">
				<li class="formblock">
					<span>文档标题:</span>
					<input type="text" name="title" value="客户案例一" class="input w300" />
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
					<input type="file" name="image" value="/Uploads/Image/201304/08/1365413072_9nqiqs_5725.jpeg" class="input w150" style="height: 22px;" />
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
					<input type="text" id="dpicker0" name="publishtime" value="2013-04-11 16:51:24" onClick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})" class="input w150" />
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
					<input type="text" name="seotitle" value="客户案例一" class="input w300" />
				</li>
				<li class="formautoblock">
					<span>关键字:</span>
					<textarea name="keyword" rows="1" cols="47">客户案例一</textarea>
				</li>
				<li class="formautoblock">
					<span>摘要内容:</span>
					<textarea name="description" rows="2" cols="47">客户案例一</textarea>
				</li>
			</div>
			<div class="shtabcontent">
				<div id="imageUpload">
	<div id="imageTitle">产品图片:</div>
	<div id="imageBody">
		<div id="imageBox">
									<div class="imageBlock">
				<input type="hidden" name="imageids[]" value="12" />
				<span class="imageBlockimage">
					<img src="http://localhost:82/laugh/Uploads/Image/201304/08/thumb_1365413641_bydp7p_7088.jpg" width="150" height="auto" />
				</span>
				<span class="imageBlocktitle">案例图片一</span>
			</div>
						<div class="imageBlock">
				<input type="hidden" name="imageids[]" value="13" />
				<span class="imageBlockimage">
					<img src="http://localhost:82/laugh/Uploads/Image/201304/09/thumb_1365474374_4s7jxa_5777.jpg" width="150" height="auto" />
				</span>
				<span class="imageBlocktitle">案例图片二</span>
			</div>
						<div class="imageBlock">
				<input type="hidden" name="imageids[]" value="14" />
				<span class="imageBlockimage">
					<img src="http://localhost:82/laugh/Uploads/Image/201304/09/thumb_1365474384_lld6f7_2865.jpg" width="150" height="auto" />
				</span>
				<span class="imageBlocktitle">案例图片三</span>
			</div>
						<div class="imageBlock">
				<input type="hidden" name="imageids[]" value="15" />
				<span class="imageBlockimage">
					<img src="http://localhost:82/laugh/Uploads/Image/201304/09/thumb_1365474406_tzcrus_885.jpg" width="150" height="auto" />
				</span>
				<span class="imageBlocktitle">案例图片四</span>
			</div>
						<div class="imageBlock">
				<input type="hidden" name="imageids[]" value="16" />
				<span class="imageBlockimage">
					<img src="http://localhost:82/laugh/Uploads/Image/201304/09/thumb_1365474438_z5r3pz_3874.jpg" width="150" height="auto" />
				</span>
				<span class="imageBlocktitle">案例图片五</span>
			</div>
						<div class="imageBlock">
				<input type="hidden" name="imageids[]" value="17" />
				<span class="imageBlockimage">
					<img src="http://localhost:82/laugh/Uploads/Image/201304/09/thumb_1365474465_e4anmy_3273.jpg" width="150" height="auto" />
				</span>
				<span class="imageBlocktitle">案例图片六</span>
			</div>
						<div class="imageBlock">
				<input type="hidden" name="imageids[]" value="18" />
				<span class="imageBlockimage">
					<img src="http://localhost:82/laugh/Uploads/Image/201304/09/thumb_1365474477_zuf1eo_2534.JPG" width="150" height="auto" />
				</span>
				<span class="imageBlocktitle">案例图片七</span>
			</div>
						<div class="imageBlock">
				<input type="hidden" name="imageids[]" value="19" />
				<span class="imageBlockimage">
					<img src="http://localhost:82/laugh/Uploads/Image/201304/09/thumb_1365474490_nc8o3r_168.jpg" width="150" height="auto" />
				</span>
				<span class="imageBlocktitle">案例图片八</span>
			</div>
						<div class="imageBlock">
				<input type="hidden" name="imageids[]" value="20" />
				<span class="imageBlockimage">
					<img src="http://localhost:82/laugh/Uploads/Image/201304/09/thumb_1365487039_z77rqj_6345.jpg" width="150" height="auto" />
				</span>
				<span class="imageBlocktitle">案例图片九</span>
			</div>
						<div class="imageBlock">
				<input type="hidden" name="imageids[]" value="21" />
				<span class="imageBlockimage">
					<img src="http://localhost:82/laugh/Uploads/Image/201304/09/thumb_1365487318_rkq34w_7563.jpg" width="150" height="auto" />
				</span>
				<span class="imageBlocktitle">案例图片十</span>
			</div>
						<div class="imageBlock">
				<input type="hidden" name="imageids[]" value="22" />
				<span class="imageBlockimage">
					<img src="http://localhost:82/laugh/Uploads/Image/201304/11/thumb_1365669924_2hipez_2103_detail_img2.jpg" width="150" height="auto" />
				</span>
				<span class="imageBlocktitle">案例图片十一</span>
			</div>
						<div class="imageBlock">
				<input type="hidden" name="imageids[]" value="23" />
				<span class="imageBlockimage">
					<img src="http://localhost:82/laugh/Uploads/Image/201304/11/thumb_1365669932_izjy7b_2076_detail_img2.jpg" width="150" height="auto" />
				</span>
				<span class="imageBlocktitle">案例图片十二</span>
			</div>
						<div class="imageBlock">
				<input type="hidden" name="imageids[]" value="24" />
				<span class="imageBlockimage">
					<img src="http://localhost:82/laugh/Uploads/Image/201304/11/thumb_1365669941_zmcmy6_4831_detail_img3.jpg" width="150" height="auto" />
				</span>
				<span class="imageBlocktitle">案例图片十三</span>
			</div>
						<div class="imageBlock">
				<input type="hidden" name="imageids[]" value="25" />
				<span class="imageBlockimage">
					<img src="http://localhost:82/laugh/Uploads/Image/201304/11/thumb_1365669950_t6lrha_3058_detail_img1.jpg" width="150" height="auto" />
				</span>
				<span class="imageBlocktitle">案例图片十四</span>
			</div>
						<div class="imageBlock">
				<input type="hidden" name="imageids[]" value="26" />
				<span class="imageBlockimage">
					<img src="http://localhost:82/laugh/Uploads/Image/201304/11/thumb_1365669960_nlj53u_6460_detail_img3.jpg" width="150" height="auto" />
				</span>
				<span class="imageBlocktitle">案例图片十五</span>
			</div>
						<div class="imageBlock">
				<input type="hidden" name="imageids[]" value="29" />
				<span class="imageBlockimage">
					<img src="http://localhost:82/laugh/Uploads/Image/201304/11/thumb_1365670200_32r2k9_6143_asdsad123.jpg" width="150" height="auto" />
				</span>
				<span class="imageBlocktitle">案例图片十六</span>
			</div>
						<div class="imageBlock">
				<input type="hidden" name="imageids[]" value="30" />
				<span class="imageBlockimage">
					<img src="http://localhost:82/laugh/Uploads/Image/201304/11/thumb_1365670224_8y1f39_9460_dadao.jpg" width="150" height="auto" />
				</span>
				<span class="imageBlocktitle">案例图片十七</span>
			</div>
						<div class="imageBlock">
				<input type="hidden" name="imageids[]" value="31" />
				<span class="imageBlockimage">
					<img src="http://localhost:82/laugh/Uploads/Image/201304/11/thumb_1365670248_wzu5aq_7689_3333qqq1231.JPG" width="150" height="auto" />
				</span>
				<span class="imageBlocktitle">案例图片十八</span>
			</div>
						<div class="imageBlock">
				<input type="hidden" name="imageids[]" value="32" />
				<span class="imageBlockimage">
					<img src="http://localhost:82/laugh/Uploads/Image/201304/11/thumb_1365670265_69ph52_7034_detail_img2.jpg" width="150" height="auto" />
				</span>
				<span class="imageBlocktitle">案例图片十九</span>
			</div>
						<div class="imageBlock">
				<input type="hidden" name="imageids[]" value="33" />
				<span class="imageBlockimage">
					<img src="http://localhost:82/laugh/Uploads/Image/201304/11/thumb_1365670282_xnd5ls_4777_detail_img1.jpg" width="150" height="auto" />
				</span>
				<span class="imageBlocktitle">案例图片二十</span>
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
				<input type="hidden" name="imageUploadAction" value="" />
				<input type="button" name="imageUploadButton" class="button btngreen2 btupload" value="上传" />
			</span>
		</div>
	</div>
</div>
<link type="text/css" rel="stylesheet" href="themes/green/style/imageUpload.css" media="screen">
<script type="text/javascript" src="themes/green/js/ajaxfileupload.js"></script>
<script type="text/javascript" src="themes/green/js/imageUpload.js"></script>
			</div>
			<li class="formblock bordernone">
				<input type="submit" name="subut" class="button btngreen2" value="修改" />
			</li>
		</ul>
	</form>
</div>
<script src="public/plugin/My97DatePicker/WdatePicker.js" type="text/javascript"></script>
<script type="text/javascript">
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
    	if ($(this).val()=="7") $(this).attr("selected",true);
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