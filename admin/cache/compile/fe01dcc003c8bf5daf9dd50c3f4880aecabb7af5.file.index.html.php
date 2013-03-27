<?php /* Smarty version Smarty-3.1.12, created on 2013-03-27 16:25:54
         compiled from "C:\xampp\htdocs\laugh\admin\themes\green\Product\index.html" */ ?>
<?php /*%%SmartyHeaderCode:307465152ad12c7e294-22224949%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe01dcc003c8bf5daf9dd50c3f4880aecabb7af5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\green\\Product\\index.html',
      1 => 1364372748,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '307465152ad12c7e294-22224949',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5152ad12cbc963_50784371',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5152ad12cbc963_50784371')) {function content_5152ad12cbc963_50784371($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/control_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="opTop">
	<a href="__APP__/index.php?s=Product/index">产品列表</a>
	<a href="__APP__/index.php?s=Product/add">新产品</a>
	<a href="__APP__/index.php?s=Product/recover">回收站</a>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/control_bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>