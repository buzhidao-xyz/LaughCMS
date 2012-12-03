<?php /* Smarty version Smarty-3.1.12, created on 2012-12-03 16:37:05
         compiled from "C:\xampp\htdocs\laugh\admin\themes\blue\public\header.html" */ ?>
<?php /*%%SmartyHeaderCode:3180250bc64b1ed7148-17777069%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e278d96bf2b610b0f94f8ce98e539f23ffb90ac' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\blue\\public\\header.html',
      1 => 1352951183,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3180250bc64b1ed7148-17777069',
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
  'unifunc' => 'content_50bc64b1f25990_76994767',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50bc64b1f25990_76994767')) {function content_50bc64b1f25990_76994767($_smarty_tpl) {?><!-- header -->
<div class="logo">
    <h1>管理中心</h1>
</div>
<div class="uinfo">
    <p>您好 , <em><?php echo $_smarty_tpl->tpl_vars['userInfo']->value['username'];?>
</em> [ <a target="_top" href="__APP__/?s=index/logout">退出</a> ]</p>
</div>
<div class="nav">
    <ul class="hmenu">
        <li class="navon"><em><a hidefocus="true" href="javascript:;" groupid="0" title="管理中心" class="navHeadMenu">管理中心</a></em></li>
        <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userAccess']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
        <li><em><a href="javascript:;" groupid="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" title="<?php echo html_entity_decode($_smarty_tpl->tpl_vars['value']->value['title']);?>
" class="navHeadMenu"><?php echo html_entity_decode($_smarty_tpl->tpl_vars['value']->value['title']);?>
</a></em></li>
        <?php } ?>
    </ul>
    <div id="navlink" class="navlink">
        <p>管理中心&nbsp;&gt;</p>
    </div>
    <div class="navbd"></div>
    <div class="sitemapbtn">
        <p><a target="_blank" href="__APPM__/?s=index">网站首页</a></p>
        <p><a hidefocus="true" href="javascript:;" groupid="0" class="navHeadMenu">管理中心</a></p>
        <p><a href="javascript:;">网站地图</a></p>
    </div>
</div><?php }} ?>