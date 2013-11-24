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
<div class="captitle"><h5>节点列表 【节点数53】</h5></div>
<ul class="table_list_title">
	<li class="table_list_l table_list_l150">名称</li>
	<li class="table_list_l table_list_l200">描述</li>
	<li class="table_list_l table_list_l100">Control</li>
	<li class="table_list_l table_list_l120">Action</li>
	<li class="table_list_l table_list_l150">创建时间</li>
	<li class="table_list_l table_list_l80">是/否显示</li>
		<li class="table_list_l table_list_l100" accessStatus=1>操作</li>
	</ul>
<div class="contentTableList">
            <ul class="table_list">
		<li class="table_list_l table_list_l150">角色管理</li>
		<li class="table_list_l table_list_l200" tooltip=1 title="管理角色信息 可编辑角色权限/改变用户的角色">管理角色信息 可编辑角色权限/改变用户的角色</li>
    	<li class="table_list_l table_list_l100"></li>
    	<li class="table_list_l table_list_l120"></li>
    	<li class="table_list_l table_list_l150"></li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a name="colorboxEdit" href="/laugh/admin/index.php?s=Node/NodeEdit&id=1">修改</a>
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=1" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
    <div class="cnodelist">
    	    	    	<ul class="table_list">
			<li class="table_list_l table_list_l150" style="text-indent:13px;">添加角色</li>
			<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
	    	<li class="table_list_l table_list_l100">Role</li>
	    	<li class="table_list_l table_list_l120">newRole</li>
	    	<li class="table_list_l table_list_l150"></li>
	    	<li class="table_list_l table_list_l80">显</li>
	    		    	<li class="table_list_l table_list_l100" accessStatus=1>
	    		<a name="colorboxEdit" href="/laugh/admin/index.php?s=Node/NodeEdit&id=2">修改</a>
	    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=2" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
	    	</li>
	    		    </ul>
	        	<ul class="table_list">
			<li class="table_list_l table_list_l150" style="text-indent:13px;">管理角色</li>
			<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
	    	<li class="table_list_l table_list_l100">Role</li>
	    	<li class="table_list_l table_list_l120">manageRole</li>
	    	<li class="table_list_l table_list_l150"></li>
	    	<li class="table_list_l table_list_l80">显</li>
	    		    	<li class="table_list_l table_list_l100" accessStatus=1>
	    		<a name="colorboxEdit" href="/laugh/admin/index.php?s=Node/NodeEdit&id=3">修改</a>
	    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=3" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
	    	</li>
	    		    </ul>
	        	    </div>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">日志管理</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100"></li>
    	<li class="table_list_l table_list_l120"></li>
    	<li class="table_list_l table_list_l150"></li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a name="colorboxEdit" href="/laugh/admin/index.php?s=Node/NodeEdit&id=4">修改</a>
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=4" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
    <div class="cnodelist">
    	    	    	<ul class="table_list">
			<li class="table_list_l table_list_l150" style="text-indent:13px;">管理员登录日志</li>
			<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
	    	<li class="table_list_l table_list_l100">Log</li>
	    	<li class="table_list_l table_list_l120">AdminLoginLog</li>
	    	<li class="table_list_l table_list_l150"></li>
	    	<li class="table_list_l table_list_l80">显</li>
	    		    	<li class="table_list_l table_list_l100" accessStatus=1>
	    		<a name="colorboxEdit" href="/laugh/admin/index.php?s=Node/NodeEdit&id=5">修改</a>
	    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=5" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
	    	</li>
	    		    </ul>
	        	    </div>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">组管理</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100"></li>
    	<li class="table_list_l table_list_l120"></li>
    	<li class="table_list_l table_list_l150"></li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a name="colorboxEdit" href="/laugh/admin/index.php?s=Node/NodeEdit&id=6">修改</a>
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=6" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
    <div class="cnodelist">
    	    	    	<ul class="table_list">
			<li class="table_list_l table_list_l150" style="text-indent:13px;">管理组</li>
			<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
	    	<li class="table_list_l table_list_l100">Group</li>
	    	<li class="table_list_l table_list_l120">manageGroup</li>
	    	<li class="table_list_l table_list_l150"></li>
	    	<li class="table_list_l table_list_l80">显</li>
	    		    	<li class="table_list_l table_list_l100" accessStatus=1>
	    		<a name="colorboxEdit" href="/laugh/admin/index.php?s=Node/NodeEdit&id=7">修改</a>
	    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=7" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
	    	</li>
	    		    </ul>
	        	    </div>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">节点管理</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100"></li>
    	<li class="table_list_l table_list_l120"></li>
    	<li class="table_list_l table_list_l150"></li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a name="colorboxEdit" href="/laugh/admin/index.php?s=Node/NodeEdit&id=8">修改</a>
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=8" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
    <div class="cnodelist">
    	    	    	<ul class="table_list">
			<li class="table_list_l table_list_l150" style="text-indent:13px;">添加节点</li>
			<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
	    	<li class="table_list_l table_list_l100">Node</li>
	    	<li class="table_list_l table_list_l120">newNode</li>
	    	<li class="table_list_l table_list_l150">2012-11-12 17:14:10</li>
	    	<li class="table_list_l table_list_l80">显</li>
	    		    	<li class="table_list_l table_list_l100" accessStatus=1>
	    		<a name="colorboxEdit" href="/laugh/admin/index.php?s=Node/NodeEdit&id=9">修改</a>
	    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=9" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
	    	</li>
	    		    </ul>
	        	<ul class="table_list">
			<li class="table_list_l table_list_l150" style="text-indent:13px;">管理节点</li>
			<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
	    	<li class="table_list_l table_list_l100">Node</li>
	    	<li class="table_list_l table_list_l120">manageNode</li>
	    	<li class="table_list_l table_list_l150">2012-11-14 09:23:34</li>
	    	<li class="table_list_l table_list_l80">显</li>
	    		    	<li class="table_list_l table_list_l100" accessStatus=1>
	    		<a name="colorboxEdit" href="/laugh/admin/index.php?s=Node/NodeEdit&id=10">修改</a>
	    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=10" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
	    	</li>
	    		    </ul>
	        	    </div>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">管理员用户管理</li>
		<li class="table_list_l table_list_l200" tooltip=1 title="管理员账号管理中心">管理员账号管理中心</li>
    	<li class="table_list_l table_list_l100"></li>
    	<li class="table_list_l table_list_l120"></li>
    	<li class="table_list_l table_list_l150">2012-11-14 09:23:58</li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a name="colorboxEdit" href="/laugh/admin/index.php?s=Node/NodeEdit&id=11">修改</a>
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=11" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
    <div class="cnodelist">
    	    	    	<ul class="table_list">
			<li class="table_list_l table_list_l150" style="text-indent:13px;">新管理员</li>
			<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
	    	<li class="table_list_l table_list_l100">Admin</li>
	    	<li class="table_list_l table_list_l120">newAdmin</li>
	    	<li class="table_list_l table_list_l150">2012-11-14 09:45:54</li>
	    	<li class="table_list_l table_list_l80">显</li>
	    		    	<li class="table_list_l table_list_l100" accessStatus=1>
	    		<a name="colorboxEdit" href="/laugh/admin/index.php?s=Node/NodeEdit&id=12">修改</a>
	    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=12" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
	    	</li>
	    		    </ul>
	        	<ul class="table_list">
			<li class="table_list_l table_list_l150" style="text-indent:13px;">管理员列表</li>
			<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
	    	<li class="table_list_l table_list_l100">Admin</li>
	    	<li class="table_list_l table_list_l120">adminList</li>
	    	<li class="table_list_l table_list_l150">2012-11-14 10:08:34</li>
	    	<li class="table_list_l table_list_l80">显</li>
	    		    	<li class="table_list_l table_list_l100" accessStatus=1>
	    		<a name="colorboxEdit" href="/laugh/admin/index.php?s=Node/NodeEdit&id=13">修改</a>
	    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=13" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
	    	</li>
	    		    </ul>
	        	    </div>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">会员管理</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100"></li>
    	<li class="table_list_l table_list_l120"></li>
    	<li class="table_list_l table_list_l150">2012-11-15 09:51:11</li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a name="colorboxEdit" href="/laugh/admin/index.php?s=Node/NodeEdit&id=14">修改</a>
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=14" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
    <div class="cnodelist">
    	    	    	<ul class="table_list">
			<li class="table_list_l table_list_l150" style="text-indent:13px;">会员列表</li>
			<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
	    	<li class="table_list_l table_list_l100">User</li>
	    	<li class="table_list_l table_list_l120">userList</li>
	    	<li class="table_list_l table_list_l150">2012-11-19 16:18:33</li>
	    	<li class="table_list_l table_list_l80">显</li>
	    		    	<li class="table_list_l table_list_l100" accessStatus=1>
	    		<a name="colorboxEdit" href="/laugh/admin/index.php?s=Node/NodeEdit&id=15">修改</a>
	    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=15" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
	    	</li>
	    		    </ul>
	        	<ul class="table_list">
			<li class="table_list_l table_list_l150" style="text-indent:13px;">会员级别</li>
			<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
	    	<li class="table_list_l table_list_l100">User</li>
	    	<li class="table_list_l table_list_l120">userRank</li>
	    	<li class="table_list_l table_list_l150">2012-11-19 16:19:46</li>
	    	<li class="table_list_l table_list_l80">显</li>
	    		    	<li class="table_list_l table_list_l100" accessStatus=1>
	    		<a name="colorboxEdit" href="/laugh/admin/index.php?s=Node/NodeEdit&id=16">修改</a>
	    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=16" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
	    	</li>
	    		    </ul>
	        	    </div>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">栏目管理</li>
		<li class="table_list_l table_list_l200" tooltip=1 title="管理网站栏目">管理网站栏目</li>
    	<li class="table_list_l table_list_l100"></li>
    	<li class="table_list_l table_list_l120"></li>
    	<li class="table_list_l table_list_l150">2012-11-19 17:08:57</li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a name="colorboxEdit" href="/laugh/admin/index.php?s=Node/NodeEdit&id=17">修改</a>
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=17" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
    <div class="cnodelist">
    	    	    	<ul class="table_list">
			<li class="table_list_l table_list_l150" style="text-indent:13px;">添加栏目</li>
			<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
	    	<li class="table_list_l table_list_l100">Column</li>
	    	<li class="table_list_l table_list_l120">newColumn</li>
	    	<li class="table_list_l table_list_l150">2012-11-19 17:10:12</li>
	    	<li class="table_list_l table_list_l80">显</li>
	    		    	<li class="table_list_l table_list_l100" accessStatus=1>
	    		<a name="colorboxEdit" href="/laugh/admin/index.php?s=Node/NodeEdit&id=18">修改</a>
	    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=18" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
	    	</li>
	    		    </ul>
	        	<ul class="table_list">
			<li class="table_list_l table_list_l150" style="text-indent:13px;">网站栏目</li>
			<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
	    	<li class="table_list_l table_list_l100">Column</li>
	    	<li class="table_list_l table_list_l120">index</li>
	    	<li class="table_list_l table_list_l150">2012-11-19 17:12:49</li>
	    	<li class="table_list_l table_list_l80">显</li>
	    		    	<li class="table_list_l table_list_l100" accessStatus=1>
	    		<a name="colorboxEdit" href="/laugh/admin/index.php?s=Node/NodeEdit&id=19">修改</a>
	    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=19" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
	    	</li>
	    		    </ul>
	        	    </div>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">内容管理</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100"></li>
    	<li class="table_list_l table_list_l120"></li>
    	<li class="table_list_l table_list_l150">2012-11-19 17:13:35</li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a name="colorboxEdit" href="/laugh/admin/index.php?s=Node/NodeEdit&id=20">修改</a>
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=20" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
    <div class="cnodelist">
    	    	    	<ul class="table_list">
			<li class="table_list_l table_list_l150" style="text-indent:13px;">文章管理</li>
			<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
	    	<li class="table_list_l table_list_l100">Article</li>
	    	<li class="table_list_l table_list_l120">index</li>
	    	<li class="table_list_l table_list_l150">2012-11-19 17:14:34</li>
	    	<li class="table_list_l table_list_l80">显</li>
	    		    	<li class="table_list_l table_list_l100" accessStatus=1>
	    		<a name="colorboxEdit" href="/laugh/admin/index.php?s=Node/NodeEdit&id=21">修改</a>
	    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=21" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
	    	</li>
	    		    </ul>
	        	<ul class="table_list">
			<li class="table_list_l table_list_l150" style="text-indent:13px;">产品管理</li>
			<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
	    	<li class="table_list_l table_list_l100">Product</li>
	    	<li class="table_list_l table_list_l120">index</li>
	    	<li class="table_list_l table_list_l150">2012-11-19 17:15:54</li>
	    	<li class="table_list_l table_list_l80">显</li>
	    		    	<li class="table_list_l table_list_l100" accessStatus=1>
	    		<a name="colorboxEdit" href="/laugh/admin/index.php?s=Node/NodeEdit&id=22">修改</a>
	    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=22" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
	    	</li>
	    		    </ul>
	        	<ul class="table_list">
			<li class="table_list_l table_list_l150" style="text-indent:13px;">图集管理</li>
			<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
	    	<li class="table_list_l table_list_l100">Image</li>
	    	<li class="table_list_l table_list_l120">index</li>
	    	<li class="table_list_l table_list_l150">2012-11-19 17:16:37</li>
	    	<li class="table_list_l table_list_l80">显</li>
	    		    	<li class="table_list_l table_list_l100" accessStatus=1>
	    		<a name="colorboxEdit" href="/laugh/admin/index.php?s=Node/NodeEdit&id=23">修改</a>
	    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=23" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
	    	</li>
	    		    </ul>
	        	<ul class="table_list">
			<li class="table_list_l table_list_l150" style="text-indent:13px;">下载管理</li>
			<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
	    	<li class="table_list_l table_list_l100">Download</li>
	    	<li class="table_list_l table_list_l120">index</li>
	    	<li class="table_list_l table_list_l150">2013-04-10 10:57:21</li>
	    	<li class="table_list_l table_list_l80">显</li>
	    		    	<li class="table_list_l table_list_l100" accessStatus=1>
	    		<a name="colorboxEdit" href="/laugh/admin/index.php?s=Node/NodeEdit&id=47">修改</a>
	    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=47" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
	    	</li>
	    		    </ul>
	        	<ul class="table_list">
			<li class="table_list_l table_list_l150" style="text-indent:13px;">专题管理</li>
			<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
	    	<li class="table_list_l table_list_l100">Topic</li>
	    	<li class="table_list_l table_list_l120">index</li>
	    	<li class="table_list_l table_list_l150">2013-04-10 11:02:44</li>
	    	<li class="table_list_l table_list_l80">显</li>
	    		    	<li class="table_list_l table_list_l100" accessStatus=1>
	    		<a name="colorboxEdit" href="/laugh/admin/index.php?s=Node/NodeEdit&id=49">修改</a>
	    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=49" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
	    	</li>
	    		    </ul>
	        	<ul class="table_list">
			<li class="table_list_l table_list_l150" style="text-indent:13px;">软件管理</li>
			<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
	    	<li class="table_list_l table_list_l100">Soft</li>
	    	<li class="table_list_l table_list_l120">index</li>
	    	<li class="table_list_l table_list_l150">2013-04-10 11:04:03</li>
	    	<li class="table_list_l table_list_l80">显</li>
	    		    	<li class="table_list_l table_list_l100" accessStatus=1>
	    		<a name="colorboxEdit" href="/laugh/admin/index.php?s=Node/NodeEdit&id=50">修改</a>
	    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=50" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
	    	</li>
	    		    </ul>
	        	    </div>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">模型管理</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100"></li>
    	<li class="table_list_l table_list_l120"></li>
    	<li class="table_list_l table_list_l150">2012-11-19 17:17:02</li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a name="colorboxEdit" href="/laugh/admin/index.php?s=Node/NodeEdit&id=24">修改</a>
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=24" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
    <div class="cnodelist">
    	    	    	<ul class="table_list">
			<li class="table_list_l table_list_l150" style="text-indent:13px;">单页模型</li>
			<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
	    	<li class="table_list_l table_list_l100">CTModel</li>
	    	<li class="table_list_l table_list_l120">singlePage</li>
	    	<li class="table_list_l table_list_l150">2012-11-19 17:18:56</li>
	    	<li class="table_list_l table_list_l80">显</li>
	    		    	<li class="table_list_l table_list_l100" accessStatus=1>
	    		<a name="colorboxEdit" href="/laugh/admin/index.php?s=Node/NodeEdit&id=25">修改</a>
	    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=25" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
	    	</li>
	    		    </ul>
	        	<ul class="table_list">
			<li class="table_list_l table_list_l150" style="text-indent:13px;">内容模型</li>
			<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
	    	<li class="table_list_l table_list_l100">CTModel</li>
	    	<li class="table_list_l table_list_l120">ColumnModel</li>
	    	<li class="table_list_l table_list_l150">2012-12-19 14:21:57</li>
	    	<li class="table_list_l table_list_l80">显</li>
	    		    	<li class="table_list_l table_list_l100" accessStatus=1>
	    		<a name="colorboxEdit" href="/laugh/admin/index.php?s=Node/NodeEdit&id=26">修改</a>
	    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=26" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
	    	</li>
	    		    </ul>
	        	    </div>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">自动更新</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100"></li>
    	<li class="table_list_l table_list_l120"></li>
    	<li class="table_list_l table_list_l150">2012-12-26 15:31:48</li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a name="colorboxEdit" href="/laugh/admin/index.php?s=Node/NodeEdit&id=27">修改</a>
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=27" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
    <div class="cnodelist">
    	    	    	<ul class="table_list">
			<li class="table_list_l table_list_l150" style="text-indent:13px;">一键更新网站</li>
			<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
	    	<li class="table_list_l table_list_l100">Cache</li>
	    	<li class="table_list_l table_list_l120">updateAll</li>
	    	<li class="table_list_l table_list_l150">2013-01-09 17:03:02</li>
	    	<li class="table_list_l table_list_l80">显</li>
	    		    	<li class="table_list_l table_list_l100" accessStatus=1>
	    		<a name="colorboxEdit" href="/laugh/admin/index.php?s=Node/NodeEdit&id=28">修改</a>
	    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=28" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
	    	</li>
	    		    </ul>
	        	<ul class="table_list">
			<li class="table_list_l table_list_l150" style="text-indent:13px;">更新系统缓存</li>
			<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
	    	<li class="table_list_l table_list_l100">Cache</li>
	    	<li class="table_list_l table_list_l120">systemCache</li>
	    	<li class="table_list_l table_list_l150">2013-01-24 11:14:19</li>
	    	<li class="table_list_l table_list_l80">显</li>
	    		    	<li class="table_list_l table_list_l100" accessStatus=1>
	    		<a name="colorboxEdit" href="/laugh/admin/index.php?s=Node/NodeEdit&id=29">修改</a>
	    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=29" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
	    	</li>
	    		    </ul>
	        	    </div>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">常规插件</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100"></li>
    	<li class="table_list_l table_list_l120"></li>
    	<li class="table_list_l table_list_l150">2013-01-24 11:45:25</li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a name="colorboxEdit" href="/laugh/admin/index.php?s=Node/NodeEdit&id=30">修改</a>
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=30" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
    <div class="cnodelist">
    	    	    	<ul class="table_list">
			<li class="table_list_l table_list_l150" style="text-indent:13px;">留言板</li>
			<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
	    	<li class="table_list_l table_list_l100">Plugin</li>
	    	<li class="table_list_l table_list_l120">messageList</li>
	    	<li class="table_list_l table_list_l150">2013-01-24 11:47:52</li>
	    	<li class="table_list_l table_list_l80">显</li>
	    		    	<li class="table_list_l table_list_l100" accessStatus=1>
	    		<a name="colorboxEdit" href="/laugh/admin/index.php?s=Node/NodeEdit&id=31">修改</a>
	    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=31" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
	    	</li>
	    		    </ul>
	        	<ul class="table_list">
			<li class="table_list_l table_list_l150" style="text-indent:13px;">人才招聘</li>
			<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
	    	<li class="table_list_l table_list_l100">Plugin</li>
	    	<li class="table_list_l table_list_l120">CooperateIndex</li>
	    	<li class="table_list_l table_list_l150">2013-01-24 14:59:08</li>
	    	<li class="table_list_l table_list_l80">显</li>
	    		    	<li class="table_list_l table_list_l100" accessStatus=1>
	    		<a name="colorboxEdit" href="/laugh/admin/index.php?s=Node/NodeEdit&id=32">修改</a>
	    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=32" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
	    	</li>
	    		    </ul>
	        	<ul class="table_list">
			<li class="table_list_l table_list_l150" style="text-indent:13px;">友情链接</li>
			<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
	    	<li class="table_list_l table_list_l100">Plugin</li>
	    	<li class="table_list_l table_list_l120">FlinkIndex</li>
	    	<li class="table_list_l table_list_l150">2013-01-24 14:59:51</li>
	    	<li class="table_list_l table_list_l80">显</li>
	    		    	<li class="table_list_l table_list_l100" accessStatus=1>
	    		<a name="colorboxEdit" href="/laugh/admin/index.php?s=Node/NodeEdit&id=33">修改</a>
	    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=33" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
	    	</li>
	    		    </ul>
	        	<ul class="table_list">
			<li class="table_list_l table_list_l150" style="text-indent:13px;">文件管理器</li>
			<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
	    	<li class="table_list_l table_list_l100">Plugin</li>
	    	<li class="table_list_l table_list_l120">fileManage</li>
	    	<li class="table_list_l table_list_l150">2013-04-10 10:59:45</li>
	    	<li class="table_list_l table_list_l80">显</li>
	    		    	<li class="table_list_l table_list_l100" accessStatus=1>
	    		<a name="colorboxEdit" href="/laugh/admin/index.php?s=Node/NodeEdit&id=48">修改</a>
	    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=48" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
	    	</li>
	    		    </ul>
	        	    </div>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">基本设置</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100"></li>
    	<li class="table_list_l table_list_l120"></li>
    	<li class="table_list_l table_list_l150">2013-01-24 15:05:53</li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a name="colorboxEdit" href="/laugh/admin/index.php?s=Node/NodeEdit&id=34">修改</a>
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=34" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
    <div class="cnodelist">
    	    	    	<ul class="table_list">
			<li class="table_list_l table_list_l150" style="text-indent:13px;">系统基本参数</li>
			<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
	    	<li class="table_list_l table_list_l100">System</li>
	    	<li class="table_list_l table_list_l120">systemInfo</li>
	    	<li class="table_list_l table_list_l150">2013-01-24 15:06:17</li>
	    	<li class="table_list_l table_list_l80">显</li>
	    		    	<li class="table_list_l table_list_l100" accessStatus=1>
	    		<a name="colorboxEdit" href="/laugh/admin/index.php?s=Node/NodeEdit&id=35">修改</a>
	    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=35" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
	    	</li>
	    		    </ul>
	        	<ul class="table_list">
			<li class="table_list_l table_list_l150" style="text-indent:13px;">系统日志管理</li>
			<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
	    	<li class="table_list_l table_list_l100">System</li>
	    	<li class="table_list_l table_list_l120">sysLog</li>
	    	<li class="table_list_l table_list_l150">2013-01-24 15:07:00</li>
	    	<li class="table_list_l table_list_l80">显</li>
	    		    	<li class="table_list_l table_list_l100" accessStatus=1>
	    		<a name="colorboxEdit" href="/laugh/admin/index.php?s=Node/NodeEdit&id=36">修改</a>
	    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=36" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
	    	</li>
	    		    </ul>
	        	<ul class="table_list">
			<li class="table_list_l table_list_l150" style="text-indent:13px;">图片水印设置</li>
			<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
	    	<li class="table_list_l table_list_l100">System</li>
	    	<li class="table_list_l table_list_l120">imageMark</li>
	    	<li class="table_list_l table_list_l150">2013-01-24 15:08:14</li>
	    	<li class="table_list_l table_list_l80">显</li>
	    		    	<li class="table_list_l table_list_l100" accessStatus=1>
	    		<a name="colorboxEdit" href="/laugh/admin/index.php?s=Node/NodeEdit&id=37">修改</a>
	    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=37" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
	    	</li>
	    		    </ul>
	        	    </div>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">数据库管理</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100"></li>
    	<li class="table_list_l table_list_l120"></li>
    	<li class="table_list_l table_list_l150">2013-01-24 15:09:09</li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a name="colorboxEdit" href="/laugh/admin/index.php?s=Node/NodeEdit&id=38">修改</a>
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=38" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
    <div class="cnodelist">
    	    	    	<ul class="table_list">
			<li class="table_list_l table_list_l150" style="text-indent:13px;">数据库备份</li>
			<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
	    	<li class="table_list_l table_list_l100">DataBase</li>
	    	<li class="table_list_l table_list_l120">BackUp</li>
	    	<li class="table_list_l table_list_l150">2013-01-24 15:10:10</li>
	    	<li class="table_list_l table_list_l80">显</li>
	    		    	<li class="table_list_l table_list_l100" accessStatus=1>
	    		<a name="colorboxEdit" href="/laugh/admin/index.php?s=Node/NodeEdit&id=39">修改</a>
	    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=39" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
	    	</li>
	    		    </ul>
	        	<ul class="table_list">
			<li class="table_list_l table_list_l150" style="text-indent:13px;">数据库</li>
			<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
	    	<li class="table_list_l table_list_l100">DataBase</li>
	    	<li class="table_list_l table_list_l120"></li>
	    	<li class="table_list_l table_list_l150">2013-01-24 16:26:39</li>
	    	<li class="table_list_l table_list_l80">隐</li>
	    		    	<li class="table_list_l table_list_l100" accessStatus=1>
	    		<a name="colorboxEdit" href="/laugh/admin/index.php?s=Node/NodeEdit&id=40">修改</a>
	    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=40" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
	    	</li>
	    		    </ul>
	        	<ul class="table_list">
			<li class="table_list_l table_list_l150" style="text-indent:13px;">SQL命令行工具</li>
			<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
	    	<li class="table_list_l table_list_l100">DataBase</li>
	    	<li class="table_list_l table_list_l120">SQLClient</li>
	    	<li class="table_list_l table_list_l150">2013-01-24 16:26:58</li>
	    	<li class="table_list_l table_list_l80">显</li>
	    		    	<li class="table_list_l table_list_l100" accessStatus=1>
	    		<a name="colorboxEdit" href="/laugh/admin/index.php?s=Node/NodeEdit&id=41">修改</a>
	    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=41" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
	    	</li>
	    		    </ul>
	        	    </div>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">广告管理</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100"></li>
    	<li class="table_list_l table_list_l120"></li>
    	<li class="table_list_l table_list_l150">2013-03-26 10:12:18</li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a name="colorboxEdit" href="/laugh/admin/index.php?s=Node/NodeEdit&id=42">修改</a>
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=42" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
    <div class="cnodelist">
    	    	    	<ul class="table_list">
			<li class="table_list_l table_list_l150" style="text-indent:13px;">首页中部banner</li>
			<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
	    	<li class="table_list_l table_list_l100">Advertise</li>
	    	<li class="table_list_l table_list_l120">HomeCenterAd</li>
	    	<li class="table_list_l table_list_l150">2013-03-26 10:13:05</li>
	    	<li class="table_list_l table_list_l80">显</li>
	    		    	<li class="table_list_l table_list_l100" accessStatus=1>
	    		<a name="colorboxEdit" href="/laugh/admin/index.php?s=Node/NodeEdit&id=43">修改</a>
	    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=43" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
	    	</li>
	    		    </ul>
	        	<ul class="table_list">
			<li class="table_list_l table_list_l150" style="text-indent:13px;">栏目顶部广告</li>
			<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
	    	<li class="table_list_l table_list_l100">Advertise</li>
	    	<li class="table_list_l table_list_l120">TopAd</li>
	    	<li class="table_list_l table_list_l150">2013-03-26 10:16:39</li>
	    	<li class="table_list_l table_list_l80">显</li>
	    		    	<li class="table_list_l table_list_l100" accessStatus=1>
	    		<a name="colorboxEdit" href="/laugh/admin/index.php?s=Node/NodeEdit&id=44">修改</a>
	    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=44" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
	    	</li>
	    		    </ul>
	        	    </div>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">图片管理</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100"></li>
    	<li class="table_list_l table_list_l120"></li>
    	<li class="table_list_l table_list_l150">2013-03-26 10:46:32</li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a name="colorboxEdit" href="/laugh/admin/index.php?s=Node/NodeEdit&id=45">修改</a>
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=45" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
    <div class="cnodelist">
    	    	    	<ul class="table_list">
			<li class="table_list_l table_list_l150" style="text-indent:13px;">首页轮播图片</li>
			<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
	    	<li class="table_list_l table_list_l100">Image</li>
	    	<li class="table_list_l table_list_l120">HomeScrollImage</li>
	    	<li class="table_list_l table_list_l150">2013-03-26 10:49:33</li>
	    	<li class="table_list_l table_list_l80">显</li>
	    		    	<li class="table_list_l table_list_l100" accessStatus=1>
	    		<a name="colorboxEdit" href="/laugh/admin/index.php?s=Node/NodeEdit&id=46">修改</a>
	    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=46" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
	    	</li>
	    		    </ul>
	        	    </div>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">导航管理</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100">Plugin</li>
    	<li class="table_list_l table_list_l120"></li>
    	<li class="table_list_l table_list_l150">2013-05-16 10:06:25</li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a name="colorboxEdit" href="/laugh/admin/index.php?s=Node/NodeEdit&id=51">修改</a>
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=51" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
    <div class="cnodelist">
    	    	    	<ul class="table_list">
			<li class="table_list_l table_list_l150" style="text-indent:13px;">底部导航</li>
			<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
	    	<li class="table_list_l table_list_l100">Plugin</li>
	    	<li class="table_list_l table_list_l120">footNavigation</li>
	    	<li class="table_list_l table_list_l150">2013-05-16 10:07:15</li>
	    	<li class="table_list_l table_list_l80">显</li>
	    		    	<li class="table_list_l table_list_l100" accessStatus=1>
	    		<a name="colorboxEdit" href="/laugh/admin/index.php?s=Node/NodeEdit&id=52">修改</a>
	    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=52" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
	    	</li>
	    		    </ul>
	        	<ul class="table_list">
			<li class="table_list_l table_list_l150" style="text-indent:13px;">快捷导航</li>
			<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
	    	<li class="table_list_l table_list_l100">Plugin</li>
	    	<li class="table_list_l table_list_l120">sideNavigation</li>
	    	<li class="table_list_l table_list_l150">2013-05-16 10:08:08</li>
	    	<li class="table_list_l table_list_l80">显</li>
	    		    	<li class="table_list_l table_list_l100" accessStatus=1>
	    		<a name="colorboxEdit" href="/laugh/admin/index.php?s=Node/NodeEdit&id=53">修改</a>
	    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=53" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
	    	</li>
	    		    </ul>
	        	    </div>
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