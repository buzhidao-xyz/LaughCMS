<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="keywords" content="">
<link type="text/css" rel="stylesheet" href="themes/default/style/common.css" media="screen">
<link type="text/css" rel="stylesheet" href="themes/default/style/base.css" media="screen">
<link type="text/css" rel="stylesheet" href="themes/default/style/global.css" media="screen">
<script type="text/javascript" src="themes/default/js/jquery.js"></script>
<title>管理中心</title>
<script type="text/javascript">
var JS_APP = '/laugh/admin';
</script>
</head>

<body>
<style type="text/css">
<!--
.sitemap{
 position:absolute;
 width:800px;
 height:500px;
 left:300px;
 top:100px;
 z-index:2;
 display:none;
 background:#FFFFFF;
 border:5px solid #508300;
}
.sitemap_title{
 width:100%;
 height:25px;
 line-height:25px;
 cursor:move;
 background:#C0D495;
}
#sitemapclose{
 float:left;
 width:30px;
 margin-left:670px;
 cursor:pointer;
}
.sitemap_nav{
 float:left;
 width:100px;
 height:475px;
 line-height:25px;
}
.sitemap_nav_title{
 width:100%;
 height:35px;
 line-height:35px;
 text-indent:10px;
 font-weight:bold;
 border-bottom:1px solid #159BCE;
}
.sitemap_nav_title a:link, sitemap_nav_title a:hover{
 color:#159BCE;
}
.sitemap_nav_title a:visited{
 color:#159BCE;
}
.sitemap_nav_links{
 width:100%;
 height:25px;
 line-height:25px;
 text-indent:20px;
}
.sitemap_nav_links a:link, .sitemap_nav_links a:hover{
 color:#159BCE;
}
.sitemap_nav_links a:visited{
 color:#159BCE;
}
-->
</style>
<div id="sitemap" class="sitemap">
 <div id="sitemap_title" class="sitemap_title">
  <div style="float:left;width:100px;color:#508300;font-weight:bold; text-indent:20px;">网站地图</div>
  <div id="sitemapclose">关闭</div>
 </div>
 <div class="sitemap_nav">
  <div class="sitemap_nav_title">
   <a href="/laugh/admin/?s=index/lcframe" target="management">后台首页 ></a>
  </div>
  <div class="sitemap_nav_links">
   
  </div>
 </div>
 <div class="sitemap_nav">
  <div class="sitemap_nav_title">
   <a href="/laugh/admin/?s=users/frame" target="management">用户管理 ></a>
  </div>
  <div class="sitemap_nav_links">
   <a href="/laugh/admin/?s=users/adminFrame" target="main">管理员</a>
  </div>
  <div class="sitemap_nav_links">
   <a href="/laugh/admin/?s=users/userFrame" target="main">普通用户</a>
  </div>
 </div>
 <div class="sitemap_nav">
  <div class="sitemap_nav_title">
   <a href="/laugh/admin/?s=articles/frame" target="management">文章管理 ></a>
  </div>
  <div class="sitemap_nav_links">
   <a href="/laugh/admin/?s=articles/general" target="main">文章概况</a>
  </div>
  <div class="sitemap_nav_links">
   <a href="/laugh/admin/?s=articles/articleNew" target="main">新文章</a>
  </div>
  <div class="sitemap_nav_links">
   <a href="/laugh/admin/?s=articles/comment" target="main">文章评论</a>
  </div>
  <div class="sitemap_nav_links">
   <a href="/laugh/admin/?s=articles/sketch" target="main">草稿箱</a>
  </div>
  <div class="sitemap_nav_links">
   <a href="/laugh/admin/?s=articles/recoverStation" target="main">回收站</a>
  </div>
 </div>
 <div class="sitemap_nav">
  <div class="sitemap_nav_title">
   <a href="/laugh/admin/?s=deploy/frame" target="management">网站设置 ></a>
  </div>
  <div class="sitemap_nav_links">
   <a href="/laugh/admin/?s=deploy/holinkFrame" target="main">友情链接</a>
  </div>
 </div>
 <div class="sitemap_nav">
  <div class="sitemap_nav_title">
   <a href="/laugh/admin/?s=tools/frame" target="management">系统工具 ></a>
  </div>
  <div class="sitemap_nav_links">
   <a href="/laugh/admin/?s=tools/frontstyle" target="main">设置前台风格</a>
  </div>
  <div class="sitemap_nav_links">
   <a href="/laugh/admin/?s=tools/backstyle" target="main">设置后台风格</a>
  </div>
  <div class="sitemap_nav_links">
   <a href="/laugh/admin/?s=tools/recache" target="main">更新缓存</a>
  </div>
 </div>
 <div class="sitemap_nav">
  <div class="sitemap_nav_title">
   <a href="/laugh/admin/?s=DBManage/frame" target="management">数据库管理 ></a>
  </div>
  <div class="sitemap_nav_links">
   <a href="/laugh/admin/?s=DBManage/sqlFrame" target="main">SQL执行</a>
  </div>
 </div>
 <div class="sitemap_nav">
  <div class="sitemap_nav_title">
   <a href="/laugh/admin/?s=overall/frame" target="management">全局管理 ></a>
  </div>
  <div class="sitemap_nav_links">
   <a href="/laugh/admin/?s=overall/lwordsFrame" target="main">留言管理</a>
  </div>
  <div class="sitemap_nav_links">
   <a href="/laugh/admin/?s=overall/oplogs" target="main">日志记录</a>
  </div>
 </div>
 <div class="sitemap_nav">
  <div class="sitemap_nav_title">
   <a href="/laugh/admin/?s=lists/frame" target="management">订单管理 ></a>
  </div>
  <div class="sitemap_nav_links">
   <a href="/laugh/admin/?s=lists/searchFrame" target="main">订单查询</a>
  </div>
  <div class="sitemap_nav_links">
   <a href="/laugh/admin/?s=lists/listsFrame" target="main">订单列表</a>
  </div>
 </div>
</div>
<script language="javascript">
<!--
$("#sitemap_title").mousedown(function() {
	beginDriver('sitemap');
});
-->
</script>
<iframe frameborder="0" id="head" name="head" src="/laugh/admin/?s=public/head" scrolling="no" style="position:absolute; width:100%; height:90px; visibility:inherit; z-index:1; overflow:auto;">
</iframe>
<iframe frameborder="0" id="body" name="body" src="/laugh/admin/?s=public/body" scrolling="no" style="width:100%; height:100%; z-index:1; overflow:auto;">
</iframe>
<style>
body {
	padding: 0;
	margin: 0;
    overflow:hidden;
}
</style>
</body>
<script type="text/javascript" src="themes/default/js/public.js"></script>
<script type="text/javascript" src="themes/default/js/div_window.js"></script>
<script type="text/javascript" src="themes/default/js/common.js"></script>
<script type="text/javascript" src="themes/default/js/ajax.js"></script>
</html>