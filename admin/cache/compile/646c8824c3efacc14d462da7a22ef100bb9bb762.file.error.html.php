<?php /* Smarty version Smarty-3.1.12, created on 2013-05-19 15:09:34
         compiled from "F:\website\laugh\admin\themes\blue\Common\error.html" */ ?>
<?php /*%%SmartyHeaderCode:386651987aae20ba20-52266733%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '646c8824c3efacc14d462da7a22ef100bb9bb762' => 
    array (
      0 => 'F:\\website\\laugh\\admin\\themes\\blue\\Common\\error.html',
      1 => 1366899152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '386651987aae20ba20-52266733',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51987aae275308_73430159',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51987aae275308_73430159')) {function content_51987aae275308_73430159($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/control_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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