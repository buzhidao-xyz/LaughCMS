<?php /* Smarty version Smarty-3.1.12, created on 2012-12-06 17:27:13
         compiled from "C:\xampp\htdocs\laugh\admin\themes\blue\public\menu_index.html" */ ?>
<?php /*%%SmartyHeaderCode:1111750c064f13e49f4-05862770%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5478becdb1250a441a650acb17d42a232c1a13c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\blue\\public\\menu_index.html',
      1 => 1354771147,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1111750c064f13e49f4-05862770',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50c064f13ea156_29902460',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50c064f13ea156_29902460')) {function content_50c064f13ea156_29902460($_smarty_tpl) {?><!-- menu -->
<div class="menu">
    <ul>
        <li class="menulist">
			<div class="menutree1"><a target="main" hidefocus="true" href="javascript:;" class="plus">基本信息</a></div>
			<ul class="menusub">
				<li class="menuTopLine"></li>
				<li><a target="main" hidefocus="true" href="javascript:;" class="">个人信息</a></li>
			</ul>
		</li>
    </ul>
</div>
<script type="text/javascript">
$(document).ready(function (){
	$("li.menulist:eq(0) > div.menutree1 > a").addClass("mius");
	$("li.menulist:eq(0) > ul.menusub").css("display","block");
});
</script><?php }} ?>