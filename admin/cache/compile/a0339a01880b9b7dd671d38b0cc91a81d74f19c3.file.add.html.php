<?php /* Smarty version Smarty-3.1.12, created on 2012-11-21 11:04:05
         compiled from "C:\xampp\htdocs\laugh\admin\themes\smooth\Admin\add.html" */ ?>
<?php /*%%SmartyHeaderCode:346950ac44a5b2a256-07509013%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0339a01880b9b7dd671d38b0cc91a81d74f19c3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\smooth\\Admin\\add.html',
      1 => 1353375083,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '346950ac44a5b2a256-07509013',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50ac44a5b6bbd3_81448490',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50ac44a5b6bbd3_81448490')) {function content_50ac44a5b6bbd3_81448490($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("include/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="content">
	<div id="control">
		<div class="box">
			<div class="title">
				<h5>新管理员表单</h5>
			</div>
			<form name="newform" action="__APP__/?s=Admin/saveAdmin" method="post" id="addajaxform">
			<div class="form">
				<div class="fields">
					<div class="field">
						<div class="label">
							<label for="input-small">账户:</label>
						</div>
						<div class="input" style="float:left;">
							<input type="text" name="username" class="small" />
						</div>
					</div>
					<div class="field">
						<div class="label">
							<label for="input-small">密码:</label>
						</div>
						<div class="input" style="float:left;">
							<input type="password" name="password" class="small" />
						</div>
					</div>
					<div class="field">
						<div class="label">
							<label for="input-small">重复密码:</label>
						</div>
						<div class="input" style="float:left;">
							<input type="password" name="password1" class="small" />
						</div>
					</div>
					<div class="field">
						<div class="label label-radio">
							<label for="input-small">是否启用:</label>
						</div>
						<div class="radios" style="float:left;">
							<div class="radio">
								<input type="radio" name="status" value="1" class="radio" checked="checked" /><label>启用</label>
							</div>
							<div class="radio">
								<input type="radio" name="status" value="0" class="radio" /><label>禁用</label>
							</div>
						</div>
					</div>
					<div class="buttons">
						<input type="submit" name="submit" value="添加" />
					</div>
				</div>
			</div>
			</form>
		</div>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("include/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>