<?php /* Smarty version Smarty-3.1.12, created on 2012-12-06 13:32:35
         compiled from "C:\xampp\htdocs\laugh\admin\themes\blue\node\manage.html" */ ?>
<?php /*%%SmartyHeaderCode:1422550c02df3634934-95881822%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e66bbb7897d0161322a90479427c7ba46599ea5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\blue\\node\\manage.html',
      1 => 1350984554,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1422550c02df3634934-95881822',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'perstatus' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50c02df367da33_53005784',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50c02df367da33_53005784')) {function content_50c02df367da33_53005784($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("include/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="perstatus" pers="<?php echo $_smarty_tpl->tpl_vars['perstatus']->value;?>
"></div>
<?php echo $_smarty_tpl->getSubTemplate ("include/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>