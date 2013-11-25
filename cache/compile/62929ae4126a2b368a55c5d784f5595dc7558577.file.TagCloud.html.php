<?php /* Smarty version Smarty-3.1.12, created on 2013-11-25 23:45:40
         compiled from "F:\website\laugh\themes\default\Common\TagCloud.html" */ ?>
<?php /*%%SmartyHeaderCode:26392529370a40629d4-99345421%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62929ae4126a2b368a55c5d784f5595dc7558577' => 
    array (
      0 => 'F:\\website\\laugh\\themes\\default\\Common\\TagCloud.html',
      1 => 1366899154,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26392529370a40629d4-99345421',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_529370a4081c76_96682357',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529370a4081c76_96682357')) {function content_529370a4081c76_96682357($_smarty_tpl) {?><div id="tagCloud" class="tagCloud">
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