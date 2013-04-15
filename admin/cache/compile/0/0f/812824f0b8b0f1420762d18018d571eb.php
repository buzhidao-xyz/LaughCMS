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
	<div class="formtitle"><h5>添加新招聘信息</h5></div>
	<form name="newform" action="/laugh/admin/index.php?s=Plugin/CooperateSave" enctype="multipart/form-data" method="post" class="newform" id="ajaxform">
		<ul class="formbody">
			<div class="shtabtitlec">
				<div class="shtabtitle shtabcurrent"><a href="javascript:;"><span>常规内容</span></a></div>
				<div class="shtabtitle"><a href="javascript:;"><span>职位描述</span></a></div>
			</div>
			<div class="shtabcontentc">
			<div class="shtabcontent shtabcontentcurrent">
				<li class="formblock">
					<span>招聘职位:</span>
					<input type="text" name="position" value="" class="input w300" />
				</li>
				<li class="formblock">
					<span>选择发布栏目: </span>
					<select id="select" name="columnid" style="width:230px;">
						<option value="">|-请选择栏目...</option><option value="9">&nbsp;&nbsp;|-招贤纳士</option>
					</select>
				</li>
				<li class="formblock">
					<span>招聘人数:</span>
					<input type="text" name="quantity" value="" class="input w100" /> 人
				</li>
				<li class="formblock">
					<span>学历要求:</span>
					<select name="education" style="width:100px;">
						<option value="" selected>--请选择--</option>
						<option value="初中">初中</option>
						<option value="高中">高中</option>
						<option value="中技">中技</option>
						<option value="中专">中专</option>
						<option value="大专">大专</option>
						<option value="本科">本科</option>
						<option value="硕士">硕士</option>
						<option value="博士">博士</option>
						<option value="其他">其他</option>
					</select>
				</li>
				<li class="formblock">
					<span>工作经验:</span>
					<select name="experience" style="width:120px;">
						<option value="" selected>--请选择--</option>
						<option value="在读学生">在读学生</option>
						<option value="应届毕业生">应届毕业生</option>
						<option value="一年以上">一年以上</option>
						<option value="二年以上">二年以上</option>
						<option value="三年以上">三年以上</option>
						<option value="五年以上">五年以上</option>
						<option value="八年以上">八年以上</option>
						<option value="十年以上">十年以上</option>
						<option value="不限">不限</option>
					</select>
				</li>
				<li class="formblock">
					<span>工作地点:</span>
					<input type="text" name="place" value="" class="input w300" />
				</li>
				<li class="formblock">
					<span>工作性质:</span>
					<select name="nature" style="width:100px;">
						<option value="" selected>--请选择--</option>
						<option value="全职">全职</option>
						<option value="兼职">兼职</option>
					</select>
				</li>
				<li class="formblock">
					<span>工资待遇:</span>
					<select name="salary" style="width:150px;">
						<option value="" selected>--请选择--</option>
						<option value="面议">面议</option>
						<option value="1500以下">1500以下</option>
						<option value="1500-1999">1500-1999</option>
						<option value="2000-2999">2000-2999</option>
						<option value="3000-4499">3000-4499</option>
						<option value="4500-5999">4500-5999</option>
						<option value="6000-7999">6000-7999</option>
						<option value="8000-9999">8000-9999</option>
						<option value="10000-14999">10000-14999</option>
						<option value="15000-19999">15000-19999</option>
						<option value="20000-29999">20000-29999</option>
						<option value="30000-49999">30000-49999</option>
						<option value="50000及以上">50000及以上</option>
					</select>
				</li>
				<li class="formblock">
					<span>发布者:</span>
					<input type="text" name="author" value="admin" class="input w150" />
				</li>
				<li class="formblock">
					<span>发布时间:</span>
					<input type="text" id="dpicker0" name="publishtime" value="2013-04-15 09:31:46" onClick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})" class="input w150" />
					<img width="16" height="22" align="absmiddle" onclick="WdatePicker({el:'dpicker0',dateFmt:'yyyy-MM-dd HH:mm:ss'})" style="cursor:pointer" src="public/plugin/My97DatePicker/skin/datePicker.gif">
				</li>
				<li class="formblock">
					<span>有效期:</span>
					<input type="text" name="validitytime" value="" class="input w150" />
					<select name="validitytimeSelect" style="width:100px;">
						<option value="" selected>--请选择--</option>
						<option value="一个周">一个周</option>
						<option value="两个周">两个周</option>
						<option value="一个月">一个月</option>
						<option value="两个月">两个月</option>
						<option value="三个月">三个月</option>
						<option value="四个月">四个月</option>
						<option value="五个月">五个月</option>
						<option value="六个月">六个月</option>
						<option value="长期有效">长期有效</option>
					</select>
				</li>
			</div>
			<div class="shtabcontent">
				<li class="formautoblock">
					<span>职位描述:</span>
					<div class="FullTextEditor">
						<textarea name="description" id="myEditor" rows="3" cols="50"></textarea>
					</div>
				</li>
			</div>
			<li class="formblock bordernone">
				<input type="submit" name="subut" class="button btngreen2" value="添加" />
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
    $("select[name=validitytimeSelect]").change(function (){
    	$("input[name=validitytime]").val($(this).val());
    });
    $("form[name=newform]").submit(function(){
    	var position = $(this).find("input[name=position]").val();
    	if (!position) {
    		alert("请填写招聘职位!");
    		return false;
    	}
    	var columnid = $(this).find("select[name=columnid]").val();
    	if (!columnid) {
    		alert("请选择发布栏目!");
    		return false;
    	}
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