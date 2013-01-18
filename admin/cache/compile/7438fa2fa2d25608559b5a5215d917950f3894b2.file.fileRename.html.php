<?php /* Smarty version Smarty-3.1.12, created on 2013-01-18 17:38:09
         compiled from "C:\xampp\htdocs\laugh\admin\themes\green\FileManage\fileRename.html" */ ?>
<?php /*%%SmartyHeaderCode:2255750f918011e3758-36335749%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7438fa2fa2d25608559b5a5215d917950f3894b2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\green\\FileManage\\fileRename.html',
      1 => 1358501868,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2255750f918011e3758-36335749',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oldfilename' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50f9180121fe06_00119829',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50f9180121fe06_00119829')) {function content_50f9180121fe06_00119829($_smarty_tpl) {?><div class="box">
<div class="boxContent">
<div class="boxFrom">
	<div class="boxTitle">
		<h5>快捷操作</h5>
	</div>
	<form name="boxform" action="__APP__/index.php?s=Plugin/fileRename&action=save" method="post" id="ajaxform">
	<ul>
		<li class="formblock">
			<span>原名称: </span>
			<input type="text" name="oldfilename" value="<?php echo $_smarty_tpl->tpl_vars['oldfilename']->value;?>
" class="input w200" />
		</li>
		<li class="formblock">
			<span>新名称: </span>
			<input type="text" name="newfilename" value="" class="input w200" />
		</li>
		<li class="bordernone">
			<input type="submit" name="subut" class="button btnyellow2" value="修改" />
		</li>
	</ul>
	</form>
</div>
</div>
</div>
<script type="text/javascript">

</script><?php }} ?>