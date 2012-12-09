<?php /* Smarty version Smarty-3.1.12, created on 2012-12-09 15:16:31
         compiled from "G:\website\laugh\admin\themes\smooth\index.html" */ ?>
<?php /*%%SmartyHeaderCode:410450c43acf69bd64-63036868%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '022089abde7a95179120c64d40db4bad3530b2e1' => 
    array (
      0 => 'G:\\website\\laugh\\admin\\themes\\smooth\\index.html',
      1 => 1354793056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '410450c43acf69bd64-63036868',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50c43acf6fa750_67436615',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50c43acf6fa750_67436615')) {function content_50c43acf6fa750_67436615($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("include/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sitemap.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link rel="stylesheet" type="text/css" href="themes/smooth/style/frame.css" />
<div id="header">
	<?php echo $_smarty_tpl->getSubTemplate ("Public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
<div id="menuTree">
	<?php echo $_smarty_tpl->getSubTemplate ("Public/menu_index.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
<div id="main">
	<iframe frameborder="0" name="main" src="__APP__/?s=Public/welcome" scrolling="yes"></iframe>
</div>
<div id="bottom">
	<?php echo $_smarty_tpl->getSubTemplate ("Public/bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
<div id="colors-switcher" class="color">
	<a href="javascript:;" class="blue" title="Blue"></a>
	<a href="javascript:;" class="green" title="Green"></a>
	<a href="javascript:;" class="brown" title="Brown"></a>
	<a href="javascript:;" class="purple" title="Purple"></a>
	<a href="javascript:;" class="red" title="Red"></a>
	<a href="javascript:;" class="greyblue" title="GreyBlue"></a>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("include/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>