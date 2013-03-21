<?php /* Smarty version Smarty-3.1.12, created on 2013-03-21 17:26:56
         compiled from "C:\xampp\htdocs\laugh\themes\default\Common\TagCloud.html" */ ?>
<?php /*%%SmartyHeaderCode:17147514ad260e9fa36-90544214%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3bb9caf6f9733cf976a1dfeed4a44b40c2a1499' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\themes\\default\\Common\\TagCloud.html',
      1 => 1359963848,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17147514ad260e9fa36-90544214',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_514ad260eeeba6_68974973',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_514ad260eeeba6_68974973')) {function content_514ad260eeeba6_68974973($_smarty_tpl) {?><div id="tagCloud" class="tagCloud">
	<a href="javascript:;" target="_blank">菜单一</a>
	<a href="javascript:;" target="_blank">LaughCMS</a>
	<a href="javascript:;" target="_blank">源代码</a>
	<a href="javascript:;" target="_blank">剑网三</a>
	<a href="javascript:;" target="_blank">图片集</a>
	<a href="javascript:;" target="_blank">风云榜</a>
	<a href="javascript:;" target="_blank">文字</a>
	<a href="javascript:;" target="_blank">奖</a>
	<a href="javascript:;" target="_blank">IE8</a>
	<a href="javascript:;" target="_blank">火狐</a>
</div>
<style type="text/css">
.tagCloud a {
	padding: 3px;
	display: inline-block;
	white-space: nowrap;
}
a.size1 {
	font-size: 25px;
	padding: 10px;
	color: #FF6600;
}
a.size1:hover {
	color: #5F9729;
}
a.size2 {
	padding:7px;
	font-size:20px;
	color:#FF0000;
}
a.size2:hover {
	color:#FF6600;
}
a.size3 {
	padding:5px;
	font-size:16px;
	color:#0066CC;
}
a.size3:hover {
	color:#5F9729;
}
a.size4 {
	padding:5px;
	font-size:12px;
	color:#0099FF;
}
a.size4:hover {
	color:#5F9729;
}
a.size5 {
	padding:5px;
	font-size:13px;
	color:#333333;
}
a.size5:hover {
	color:#FF6600;
}
a.size6 {
	padding:0px;
	font-size:16px;
	color:#339900;
}
a.size6:hover {
	color:#0066CC;
}
a.size7 {
	padding:0px;
	font-size:16px;
	color:#660099;
}
a.size7:hover {
	color:#0066CC;
}
</style>
<script type="text/javascript">
$(document).ready(function(){
/*多彩tag*/
var tags_a = $("#tagCloud").find("a");
tags_a.each(function(){
	var x = 9;
	var y = 0;
	var rand = parseInt(Math.random() * (x - y + 1) + y);
	$(this).addClass("size"+rand);
});
});
</script><?php }} ?>