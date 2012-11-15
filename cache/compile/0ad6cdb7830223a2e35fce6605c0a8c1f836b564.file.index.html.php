<?php /* Smarty version Smarty-3.1.12, created on 2012-11-15 23:08:17
         compiled from "/usr/local/webserver/site/laugh/themes/default/Log/index.html" */ ?>
<?php /*%%SmartyHeaderCode:20679263850a50561e02bf9-63193959%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ad6cdb7830223a2e35fce6605c0a8c1f836b564' => 
    array (
      0 => '/usr/local/webserver/site/laugh/themes/default/Log/index.html',
      1 => 1352991766,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20679263850a50561e02bf9-63193959',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logfile' => 0,
    'logcontent' => 0,
    'd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50a50561e57e90_28821037',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a50561e57e90_28821037')) {function content_50a50561e57e90_28821037($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("Log/menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div id="logtitle"><?php echo $_smarty_tpl->tpl_vars['logfile']->value;?>
</div>

<ul id="logcontent">
    <?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['logcontent']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
$_smarty_tpl->tpl_vars['d']->_loop = true;
?>
    <li><?php echo $_smarty_tpl->tpl_vars['d']->value;?>
</li>
    <?php } ?>
</ul><?php }} ?>