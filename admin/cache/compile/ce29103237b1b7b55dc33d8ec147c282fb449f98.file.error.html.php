<?php /* Smarty version Smarty-3.1.12, created on 2013-01-23 11:53:04
         compiled from "C:\xampp\htdocs\laugh\admin\themes\green\Common\error.html" */ ?>
<?php /*%%SmartyHeaderCode:881750ff5ea034b139-94920042%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce29103237b1b7b55dc33d8ec147c282fb449f98' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\green\\Common\\error.html',
      1 => 1356403353,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '881750ff5ea034b139-94920042',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50ff5ea03940b7_50018310',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50ff5ea03940b7_50018310')) {function content_50ff5ea03940b7_50018310($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/control_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="control_nav"><h3>系统提示</h3></div>
<div class="lineBottom"></div>
<div class="opinfo">
	<div class="opinfo_msg">操作失败！</div>
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
	color: #FF0000;
	font-weight: 600;
}
.opinfo .opinfo_Link {
	padding-top: 10px;
}
</style>
<?php echo $_smarty_tpl->getSubTemplate ("public/control_bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>