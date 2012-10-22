<?php /* Smarty version Smarty-3.1.11, created on 2012-10-22 21:47:08
         compiled from "/usr/local/webserver/site/laugh/admin/themes/default/Group/manage.html" */ ?>
<?php /*%%SmartyHeaderCode:115371747650854e5c332852-34946716%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db4baf06e573777bf09002b125face9a38988df2' => 
    array (
      0 => '/usr/local/webserver/site/laugh/admin/themes/default/Group/manage.html',
      1 => 1350825361,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '115371747650854e5c332852-34946716',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'perstatus' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50854e5c377e65_58954419',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50854e5c377e65_58954419')) {function content_50854e5c377e65_58954419($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("include/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="perstatus" pers="<?php echo $_smarty_tpl->tpl_vars['perstatus']->value;?>
"></div>
<?php echo $_smarty_tpl->getSubTemplate ("include/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>