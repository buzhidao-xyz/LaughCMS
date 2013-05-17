<?php /* Smarty version Smarty-3.1.12, created on 2013-05-17 09:34:02
         compiled from "C:\xampp\htdocs\laugh\admin\themes\blue\Plugin\NavigationEdit.html" */ ?>
<?php /*%%SmartyHeaderCode:312205195890ad767b9-66423239%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6fd3414b9343283da915fa8bba4238fab92377b8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\blue\\Plugin\\NavigationEdit.html',
      1 => 1368754383,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '312205195890ad767b9-66423239',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'navigationInfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5195890adc10d8_86294487',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5195890adc10d8_86294487')) {function content_5195890adc10d8_86294487($_smarty_tpl) {?><div class="box">
<div class="boxContent">
<div class="boxPopupForm">
	<div class="boxTitle">
		<h5>编辑导航信息</h5>
	</div>
	<form name="boxform" action="__APP__/index.php?s=Plugin/NavigationEditSave" method="post" id="colorBoxAjaxForm">
	<input type="hidden" name="navigationid" value="<?php echo $_smarty_tpl->tpl_vars['navigationInfo']->value['id'];?>
" />
	<ul>
		<li class="formblock">
			<span>导航名称：</span>
			<input type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['navigationInfo']->value['title'];?>
" class="input w200" />
		</li>
		<li class="formblock">
			<span>导航地址：</span>
			<input type="text" name="link" value="<?php echo $_smarty_tpl->tpl_vars['navigationInfo']->value['link'];?>
" class="input w350" />
		</li>
		<li class="bordernone bgf6">
			<input type="submit" name="subut" class="button btnblue2" value="编辑" />
		</li>
	</ul>
	</form>
</div>
</div>
</div><?php }} ?>