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
<div class="captitle"><h5>节点列表 【目前共有53条数据】</h5></div>
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
    		<a href="javascript:;" name="modify" id="1" title="角色管理" remark="管理角色信息 可编辑角色权限/改变用户的角色" groupid="1" pid="0" control="" action="" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=1" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">添加角色</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100">Role</li>
    	<li class="table_list_l table_list_l120">newRole</li>
    	<li class="table_list_l table_list_l150"></li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="javascript:;" name="modify" id="2" title="添加角色" remark="" groupid="1" pid="1" control="Role" action="newRole" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=2" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">管理角色</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100">Role</li>
    	<li class="table_list_l table_list_l120">manageRole</li>
    	<li class="table_list_l table_list_l150"></li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="javascript:;" name="modify" id="3" title="管理角色" remark="" groupid="1" pid="1" control="Role" action="manageRole" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=3" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">日志管理</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100"></li>
    	<li class="table_list_l table_list_l120"></li>
    	<li class="table_list_l table_list_l150"></li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="javascript:;" name="modify" id="4" title="日志管理" remark="" groupid="1" pid="0" control="" action="" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=4" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">日志列表</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100">Log</li>
    	<li class="table_list_l table_list_l120">Index</li>
    	<li class="table_list_l table_list_l150"></li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="javascript:;" name="modify" id="5" title="日志列表" remark="" groupid="1" pid="4" control="Log" action="Index" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=5" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">组管理</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100"></li>
    	<li class="table_list_l table_list_l120"></li>
    	<li class="table_list_l table_list_l150"></li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="javascript:;" name="modify" id="6" title="组管理" remark="" groupid="1" pid="0" control="" action="" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=6" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">管理组</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100">Group</li>
    	<li class="table_list_l table_list_l120">manageGroup</li>
    	<li class="table_list_l table_list_l150"></li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="javascript:;" name="modify" id="7" title="管理组" remark="" groupid="1" pid="6" control="Group" action="manageGroup" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=7" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">节点管理</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100"></li>
    	<li class="table_list_l table_list_l120"></li>
    	<li class="table_list_l table_list_l150"></li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="javascript:;" name="modify" id="8" title="节点管理" remark="" groupid="1" pid="0" control="" action="" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=8" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">添加节点</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100">Node</li>
    	<li class="table_list_l table_list_l120">newNode</li>
    	<li class="table_list_l table_list_l150">2012-11-12 17:14:10</li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="javascript:;" name="modify" id="9" title="添加节点" remark="" groupid="1" pid="8" control="Node" action="newNode" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=9" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">管理节点</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100">Node</li>
    	<li class="table_list_l table_list_l120">manageNode</li>
    	<li class="table_list_l table_list_l150">2012-11-14 09:23:34</li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="javascript:;" name="modify" id="10" title="管理节点" remark="" groupid="1" pid="8" control="Node" action="manageNode" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=10" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">管理员用户管理</li>
		<li class="table_list_l table_list_l200" tooltip=1 title="管理员账号管理中心">管理员账号管理中心</li>
    	<li class="table_list_l table_list_l100"></li>
    	<li class="table_list_l table_list_l120"></li>
    	<li class="table_list_l table_list_l150">2012-11-14 09:23:58</li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="javascript:;" name="modify" id="11" title="管理员用户管理" remark="管理员账号管理中心" groupid="1" pid="0" control="" action="" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=11" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">新管理员</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100">Admin</li>
    	<li class="table_list_l table_list_l120">newAdmin</li>
    	<li class="table_list_l table_list_l150">2012-11-14 09:45:54</li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="javascript:;" name="modify" id="12" title="新管理员" remark="" groupid="1" pid="11" control="Admin" action="newAdmin" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=12" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">管理员列表</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100">Admin</li>
    	<li class="table_list_l table_list_l120">adminList</li>
    	<li class="table_list_l table_list_l150">2012-11-14 10:08:34</li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="javascript:;" name="modify" id="13" title="管理员列表" remark="" groupid="1" pid="11" control="Admin" action="adminList" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=13" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">会员管理</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100"></li>
    	<li class="table_list_l table_list_l120"></li>
    	<li class="table_list_l table_list_l150">2012-11-15 09:51:11</li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="javascript:;" name="modify" id="14" title="会员管理" remark="" groupid="2" pid="0" control="" action="" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=14" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">会员列表</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100">User</li>
    	<li class="table_list_l table_list_l120">userList</li>
    	<li class="table_list_l table_list_l150">2012-11-19 16:18:33</li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="javascript:;" name="modify" id="15" title="会员列表" remark="" groupid="2" pid="14" control="User" action="userList" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=15" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">会员级别</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100">User</li>
    	<li class="table_list_l table_list_l120">userRank</li>
    	<li class="table_list_l table_list_l150">2012-11-19 16:19:46</li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="javascript:;" name="modify" id="16" title="会员级别" remark="" groupid="2" pid="14" control="User" action="userRank" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=16" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">栏目管理</li>
		<li class="table_list_l table_list_l200" tooltip=1 title="管理网站栏目">管理网站栏目</li>
    	<li class="table_list_l table_list_l100"></li>
    	<li class="table_list_l table_list_l120"></li>
    	<li class="table_list_l table_list_l150">2012-11-19 17:08:57</li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="javascript:;" name="modify" id="17" title="栏目管理" remark="管理网站栏目" groupid="3" pid="0" control="" action="" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=17" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">添加栏目</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100">Column</li>
    	<li class="table_list_l table_list_l120">newColumn</li>
    	<li class="table_list_l table_list_l150">2012-11-19 17:10:12</li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="javascript:;" name="modify" id="18" title="添加栏目" remark="" groupid="3" pid="17" control="Column" action="newColumn" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=18" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">网站栏目</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100">Column</li>
    	<li class="table_list_l table_list_l120">index</li>
    	<li class="table_list_l table_list_l150">2012-11-19 17:12:49</li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="javascript:;" name="modify" id="19" title="网站栏目" remark="" groupid="3" pid="17" control="Column" action="index" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=19" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">内容管理</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100"></li>
    	<li class="table_list_l table_list_l120"></li>
    	<li class="table_list_l table_list_l150">2012-11-19 17:13:35</li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="javascript:;" name="modify" id="20" title="内容管理" remark="" groupid="3" pid="0" control="" action="" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=20" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">文章管理</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100">Article</li>
    	<li class="table_list_l table_list_l120">index</li>
    	<li class="table_list_l table_list_l150">2012-11-19 17:14:34</li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="javascript:;" name="modify" id="21" title="文章管理" remark="" groupid="3" pid="20" control="Article" action="index" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=21" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">产品管理</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100">Product</li>
    	<li class="table_list_l table_list_l120">index</li>
    	<li class="table_list_l table_list_l150">2012-11-19 17:15:54</li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="javascript:;" name="modify" id="22" title="产品管理" remark="" groupid="3" pid="20" control="Product" action="index" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=22" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">图集管理</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100">Image</li>
    	<li class="table_list_l table_list_l120">index</li>
    	<li class="table_list_l table_list_l150">2012-11-19 17:16:37</li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="javascript:;" name="modify" id="23" title="图集管理" remark="" groupid="3" pid="20" control="Image" action="index" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=23" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">模型管理</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100"></li>
    	<li class="table_list_l table_list_l120"></li>
    	<li class="table_list_l table_list_l150">2012-11-19 17:17:02</li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="javascript:;" name="modify" id="24" title="模型管理" remark="" groupid="3" pid="0" control="" action="" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=24" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">单页模型</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100">CTModel</li>
    	<li class="table_list_l table_list_l120">singlePage</li>
    	<li class="table_list_l table_list_l150">2012-11-19 17:18:56</li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="javascript:;" name="modify" id="25" title="单页模型" remark="" groupid="3" pid="24" control="CTModel" action="singlePage" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=25" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">内容模型</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100">CTModel</li>
    	<li class="table_list_l table_list_l120">ColumnModel</li>
    	<li class="table_list_l table_list_l150">2012-12-19 14:21:57</li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="javascript:;" name="modify" id="26" title="内容模型" remark="" groupid="3" pid="24" control="CTModel" action="ColumnModel" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=26" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">自动更新</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100"></li>
    	<li class="table_list_l table_list_l120"></li>
    	<li class="table_list_l table_list_l150">2012-12-26 15:31:48</li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="javascript:;" name="modify" id="27" title="自动更新" remark="" groupid="4" pid="0" control="" action="" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=27" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">一键更新网站</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100">Cache</li>
    	<li class="table_list_l table_list_l120">updateAll</li>
    	<li class="table_list_l table_list_l150">2013-01-09 17:03:02</li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="javascript:;" name="modify" id="28" title="一键更新网站" remark="" groupid="4" pid="27" control="Cache" action="updateAll" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=28" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">更新系统缓存</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100">Cache</li>
    	<li class="table_list_l table_list_l120">systemCache</li>
    	<li class="table_list_l table_list_l150">2013-01-24 11:14:19</li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="javascript:;" name="modify" id="29" title="更新系统缓存" remark="" groupid="4" pid="27" control="Cache" action="systemCache" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=29" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">常规插件</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100"></li>
    	<li class="table_list_l table_list_l120"></li>
    	<li class="table_list_l table_list_l150">2013-01-24 11:45:25</li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="javascript:;" name="modify" id="30" title="常规插件" remark="" groupid="5" pid="0" control="" action="" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=30" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        </div>
