<?php /* Smarty version Smarty-3.1.12, created on 2012-12-11 20:24:40
         compiled from "G:\website\laugh\admin\themes\blue\public\menu_index.html" */ ?>
<?php /*%%SmartyHeaderCode:2682450c726087ca3a8-12629692%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c6fe1cd09b375dae6124a9145548607899c5735' => 
    array (
      0 => 'G:\\website\\laugh\\admin\\themes\\blue\\public\\menu_index.html',
      1 => 1355144332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2682450c726087ca3a8-12629692',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50c726087ceff7_98934836',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50c726087ceff7_98934836')) {function content_50c726087ceff7_98934836($_smarty_tpl) {?><!-- menu -->
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
	$("li.menulist:eq(0) > ul.menusub").css("display","block");
	$("li.menulist:eq(0) > ul.menusub > li:eq(1) > a").addClass('tabon');
});
</script><?php }} ?>