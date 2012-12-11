<?php /* Smarty version Smarty-3.1.12, created on 2012-12-11 20:24:40
         compiled from "G:\website\laugh\admin\themes\blue\public\header.html" */ ?>
<?php /*%%SmartyHeaderCode:72350c7260878cbc3-54177719%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '855b27513d6b25229b6f2fa2c22226aecc5959c4' => 
    array (
      0 => 'G:\\website\\laugh\\admin\\themes\\blue\\public\\header.html',
      1 => 1355144332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '72350c7260878cbc3-54177719',
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
  'unifunc' => 'content_50c726087bfe11_73435458',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50c726087bfe11_73435458')) {function content_50c726087bfe11_73435458($_smarty_tpl) {?><!-- header -->
<div class="logo">
    <h1>管理中心</h1>
</div>
<div class="headerNav">
    <div class="uinfo">
        您好 , <?php echo $_smarty_tpl->tpl_vars['userInfo']->value['username'];?>
 [ <a href="__APP__/index.php?s=index/logout">退出</a> ] | <a href="javascript:;">系统设置</a> | <a href="javascript:;">参数设置</a>
    </div>
    <div class="nav">
        <ul class="hmenu">
            <li class="navon"><a hidefocus="true" href="javascript:;" groupid="0" title="管理中心" class="navHeadMenu">管理中心</a></li>
            <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userAccess']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
            <li><a href="javascript:;" groupid="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" title="<?php echo html_entity_decode($_smarty_tpl->tpl_vars['value']->value['title']);?>
" class="navHeadMenu"><?php echo html_entity_decode($_smarty_tpl->tpl_vars['value']->value['title']);?>
</a></li>
            <?php } ?>
        </ul>
    </div>
</div><?php }} ?>