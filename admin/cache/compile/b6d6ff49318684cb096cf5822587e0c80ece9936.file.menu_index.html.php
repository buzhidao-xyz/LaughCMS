<?php /* Smarty version Smarty-3.1.12, created on 2013-01-31 23:02:48
         compiled from "G:\website\laugh\admin\themes\green\Public\menu_index.html" */ ?>
<?php /*%%SmartyHeaderCode:2899510a879846e754-63319760%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6d6ff49318684cb096cf5822587e0c80ece9936' => 
    array (
      0 => 'G:\\website\\laugh\\admin\\themes\\green\\Public\\menu_index.html',
      1 => 1358518771,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2899510a879846e754-63319760',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_510a87984a7423_27132464',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_510a87984a7423_27132464')) {function content_510a87984a7423_27132464($_smarty_tpl) {?><!-- menu -->
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