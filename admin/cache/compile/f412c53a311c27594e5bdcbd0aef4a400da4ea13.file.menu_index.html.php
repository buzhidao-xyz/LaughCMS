<?php /* Smarty version Smarty-3.1.12, created on 2013-10-07 21:31:28
         compiled from "F:\website\laugh\admin\themes\blue\Public\menu_index.html" */ ?>
<?php /*%%SmartyHeaderCode:33025252b7b0e8c532-77489132%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f412c53a311c27594e5bdcbd0aef4a400da4ea13' => 
    array (
      0 => 'F:\\website\\laugh\\admin\\themes\\blue\\Public\\menu_index.html',
      1 => 1381051564,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '33025252b7b0e8c532-77489132',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5252b7b0e92a97_88932551',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5252b7b0e92a97_88932551')) {function content_5252b7b0e92a97_88932551($_smarty_tpl) {?><!-- menu -->
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