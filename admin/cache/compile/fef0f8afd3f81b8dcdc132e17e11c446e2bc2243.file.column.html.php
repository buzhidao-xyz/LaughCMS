<?php /* Smarty version Smarty-3.1.12, created on 2012-12-19 14:25:58
         compiled from "C:\xampp\htdocs\laugh\admin\themes\blue\Column\column.html" */ ?>
<?php /*%%SmartyHeaderCode:1754350d15df6093156-35399181%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fef0f8afd3f81b8dcdc132e17e11c446e2bc2243' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\blue\\Column\\column.html',
      1 => 1355897217,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1754350d15df6093156-35399181',
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
  'unifunc' => 'content_50d15df6166f58_20380725',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50d15df6166f58_20380725')) {function content_50d15df6166f58_20380725($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/control_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="captitle"><h5>栏目列表【目前共有<?php if ($_smarty_tpl->tpl_vars['total']->value){?><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
<?php }else{ ?>0<?php }?>条数据】</h5></div>
<ul class="table_list_title">
	<li class="table_list_l table_list_l200">栏目名称</li>
	<li class="table_list_l table_list_l100">是/否显示</li>
	<?php if ($_smarty_tpl->tpl_vars['accessStatus']->value==1){?>
	<li class="table_list_l table_list_l150" accessStatus=<?php echo $_smarty_tpl->tpl_vars['accessStatus']->value;?>
>操作</li>
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
		<li class="table_list_l table_list_l150"><?php echo $_smarty_tpl->tpl_vars['d']->value['title'];?>
</li>
		<li class="table_list_l table_list_l100"><?php if ($_smarty_tpl->tpl_vars['d']->value['isshow']){?>显<?php }else{ ?>隐<?php }?></li>
		<?php if ($_smarty_tpl->tpl_vars['accessStatus']->value==1){?>
		<li class="table_list_l table_list_l150" accessStatus=<?php echo $_smarty_tpl->tpl_vars['accessStatus']->value;?>
>
			<a href="javascript:;" name="modify" id="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['d']->value['title'];?>
" isshow="<?php echo $_smarty_tpl->tpl_vars['d']->value['isshow'];?>
">修改</a>&nbsp;&nbsp;
			<a delurl="__APP__/Group/deleteGroup" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
		</li>
		<?php }?>
	</ul>
	<?php } ?>
	<?php }else{ ?>
	<ul class="table_list"><li class="table_list_center">空</li></ul>
	<?php }?>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/control_bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>