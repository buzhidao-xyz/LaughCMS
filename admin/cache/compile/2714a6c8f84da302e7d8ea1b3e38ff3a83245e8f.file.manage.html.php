<?php /* Smarty version Smarty-3.1.12, created on 2012-11-14 22:52:02
         compiled from "/usr/local/webserver/site/laugh/admin/themes/default/node/manage.html" */ ?>
<?php /*%%SmartyHeaderCode:126384088850a3b012d74259-80622500%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2714a6c8f84da302e7d8ea1b3e38ff3a83245e8f' => 
    array (
      0 => '/usr/local/webserver/site/laugh/admin/themes/default/node/manage.html',
      1 => 1350825361,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '126384088850a3b012d74259-80622500',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'perstatus' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50a3b012db8014_28907082',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a3b012db8014_28907082')) {function content_50a3b012db8014_28907082($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("include/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="perstatus" pers="<?php echo $_smarty_tpl->tpl_vars['perstatus']->value;?>
"></div>
<?php echo $_smarty_tpl->getSubTemplate ("include/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>