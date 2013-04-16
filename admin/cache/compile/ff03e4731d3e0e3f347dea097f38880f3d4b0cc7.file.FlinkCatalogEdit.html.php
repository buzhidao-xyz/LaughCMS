<?php /* Smarty version Smarty-3.1.12, created on 2013-04-16 17:20:41
         compiled from "C:\xampp\htdocs\laugh\admin\themes\green\Plugin\FlinkCatalogEdit.html" */ ?>
<?php /*%%SmartyHeaderCode:30299516d17e9e21784-39565949%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff03e4731d3e0e3f347dea097f38880f3d4b0cc7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\green\\Plugin\\FlinkCatalogEdit.html',
      1 => 1366017936,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30299516d17e9e21784-39565949',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CatalogInfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_516d17e9e92de6_99964214',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_516d17e9e92de6_99964214')) {function content_516d17e9e92de6_99964214($_smarty_tpl) {?><div class="box">
<div class="boxContent">
<div class="boxFrom">
	<div class="boxTitle">
		<h5>编辑链接分类信息</h5>
	</div>
	<form name="boxform" action="__APP__/index.php?s=Plugin/FlinkCatalogEditSave" method="post" id="colorBoxAjaxForm">
	<input type="hidden" name="catalogid" value="<?php echo $_smarty_tpl->tpl_vars['CatalogInfo']->value['id'];?>
" />
	<ul>
		<li class="formblock">
			<span>分类名称：</span>
			<input type="text" name="catalogname" value="<?php echo $_smarty_tpl->tpl_vars['CatalogInfo']->value['catalogname'];?>
" class="input w200" />
		</li>
		<li class="formblock">
			<span>排序位置：</span>
			<input type="text" name="sort" value="<?php echo $_smarty_tpl->tpl_vars['CatalogInfo']->value['sort'];?>
" class="input w200" />
		</li>
		<li class="formblock">
			<span>是/否显示：</span>
			<div class="item_list fleft">
				<label><input type="radio" name="state" value="1" class="radio" <?php if ($_smarty_tpl->tpl_vars['CatalogInfo']->value['state']==1){?>checked="checked"<?php }?> />显示</label>
				<label><input type="radio" name="state" value="0" class="radio" <?php if ($_smarty_tpl->tpl_vars['CatalogInfo']->value['state']==0){?>checked="checked"<?php }?> />隐藏</label>
			</div>
		</li>
		<li class="bordernone">
			<input type="submit" name="subut" class="button btngreen2" value="修改" />
		</li>
	</ul>
	</form>
</div>
</div>
</div><?php }} ?>