<?php /* Smarty version Smarty-3.1.12, created on 2012-11-14 22:52:29
         compiled from "/usr/local/webserver/site/laugh/admin/themes/default/index.html" */ ?>
<?php /*%%SmartyHeaderCode:95167008150a3b02d9ef359-90966629%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fde8cd9ded1687319bd229b778711051928c86a0' => 
    array (
      0 => '/usr/local/webserver/site/laugh/admin/themes/default/index.html',
      1 => 1352904297,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '95167008150a3b02d9ef359-90966629',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50a3b02da42d51_07964217',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a3b02da42d51_07964217')) {function content_50a3b02da42d51_07964217($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("include/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sitemap.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link rel="stylesheet" type="text/css" href="themes/default/style/frame.css" />
<div id="colors-switcher" class="color">
	<a href="javascript:;" class="blue" title="Blue"></a>
	<a href="javascript:;" class="green" title="Green"></a>
	<a href="javascript:;" class="brown" title="Brown"></a>
	<a href="javascript:;" class="purple" title="Purple"></a>
	<a href="javascript:;" class="red" title="Red"></a>
	<a href="javascript:;" class="greyblue" title="GreyBlue"></a>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="menuTree">
	<?php echo $_smarty_tpl->getSubTemplate ("public/menu_index.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
<div id="main">
	<iframe frameborder="0" name="main" src="__APP__/?s=public/welcome"></iframe>
</div>
<div id="stateBar">
	<?php echo $_smarty_tpl->getSubTemplate ("public/bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
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