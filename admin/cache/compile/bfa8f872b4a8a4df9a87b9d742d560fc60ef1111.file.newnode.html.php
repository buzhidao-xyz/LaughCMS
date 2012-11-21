<?php /* Smarty version Smarty-3.1.12, created on 2012-11-21 14:45:06
         compiled from "C:\xampp\htdocs\laugh\admin\themes\smooth\node\newnode.html" */ ?>
<?php /*%%SmartyHeaderCode:2004350ac78726e8315-93606157%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bfa8f872b4a8a4df9a87b9d742d560fc60ef1111' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\smooth\\node\\newnode.html',
      1 => 1352682482,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2004350ac78726e8315-93606157',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'groupTree' => 0,
    'g' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50ac7872751497_80636559',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50ac7872751497_80636559')) {function content_50ac7872751497_80636559($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("include/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="content">
	<div id="control">
		<div class="box">
			<div class="title">
				<h5>新节点表单</h5>
			</div>
			<form name="newform" action="__APP__/?s=Node/saveNode" method="post" id="addajaxform">
			<div class="form">
				<div class="fields">
					<div class="field  field-first">
						<div class="label">
							<label for="select">组:</label>
						</div>
						<div class="select">
							<select id="select" name="groupid">
								<option value="" >|-组菜单</option>
								<?php  $_smarty_tpl->tpl_vars['g'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['g']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['groupTree']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['g']->key => $_smarty_tpl->tpl_vars['g']->value){
$_smarty_tpl->tpl_vars['g']->_loop = true;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['g']->value['id'];?>
">&nbsp;|-<?php echo $_smarty_tpl->tpl_vars['g']->value['title'];?>
</option>
								<?php } ?>
							</select>
						</div>
					</div>
					<div class="field">
						<div class="label">
							<label for="select">父节点:</label>
						</div>
						<div class="select" id="nodepid">
							<select name="pid">
								<option value="" >|-节点菜单</option>
							</select>
						</div>
					</div>
					<div class="field">
						<div class="label">
							<label for="input-small">名称:</label>
						</div>
						<div class="input" style="float:left;">
							<input type="text" id="input-small" name="title" class="small" />
						</div>
					</div>
					<div class="field">
						<div class="label">
							<label for="input-small">描述:</label>
						</div>
						<div class="input" style="float:left;">
							<input type="text" id="input-small" name="remark" class="small" />
						</div>
					</div>
					<div class="field">
						<div class="label">
							<label for="input-small">Control:</label>
						</div>
						<div class="input" style="float:left;">
							<input type="text" id="input-small" name="control" class="small" />
						</div>
					</div>
					<div class="field">
						<div class="label">
							<label for="input-small">Action:</label>
						</div>
						<div class="input" style="float:left;">
							<input type="text" id="input-small" name="action" class="small" />
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