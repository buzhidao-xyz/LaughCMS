<?php /* Smarty version Smarty-3.1.12, created on 2013-09-21 20:43:57
         compiled from "F:\website\laugh\admin\themes\blue\public\header.html" */ ?>
<?php /*%%SmartyHeaderCode:25756523d948d584600-19278110%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12ccf76d326a7db1ae62f465861792a5571b9c15' => 
    array (
      0 => 'F:\\website\\laugh\\admin\\themes\\blue\\public\\header.html',
      1 => 1379340786,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25756523d948d584600-19278110',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'adminInfo' => 0,
    'uniquecode' => 0,
    'AdminAccess' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_523d948d5efc03_58287638',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_523d948d5efc03_58287638')) {function content_523d948d5efc03_58287638($_smarty_tpl) {?><!-- header -->
<div class="headerTop">
    <div class="logo"><a href="__APP__"><img src="themes/blue/images/logo_white.png" width="180" height="60" /></a></div>
    <div class="headerNav">
        <div class="uinfo">
            <font color="#FFFFFF">欢迎你！<?php echo $_smarty_tpl->tpl_vars['adminInfo']->value['adminname'];?>
</font> [<a href="__APP__/index.php?s=login/logout&<?php echo $_smarty_tpl->tpl_vars['uniquecode']->value;?>
">退出</a>] | <a href="__APP__/index.php?s=index">系统主页</a> | <a href="__APPM__/index.php?s=index" target="_blank">网站主页</a>
        </div>
        <div class="nav">
            <ul class="hmenu">
                <li class="navon"><a hidefocus="true" href="javascript:;" groupid="0" title="管理中心" class="navHeadMenu">管理中心</a></li>
                <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['AdminAccess']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
        <a href="javascript:;">网站地图</a>
    </div>
</div>
<div class="headerFoot"></div>
<!-- header --><?php }} ?>