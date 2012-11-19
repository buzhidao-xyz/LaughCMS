<?php /* Smarty version Smarty-3.1.12, created on 2012-11-19 16:03:26
         compiled from "C:\xampp\htdocs\laugh\admin\themes\smooth\Admin\add.html" */ ?>
<?php /*%%SmartyHeaderCode:2017450a9e7ce20a8b5-96714178%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0339a01880b9b7dd671d38b0cc91a81d74f19c3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\smooth\\Admin\\add.html',
      1 => 1353304556,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2017450a9e7ce20a8b5-96714178',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50a9e7ce2702e1_85692471',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a9e7ce2702e1_85692471')) {function content_50a9e7ce2702e1_85692471($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("include/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="content">
	<div id="control">
		<div class="box">
			<div class="title">
				<h5>新组节点表单</h5>
			</div>
			<form name="newform" action="__APP__/?s=Group/saveGroup" method="post" id="addajaxform">
			<div class="form">
				<div class="fields">
					<div class="field  field-first">
						<div class="label">
							<label for="input-small">名称:</label>
						</div>
						<div class="input" style="float:left;">
							<input type="text" id="input-small" name="title" class="small" />
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