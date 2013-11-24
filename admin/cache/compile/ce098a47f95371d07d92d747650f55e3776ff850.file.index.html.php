<?php /* Smarty version Smarty-3.1.12, created on 2013-11-24 17:55:52
         compiled from "F:\website\laugh\admin\themes\blue\index.html" */ ?>
<?php /*%%SmartyHeaderCode:5495291cd285e2865-23692243%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce098a47f95371d07d92d747650f55e3776ff850' => 
    array (
      0 => 'F:\\website\\laugh\\admin\\themes\\blue\\index.html',
      1 => 1381140857,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5495291cd285e2865-23692243',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5291cd2863aaa7_42568366',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5291cd2863aaa7_42568366')) {function content_5291cd2863aaa7_42568366($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("include/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link rel="stylesheet" type="text/css" href="themes/blue/style/frame.css" />
<link rel="stylesheet" type="text/css" href="themes/blue/style/header.css" />
<div id="header">
<?php echo $_smarty_tpl->getSubTemplate ("Public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
<div id="menuTree">
<?php echo $_smarty_tpl->getSubTemplate ("Public/menu_index.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
<div id="main">
<iframe frameborder="0" id="mainframe" name="main" src="__APP__/index.php?s=public/welcome" scrolling="yes"></iframe>
</div>
<div id="bottom">
<?php echo $_smarty_tpl->getSubTemplate ("Public/bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
<?php echo $_smarty_tpl->getSubTemplate ("include/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>