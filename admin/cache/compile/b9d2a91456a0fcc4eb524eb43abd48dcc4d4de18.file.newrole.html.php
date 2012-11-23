<?php /* Smarty version Smarty-3.1.12, created on 2012-11-23 17:27:53
         compiled from "C:\xampp\htdocs\laugh\admin\themes\smooth\Role\newrole.html" */ ?>
<?php /*%%SmartyHeaderCode:1730650af4199033f72-97746106%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9d2a91456a0fcc4eb524eb43abd48dcc4d4de18' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\smooth\\Role\\newrole.html',
      1 => 1353657466,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1730650af4199033f72-97746106',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'roleInfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50af41990b3d47_86511343',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50af41990b3d47_86511343')) {function content_50af41990b3d47_86511343($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("include/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="content">
	<div id="control">
		<div class="box">
			<div class="title">
				<h5>新角色表单</h5>
			</div>
			<form name="newform" action="__APP__/?s=Role/saveRole" method="post" method="post" id="roleform">
			<input type="hidden"  name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['roleInfo']->value['id'];?>
" />
			<div class="form">
				<div class="fields">
					<div class="field">
						<div class="label">
							<label for="input-small">角色名:</label>
						</div>
						<div class="input" style="float:left;">
							<input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['roleInfo']->value['name'];?>
" class="small" />
						</div>
					</div>
					<div class="field">
						<div class="label">
							<label for="input-small">描述:</label>
						</div>
						<div class="input" style="float:left;">
							<input type="text" name="remark" value="<?php echo $_smarty_tpl->tpl_vars['roleInfo']->value['remark'];?>
" class="small" />
						</div>
					</div>
					<div class="field">
						<div class="label">
							<label for="input-small">状态:</label>
						</div>
						<div class="radio">
							<input  type="radio" name="status"  value="1" <?php if ($_smarty_tpl->tpl_vars['roleInfo']->value['status']==1){?>checked="checked"<?php }?> />启用&nbsp;&nbsp;
	  	 					<input  type="radio" name="status"  value="0" <?php if ($_smarty_tpl->tpl_vars['roleInfo']->value['status']==0){?>checked="checked"<?php }?> />禁用
						</div>
					</div>
					<?php echo $_smarty_tpl->getSubTemplate ("Common/nodeTree.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

					<div class="buttons">
						<input type="submit" name="newRoleButton" value="完成提交" />
					</div>
				</div>
			</div>
			</form>
		</div>
	</div>
</div>
<script src="themes/smooth/js/role.js" type="text/javascript"></script>
<?php echo $_smarty_tpl->getSubTemplate ("include/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>