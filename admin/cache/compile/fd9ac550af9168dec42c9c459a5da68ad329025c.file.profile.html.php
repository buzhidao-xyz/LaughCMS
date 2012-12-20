<?php /* Smarty version Smarty-3.1.12, created on 2012-12-19 10:05:18
         compiled from "C:\xampp\htdocs\laugh\admin\themes\blue\Admin\profile.html" */ ?>
<?php /*%%SmartyHeaderCode:324650d120de821395-43146421%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd9ac550af9168dec42c9c459a5da68ad329025c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\blue\\Admin\\profile.html',
      1 => 1355124552,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '324650d120de821395-43146421',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userInfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50d120de88c694_22876983',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50d120de88c694_22876983')) {function content_50d120de88c694_22876983($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/control_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!-- <div class="control_nav">
	<h3>添加组</h3>
</div> -->
<div class="formContainer">
	<div class="formtitle"><h5>个人信息修改</h5></div>
	<form name="newform" action="__APP__/index.php?s=Admin/upPassword" method="post" id="addajaxform" class="editform">
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
				<input type="submit" name="subut" class="button btnyellow2" value="修改" />
			</li>
		</ul>
	</form>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/control_bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>