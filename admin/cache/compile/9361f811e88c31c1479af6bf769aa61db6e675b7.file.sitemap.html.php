<?php /* Smarty version Smarty-3.1.12, created on 2012-11-08 17:29:30
         compiled from "C:\xampp\htdocs\laugh\admin\themes\smooth\sitemap.html" */ ?>
<?php /*%%SmartyHeaderCode:8402509b7b7a9008b2-22989115%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9361f811e88c31c1479af6bf769aa61db6e675b7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\smooth\\sitemap.html',
      1 => 1351056142,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8402509b7b7a9008b2-22989115',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_509b7b7a91b089_97950671',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509b7b7a91b089_97950671')) {function content_509b7b7a91b089_97950671($_smarty_tpl) {?><style type="text/css">
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
   <a href="__APP__/?s=index/lcframe" target="management">后台首页 ></a>
  </div>
  <div class="sitemap_nav_links">
   
  </div>
 </div>
 <div class="sitemap_nav">
  <div class="sitemap_nav_title">
   <a href="__APP__/?s=users/frame" target="management">用户管理 ></a>
  </div>
  <div class="sitemap_nav_links">
   <a href="__APP__/?s=users/adminFrame" target="main">管理员</a>
  </div>
  <div class="sitemap_nav_links">
   <a href="__APP__/?s=users/userFrame" target="main">普通用户</a>
  </div>
 </div>
 <div class="sitemap_nav">
  <div class="sitemap_nav_title">
   <a href="__APP__/?s=articles/frame" target="management">文章管理 ></a>
  </div>
  <div class="sitemap_nav_links">
   <a href="__APP__/?s=articles/general" target="main">文章概况</a>
  </div>
  <div class="sitemap_nav_links">
   <a href="__APP__/?s=articles/articleNew" target="main">新文章</a>
  </div>
  <div class="sitemap_nav_links">
   <a href="__APP__/?s=articles/comment" target="main">文章评论</a>
  </div>
  <div class="sitemap_nav_links">
   <a href="__APP__/?s=articles/sketch" target="main">草稿箱</a>
  </div>
  <div class="sitemap_nav_links">
   <a href="__APP__/?s=articles/recoverStation" target="main">回收站</a>
  </div>
 </div>
 <div class="sitemap_nav">
  <div class="sitemap_nav_title">
   <a href="__APP__/?s=deploy/frame" target="management">网站设置 ></a>
  </div>
  <div class="sitemap_nav_links">
   <a href="__APP__/?s=deploy/holinkFrame" target="main">友情链接</a>
  </div>
 </div>
 <div class="sitemap_nav">
  <div class="sitemap_nav_title">
   <a href="__APP__/?s=tools/frame" target="management">系统工具 ></a>
  </div>
  <div class="sitemap_nav_links">
   <a href="__APP__/?s=tools/frontstyle" target="main">设置前台风格</a>
  </div>
  <div class="sitemap_nav_links">
   <a href="__APP__/?s=tools/backstyle" target="main">设置后台风格</a>
  </div>
  <div class="sitemap_nav_links">
   <a href="__APP__/?s=tools/recache" target="main">更新缓存</a>
  </div>
 </div>
 <div class="sitemap_nav">
  <div class="sitemap_nav_title">
   <a href="__APP__/?s=DBManage/frame" target="management">数据库管理 ></a>
  </div>
  <div class="sitemap_nav_links">
   <a href="__APP__/?s=DBManage/sqlFrame" target="main">SQL执行</a>
  </div>
 </div>
 <div class="sitemap_nav">
  <div class="sitemap_nav_title">
   <a href="__APP__/?s=overall/frame" target="management">全局管理 ></a>
  </div>
  <div class="sitemap_nav_links">
   <a href="__APP__/?s=overall/lwordsFrame" target="main">留言管理</a>
  </div>
  <div class="sitemap_nav_links">
   <a href="__APP__/?s=overall/oplogs" target="main">日志记录</a>
  </div>
 </div>
 <div class="sitemap_nav">
  <div class="sitemap_nav_title">
   <a href="__APP__/?s=lists/frame" target="management">订单管理 ></a>
  </div>
  <div class="sitemap_nav_links">
   <a href="__APP__/?s=lists/searchFrame" target="main">订单查询</a>
  </div>
  <div class="sitemap_nav_links">
   <a href="__APP__/?s=lists/listsFrame" target="main">订单列表</a>
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
<?php }} ?>