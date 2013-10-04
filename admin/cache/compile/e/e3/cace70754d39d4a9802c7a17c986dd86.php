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
<div class="formContainer">
	<div class="formtitle"><h5>备份数据库</h5></div>
	<form name="newform" action="/laugh/admin/index.php?s=DataBase/DataBaseBackup" method="post" class="newform">
		<ul class="formbody">
			<li class="formblock">
				<span>数据库备份文件存储路径: </span>
				<span style="width:350px;">F:/website/laugh/data/database</span>
			</li>
			<li class="formblock bordernone bgf6">
				<input type="submit" name="subut" class="button btnblue2" value="备份" />
			</li>
		</ul>
	</form>
</div>
<div class="captitle"><h5>备份的Sql文件列表 【1条数据】</h5></div>
<ul class="table_list_title">
	<li class="table_list_l table_list_l30"></li>
	<li class="table_list_l table_list_l250">文件名</li>
	<li class="table_list_l table_list_l100">文件大小</li>
	<li class="table_list_l table_list_l150">备份日期</li>
	<li class="table_list_l table_list_l100">操作</li>
</ul>
<div class="contentTableList">
            <ul class="table_list">
		<li class="table_list_l table_list_l30 table_list_no">1</li>
		<li class="table_list_l table_list_l250">laugh_DataBase_20131004.sql</li>
		<li class="table_list_l table_list_l100">142.71KB</li>
    	<li class="table_list_l table_list_l150">2013-10-04 23:06:03</li>
    	<li class="table_list_l table_list_l100">
    		<a href="/laugh/admin/index.php?s=DataBase/DataBaseRestore&SqlFileName=laugh_DataBase_20131004.sql">还原</a>
    	</li>
    </ul>
        </div>

    </div>
</div>
</body>
<script type="text/javascript" src="themes/blue/js/jquery.corner.js"></script>
<script type="text/javascript" src="themes/blue/js/public.js"></script>
<script type="text/javascript" src="themes/blue/js/common.js"></script>
<script type="text/javascript" src="themes/blue/js/ajax.js"></script>
<script type="text/javascript" src="public/js/jquery.idTabs.min.js"></script>
</html>