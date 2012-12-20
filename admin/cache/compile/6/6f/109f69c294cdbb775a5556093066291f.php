<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="keywords" content="">
<link type="text/css" rel="stylesheet" href="themes/blue/style/common.css" media="screen">
<link type="text/css" rel="stylesheet" href="themes/blue/style/base.css" media="screen">
<link type="text/css" rel="stylesheet" href="themes/blue/style/global.css" media="screen">
<script type="text/javascript" src="themes/blue/js/jquery.js"></script>
<script type="text/javascript" src="themes/blue/js/div_window.js"></script>
<!-- <script type="text/javascript" src="themes/blue/js/PIE.js"></script> -->
<title>管理中心</title>
<script type="text/javascript">
var JS_APP = '/admin';
</script>
</head>

<body>
<div id="control">
	<ul class="controlTop">
		<li class="controlLeftTop"></li>
		<li class="controlRightTop"></li>
	</ul>
	<div id="controlContent">
<div class="formContainer" accessStatus=1>
	<div class="formtitle"><h5>添加新栏目</h5></div>
	<form name="newform" action="/admin/index.php?s=Column/saveColumn" method="post" id="addajaxform" class="newform">
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
					<select id="select" name="parentid" style="width:150px;">
						<option value="">|-栏目列表</option>
											</select>
				</li>
				<li class="formblock">
					<span>栏目名称:</span>
					<input type="text" name="columnname" value="" class="input w150" />
				</li>
				<li class="formblock">
					<span>排列顺序:</span>
					<input type="text" name="sortrank" value="" class="input w100" />
				</li>
				<li class="formautoblock">
					<span>栏目属性:</span>
					<div class="item_listh fleft">
						<label style="float:none;"><input type="radio" name="isshow" value="1" class="radio" checked="checked" />最终列表栏目（允许在本栏目发布文档，并生成文档列表） </label>
						<label style="float:none;"><input type="radio" name="isshow" value="0" class="radio" />频道封面（栏目本身不允许发布文档） </label>
						<label style="float:none;"><input type="radio" name="isshow" value="0" class="radio" />外部连接（在"文件保存目录"处填写网址） </label>
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
			<li class="formblock bordernone">
				<input type="submit" name="subut" class="button btnyellow2" value="添加" />
			</li>
		</ul>
	</form>
</div>
<script src="themes/blue/UEditor/editor_config.js" type="text/javascript"></script>
<script src="themes/blue/UEditor/editor_all_min.js" type="text/javascript"></script>
<script type="text/javascript">
    UE.getEditor('myEditor');
</script>
    </div>
    <ul class="controlBottom">
		<li class="controlLeftBottom"></li>
		<li class="controlRightBottom"></li>
	</ul>
</div>
</body>
<script type="text/javascript" src="themes/blue/js/jquery.corner.js"></script>
<script type="text/javascript" src="themes/blue/js/public.js"></script>
<script type="text/javascript" src="themes/blue/js/common.js"></script>
<script type="text/javascript" src="themes/blue/js/ajax.js"></script>
</html>