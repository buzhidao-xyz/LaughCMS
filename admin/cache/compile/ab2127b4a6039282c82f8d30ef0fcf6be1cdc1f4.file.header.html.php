<?php /* Smarty version Smarty-3.1.12, created on 2013-03-04 11:05:47
         compiled from "C:\xampp\htdocs\laugh\admin\themes\green\public\header.html" */ ?>
<?php /*%%SmartyHeaderCode:1353751340f8bced3c6-20637788%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab2127b4a6039282c82f8d30ef0fcf6be1cdc1f4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\green\\public\\header.html',
      1 => 1359012450,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1353751340f8bced3c6-20637788',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userInfo' => 0,
    'userAccess' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51340f8bdf9692_41796811',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51340f8bdf9692_41796811')) {function content_51340f8bdf9692_41796811($_smarty_tpl) {?><!-- header -->
<div class="logo">
    <h1>管理中心</h1>
</div>
<div class="headerNav">
    <div class="uinfo">
        您好 , <?php echo $_smarty_tpl->tpl_vars['userInfo']->value['username'];?>
 [ <a href="__APP__/index.php?s=index/logout">退出</a> ] | <a href="__APP__/index.php?s=index">系统主页</a> | <a href="__APPM__/index.php?s=index" target="_blank">网站主页</a>
    </div>
    <div class="nav">
        <ul class="hmenu">
            <li class="navon"><a hidefocus="true" href="javascript:;" groupid="0" title="管理中心" class="navHeadMenu">管理中心</a></li>
            <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userAccess']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
            <li><a hidefocus="true" href="javascript:;" groupid="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" title="<?php echo html_entity_decode($_smarty_tpl->tpl_vars['value']->value['title']);?>
" class="navHeadMenu"><?php echo html_entity_decode($_smarty_tpl->tpl_vars['value']->value['title']);?>
</a></li>
            <?php } ?>
        </ul>
    </div>
</div><?php }} ?>