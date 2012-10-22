<?php /* Smarty version Smarty-3.1.11, created on 2012-10-22 21:47:10
         compiled from "/usr/local/webserver/site/laugh/admin/themes/default/Group/add.html" */ ?>
<?php /*%%SmartyHeaderCode:126836941950854e5e180691-13410023%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1fc435c17c5e08a5e32b763c8368152c6032c62' => 
    array (
      0 => '/usr/local/webserver/site/laugh/admin/themes/default/Group/add.html',
      1 => 1350912647,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '126836941950854e5e180691-13410023',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'perstatus' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50854e5e1ca3e2_68827412',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50854e5e1ca3e2_68827412')) {function content_50854e5e1ca3e2_68827412($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("include/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="perstatus" pers="<?php echo $_smarty_tpl->tpl_vars['perstatus']->value;?>
"></div>
<div id="control">
	<div class="control_nav">
		<h3>添加组</h3>
	</div>
	<div class="captitle"><h5>新组节点表单</h5></div>
	<form name="newform" action="__APP__/?s=Group/saveGroup" method="post" id="addajaxform">
		<input type="hidden" name="" />
		<ul class="formbody">
			<li class="formblock colorblock">
				<span>名称:</span>
				<input type="text" name="title" value="" class="input" style="width:150px;" />
			</li>
			<li class="formblock">
				<input type="submit" name="subut" class="button" value="完成提交" />
			</li>
		</ul>
	</form>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("include/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>