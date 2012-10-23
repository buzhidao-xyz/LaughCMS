<?php /* Smarty version Smarty-3.1.12, created on 2012-10-23 17:10:02
         compiled from "C:\xampp\htdocs\laugh\admin\themes\default\public\menu_index.html" */ ?>
<?php /*%%SmartyHeaderCode:122450865eea116ad7-03751704%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '122450865eea116ad7-03751704',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50865eea167f60_96682331',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50865eea167f60_96682331')) {function content_50865eea167f60_96682331($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("include/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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