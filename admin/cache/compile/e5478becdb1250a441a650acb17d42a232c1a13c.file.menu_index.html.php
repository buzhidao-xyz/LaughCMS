<?php /* Smarty version Smarty-3.1.12, created on 2013-04-26 10:32:55
         compiled from "C:\xampp\htdocs\laugh\admin\themes\blue\public\menu_index.html" */ ?>
<?php /*%%SmartyHeaderCode:61275179e757f01dc5-28893410%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5478becdb1250a441a650acb17d42a232c1a13c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\blue\\public\\menu_index.html',
      1 => 1366873559,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '61275179e757f01dc5-28893410',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5179e757f06dd0_63063312',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5179e757f06dd0_63063312')) {function content_5179e757f06dd0_63063312($_smarty_tpl) {?><!-- menu -->
<div class="menu">
    <ul>
        <li class="menulist">
			<div class="menutree1"><a target="main" hidefocus="true" href="javascript:;" class="mius">基本信息</a></div>
			<ul class="menusub">
				<li><a hidefocus="true" href="__APP__/index.php?s=Public/welcome" target="main">系统主页</a></li>
				<li><a hidefocus="true" href="__APP__/index.php?s=Admin/profile" target="main">个人信息</a></li>
			</ul>
		</li>
    </ul>
</div>
<div class="menuSlide">
	<img border="0" width="6" height="60" src="themes/blue/images/admin_barclose.gif">
</div>
<script type="text/javascript">
$(document).ready(function (){
	$("li.menulist:eq(0) > ul.menusub > li:eq(0) > a").addClass('tabon');
});
</script><?php }} ?>