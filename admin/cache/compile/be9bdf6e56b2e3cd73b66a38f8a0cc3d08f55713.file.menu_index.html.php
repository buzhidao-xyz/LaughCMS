<?php /* Smarty version Smarty-3.1.11, created on 2012-10-22 16:59:03
         compiled from "C:\xampp\htdocs\laugh\admin\themes\default\public\menu_index.html" */ ?>
<?php /*%%SmartyHeaderCode:1918050850ad7c33754-47460698%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be9bdf6e56b2e3cd73b66a38f8a0cc3d08f55713' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\default\\public\\menu_index.html',
      1 => 1349574506,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1918050850ad7c33754-47460698',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50850ad7c90320_57427125',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50850ad7c90320_57427125')) {function content_50850ad7c90320_57427125($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("include/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="menu">
    <ul>
        <li class="menulist">
			<div><a target="main" hidefocus="true" href="javascript:;">基本信息</a></div>
			<ul class="menusub">
				<li><a target="main" hidefocus="true" href="javascript:;" class="">个人信息</a></li>
			</ul>
		</li>
    </ul>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("include/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>