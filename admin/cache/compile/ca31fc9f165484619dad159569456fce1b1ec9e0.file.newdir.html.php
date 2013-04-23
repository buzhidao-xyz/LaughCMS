<?php /* Smarty version Smarty-3.1.12, created on 2013-04-23 14:16:36
         compiled from "C:\xampp\htdocs\laugh\admin\themes\green\FileManage\newdir.html" */ ?>
<?php /*%%SmartyHeaderCode:482517627445378d4-98928296%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca31fc9f165484619dad159569456fce1b1ec9e0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\green\\FileManage\\newdir.html',
      1 => 1366271856,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '482517627445378d4-98928296',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_517627445930b9_43702509',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_517627445930b9_43702509')) {function content_517627445930b9_43702509($_smarty_tpl) {?><div class="box">
<div class="boxContent">
<div class="boxFrom">
	<div class="boxTitle">
		<h5>新建目录</h5>
	</div>
	<form name="boxform" action="__APP__/index.php?s=Plugin/newDir&action=save" method="post" id="colorBoxAjaxForm">
	<input type="hidden" name="dir" value="<?php echo $_smarty_tpl->tpl_vars['dir']->value;?>
" class="input w200" />
	<ul>
		<li class="formblock">
			<span>当前目录：</span>
			<div class="caption"><?php echo $_smarty_tpl->tpl_vars['dir']->value;?>
</div>
		</li>
		<li class="formblock">
			<span>目录名：</span>
			<input type="text" name="newdir" value="" class="input w200" />
		</li>
		<li class="bordernone">
			<input type="submit" name="subut" class="button btngreen2" value="保存" />
		</li>
	</ul>
	</form>
</div>
</div>
</div><?php }} ?>