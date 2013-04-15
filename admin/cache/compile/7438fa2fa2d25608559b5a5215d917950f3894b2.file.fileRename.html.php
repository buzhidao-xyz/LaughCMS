<?php /* Smarty version Smarty-3.1.12, created on 2013-04-15 17:07:52
         compiled from "C:\xampp\htdocs\laugh\admin\themes\green\FileManage\fileRename.html" */ ?>
<?php /*%%SmartyHeaderCode:3110516bc3685ce460-17922868%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7438fa2fa2d25608559b5a5215d917950f3894b2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\green\\FileManage\\fileRename.html',
      1 => 1358759228,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3110516bc3685ce460-17922868',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dir' => 0,
    'oldfilename' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_516bc368610562_36015353',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_516bc368610562_36015353')) {function content_516bc368610562_36015353($_smarty_tpl) {?><div class="box">
<div class="boxContent">
<div class="boxFrom">
	<div class="boxTitle">
		<h5>快捷操作</h5>
	</div>
	<form name="boxform" action="__APP__/index.php?s=Plugin/fileRename&action=save" method="post" id="ajaxform">
	<input type="hidden" name="dir" value="<?php echo $_smarty_tpl->tpl_vars['dir']->value;?>
" />
	<ul>
		<li class="formblock">
			<span>原名称: </span>
			<input type="text" name="oldfilename" value="<?php echo $_smarty_tpl->tpl_vars['oldfilename']->value;?>
" readonly class="input w200" />
		</li>
		<li class="formblock">
			<span>新名称: </span>
			<input type="text" name="newfilename" value="" class="input w200" />
		</li>
		<li class="bordernone">
			<input type="submit" name="subut" class="button btngreen2" value="修改" />
		</li>
	</ul>
	</form>
</div>
</div>
</div><?php }} ?>