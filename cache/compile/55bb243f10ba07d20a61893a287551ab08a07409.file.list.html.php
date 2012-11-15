<?php /* Smarty version Smarty-3.1.12, created on 2012-11-15 23:08:12
         compiled from "/usr/local/webserver/site/laugh/themes/default/Log/list.html" */ ?>
<?php /*%%SmartyHeaderCode:35953580250a5055c8505f4-26371198%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55bb243f10ba07d20a61893a287551ab08a07409' => 
    array (
      0 => '/usr/local/webserver/site/laugh/themes/default/Log/list.html',
      1 => 1352991950,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35953580250a5055c8505f4-26371198',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'filelist' => 0,
    'd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50a5055c8a1ca9_21428209',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a5055c8a1ca9_21428209')) {function content_50a5055c8a1ca9_21428209($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("Log/menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<ul id="filelist">
    <?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filelist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
$_smarty_tpl->tpl_vars['d']->_loop = true;
?>
    <li><a href="?s=logs/index&f=<?php echo $_smarty_tpl->tpl_vars['d']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['d']->value;?>
</a></li>
    <?php } ?>
</ul><?php }} ?>