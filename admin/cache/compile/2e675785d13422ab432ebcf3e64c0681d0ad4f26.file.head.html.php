<?php /* Smarty version Smarty-3.1.11, created on 2012-10-07 22:45:32
         compiled from "/usr/local/webserver/site/laugh/admin/themes/default/public/head.html" */ ?>
<?php /*%%SmartyHeaderCode:14792678945071958c731cb4-77105005%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e675785d13422ab432ebcf3e64c0681d0ad4f26' => 
    array (
      0 => '/usr/local/webserver/site/laugh/admin/themes/default/public/head.html',
      1 => 1347543918,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14792678945071958c731cb4-77105005',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userInfo' => 0,
    'useraccess' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5071958c796260_00730661',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5071958c796260_00730661')) {function content_5071958c796260_00730661($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("include/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
 $_from = $_smarty_tpl->tpl_vars['useraccess']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
            <li><em><a hidefocus="true" href="__APP__/?s=public/body/&groupid=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" target="body"><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
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