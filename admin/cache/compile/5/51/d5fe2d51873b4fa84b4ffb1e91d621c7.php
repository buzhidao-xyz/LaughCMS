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
var JS_APPM = 'http://localhost:82/laugh';
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
		<li class="table_list_l table_list_l150">留言板</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100">Plugin</li>
    	<li class="table_list_l table_list_l120">messageList</li>
    	<li class="table_list_l table_list_l150">2013-01-24 11:47:52</li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="javascript:;" name="modify" id="31" title="留言板" remark="" groupid="5" pid="30" control="Plugin" action="messageList" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=31" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">人才招聘</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100">Plugin</li>
    	<li class="table_list_l table_list_l120">CooperateIndex</li>
    	<li class="table_list_l table_list_l150">2013-01-24 14:59:08</li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="javascript:;" name="modify" id="32" title="人才招聘" remark="" groupid="5" pid="30" control="Plugin" action="CooperateIndex" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=32" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">友情链接</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100">Plugin</li>
    	<li class="table_list_l table_list_l120">FlinkIndex</li>
    	<li class="table_list_l table_list_l150">2013-01-24 14:59:51</li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="javascript:;" name="modify" id="33" title="友情链接" remark="" groupid="5" pid="30" control="Plugin" action="FlinkIndex" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=33" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">基本设置</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100"></li>
    	<li class="table_list_l table_list_l120"></li>
    	<li class="table_list_l table_list_l150">2013-01-24 15:05:53</li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="javascript:;" name="modify" id="34" title="基本设置" remark="" groupid="6" pid="0" control="" action="" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=34" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">系统基本参数</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100">System</li>
    	<li class="table_list_l table_list_l120">systemInfo</li>
    	<li class="table_list_l table_list_l150">2013-01-24 15:06:17</li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="javascript:;" name="modify" id="35" title="系统基本参数" remark="" groupid="6" pid="34" control="System" action="systemInfo" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=35" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">系统日志管理</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100">System</li>
    	<li class="table_list_l table_list_l120">sysLog</li>
    	<li class="table_list_l table_list_l150">2013-01-24 15:07:00</li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="javascript:;" name="modify" id="36" title="系统日志管理" remark="" groupid="6" pid="34" control="System" action="sysLog" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=36" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">图片水印设置</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100">System</li>
    	<li class="table_list_l table_list_l120">imageMark</li>
    	<li class="table_list_l table_list_l150">2013-01-24 15:08:14</li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="javascript:;" name="modify" id="37" title="图片水印设置" remark="" groupid="6" pid="34" control="System" action="imageMark" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=37" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">数据库管理</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100"></li>
    	<li class="table_list_l table_list_l120"></li>
    	<li class="table_list_l table_list_l150">2013-01-24 15:09:09</li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="javascript:;" name="modify" id="38" title="数据库管理" remark="" groupid="6" pid="0" control="" action="" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=38" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">数据库备份</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100">DataBase</li>
    	<li class="table_list_l table_list_l120">backUp</li>
    	<li class="table_list_l table_list_l150">2013-01-24 15:10:10</li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="javascript:;" name="modify" id="39" title="数据库备份" remark="" groupid="6" pid="38" control="DataBase" action="backUp" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=39" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">数据库还原</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100">DataBase</li>
    	<li class="table_list_l table_list_l120">restore</li>
    	<li class="table_list_l table_list_l150">2013-01-24 16:26:39</li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="javascript:;" name="modify" id="40" title="数据库还原" remark="" groupid="6" pid="38" control="DataBase" action="restore" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=40" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">SQL命令行工具</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100">DataBase</li>
    	<li class="table_list_l table_list_l120">SQLClient</li>
    	<li class="table_list_l table_list_l150">2013-01-24 16:26:58</li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="javascript:;" name="modify" id="41" title="SQL命令行工具" remark="" groupid="6" pid="38" control="DataBase" action="SQLClient" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=41" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">广告管理</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100"></li>
    	<li class="table_list_l table_list_l120"></li>
    	<li class="table_list_l table_list_l150">2013-03-26 10:12:18</li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="javascript:;" name="modify" id="42" title="广告管理" remark="" groupid="5" pid="0" control="" action="" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=42" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">首页中部banner</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100">Advertise</li>
    	<li class="table_list_l table_list_l120">HomeCenterAd</li>
    	<li class="table_list_l table_list_l150">2013-03-26 10:13:05</li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="javascript:;" name="modify" id="43" title="首页中部banner" remark="" groupid="5" pid="42" control="Advertise" action="HomeCenterAd" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=43" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">栏目顶部广告</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100">Advertise</li>
    	<li class="table_list_l table_list_l120">TopAd</li>
    	<li class="table_list_l table_list_l150">2013-03-26 10:16:39</li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="javascript:;" name="modify" id="44" title="栏目顶部广告" remark="" groupid="5" pid="42" control="Advertise" action="TopAd" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=44" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">图片管理</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100"></li>
    	<li class="table_list_l table_list_l120"></li>
    	<li class="table_list_l table_list_l150">2013-03-26 10:46:32</li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="javascript:;" name="modify" id="45" title="图片管理" remark="" groupid="3" pid="0" control="" action="" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=45" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">首页轮播图片</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100">Image</li>
    	<li class="table_list_l table_list_l120">HomeScrollImage</li>
    	<li class="table_list_l table_list_l150">2013-03-26 10:49:33</li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="javascript:;" name="modify" id="46" title="首页轮播图片" remark="" groupid="3" pid="45" control="Image" action="HomeScrollImage" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=46" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">下载管理</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100">Download</li>
    	<li class="table_list_l table_list_l120">index</li>
    	<li class="table_list_l table_list_l150">2013-04-10 10:57:21</li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="javascript:;" name="modify" id="47" title="下载管理" remark="" groupid="3" pid="20" control="Download" action="index" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=47" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">文件管理器</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100">Plugin</li>
    	<li class="table_list_l table_list_l120">fileManage</li>
    	<li class="table_list_l table_list_l150">2013-04-10 10:59:45</li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="javascript:;" name="modify" id="48" title="文件管理器" remark="" groupid="5" pid="30" control="Plugin" action="fileManage" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=48" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">专题管理</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100">Topic</li>
    	<li class="table_list_l table_list_l120">index</li>
    	<li class="table_list_l table_list_l150">2013-04-10 11:02:44</li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="javascript:;" name="modify" id="49" title="专题管理" remark="" groupid="3" pid="20" control="Topic" action="index" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=49" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">软件管理</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100">Soft</li>
    	<li class="table_list_l table_list_l120">index</li>
    	<li class="table_list_l table_list_l150">2013-04-10 11:04:03</li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="javascript:;" name="modify" id="50" title="软件管理" remark="" groupid="3" pid="20" control="Soft" action="index" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=50" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">导航管理</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100">Plugin</li>
    	<li class="table_list_l table_list_l120"></li>
    	<li class="table_list_l table_list_l150">2013-05-16 10:06:25</li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="javascript:;" name="modify" id="51" title="导航管理" remark="" groupid="5" pid="0" control="Plugin" action="" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=51" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">底部导航</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100">Plugin</li>
    	<li class="table_list_l table_list_l120">footNavigation</li>
    	<li class="table_list_l table_list_l150">2013-05-16 10:07:15</li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="javascript:;" name="modify" id="52" title="底部导航" remark="" groupid="5" pid="51" control="Plugin" action="footNavigation" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=52" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        <ul class="table_list">
		<li class="table_list_l table_list_l150">快捷导航</li>
		<li class="table_list_l table_list_l200" tooltip=1 title=""></li>
    	<li class="table_list_l table_list_l100">Plugin</li>
    	<li class="table_list_l table_list_l120">sideNavigation</li>
    	<li class="table_list_l table_list_l150">2013-05-16 10:08:08</li>
    	<li class="table_list_l table_list_l80">显</li>
    	    	<li class="table_list_l table_list_l100" accessStatus=1>
    		<a href="javascript:;" name="modify" id="53" title="快捷导航" remark="" groupid="5" pid="51" control="Plugin" action="sideNavigation" isshow="1">修改</a>&nbsp;&nbsp;
    		<a delurl="/laugh/admin/index.php?s=Node/deleteNode&id=53" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	    </ul>
        </div>
<div id="compage" class="pagination">
		<a class="pageprev graya fleft" href="/laugh/admin/index.php?s=Node%2FmanageNode&page=1">首页</a> 
		<a class="pageprev graya fleft" href="/laugh/admin/index.php?s=Node%2FmanageNode&page=1">上一页</a> 
	<span class="pageList none">
						<a class="jumpPageBtn fleft" href="/laugh/admin/index.php?s=Node%2FmanageNode&page=1">第 1 页</a>
											<span class="current fleft bge7" href="" style="">第 2 页</span>
				</span>
	<a class="pagenext graya fleft" href="javascript:;">下一页</a>
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