<?php /* Smarty version Smarty-3.1.12, created on 2013-05-29 20:16:14
         compiled from "F:\website\laugh\admin\themes\blue\public\menu_index.html" */ ?>
<?php /*%%SmartyHeaderCode:1141851a5f18e44e460-75967945%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10c194637260cf9c48e0da7ddbbc5185ec142882' => 
    array (
      0 => 'F:\\website\\laugh\\admin\\themes\\blue\\public\\menu_index.html',
      1 => 1367154234,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1141851a5f18e44e460-75967945',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51a5f18e482355_23414593',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a5f18e482355_23414593')) {function content_51a5f18e482355_23414593($_smarty_tpl) {?><!-- menu -->
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
<div id="menuSlide" class="menuSlide">
	<div class="menuSlidebg menuSlidebg1"></div>
</div>
<script type="text/javascript">
$(document).ready(function (){
	$("li.menulist:eq(0) > ul.menusub > li:eq(0) > a").addClass('tabon');
});
</script><?php }} ?>