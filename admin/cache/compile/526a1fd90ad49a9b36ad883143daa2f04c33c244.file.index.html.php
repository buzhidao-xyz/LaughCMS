<?php /* Smarty version Smarty-3.1.12, created on 2013-04-03 11:33:03
         compiled from "C:\xampp\htdocs\laugh\admin\themes\green\index.html" */ ?>
<?php /*%%SmartyHeaderCode:10114515ba2efcd79e7-50222822%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '526a1fd90ad49a9b36ad883143daa2f04c33c244' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\green\\index.html',
      1 => 1360050038,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10114515ba2efcd79e7-50222822',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_515ba2efd2ae07_53561821',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_515ba2efd2ae07_53561821')) {function content_515ba2efd2ae07_53561821($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("include/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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