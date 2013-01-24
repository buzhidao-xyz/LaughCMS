<?php /* Smarty version Smarty-3.1.12, created on 2013-01-24 10:40:18
         compiled from "C:\xampp\htdocs\laugh\admin\themes\green\Common\success.html" */ ?>
<?php /*%%SmartyHeaderCode:2412951009f120bc679-16186023%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0013bf546b8948fe46bd8b6751cdec70f223afca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\green\\Common\\success.html',
      1 => 1356403311,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2412951009f120bc679-16186023',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51009f121044c3_14883256',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51009f121044c3_14883256')) {function content_51009f121044c3_14883256($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/control_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="control_nav"><h3>系统提示</h3></div>
<div class="lineBottom"></div>
<div class="opinfo">
	<div class="opinfo_msg">操作成功！</div>
	<div class="opinfo_Link">
		
	</div>
</div>
<style type="text/css">
.opinfo {
	height: auto;
	overflow: hidden;
	padding: 10px 21px;
}
.opinfo .opinfo_msg {
	padding: 10px 0;
	color: #006600;
	font-weight: 600;
}
.opinfo .opinfo_Link {
	padding-top: 10px;
}
</style>
<?php echo $_smarty_tpl->getSubTemplate ("public/control_bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>