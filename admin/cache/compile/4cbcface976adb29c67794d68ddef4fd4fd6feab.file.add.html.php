<?php /* Smarty version Smarty-3.1.12, created on 2012-11-08 17:23:17
         compiled from "C:\xampp\htdocs\laugh\admin\themes\smooth\node\add.html" */ ?>
<?php /*%%SmartyHeaderCode:25814509b7a05e614d3-13930571%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4cbcface976adb29c67794d68ddef4fd4fd6feab' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\smooth\\node\\add.html',
      1 => 1350725156,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25814509b7a05e614d3-13930571',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'perstatus' => 0,
    'groupTree' => 0,
    'g' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_509b7a05ed04c9_85303135',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509b7a05ed04c9_85303135')) {function content_509b7a05ed04c9_85303135($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("include/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="perstatus" pers="<?php echo $_smarty_tpl->tpl_vars['perstatus']->value;?>
"></div>
<div id="control">
	<div class="control_nav">
		<h3>添加模块</h3>
		<!--
		<ul class="control_nav_tab">
			<li><a href="__APP__/?r=system/role"><span>角色列表</span></a></li>
			<li class="current"><a href="__APP__/?r=system/newRole"><span>新角色</span></a></li>
		</ul>
		-->
	</div>
	<div class="captitle"><h5>新节点表单</h5></div>
	<form name="newform" action="__APP__/?s=Node/saveNode" method="post" id="addajaxform">
		<input type="hidden" name="" />
		<ul class="formbody">
			<li class="formblock colorblock">
				<span>组: </span>
				<select name="groupid" class="input" style="width:150px;">
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
			</li>
			<li class="formblock colorblock">
				<span>父节点: </span>
				<select name="pid" flag="nodepid" class="input" style="width:150px;">
					<option value="" >|-节点菜单</option>
				</select>
			</li>
			<li class="formblock colorblock">
				<span>名称:</span>
				<input type="text" name="title" value="" class="input" style="width:150px;" />
			</li>
			<li class="formblock colorblock">
				<span>描述: </span>
				<input type="text" name="remark" value="" class="input" style="width:150px;" />
			</li>
			<li class="formblock colorblock">
				<span>Control: </span>
				<input type="text" name="control" value="" class="input" style="width:150px;" />
			</li>
			<li class="formblock colorblock">
				<span>Action: </span>
				<input type="text" name="action" value="" class="input" style="width:150px;" />
			</li>
			<li class="formblock">
				<input type="submit" name="subut" class="button" value="完成提交" />
			</li>
		</ul>
	</form>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("include/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>