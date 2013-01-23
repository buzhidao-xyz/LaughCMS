<?php /* Smarty version Smarty-3.1.12, created on 2013-01-23 16:17:01
         compiled from "C:\xampp\htdocs\laugh\admin\themes\green\FileManage\spaceCheck.html" */ ?>
<?php /*%%SmartyHeaderCode:2506450ff9c7d70d309-57023268%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbfc1abd3a4d4234e37511bf1d91b717114a9a46' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\green\\FileManage\\spaceCheck.html',
      1 => 1358846233,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2506450ff9c7d70d309-57023268',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'diskSpace' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50ff9c7d748781_25708360',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50ff9c7d748781_25708360')) {function content_50ff9c7d748781_25708360($_smarty_tpl) {?><div class="box">
<div class="boxContent">
<div class="boxFrom">
	<div class="boxTitle">
		<h5>空间检查</h5>
	</div>
	<form name="boxform" method="post" id="ajaxform">
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