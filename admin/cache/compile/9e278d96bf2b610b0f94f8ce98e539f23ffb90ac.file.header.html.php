<?php /* Smarty version Smarty-3.1.12, created on 2013-04-25 18:21:20
         compiled from "C:\xampp\htdocs\laugh\admin\themes\blue\public\header.html" */ ?>
<?php /*%%SmartyHeaderCode:20858517903a0d5f772-57025537%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e278d96bf2b610b0f94f8ce98e539f23ffb90ac' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\blue\\public\\header.html',
      1 => 1366855407,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20858517903a0d5f772-57025537',
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
  'unifunc' => 'content_517903a0da2c73_10419588',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_517903a0da2c73_10419588')) {function content_517903a0da2c73_10419588($_smarty_tpl) {?><!-- header -->
<div class="headerTop">
    <div class="logo"><a href="__APP__"><img src="themes/blue/images/logo.png" width="180" height="60" /></a></div>
    <div class="headerNav">
        <div class="uinfo">
            <font color="#FFFFFF">欢迎你！<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['username'];?>
</font> [<a href="__APP__/index.php?s=index/logout">退出</a>] | <a href="__APP__/index.php?s=index">系统主页</a> | <a href="__APPM__/index.php?s=index" target="_blank">网站主页</a>
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
    </div>
    <div class="kjdh">
        <a href="__APP__/index.php?s=index">系统主页</a> | <a href="__APPM__/index.php?s=index" target="_blank">网站主页</a> | <a href="__APP__/index.php?s=index">系统主页</a> | <a href="__APPM__/index.php?s=index" target="_blank">网站主页</a>
    </div>
</div>
<div class="headerFoot"></div>
<!-- header --><?php }} ?>