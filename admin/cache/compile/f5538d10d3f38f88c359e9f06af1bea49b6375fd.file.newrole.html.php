<?php /* Smarty version Smarty-3.1.12, created on 2012-12-12 19:54:39
         compiled from "G:\website\laugh\admin\themes\blue\Role\newrole.html" */ ?>
<?php /*%%SmartyHeaderCode:1790550c8707faa8539-13292553%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5538d10d3f38f88c359e9f06af1bea49b6375fd' => 
    array (
      0 => 'G:\\website\\laugh\\admin\\themes\\blue\\Role\\newrole.html',
      1 => 1355156244,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1790550c8707faa8539-13292553',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'roleInfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50c8707fb21b72_71835569',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50c8707fb21b72_71835569')) {function content_50c8707fb21b72_71835569($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/control_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="formContainer">
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
				<span>状态: </span>
				<div class="item_list fleft">
					<label><input type="radio" name="status" value="1" class="radio" <?php if ($_smarty_tpl->tpl_vars['roleInfo']->value['status']==1){?>checked="checked"<?php }?> />启用</label>
					<label><input type="radio" name="status" value="0" class="radio"  <?php if ($_smarty_tpl->tpl_vars['roleInfo']->value['status']==0){?>checked="checked"<?php }?> />禁用</label>
				</div>
			</li>
			<?php echo $_smarty_tpl->getSubTemplate ("Common/nodeTree.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<li class="formblock bordernone">
				<input type="submit" name="newRoleButton" class="button btnyellow4 mauto" value="完成提交" />
			</li>
		</ul>
	</form>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("include/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>