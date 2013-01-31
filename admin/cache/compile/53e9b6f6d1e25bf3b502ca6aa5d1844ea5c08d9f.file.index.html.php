<?php /* Smarty version Smarty-3.1.12, created on 2013-01-31 23:00:14
         compiled from "G:\website\laugh\admin\themes\green\index.html" */ ?>
<?php /*%%SmartyHeaderCode:17556510a86fe8df7d5-82600841%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53e9b6f6d1e25bf3b502ca6aa5d1844ea5c08d9f' => 
    array (
      0 => 'G:\\website\\laugh\\admin\\themes\\green\\index.html',
      1 => 1358518771,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17556510a86fe8df7d5-82600841',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_510a86fe9470c5_28209181',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_510a86fe9470c5_28209181')) {function content_510a86fe9470c5_28209181($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("include/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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