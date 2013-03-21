<?php /* Smarty version Smarty-3.1.12, created on 2013-03-19 14:05:20
         compiled from "C:\xampp\htdocs\laugh\admin\themes\green\FileManage\fileMove.html" */ ?>
<?php /*%%SmartyHeaderCode:1469251480020c1b001-37299888%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ffc70818dbeca5fb40d1164d8aee28f42260463' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\green\\FileManage\\fileMove.html',
      1 => 1358835106,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1469251480020c1b001-37299888',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dir' => 0,
    'filename' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51480020c682f8_62023325',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51480020c682f8_62023325')) {function content_51480020c682f8_62023325($_smarty_tpl) {?><div class="box">
<div class="boxContent">
<div class="boxFrom">
	<div class="boxTitle">
		<h5>文件移动</h5>
	</div>
	<form name="boxform" action="__APP__/index.php?s=Plugin/fileMove&action=save" method="post" id="ajaxform">
	<input type="hidden" name="dir" value="<?php echo $_smarty_tpl->tpl_vars['dir']->value;?>
" />
	<input type="hidden" name="filename" value="<?php echo $_smarty_tpl->tpl_vars['filename']->value;?>
" />
	<ul>
		<li class="formblock">
			<span>文件：</span>
			<div class="caption"><?php echo $_smarty_tpl->tpl_vars['filename']->value;?>
</div>
		</li>
		<li class="formblock">
			<span>原目录：</span>
			<div class="caption"><?php echo $_smarty_tpl->tpl_vars['dir']->value;?>
</div>
		</li>
		<li class="formblock">
			<span>新目录：</span>
			<input type="text" name="newdir" value="" class="input w250" />
		</li>
		<li class="bordernone">
			<input type="submit" name="subut" class="button btngreen2" value="移动" />
		</li>
	</ul>
	</form>
</div>
</div>
</div><?php }} ?>