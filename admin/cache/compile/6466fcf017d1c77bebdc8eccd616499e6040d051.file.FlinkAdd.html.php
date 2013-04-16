<?php /* Smarty version Smarty-3.1.12, created on 2013-04-16 16:57:37
         compiled from "C:\xampp\htdocs\laugh\admin\themes\green\Plugin\FlinkAdd.html" */ ?>
<?php /*%%SmartyHeaderCode:25266516d12819b2150-09957201%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6466fcf017d1c77bebdc8eccd616499e6040d051' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\green\\Plugin\\FlinkAdd.html',
      1 => 1366102654,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25266516d12819b2150-09957201',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'accessStatus' => 0,
    'catalogList' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_516d1281a32b82_29375592',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_516d1281a32b82_29375592')) {function content_516d1281a32b82_29375592($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/control_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php if ($_smarty_tpl->tpl_vars['accessStatus']->value==1){?>
<div class="formContainer" accessStatus=<?php echo $_smarty_tpl->tpl_vars['accessStatus']->value;?>
>
	<div class="formtitle"><h5>添加友情链接</h5></div>
	<form name="newform" action="__APP__/index.php?s=Plugin/FlinkSave" method="post" id="ajaxform" class="newform">
		<ul class="formbody">
			<li class="formblock">
				<span>选择分类: </span>
				<select name="catalogid" style="width:150px;">
					<option value="">|-分类列表</option>
					<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['catalogList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
">&nbsp;|-<?php echo $_smarty_tpl->tpl_vars['c']->value['catalogname'];?>
</option>
					<?php } ?>
				</select>
			</li>
			<li class="formblock">
				<span>链接名称: </span>
				<input type="text" name="linkname" value="" class="input w150" />
			</li>
			<li class="formblock">
				<span>链接地址: </span>
				<input type="text" name="linkurl" value="" class="input w250" />
			</li>
			<li class="formblock bordernone">
				<input type="submit" name="subut" class="button btngreen2" value="添加" />
			</li>
		</ul>
	</form>
</div>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("public/control_bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>