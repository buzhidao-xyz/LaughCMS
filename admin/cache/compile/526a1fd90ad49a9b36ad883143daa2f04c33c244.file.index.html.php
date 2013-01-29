<?php /* Smarty version Smarty-3.1.12, created on 2013-01-29 15:24:18
         compiled from "C:\xampp\htdocs\laugh\admin\themes\green\index.html" */ ?>
<?php /*%%SmartyHeaderCode:8681510779222dea61-83149607%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '526a1fd90ad49a9b36ad883143daa2f04c33c244' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\green\\index.html',
      1 => 1357874043,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8681510779222dea61-83149607',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51077922367072_72611677',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51077922367072_72611677')) {function content_51077922367072_72611677($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("include/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link rel="stylesheet" type="text/css" href="themes/green/style/frame.css" />
<link rel="stylesheet" type="text/css" href="themes/green/style/header.css" />
<div id="header">
	<?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
<div id="menuTree">
	<?php echo $_smarty_tpl->getSubTemplate ("public/menu_index.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
<div id="main">
	<iframe frameborder="0" name="main" src="__APP__/index.php?s=public/welcome" scrolling="yes"></iframe>
</div>
<div id="bottom">
	<?php echo $_smarty_tpl->getSubTemplate ("public/bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
<?php echo $_smarty_tpl->getSubTemplate ("include/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>