<?php /* Smarty version Smarty-3.1.12, created on 2013-01-10 10:38:18
         compiled from "C:\xampp\htdocs\laugh\admin\themes\blue\public\menu_index.html" */ ?>
<?php /*%%SmartyHeaderCode:795950ee299a31a742-57104118%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5478becdb1250a441a650acb17d42a232c1a13c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\blue\\public\\menu_index.html',
      1 => 1357525394,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '795950ee299a31a742-57104118',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50ee299a320351_13867130',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50ee299a320351_13867130')) {function content_50ee299a320351_13867130($_smarty_tpl) {?><!-- menu -->
<div class="menu">
    <ul>
        <li class="menulist">
			<div class="menutree1"><a target="main" hidefocus="true" href="javascript:;" class="plus">基本信息</a></div>
			<ul class="menusub">
				<li class="menuTopLine"></li>
				<li><a hidefocus="true" href="__APP__/index.php?s=Public/welcome" target="main">欢迎页</a></li>
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