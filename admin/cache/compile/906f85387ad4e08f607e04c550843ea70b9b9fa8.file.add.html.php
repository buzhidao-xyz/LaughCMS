<?php /* Smarty version Smarty-3.1.12, created on 2012-12-12 19:35:52
         compiled from "G:\website\laugh\admin\themes\blue\Admin\add.html" */ ?>
<?php /*%%SmartyHeaderCode:1459850c86c18a8e710-22660515%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '906f85387ad4e08f607e04c550843ea70b9b9fa8' => 
    array (
      0 => 'G:\\website\\laugh\\admin\\themes\\blue\\Admin\\add.html',
      1 => 1355144332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1459850c86c18a8e710-22660515',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50c86c18afa2a3_07737784',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50c86c18afa2a3_07737784')) {function content_50c86c18afa2a3_07737784($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/control_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!-- <div class="control_nav">
	<h3>添加组</h3>
</div> -->
<div class="formContainer">
	<div class="formtitle"><h5>新管理员表单</h5></div>
	<form name="newform" action="__APP__/index.php?s=Admin/saveAdmin" method="post" id="addajaxform" class="newform">
		<ul class="formbody">
			<li class="formblock">
				<span>账户:</span>
				<input type="text" name="username" autocomplete="off" value="" class="input w150" />
			</li>
			<li class="formblock">
				<span>密码:</span>
				<input type="password" name="password" autocomplete="off" value="" class="input w150" />
			</li>
			<li class="formblock">
				<span>重复密码:</span>
				<input type="password" name="password1" autocomplete="off" value="" class="input w150" />
			</li>
			<li class="formblock">
				<span>是否启用: </span>
				<div class="item_list fleft">
					<label><input type="radio" name="status" value="1" class="radio" checked="checked" />启用</label>
					<label><input type="radio" name="status" value="0" class="radio" />禁用</label>
				</div>
			</li>
			<li class="formblock bordernone">
				<input type="submit" name="subut" class="button btnyellow2" value="添加" />
			</li>
		</ul>
	</form>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/control_bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>