<?php /* Smarty version Smarty-3.1.12, created on 2013-01-21 17:29:23
         compiled from "C:\xampp\htdocs\laugh\admin\themes\green\FileManage\fileMove.html" */ ?>
<?php /*%%SmartyHeaderCode:894650fd0a73bf77e2-35458291%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ffc70818dbeca5fb40d1164d8aee28f42260463' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\green\\FileManage\\fileMove.html',
      1 => 1358760408,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '894650fd0a73bf77e2-35458291',
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
  'unifunc' => 'content_50fd0a73c4f381_37811555',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50fd0a73c4f381_37811555')) {function content_50fd0a73c4f381_37811555($_smarty_tpl) {?><div class="box">
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
			<span>被移动文件: </span>
			<div class="caption"><?php echo $_smarty_tpl->tpl_vars['filename']->value;?>
</div>
		</li>
		<li class="formblock">
			<span>当前目录: </span>
			<div class="caption"><?php echo $_smarty_tpl->tpl_vars['dir']->value;?>
</div>
		</li>
		<li class="formblock">
			<span>新目录: </span>
			<input type="text" name="newdir" value="" class="input w200" />
		</li>
		<li class="bordernone">
			<input type="submit" name="subut" class="button btngreen2" value="移动" />
		</li>
	</ul>
	</form>
</div>
</div>
</div><?php }} ?>