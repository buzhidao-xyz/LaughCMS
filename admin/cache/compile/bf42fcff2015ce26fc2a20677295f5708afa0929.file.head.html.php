<?php /* Smarty version Smarty-3.1.11, created on 2012-10-19 14:32:56
         compiled from "C:\xampp\htdocs\laugh\admin\themes\default\public\head.html" */ ?>
<?php /*%%SmartyHeaderCode:228505080f41899b578-26836196%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf42fcff2015ce26fc2a20677295f5708afa0929' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\default\\public\\head.html',
      1 => 1350624684,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '228505080f41899b578-26836196',
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
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5080f418a2df54_06532945',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5080f418a2df54_06532945')) {function content_5080f418a2df54_06532945($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("include/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="header">
    <div class="logo">
        <h1>管理中心</h1>
    </div>
    <div class="uinfo">
        <p>您好 , <em><?php echo $_smarty_tpl->tpl_vars['userInfo']->value['username'];?>
</em> [ <a target="_top" href="__APP__/?s=index/logout">退出</a> ]</p>
    </div>
    <div class="nav">
        <ul class="hmenu">
            <li class="navon"><em><a hidefocus="true" href="__APP__/?s=index/body&groupid=0" target="body">管理中心</a></em></li>
            <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userAccess']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
            <li><em><a hidefocus="true" href="__APP__/?s=public/body/&groupid=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" target="body"><?php echo html_entity_decode($_smarty_tpl->tpl_vars['value']->value['title']);?>
</a></em></li>
            <?php } ?>
        </ul>
        <div id="navlink" class="navlink">
            <p>管理中心&nbsp;&gt;</p>
        </div>
        <div class="navbd"></div>
        <div class="sitemapbtn">
            <p><a target="_blank" href="__APPM__/?s=index">网站首页</a></p>
            <p><a href="__APP__/?s=index">管理中心</a></p>
            <p><a href=javascript:;>网站地图</a></p>
        </div>
    </div>
</div>
<style>
body {
    overflow:hidden;
}
</style>
<script language="javascript">
$(document).ready(function() {
	//$('#header .nav .hmenu li:eq(0)').attr('class', 'navon');
});
</script>
<?php echo $_smarty_tpl->getSubTemplate ("include/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>