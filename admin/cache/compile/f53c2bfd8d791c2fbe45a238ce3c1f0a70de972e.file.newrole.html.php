<?php /* Smarty version Smarty-3.1.12, created on 2013-10-20 09:55:22
         compiled from "F:\website\laugh\admin\themes\blue\Role\newrole.html" */ ?>
<?php /*%%SmartyHeaderCode:203975263380a2a6d41-16658376%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f53c2bfd8d791c2fbe45a238ce3c1f0a70de972e' => 
    array (
      0 => 'F:\\website\\laugh\\admin\\themes\\blue\\Role\\newrole.html',
      1 => 1381140859,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203975263380a2a6d41-16658376',
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
  'unifunc' => 'content_5263380a420c64_75326375',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5263380a420c64_75326375')) {function content_5263380a420c64_75326375($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("Public/control_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php if ($_smarty_tpl->tpl_vars['accessStatus']->value==1){?>
<div class="formContainer" accessStatus=<?php echo $_smarty_tpl->tpl_vars['accessStatus']->value;?>
>
	<div class="formtitle"><h5>新角色表单</h5></div>
	<form name="newform" action="__APP__/index.php?s=Role/saveRole" method="post" method="post" id="ajaxform" class="newform">
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
				<span>配置角色的权限节点:</span>
				<div class="item_list fleft">
					<label><input type="radio" name="nodeAccess" isSetNode=1 class="radio" />是</label>
				</div>
			</li>
			<li style="height:auto;overflow:hidden;">
				<?php echo $_smarty_tpl->getSubTemplate ("Common/nodeTree.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</li>
			<li class="formblock bordernone bgf6">
				<input type="submit" name="newRoleButton" class="button btnblue4 mauto" value="完成提交" />
			</li>
		</ul>
	</form>
</div>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("Public/control_bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>