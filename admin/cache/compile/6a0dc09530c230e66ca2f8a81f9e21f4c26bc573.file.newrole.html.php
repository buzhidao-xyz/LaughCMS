<?php /* Smarty version Smarty-3.1.12, created on 2013-01-14 10:11:04
         compiled from "C:\xampp\htdocs\laugh\admin\themes\green\Role\newrole.html" */ ?>
<?php /*%%SmartyHeaderCode:2156250f369384f40a7-20724937%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a0dc09530c230e66ca2f8a81f9e21f4c26bc573' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\green\\Role\\newrole.html',
      1 => 1355370210,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2156250f369384f40a7-20724937',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'accessStatus' => 0,
    'roleInfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50f369385a5b20_17263926',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50f369385a5b20_17263926')) {function content_50f369385a5b20_17263926($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/control_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php if ($_smarty_tpl->tpl_vars['accessStatus']->value==1){?>
<div class="formContainer" accessStatus=<?php echo $_smarty_tpl->tpl_vars['accessStatus']->value;?>
>
	<div class="formtitle"><h5>新角色表单</h5></div>
	<form name="newform" action="__APP__/index.php?s=Role/saveRole" method="post" method="post" id="addajaxform" class="newform">
		<input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['roleInfo']->value['id'];?>
" />
		<ul class="formbody">
			<li class="formblock">
				<span>角色名:</span>
				<input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['roleInfo']->value['name'];?>
" class="input w150" />
			</li>
			<li class="formblock">
				<span>描述:</span>
				<input type="text" name="remark" value="<?php echo $_smarty_tpl->tpl_vars['roleInfo']->value['remark'];?>
" class="input w250" />
			</li>
			<li class="formblock">
				<span>状态:</span>
				<div class="item_list fleft">
					<label><input type="radio" name="status" value="1" class="radio" <?php if ($_smarty_tpl->tpl_vars['roleInfo']->value['status']==1){?>checked="checked"<?php }?> />启用</label>
					<label><input type="radio" name="status" value="0" class="radio" <?php if ($_smarty_tpl->tpl_vars['roleInfo']->value['status']==0){?>checked="checked"<?php }?> />禁用</label>
				</div>
			</li>
			<li class="formblock">
				<span>是否配置该角色的功能节点:</span>
				<div class="item_list fleft">
					<label><input type="radio" name="nodeAccess" isSetNode=1 class="radio" />是</label>
				</div>
			</li>
			<li style="height:auto;overflow:hidden;">
				<?php echo $_smarty_tpl->getSubTemplate ("Common/nodeTree.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</li>
			<li class="formblock bordernone">
				<input type="submit" name="newRoleButton" class="button btnyellow4 mauto" value="完成提交" />
			</li>
		</ul>
	</form>
</div>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("public/control_bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>