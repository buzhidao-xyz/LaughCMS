<?php /* Smarty version Smarty-3.1.12, created on 2012-12-17 17:25:39
         compiled from "C:\xampp\htdocs\laugh\admin\themes\blue\public\menu_index.html" */ ?>
<?php /*%%SmartyHeaderCode:2780550cee513e81c10-22795174%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5478becdb1250a441a650acb17d42a232c1a13c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\blue\\public\\menu_index.html',
      1 => 1355123606,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2780550cee513e81c10-22795174',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50cee513e87500_31597039',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50cee513e87500_31597039')) {function content_50cee513e87500_31597039($_smarty_tpl) {?><!-- menu -->
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