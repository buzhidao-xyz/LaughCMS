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
var JS_APP = '/laugh/admin';
var JS_APPM = 'http://localhost:82/laugh';
</script>
</head>

<body>
<div id="control">
	<ul class="controlTop">
		<li class="controlLeftTop"></li>
		<li class="controlRightTop"></li>
	</ul>
	<div id="controlContent">
<div class="captitle"><h5>节点列表 【目前共有27条数据】</h5></div>
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
    		<a href="javascript:;" name="modify" id="2" title="角色管理" remark="管理角色信息 可编辑角色权限/改变用户的角色" groupid="1" pid="0" control="" action="" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=2" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">日志管理</li>
		<li class="table_list_l table_list_l200" tooltip=1 title="日志模块">日志模块</li>
    	<li class="table_list_l table_list_l100"></li>
    	<li class="table_list_l table_list_l120"></li>
    	<li class="table_list_l table_list_l150"></li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="javascript:;" name="modify" id="3" title="日志管理" remark="日志模块" groupid="1" pid="0" control="" action="" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=3" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">组管理</li>
		<li class="table_list_l table_list_l200" tooltip=1 title="节点组管理">节点组管理</li>
    	<li class="table_list_l table_list_l100"></li>
    	<li class="table_list_l table_list_l120"></li>
    	<li class="table_list_l table_list_l150"></li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="javascript:;" name="modify" id="4" title="组管理" remark="节点组管理" groupid="1" pid="0" control="" action="" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=4" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">节点管理</li>
		<li class="table_list_l table_list_l200" tooltip=1 title="管理模块下的节点信息">管理模块下的节点信息</li>
    	<li class="table_list_l table_list_l100"></li>
    	<li class="table_list_l table_list_l120"></li>
    	<li class="table_list_l table_list_l150"></li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="javascript:;" name="modify" id="5" title="节点管理" remark="管理模块下的节点信息" groupid="1" pid="0" control="" action="" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=5" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">管理员用户管理</li>
		<li class="table_list_l table_list_l200" tooltip=1 title="管理员账号管理中心">管理员账号管理中心</li>
    	<li class="table_list_l table_list_l100"></li>
    	<li class="table_list_l table_list_l120"></li>
    	<li class="table_list_l table_list_l150"></li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="javascript:;" name="modify" id="6" title="管理员用户管理" remark="管理员账号管理中心" groupid="1" pid="0" control="" action="" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=6" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">用户搜索</li>
		<li class="table_list_l table_list_l200" tooltip=1 title="搜索用户信息">搜索用户信息</li>
    	<li class="table_list_l table_list_l100"></li>
    	<li class="table_list_l table_list_l120"></li>
    	<li class="table_list_l table_list_l150"></li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="javascript:;" name="modify" id="7" title="用户搜索" remark="搜索用户信息" groupid="2" pid="0" control="" action="" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=7" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
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
    		<a href="javascript:;" name="modify" id="8" title="管理组" remark="" groupid="1" pid="4" control="Group" action="manageGroup" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=8" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">添加节点</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100">Node</li>
    	<li class="table_list_l table_list_l120">newNode</li>
    	<li class="table_list_l table_list_l150"></li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="javascript:;" name="modify" id="9" title="添加节点" remark="" groupid="1" pid="5" control="Node" action="newNode" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=9" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">管理节点</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100">Node</li>
    	<li class="table_list_l table_list_l120">manageNode</li>
    	<li class="table_list_l table_list_l150">2012-11-12 17:14:10</li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="javascript:;" name="modify" id="10" title="管理节点" remark="" groupid="1" pid="5" control="Node" action="manageNode" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=10" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">添加角色</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100">Role</li>
    	<li class="table_list_l table_list_l120">newRole</li>
    	<li class="table_list_l table_list_l150">2012-11-14 09:23:34</li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="javascript:;" name="modify" id="11" title="添加角色" remark="" groupid="1" pid="2" control="Role" action="newRole" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=11" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">管理角色</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100">Role</li>
    	<li class="table_list_l table_list_l120">manageRole</li>
    	<li class="table_list_l table_list_l150">2012-11-14 09:23:58</li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="javascript:;" name="modify" id="12" title="管理角色" remark="" groupid="1" pid="2" control="Role" action="manageRole" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=12" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">日志列表</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100">Log</li>
    	<li class="table_list_l table_list_l120">Index</li>
    	<li class="table_list_l table_list_l150">2012-11-14 09:45:54</li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="javascript:;" name="modify" id="13" title="日志列表" remark="" groupid="1" pid="3" control="Log" action="Index" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=13" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">新管理员</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100">Admin</li>
    	<li class="table_list_l table_list_l120">newAdmin</li>
    	<li class="table_list_l table_list_l150">2012-11-14 10:08:34</li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="javascript:;" name="modify" id="14" title="新管理员" remark="" groupid="1" pid="6" control="Admin" action="newAdmin" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=14" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">管理员列表</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100">Admin</li>
    	<li class="table_list_l table_list_l120">adminList</li>
    	<li class="table_list_l table_list_l150">2012-11-15 09:51:11</li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="javascript:;" name="modify" id="15" title="管理员列表" remark="" groupid="1" pid="6" control="Admin" action="adminList" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=15" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">栏目管理</li>
		<li class="table_list_l table_list_l200" tooltip=1 title="管理网站栏目">管理网站栏目</li>
    	<li class="table_list_l table_list_l100"></li>
    	<li class="table_list_l table_list_l120"></li>
    	<li class="table_list_l table_list_l150">2012-11-19 16:18:33</li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="javascript:;" name="modify" id="16" title="栏目管理" remark="管理网站栏目" groupid="3" pid="0" control="" action="" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=16" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">添加栏目</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100">Column</li>
    	<li class="table_list_l table_list_l120">newColumn</li>
    	<li class="table_list_l table_list_l150">2012-11-19 16:19:46</li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="javascript:;" name="modify" id="17" title="添加栏目" remark="" groupid="3" pid="16" control="Column" action="newColumn" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=17" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">文档管理</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100"></li>
    	<li class="table_list_l table_list_l120"></li>
    	<li class="table_list_l table_list_l150">2012-11-19 17:08:57</li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="javascript:;" name="modify" id="18" title="文档管理" remark="" groupid="3" pid="0" control="" action="" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=18" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">发布新文档</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100">Article</li>
    	<li class="table_list_l table_list_l120">newArticle</li>
    	<li class="table_list_l table_list_l150">2012-11-19 17:10:12</li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="javascript:;" name="modify" id="19" title="发布新文档" remark="" groupid="3" pid="18" control="Article" action="newArticle" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=19" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">自动更新</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100"></li>
    	<li class="table_list_l table_list_l120"></li>
    	<li class="table_list_l table_list_l150">2012-11-19 17:12:49</li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="javascript:;" name="modify" id="20" title="自动更新" remark="" groupid="4" pid="0" control="" action="" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=20" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">一键更新网站</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100">Make</li>
    	<li class="table_list_l table_list_l120">makeHtml</li>
    	<li class="table_list_l table_list_l150">2012-11-19 17:13:35</li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="javascript:;" name="modify" id="21" title="一键更新网站" remark="" groupid="4" pid="20" control="Make" action="makeHtml" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=21" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">更新系统缓存</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100">System</li>
    	<li class="table_list_l table_list_l120">upSystemCache</li>
    	<li class="table_list_l table_list_l150">2012-11-19 17:14:34</li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="javascript:;" name="modify" id="22" title="更新系统缓存" remark="" groupid="4" pid="20" control="System" action="upSystemCache" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=22" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">辅助插件</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100"></li>
    	<li class="table_list_l table_list_l120"></li>
    	<li class="table_list_l table_list_l150">2012-11-19 17:17:02</li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="javascript:;" name="modify" id="23" title="辅助插件" remark="" groupid="5" pid="0" control="" action="" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=23" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">文件管理器</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100">FileManage</li>
    	<li class="table_list_l table_list_l120">index</li>
    	<li class="table_list_l table_list_l150">2012-11-19 17:18:56</li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="javascript:;" name="modify" id="24" title="文件管理器" remark="" groupid="5" pid="23" control="FileManage" action="index" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=24" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">基本设置</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100"></li>
    	<li class="table_list_l table_list_l120"></li>
    	<li class="table_list_l table_list_l150">2012-11-19 17:15:54</li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="javascript:;" name="modify" id="25" title="基本设置" remark="" groupid="6" pid="0" control="" action="" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=25" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">数据库</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100"></li>
    	<li class="table_list_l table_list_l120"></li>
    	<li class="table_list_l table_list_l150">2012-11-19 17:16:37</li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="javascript:;" name="modify" id="26" title="数据库" remark="" groupid="6" pid="0" control="" action="" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=26" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">网站栏目</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100">Column</li>
    	<li class="table_list_l table_list_l120">index</li>
    	<li class="table_list_l table_list_l150">2012-12-19 14:21:57</li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="javascript:;" name="modify" id="27" title="网站栏目" remark="" groupid="3" pid="16" control="Column" action="index" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=27" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">文档列表</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100">Article</li>
    	<li class="table_list_l table_list_l120">index</li>
    	<li class="table_list_l table_list_l150">2012-12-26 15:31:48</li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="javascript:;" name="modify" id="28" title="文档列表" remark="" groupid="3" pid="18" control="Article" action="index" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=28" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        </div>

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
										<option value="2">&nbsp;|-用户中心</option>
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
				<input type="submit" name="subut" class="button btnyellow2" value="修改" />
			</li>
		</ul>
	</form>
	<div class="modify_div_Bottom"></div>
</div>
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