<?php /* Smarty version Smarty-3.1.12, created on 2013-04-27 19:10:08
         compiled from "C:\xampp\htdocs\laugh\admin\themes\blue\FileManage\spaceCheck.html" */ ?>
<?php /*%%SmartyHeaderCode:29830517bb21065f997-63686491%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b4856c0bd5319baea7b0cfde57b7be162367395' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\blue\\FileManage\\spaceCheck.html',
      1 => 1366271880,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29830517bb21065f997-63686491',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'diskSpace' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_517bb21069b640_39427831',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_517bb21069b640_39427831')) {function content_517bb21069b640_39427831($_smarty_tpl) {?><div class="box">
<div class="boxContent">
<div class="boxPopupForm">
	<div class="boxTitle">
		<h5>空间检查</h5>
	</div>
	<form name="boxform" method="post" id="colorBoxAjaxForm">
	<ul>
		<li class="formblock">
			<span>当前目录占用空间：</span>
			<div class="caption"><?php echo $_smarty_tpl->tpl_vars['diskSpace']->value;?>
</div>
		</li>
	</ul>
	</form>
</div>
</div>
</div><?php }} ?>