<?php /* Smarty version Smarty-3.1.11, created on 2012-10-22 17:28:08
         compiled from "C:\xampp\htdocs\laugh\admin\themes\default\Group\manage.html" */ ?>
<?php /*%%SmartyHeaderCode:20333508511a806c132-41300647%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2543daa228af7e280eda9e0e0c5fabcc7c8ccfe1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\default\\Group\\manage.html',
      1 => 1350713204,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20333508511a806c132-41300647',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'perstatus' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_508511a80c40f5_64873565',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_508511a80c40f5_64873565')) {function content_508511a80c40f5_64873565($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("include/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="perstatus" pers="<?php echo $_smarty_tpl->tpl_vars['perstatus']->value;?>
"></div>
<?php echo $_smarty_tpl->getSubTemplate ("include/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>