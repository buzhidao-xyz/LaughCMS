<?php /* Smarty version Smarty-3.1.12, created on 2012-12-20 10:23:08
         compiled from "C:\xampp\htdocs\laugh\admin\themes\default\node\manage.html" */ ?>
<?php /*%%SmartyHeaderCode:2940150d2768c1deb41-88109538%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7aed8b62a271594aa61ea004548f852082bbd23' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\default\\node\\manage.html',
      1 => 1350984554,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2940150d2768c1deb41-88109538',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'perstatus' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50d2768c2294f5_97570378',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50d2768c2294f5_97570378')) {function content_50d2768c2294f5_97570378($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("include/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="perstatus" pers="<?php echo $_smarty_tpl->tpl_vars['perstatus']->value;?>
"></div>
<?php echo $_smarty_tpl->getSubTemplate ("include/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>