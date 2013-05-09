<?php /* Smarty version Smarty-3.1.12, created on 2013-05-09 16:17:26
         compiled from "C:\xampp\htdocs\laugh\admin\themes\blue\FileManage\newdir.html" */ ?>
<?php /*%%SmartyHeaderCode:31216518b5b964a5693-79747812%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b0171f5b891ccf8f284108c6e66c0000c84a009' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\blue\\FileManage\\newdir.html',
      1 => 1367142637,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31216518b5b964a5693-79747812',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_518b5b96518f14_89284988',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_518b5b96518f14_89284988')) {function content_518b5b96518f14_89284988($_smarty_tpl) {?><div class="box">
<div class="boxContent">
<div class="boxPopupForm">
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
		<li class="bordernone bgf6">
			<input type="submit" name="subut" class="button btnblue2" value="保存" />
		</li>
	</ul>
	</form>
</div>
</div>
</div><?php }} ?>