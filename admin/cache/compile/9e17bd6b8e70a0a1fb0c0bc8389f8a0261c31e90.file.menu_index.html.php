<?php /* Smarty version Smarty-3.1.12, created on 2013-02-03 11:42:26
         compiled from "G:\website\laugh\admin\themes\green\public\menu_index.html" */ ?>
<?php /*%%SmartyHeaderCode:1347510ddca2d92c62-27900657%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e17bd6b8e70a0a1fb0c0bc8389f8a0261c31e90' => 
    array (
      0 => 'G:\\website\\laugh\\admin\\themes\\green\\public\\menu_index.html',
      1 => 1358518771,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1347510ddca2d92c62-27900657',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_510ddca2dbe5d8_86106322',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_510ddca2dbe5d8_86106322')) {function content_510ddca2dbe5d8_86106322($_smarty_tpl) {?><!-- menu -->
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