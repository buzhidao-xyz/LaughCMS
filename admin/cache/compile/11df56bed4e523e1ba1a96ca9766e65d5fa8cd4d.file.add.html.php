<?php /* Smarty version Smarty-3.1.12, created on 2013-12-29 23:26:34
         compiled from "F:\website\laugh\admin\themes\blue\Admin\add.html" */ ?>
<?php /*%%SmartyHeaderCode:52652c03f2abae8b8-38325141%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11df56bed4e523e1ba1a96ca9766e65d5fa8cd4d' => 
    array (
      0 => 'F:\\website\\laugh\\admin\\themes\\blue\\Admin\\add.html',
      1 => 1388326944,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '52652c03f2abae8b8-38325141',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'accessStatus' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52c03f2ac19504_66576005',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c03f2ac19504_66576005')) {function content_52c03f2ac19504_66576005($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("Public/control_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!-- <div class="control_nav">
	<h3>添加组</h3>
</div> -->
<?php if ($_smarty_tpl->tpl_vars['accessStatus']->value==1){?>
<div class="formContainer" accessStatus=<?php echo $_smarty_tpl->tpl_vars['accessStatus']->value;?>
>
	<div class="formtitle"><h5>新管理员表单</h5></div>
	<form name="newform" action="__APP__/index.php?s=Admin/saveAdmin" method="post" id="ajaxform" class="newform">
		<ul class="formbody">
			<li class="formblock">
				<span>账户:</span>
				<input type="text" name="adminname" autocomplete="off" value="" class="input w150" />
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
			<li class="formautoblock">
				<span>选择管理栏目:</span>
				<div id="ColumnTree" style="float:left;">
					<?php echo $_smarty_tpl->getSubTemplate ("Admin/ColumnTree.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				</div>
			</li>
			<li class="formblock bordernone bgf6">
				<input type="submit" name="subut" class="button btnblue2" value="确定" />
			</li>
		</ul>
	</form>
</div>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("Public/control_bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>