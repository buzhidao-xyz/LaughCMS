<?php /* Smarty version Smarty-3.1.12, created on 2013-05-09 16:15:50
         compiled from "C:\xampp\htdocs\laugh\admin\themes\blue\FileManage\fileRename.html" */ ?>
<?php /*%%SmartyHeaderCode:29106518b5b362c49d0-71411441%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60ee9ea66e6f0f54b8496c7a9646d6e80c777778' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\blue\\FileManage\\fileRename.html',
      1 => 1367142637,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29106518b5b362c49d0-71411441',
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
  'unifunc' => 'content_518b5b363036e3_36704464',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_518b5b363036e3_36704464')) {function content_518b5b363036e3_36704464($_smarty_tpl) {?><div class="box">
<div class="boxContent">
<div class="boxPopupForm">
	<div class="boxTitle">
		<h5>快捷操作</h5>
	</div>
	<form name="boxform" action="__APP__/index.php?s=Plugin/fileRename&action=save" method="post" id="colorBoxAjaxForm">
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
		<li class="bordernone bgf6">
			<input type="submit" name="subut" class="button btnblue2" value="修改" />
		</li>
	</ul>
	</form>
</div>
</div>
</div><?php }} ?>