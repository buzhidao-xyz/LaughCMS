<?php /* Smarty version Smarty-3.1.12, created on 2012-12-25 17:26:39
         compiled from "C:\xampp\htdocs\laugh\admin\themes\blue\Column\column.html" */ ?>
<?php /*%%SmartyHeaderCode:581850d9714f52d4c4-10490452%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fef0f8afd3f81b8dcdc132e17e11c446e2bc2243' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\blue\\Column\\column.html',
      1 => 1356427453,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '581850d9714f52d4c4-10490452',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dataList' => 0,
    'd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50d9714f5b56c0_98839194',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50d9714f5b56c0_98839194')) {function content_50d9714f5b56c0_98839194($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/control_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="captitle"><h5>栏目列表</h5></div>
<div id="columnList">
	<div class="ul columnListTitle">
		<div class="li columnListd700" flag="columnListTitle" style="text-indent:0;">栏目名称</div>
		<div class="li columnListd300" flag="columnListTitle">操作</div>
	</div>
	<div class="ul columnListTable">
		<?php if ($_smarty_tpl->tpl_vars['dataList']->value){?>
		<?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dataList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
$_smarty_tpl->tpl_vars['d']->_loop = true;
?>
		<div class="ul columnlistd">
			<div class="li columnplus" columnid="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
"></div>
			<div class="li columnListd700" flag="columnTableList"><?php echo $_smarty_tpl->tpl_vars['d']->value['columnname'];?>
<?php if ($_smarty_tpl->tpl_vars['d']->value['isshow']==1){?><font color="green"></font><?php }else{ ?><font color="red">[隐]</font><?php }?></div>
			<div class="li columnListd300" flag="columnTableList">
				<a href="javascript:;">预览</a> |
				<a href="javascript:;">栏目文档</a> |
				<a href="javascript:;">增加子栏目</a> |
				<a href="javascript:;">编辑</a> |
				<a href="javascript:;">删除</a>
			</div>
		</div>
		<div class="ul columnSubList">
		</div>
		<?php } ?>
		<?php }?>
	</div>
	<div class="columnList">
	</div>
</div>
<link rel="stylesheet" type="text/css" href="themes/blue/style/column.css" media="screen" />
<script type="text/javascript">
$(document).ready(function(){
	var column = function (){
		var columnObj = {
			columnplus: $("#columnList .columnListTable .columnlistd div.columnplus"),
			columnmius: $("#columnList .columnListTable .columnlistd div.columnmius"),
		}
	}
});
</script>
<?php echo $_smarty_tpl->getSubTemplate ("public/control_bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>