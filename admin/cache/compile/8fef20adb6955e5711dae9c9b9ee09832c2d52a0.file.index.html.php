<?php /* Smarty version Smarty-3.1.12, created on 2013-03-04 11:07:37
         compiled from "C:\xampp\htdocs\laugh\admin\themes\green\ColumnModel\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1841551340ff94dac46-62330828%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8fef20adb6955e5711dae9c9b9ee09832c2d52a0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\green\\ColumnModel\\index.html',
      1 => 1361928624,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1841551340ff94dac46-62330828',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'total' => 0,
    'accessStatus' => 0,
    'dataList' => 0,
    'd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51340ff95bce04_15888526',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51340ff95bce04_15888526')) {function content_51340ff95bce04_15888526($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/control_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="opTop">
	<a href="__APP__/index.php?s=CTModel/addColumnModel">新增模型</a>
	<a href="__APP__/index.php?s=CTModel/ColumnModel">模型管理</a>
</div>
<div class="captitle"><h5>内容模型列表【目前共有<?php if ($_smarty_tpl->tpl_vars['total']->value){?><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
<?php }else{ ?>0<?php }?>条数据】</h5></div>
<ul class="table_list_title">
	<li class="table_list_l table_list_l120">模型名称</li>
	<li class="table_list_l table_list_l120">模型表名</li>
	<li class="table_list_l table_list_l100">控制器</li>
	<li class="table_list_l table_list_l300">模型描述</li>
	<?php if ($_smarty_tpl->tpl_vars['accessStatus']->value==1){?>
	<li class="table_list_l table_list_l150" accessStatus=<?php echo $_smarty_tpl->tpl_vars['accessStatus']->value;?>
>管理操作</li>
	<?php }?>
</ul>
<div class="contentTableList">
	<?php if ($_smarty_tpl->tpl_vars['dataList']->value){?>
	<?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dataList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
$_smarty_tpl->tpl_vars['d']->_loop = true;
?>
	<ul class="table_list">
		<li class="table_list_l table_list_l120"><?php echo $_smarty_tpl->tpl_vars['d']->value['name'];?>
</li>
		<li class="table_list_l table_list_l120"><?php echo $_smarty_tpl->tpl_vars['d']->value['table'];?>
</li>
		<li class="table_list_l table_list_l100"><?php echo $_smarty_tpl->tpl_vars['d']->value['control'];?>
</li>
		<li class="table_list_l table_list_l300"><?php echo $_smarty_tpl->tpl_vars['d']->value['description'];?>
</li>
		<?php if ($_smarty_tpl->tpl_vars['accessStatus']->value==1){?>
		<li class="table_list_l table_list_l150" accessStatus=<?php echo $_smarty_tpl->tpl_vars['accessStatus']->value;?>
>
			<a href="__APP__/index.php?s=CTModel/ModelField">模型字段</a>
			<a href="__APP__/index.php?s=CTModel/UpdateModel">修改</a>
			<a href="__APP__/index.php?s=CTModel/UpdateModelStatus&status=0">已启用</a>
			<a href="__APP__/index.php?s=CTModel/DeleteModel">删除</a>
		</li>
		<?php }?>
	</ul>
	<?php } ?>
	<?php }else{ ?>
	<ul class="table_list"><li class="table_list_center">空</li></ul>
	<?php }?>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/page.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("public/control_bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>