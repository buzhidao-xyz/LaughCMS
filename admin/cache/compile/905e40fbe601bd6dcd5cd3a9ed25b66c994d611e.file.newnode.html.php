<?php /* Smarty version Smarty-3.1.12, created on 2013-11-24 17:44:44
         compiled from "F:\website\laugh\admin\themes\blue\Node\newnode.html" */ ?>
<?php /*%%SmartyHeaderCode:143425291ca8c168664-35096513%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '905e40fbe601bd6dcd5cd3a9ed25b66c994d611e' => 
    array (
      0 => 'F:\\website\\laugh\\admin\\themes\\blue\\Node\\newnode.html',
      1 => 1381140857,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143425291ca8c168664-35096513',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'accessStatus' => 0,
    'groupTree' => 0,
    'g' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5291ca8c23fe12_84779471',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5291ca8c23fe12_84779471')) {function content_5291ca8c23fe12_84779471($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("Public/control_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!-- <div class="control_nav">
	<h3>添加组</h3>
</div> -->
<?php if ($_smarty_tpl->tpl_vars['accessStatus']->value==1){?>
<div class="formContainer" accessStatus=<?php echo $_smarty_tpl->tpl_vars['accessStatus']->value;?>
>
	<div class="formtitle"><h5>新操作节点表单</h5></div>
	<form name="newform" action="__APP__/index.php?s=Node/saveNode" method="post" id="ajaxform" class="newform">
		<ul class="formbody">
			<li class="formblock">
				<span>组: </span>
				<select id="select" name="groupid" style="width:150px;">
					<option value="">|-组菜单</option>
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
			<li class="formblock">
				<span>父节点: </span>
				<select name="pid" flag="nodepid" style="width:150px;">
					<option value="">|-节点菜单</option>
				</select>
			</li>
			<li class="formblock">
				<span>名称: </span>
				<input type="text" name="title" autocomplete="off" value="" class="input w150" />
			</li>
			<li class="formblock">
				<span>描述: </span>
				<input type="text" name="remark" autocomplete="off" value="" class="input w250" />
			</li>
			<li class="formblock">
				<span>Control: </span>
				<input type="text" name="control" autocomplete="off" value="" class="input w100" />
			</li>
			<li class="formblock">
				<span>Action: </span>
				<input type="text" name="action" autocomplete="off" value="" class="input w150" />
			</li>
			<li class="formblock bordernone bgf6">
				<input type="submit" name="subut" class="button btnblue2" value="添加" />
			</li>
		</ul>
	</form>
</div>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("Public/control_bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>