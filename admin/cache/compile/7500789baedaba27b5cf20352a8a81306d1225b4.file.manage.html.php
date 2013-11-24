<?php /* Smarty version Smarty-3.1.12, created on 2013-11-24 17:44:36
         compiled from "F:\website\laugh\admin\themes\blue\Group\manage.html" */ ?>
<?php /*%%SmartyHeaderCode:199815291ca8448b059-76914385%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7500789baedaba27b5cf20352a8a81306d1225b4' => 
    array (
      0 => 'F:\\website\\laugh\\admin\\themes\\blue\\Group\\manage.html',
      1 => 1381140856,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199815291ca8448b059-76914385',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'accessStatus' => 0,
    'total' => 0,
    'groupList' => 0,
    'd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5291ca845a9fb3_88078378',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5291ca845a9fb3_88078378')) {function content_5291ca845a9fb3_88078378($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("Public/control_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php if ($_smarty_tpl->tpl_vars['accessStatus']->value==1){?>
<div class="formContainer" accessStatus=<?php echo $_smarty_tpl->tpl_vars['accessStatus']->value;?>
>
	<div class="formtitle"><h5>新增组菜单</h5></div>
	<form name="newform" action="__APP__/index.php?s=Group/saveGroup" method="post" id="ajaxform" class="newform">
		<input type="hidden" name="" />
		<ul class="formbody">
			<li class="formblock">
				<span>菜单名称:</span>
				<input type="text" name="title" value="" class="input" style="width:150px;" />
			</li>
			<li class="formblock bordernone bgf6">
				<input type="submit" name="subut" class="button btnblue2" value="添加" />
			</li>
		</ul>
	</form>
</div>
<?php }?>
<div class="captitle"><h5>组菜单列表【菜单数<?php if ($_smarty_tpl->tpl_vars['total']->value){?><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
<?php }else{ ?>0<?php }?>】</h5></div>
<ul class="table_list_title">
	<li class="table_list_l table_list_l150">组菜单名称</li>
	<li class="table_list_l table_list_l170">创建时间</li>
	<li class="table_list_l table_list_l100">是/否显示</li>
	<?php if ($_smarty_tpl->tpl_vars['accessStatus']->value==1){?>
	<li class="table_list_l table_list_l150" accessStatus=<?php echo $_smarty_tpl->tpl_vars['accessStatus']->value;?>
>操作</li>
	<?php }?>
</ul>
<div class="contentTableList">
	<?php if ($_smarty_tpl->tpl_vars['groupList']->value){?>
	<?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['groupList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
$_smarty_tpl->tpl_vars['d']->_loop = true;
?>
	<ul class="table_list">
		<li class="table_list_l table_list_l150"><?php echo $_smarty_tpl->tpl_vars['d']->value['title'];?>
</li>
		<li class="table_list_l table_list_l170"><?php echo mkdate($_smarty_tpl->tpl_vars['d']->value['createtime']);?>
</li>
		<li class="table_list_l table_list_l100"><?php if ($_smarty_tpl->tpl_vars['d']->value['isshow']){?>显<?php }else{ ?>隐<?php }?></li>
		<?php if ($_smarty_tpl->tpl_vars['accessStatus']->value==1){?>
		<li class="table_list_l table_list_l150" accessStatus=<?php echo $_smarty_tpl->tpl_vars['accessStatus']->value;?>
>
    		<a name="colorboxEdit" href="__APP__/index.php?s=Group/GroupEdit&id=<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">修改</a>
			<a delurl="__APP__/index.php?s=Group/GroupDelete" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
		</li>
		<?php }?>
	</ul>
	<?php } ?>
	<?php }else{ ?>
	<ul class="table_list"><li class="table_list_center">空</li></ul>
	<?php }?>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("Public/control_bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>