<?php /* Smarty version Smarty-3.1.12, created on 2012-12-27 17:12:56
         compiled from "C:\xampp\htdocs\laugh\themes\default\index.html" */ ?>
<?php /*%%SmartyHeaderCode:562650dc1118debc79-85427287%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f577bcee453c3488ab8e2271cee9d8619295461e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\themes\\default\\index.html',
      1 => 1353027280,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '562650dc1118debc79-85427287',
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
  'unifunc' => 'content_50dc1118e44a44_69467018',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50dc1118e44a44_69467018')) {function content_50dc1118e44a44_69467018($_smarty_tpl) {?><div>
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