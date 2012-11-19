<?php /* Smarty version Smarty-3.1.12, created on 2012-11-19 22:25:06
         compiled from "/usr/local/webserver/site/laugh/admin/themes/smooth/Admin/add.html" */ ?>
<?php /*%%SmartyHeaderCode:114913749350aa41420b0328-08067049%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5888ed2757eaec867b319c619865cd89c73523c' => 
    array (
      0 => '/usr/local/webserver/site/laugh/admin/themes/smooth/Admin/add.html',
      1 => 1353334355,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114913749350aa41420b0328-08067049',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50aa41420f6632_37122145',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50aa41420f6632_37122145')) {function content_50aa41420f6632_37122145($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("include/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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