<div id="compage" class="pagination">
		<a class="pageprev graya fleft" href="/laugh/admin/index.php?s=Node%2FmanageNode&page=1">首页</a> 
		<a class="pageprev graya fleft" href="javascript:;">上一页</a> 
	<span class="pageList none">
									<span class="current fleft bge7" href="" style="">第 1 页</span>
								<a class="jumpPageBtn fleft" href="/laugh/admin/index.php?s=Node%2FmanageNode&page=2">第 2 页</a>
				</span>
	<a class="pagenext graya fleft" href="/laugh/admin/index.php?s=Node%2FmanageNode&page=2">下一页</a>
		<a class="pageprev graya fleft" href="/laugh/admin/index.php?s=Node%2FmanageNode&page=2">尾页</a> 
	</div>

<script>
var bindpage = function($obj){
    $obj.find('.pagecur').hover(function(){
		$obj.find('.pageList').show();
	},function(){
		$obj.find('.pageList').hide();
	})
}
if($('#compage').length>0){
    //bindpage($('#compage'));
} else if ($('#facepage').length>0) {
    //bindpage($('#facepage'));   
}
</script>


<!--弹出层-->
<div id="modify_div" class="modify_div" style="display:none;">
	<div class="modify_div_Top">
		<h5>编辑组节点信息</h5>
		<a href="javascript:;" id="modify_div_close" class="close">×</a>
	</div>
	<form id="modify_div_form" action="/laugh/admin/index.php?s=Node/upNode">
		<input name="id" value="" type="hidden" />
		<ul class="formbody">
			<li class="formblock">
				<span>组: </span>
				<select id="select" name="groupid" style="width:150px;">
					<option value="">|-组菜单</option>
										<option value="1">&nbsp;|-系统管理</option>
										<option value="2">&nbsp;|-会员中心</option>
										<option value="3">&nbsp;|-核心内容</option>
										<option value="4">&nbsp;|-网站更新</option>
										<option value="5">&nbsp;|-系统插件</option>
										<option value="6">&nbsp;|-系统设置</option>
									</select>
			</li>
			<li class="formblock">
				<span>父节点: </span>
				<select name="pid" flag="nodepid" style="width:150px;">
					<option value="">|-节点菜单</option>
				</select>
			</li>
			<li class="formblock">
				<span>名称: </span>
				<input type="text" name="title" class="input w150" />
			</li>
			<li class="formblock">
				<span>描述: </span>
				<input type="text" name="remark" class="input w150" />
			</li>
			<li class="formblock">
				<span>Control: </span>
				<input type="text" name="control" class="input w100" />
			</li>
			<li class="formblock">
				<span>Action: </span>
				<input type="text" name="action" class="input w150" />
			</li>
			<li class="formblock bordernone">
				<input type="submit" name="subut" class="button btnblue2" value="修改" />
			</li>
		</ul>
	</form>
	<div class="modify_div_Bottom"></div>
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