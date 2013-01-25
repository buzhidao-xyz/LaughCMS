<?php /* Smarty version Smarty-3.1.12, created on 2013-01-25 16:51:10
         compiled from "C:\xampp\htdocs\laugh\themes\default\Public\Header.html" */ ?>
<?php /*%%SmartyHeaderCode:18515102477eaf19c8-67545626%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8805507ac5860857fba9694803360c60cbd3e5b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\themes\\default\\Public\\Header.html',
      1 => 1359103842,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18515102477eaf19c8-67545626',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5102477eafb862_28723627',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5102477eafb862_28723627')) {function content_5102477eafb862_28723627($_smarty_tpl) {?><div id="Header">
	<div id="HeaderMain" class="wrapWidth">
		<div id="HeaderStatus">
			<div id="Logo">
				<a href="__APP__"><img src="__APP__/themes/default/images/logo.png" /></a>
			</div>
		</div>
		<?php echo $_smarty_tpl->getSubTemplate ("Public/navigation.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
</div><?php }} ?>