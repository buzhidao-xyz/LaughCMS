<?php /* Smarty version Smarty-3.1.12, created on 2012-11-15 23:08:33
         compiled from "/usr/local/webserver/site/laugh/themes/default/index.html" */ ?>
<?php /*%%SmartyHeaderCode:105769877950a50571817387-08702328%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d0e30e8dd253edcd155b58d5305e5ae87c5757f' => 
    array (
      0 => '/usr/local/webserver/site/laugh/themes/default/index.html',
      1 => 1352989941,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '105769877950a50571817387-08702328',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50a5057185d799_61834107',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a5057185d799_61834107')) {function content_50a5057185d799_61834107($_smarty_tpl) {?><div>
 This is the index.html
</div>
<?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
$_smarty_tpl->tpl_vars['d']->_loop = true;
?>
<div><?php echo $_smarty_tpl->tpl_vars['d']->value;?>
</div>
<?php } ?>
<script language="javascript">
$(document).ready(function(){
    var d = {
        c: 'index',
        f: 'getAjax',
        data: []
    };
    $.post('?r=ajax',d,function(d){
        checkAjaxStatus(d);
    },'json');
});
</script><?php }} ?>