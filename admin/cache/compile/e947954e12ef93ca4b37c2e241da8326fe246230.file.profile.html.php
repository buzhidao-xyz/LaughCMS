<?php /* Smarty version Smarty-3.1.12, created on 2013-01-24 15:27:58
         compiled from "C:\xampp\htdocs\laugh\admin\themes\green\Admin\profile.html" */ ?>
<?php /*%%SmartyHeaderCode:274785100e27e0da532-84827819%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e947954e12ef93ca4b37c2e241da8326fe246230' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\green\\Admin\\profile.html',
      1 => 1358729926,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '274785100e27e0da532-84827819',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userInfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5100e27e14cf49_93094544',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5100e27e14cf49_93094544')) {function content_5100e27e14cf49_93094544($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/control_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!-- <div class="control_nav">
	<h3>添加组</h3>
</div> -->
<div class="formContainer">
	<div class="formtitle"><h5>个人信息修改</h5></div>
	<form name="newform" action="__APP__/index.php?s=Admin/upPassword" method="post" id="ajaxform" class="editform">
		<input type="hidden" name="" />
		<ul class="formbody">
			<li class="formblock">
				<span>管理员账号: </span>
				<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['username'];?>

			</li>
			<li class="formblock">
				<span>原密码:</span>
				<input type="password" name="password0" autocomplete="off" value="" class="input w150" />
			</li>
			<li class="formblock">
				<span>新密码:</span>
				<input type="password" name="password" autocomplete="off" value="" class="input w150" />
				<div class="caption">
					*数字、字母下划线或-@#!，长度3-20
				</div>
			</li>
			<li class="formblock">
				<span>重复密码:</span>
				<input type="password" name="password1" autocomplete="off" value="" class="input w150" />
			</li>
			<li class="formblock bordernone">
				<input type="submit" name="subut" class="button btngreen2" value="修改" />
			</li>
		</ul>
	</form>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/control_bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>