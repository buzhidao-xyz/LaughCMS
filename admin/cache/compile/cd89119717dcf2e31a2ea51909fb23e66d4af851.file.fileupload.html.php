<?php /* Smarty version Smarty-3.1.12, created on 2013-04-23 14:16:39
         compiled from "C:\xampp\htdocs\laugh\admin\themes\green\FileManage\fileupload.html" */ ?>
<?php /*%%SmartyHeaderCode:2289951762747337c78-31378951%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd89119717dcf2e31a2ea51909fb23e66d4af851' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\green\\FileManage\\fileupload.html',
      1 => 1366272252,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2289951762747337c78-31378951',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51762747376cc9_34990007',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51762747376cc9_34990007')) {function content_51762747376cc9_34990007($_smarty_tpl) {?><div class="box">
<div class="boxContent">
<div class="boxFrom">
	<div class="boxTitle">
		<h5>文件上传</h5>
	</div>
	<form name="boxform" action="__APP__/index.php?s=Plugin/fileUpload&action=save" method="post" enctype="multipart/form-data">
	<input type="hidden" name="dir" value="<?php echo $_smarty_tpl->tpl_vars['dir']->value;?>
" />
	<ul>
		<li class="formblock">
			<span>当前目录：</span>
			<div class="caption"><?php echo $_smarty_tpl->tpl_vars['dir']->value;?>
</div>
		</li>
		<li class="formblock">
			<span>选择文件：</span>
			<input type="file" name="newfile" value="" class="input w250" style="height: 22px;" />
		</li>
		<li class="bordernone">
			<input type="submit" name="subut" class="button btngreen2" value="上传" />
		</li>
	</ul>
	</form>
</div>
</div>
</div><?php }} ?>