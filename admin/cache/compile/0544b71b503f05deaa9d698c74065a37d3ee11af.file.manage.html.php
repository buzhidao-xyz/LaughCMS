<?php /* Smarty version Smarty-3.1.12, created on 2012-11-08 17:23:19
         compiled from "C:\xampp\htdocs\laugh\admin\themes\smooth\node\manage.html" */ ?>
<?php /*%%SmartyHeaderCode:16143509b7a076dcc50-23461753%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0544b71b503f05deaa9d698c74065a37d3ee11af' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\smooth\\node\\manage.html',
      1 => 1350984554,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16143509b7a076dcc50-23461753',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'perstatus' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_509b7a07722938_05050004',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509b7a07722938_05050004')) {function content_509b7a07722938_05050004($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("include/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="perstatus" pers="<?php echo $_smarty_tpl->tpl_vars['perstatus']->value;?>
"></div>
<?php echo $_smarty_tpl->getSubTemplate ("include/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>