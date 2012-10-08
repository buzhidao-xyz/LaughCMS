<?php /* Smarty version Smarty-3.1.11, created on 2012-10-07 22:45:32
         compiled from "/usr/local/webserver/site/laugh/admin/themes/default/index.html" */ ?>
<?php /*%%SmartyHeaderCode:2233929395071958c4a4231-17012407%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fde8cd9ded1687319bd229b778711051928c86a0' => 
    array (
      0 => '/usr/local/webserver/site/laugh/admin/themes/default/index.html',
      1 => 1347543590,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2233929395071958c4a4231-17012407',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5071958c4e7f61_15691207',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5071958c4e7f61_15691207')) {function content_5071958c4e7f61_15691207($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("include/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sitemap.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<iframe frameborder="0" id="head" name="head" src="__APP__/?s=public/head" scrolling="no" style="position:absolute; width:100%; height:90px; visibility:inherit; z-index:1; overflow:auto;">
</iframe>
<iframe frameborder="0" id="body" name="body" src="__APP__/?s=public/body" scrolling="no" style="width:100%; height:100%; z-index:1; overflow:auto;">
</iframe>
<style>
body {
	padding: 0;
	margin: 0;
    overflow:hidden;
}
</style>
<?php echo $_smarty_tpl->getSubTemplate ("include/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>