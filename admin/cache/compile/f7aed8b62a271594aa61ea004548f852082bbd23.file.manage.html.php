<?php /* Smarty version Smarty-3.1.12, created on 2013-05-07 11:22:13
         compiled from "C:\xampp\htdocs\laugh\admin\themes\default\node\manage.html" */ ?>
<?php /*%%SmartyHeaderCode:484051887365525363-84434228%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7aed8b62a271594aa61ea004548f852082bbd23' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\default\\node\\manage.html',
      1 => 1367142637,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '484051887365525363-84434228',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'perstatus' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5188736556c053_81193281',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5188736556c053_81193281')) {function content_5188736556c053_81193281($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("include/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="perstatus" pers="<?php echo $_smarty_tpl->tpl_vars['perstatus']->value;?>
"></div>
<?php echo $_smarty_tpl->getSubTemplate ("include/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>