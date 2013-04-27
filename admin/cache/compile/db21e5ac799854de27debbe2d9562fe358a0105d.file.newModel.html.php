<?php /* Smarty version Smarty-3.1.12, created on 2013-04-27 18:54:02
         compiled from "C:\xampp\htdocs\laugh\admin\themes\blue\ColumnModel\newModel.html" */ ?>
<?php /*%%SmartyHeaderCode:18546517bae4a7800f7-55835558%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db21e5ac799854de27debbe2d9562fe358a0105d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\blue\\ColumnModel\\newModel.html',
      1 => 1367059305,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18546517bae4a7800f7-55835558',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'accessStatus' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_517bae4a7d5c43_04783238',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_517bae4a7d5c43_04783238')) {function content_517bae4a7d5c43_04783238($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/control_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="opTop">
	<a href="__APP__/index.php?s=CTModel/addColumnModel" class="opTopOn">新增模型</a>
	<a href="__APP__/index.php?s=CTModel/ColumnModel">模型管理</a>
</div>
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