<?php /* Smarty version Smarty-3.1.12, created on 2013-04-27 09:44:53
         compiled from "C:\xampp\htdocs\laugh\admin\themes\default\public\header.html" */ ?>
<?php /*%%SmartyHeaderCode:5413517b2d95568672-41624423%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f830a41409dead3d7207457702a0eb921ea71521' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\default\\public\\header.html',
      1 => 1366268658,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5413517b2d95568672-41624423',
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
  'unifunc' => 'content_517b2d955c5250_55362006',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_517b2d955c5250_55362006')) {function content_517b2d955c5250_55362006($_smarty_tpl) {?><!-- header -->
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