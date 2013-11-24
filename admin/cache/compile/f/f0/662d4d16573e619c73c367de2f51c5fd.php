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
<div class="formContainer">
    <div class="formtitle"><h5>管理员登录日志查询</h5></div>
    <form name="newform" action="/laugh/admin/index.php?s=Log/AdminLoginLog" method="post" class="newform">
        <ul class="formbody">
            <li class="formblock">
                <span>管理员名称: </span>
                <input type="text" name="adminname" value="" class="input w150" />
            </li>
            <li class="formblock">
                <span>日期: </span>
                <input type="text" name="begintime" value="" onClick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})" class="input w150" />
                至
                <input type="text" name="endtime" value="" onClick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})" class="input w150" />
            </li>
            <li class="formblock bordernone bgf6">
                <input type="submit" name="subut" class="button btnblue2" value="查询" />
            </li>
        </ul>
    </form>
</div>
<div class="captitle"><h5>管理后台登陆日志 【目前共有4条日志】</h5></div>
<ul class="table_list_title">
	<li class="table_list_l table_list_l30"></li>
	<li class="table_list_l table_list_l120">管理员名称</li>
	<li class="table_list_l table_list_l150">登录IP</li>
	<li class="table_list_l table_list_l150">登录时间</li>
		<!-- <li class="table_list_l table_list_l200" accessStatus=1>操作</li> -->
	</ul>
<div class="contentTableList">
            <ul class="table_list">
		<li class="table_list_l table_list_l30 table_list_no">1</li>
		<li class="table_list_l table_list_l120">admin</li>
		<li class="table_list_l table_list_l150"></li>
    	<li class="table_list_l table_list_l150">2013-11-24 17:44:19</li>
    	    	<!-- <li class="table_list_l table_list_l200" accessStatus=1>
    		<a delurl="/laugh/admin/index.php?s=Log/AdminLoginLogDelete&logid=4" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li> -->
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l30 table_list_no">1</li>
		<li class="table_list_l table_list_l120">admin</li>
		<li class="table_list_l table_list_l150"></li>
    	<li class="table_list_l table_list_l150">2013-10-20 20:20:02</li>
    	    	<!-- <li class="table_list_l table_list_l200" accessStatus=1>
    		<a delurl="/laugh/admin/index.php?s=Log/AdminLoginLogDelete&logid=3" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li> -->
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l30 table_list_no">1</li>
		<li class="table_list_l table_list_l120">admin</li>
		<li class="table_list_l table_list_l150"></li>
    	<li class="table_list_l table_list_l150">2013-10-20 09:51:45</li>
    	    	<!-- <li class="table_list_l table_list_l200" accessStatus=1>
    		<a delurl="/laugh/admin/index.php?s=Log/AdminLoginLogDelete&logid=2" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li> -->
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l30 table_list_no">1</li>
		<li class="table_list_l table_list_l120">admin</li>
		<li class="table_list_l table_list_l150"></li>
    	<li class="table_list_l table_list_l150">2013-10-16 14:56:38</li>
    	    	<!-- <li class="table_list_l table_list_l200" accessStatus=1>
    		<a delurl="/laugh/admin/index.php?s=Log/AdminLoginLogDelete&logid=1" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li> -->
    	    </ul>
        </div>

<script src="public/plugin/My97DatePicker/WdatePicker.js" type="text/javascript"></script>
    </div>
</div>
</body>
<script type="text/javascript" src="themes/blue/js/jquery.corner.js"></script>
<script type="text/javascript" src="themes/blue/js/public.js"></script>
<script type="text/javascript" src="themes/blue/js/common.js"></script>
<script type="text/javascript" src="themes/blue/js/ajax.js"></script>
<script type="text/javascript" src="public/js/jquery.idTabs.min.js"></script>
</html>