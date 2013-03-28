<?php /* Smarty version Smarty-3.1.12, created on 2013-03-28 16:41:10
         compiled from "C:\xampp\htdocs\laugh\admin\themes\green\Common\error.html" */ ?>
<?php /*%%SmartyHeaderCode:8529515402264719d7-76790995%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '8529515402264719d7-76790995',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_515402264b9747_36367454',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_515402264b9747_36367454')) {function content_515402264b9747_36367454($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/control_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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