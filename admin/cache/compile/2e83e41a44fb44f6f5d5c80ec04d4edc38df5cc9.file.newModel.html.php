<?php /* Smarty version Smarty-3.1.12, created on 2013-04-03 14:14:48
         compiled from "C:\xampp\htdocs\laugh\admin\themes\green\ColumnModel\newModel.html" */ ?>
<?php /*%%SmartyHeaderCode:4198515bc8d83d3ef5-90276737%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e83e41a44fb44f6f5d5c80ec04d4edc38df5cc9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\green\\ColumnModel\\newModel.html',
      1 => 1362116391,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4198515bc8d83d3ef5-90276737',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'accessStatus' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_515bc8d842b9a0_59346698',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_515bc8d842b9a0_59346698')) {function content_515bc8d842b9a0_59346698($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/control_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php if ($_smarty_tpl->tpl_vars['accessStatus']->value==1){?>
<div class="formContainer" accessStatus=<?php echo $_smarty_tpl->tpl_vars['accessStatus']->value;?>
>
	<div class="formtitle"><h5>添加新内容模型</h5></div>
	<form name="newcolumnform" action="__APP__/index.php?s=CTModel/saveColumnModel" method="post" class="newform">
		<ul class="formbody">
			<li class="formblock">
				<span>模型名称: </span>
				<input type="text" name="name" value="" class="input w200" />
			</li>
			<li class="formblock">
				<span>模型表名: </span>
				<input type="text" name="table" value="" class="input w150" />
			</li>
			<li class="formblock">
				<span>模型控制器: </span>
				<input type="text" name="control" value="" class="input w150" />
			</li>
			<li class="formblock">
				<span>前台调用字段:</span>
				<input type="text" name="" value="*" class="input w250" />
				*代表所有字段
			</li>
			<li class="formautoblock">
				<span>模型简介:</span>
				<textarea name="description" rows="4" cols="47"></textarea>
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