<?php /* Smarty version Smarty-3.1.12, created on 2012-11-21 17:10:08
         compiled from "C:\xampp\htdocs\laugh\admin\themes\smooth\Role\newrole.html" */ ?>
<?php /*%%SmartyHeaderCode:965350ac9a705674b9-10800430%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9d2a91456a0fcc4eb524eb43abd48dcc4d4de18' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\smooth\\Role\\newrole.html',
      1 => 1353489006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '965350ac9a705674b9-10800430',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'roleInfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50ac9a705e4559_37876826',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50ac9a705e4559_37876826')) {function content_50ac9a705e4559_37876826($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("include/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link rel="stylesheet" href="themes/smooth/js/plugin/zTreeStyle/zTreeStyle.css" type="text/css">
<link rel="stylesheet" href="themes/smooth/js/plugin/zTreeStyle/roletree.css" type="text/css">
<div id="content">
	<div id="control">
		<div class="box">
			<div class="title">
				<h5>新角色表单</h5>
			</div>
			<form name="newform" action="__APP__/Role/roleModify" method="post" method="post" id="roleform">
			<input type="hidden"  name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['roleInfo']->value['id'];?>
" />
			<div class="form">
				<div class="fields">
					<div id="step1" class="stable_box">
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
						<div class="buttons">
							<input type="submit" name="subutstep" value="下一步" />
						</div>
					</div>
					<div id="step2" class="field stable_box stable_box1">
						<table class="stable" border="0" cellspacing="0" cellpadding="0">
						   <tr>
							 <td colspan="4"><b>选择节点权限</b></td>
						   </tr> 
							 <tr>
							 <td colspan="4"><ul id="treeDemo" class="tree"></ul></td>
						   </tr>
						   <tr>
							<td colspan="4">
								<div class="buttons">
									<input type="button" name="subutstep" value="展开/收缩" /> <input type="button" name="subutstep" value="上一步" /> <input type="button" name="subutstep" value="下一步" />
								</div>
							</td>
						   </tr>
						</table>
					</div>
					<div id="step3" class="field stable_box stable_box1">
						<table class="stable" border="0" cellspacing="0" cellpadding="0">
						   <tr  id="rolelist">
							 <td colspan="4"><b></b></td>
						   </tr>
						   <tr>
							 <td colspan="4"><b></b></td>
						   </tr> 
						   <tr>
							 <td>
								<div class="buttons">
									<input type="button" name="subutstep" value="上一步" />
									<input type="submit" name="subutstep" class="button buttonml10" value="完成提交" />
								</div>
							</td>
						   </tr>
						</table>
					</div>
				</div>
			</div>
			</form>
		</div>
	</div>
</div>
<script src="themes/smooth/js/role.js" type="text/javascript"></script>
<script src="themes/smooth/js/plugin/zTreeStyle/jquery.ztree-2.6.js" type="text/javascript"></script>
<?php echo $_smarty_tpl->getSubTemplate ("include/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>