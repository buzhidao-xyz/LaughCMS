<?php /* Smarty version Smarty-3.1.12, created on 2013-01-23 17:14:01
         compiled from "C:\xampp\htdocs\laugh\admin\themes\green\Public\menu_index.html" */ ?>
<?php /*%%SmartyHeaderCode:1466650ffa9d9e14852-53667352%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53f00f5ee180756fa28d0a0cf6f2a76cd9b7e291' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\green\\Public\\menu_index.html',
      1 => 1358318502,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1466650ffa9d9e14852-53667352',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50ffa9d9e456e2_84619301',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50ffa9d9e456e2_84619301')) {function content_50ffa9d9e456e2_84619301($_smarty_tpl) {?><!-- menu -->
<div class="menu">
    <ul>
        <li class="menulist">
			<div class="menutree1"><a target="main" hidefocus="true" href="javascript:;" class="plus">基本信息</a></div>
			<ul class="menusub">
				<li class="menuTopLine"></li>
				<li><a hidefocus="true" href="__APP__/index.php?s=Public/welcome" target="main">系统主页</a></li>
				<li><a hidefocus="true" href="__APP__/index.php?s=Admin/profile" target="main">个人信息</a></li>
			</ul>
		</li>
    </ul>
</div>
<script type="text/javascript">
$(document).ready(function (){
	$("li.menulist:eq(0) > div.menutree1 > a").addClass("mius");
	$("li.menulist > ul.menusub").css("display","block");
	// $("li.menulist:eq(0) > ul.menusub > li:eq(1) > a").addClass('tabon');
});
</script><?php }} ?>