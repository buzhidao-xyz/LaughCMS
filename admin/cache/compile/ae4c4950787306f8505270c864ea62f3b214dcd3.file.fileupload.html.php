<?php /* Smarty version Smarty-3.1.12, created on 2013-01-30 23:34:14
         compiled from "G:\website\laugh\admin\themes\green\FileManage\fileupload.html" */ ?>
<?php /*%%SmartyHeaderCode:272351093d76dac352-58597588%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae4c4950787306f8505270c864ea62f3b214dcd3' => 
    array (
      0 => 'G:\\website\\laugh\\admin\\themes\\green\\FileManage\\fileupload.html',
      1 => 1359547532,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '272351093d76dac352-58597588',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51093d76e0caf6_69600885',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51093d76e0caf6_69600885')) {function content_51093d76e0caf6_69600885($_smarty_tpl) {?><div class="box">
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
			<input type="file" name="filename" value="" class="input w250" style="height: 22px;" />
		</li>
		<li class="bordernone">
			<input type="submit" name="subut" class="button btngreen2" value="上传" />
		</li>
	</ul>
	</form>
</div>
</div>
</div><?php }} ?>