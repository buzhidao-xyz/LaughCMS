<?php /* Smarty version Smarty-3.1.12, created on 2012-11-26 13:30:40
         compiled from "C:\xampp\htdocs\laugh\admin\themes\smooth\Admin\profile.html" */ ?>
<?php /*%%SmartyHeaderCode:155850b2fe801db6b6-36735485%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1794d7c5c6a4b8233e0b7bfaf49ebdbb7d7610a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\smooth\\Admin\\profile.html',
      1 => 1353286829,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '155850b2fe801db6b6-36735485',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userInfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50b2fe8024d2e0_59350108',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50b2fe8024d2e0_59350108')) {function content_50b2fe8024d2e0_59350108($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("include/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="content">
	<div id="control">
		<div class="box">
			<div class="title">
				<h5>个人信息表单</h5>
			</div>
			<form name="newform" action="__APP__/?s=Admin/upPassword" method="post" id="addajaxform">
			<div class="form">
				<div class="fields">
					<div class="field">
						<div class="label">
							<label for="input-small">管理员账号:</label>
						</div>
						<div class="label">
							<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['username'];?>

						</div>
					</div>
					<div class="field">
						<div class="label">
							<label for="input-small">原始密码:</label>
						</div>
						<div class="input">
							<input type="password" name="password0" class="small" />
						</div>
					</div>
					<div class="field">
						<div class="label">
							<label for="input-small">新密码:</label>
						</div>
						<div class="input">
							<input type="password" name="password" class="small" />
						</div>
						<div class="caption">
							*数字、字母下划线或-@#!，长度3-20
						</div>
					</div>
					<div class="field">
						<div class="label">
							<label for="input-small">重复密码:</label>
						</div>
						<div class="input">
							<input type="password" name="password1" class="small" />
						</div>
					</div>
					<div class="buttons">
						<input type="submit" name="submit" value="修改" />
					</div>
				</div>
			</div>
			</form>
		</div>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("include/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>