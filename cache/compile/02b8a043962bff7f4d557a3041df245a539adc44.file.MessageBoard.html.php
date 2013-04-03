<?php /* Smarty version Smarty-3.1.12, created on 2013-04-03 15:47:20
         compiled from "C:\xampp\htdocs\laugh\themes\default\Common\MessageBoard.html" */ ?>
<?php /*%%SmartyHeaderCode:3656515bde883c83a0-90703952%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02b8a043962bff7f4d557a3041df245a539adc44' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\themes\\default\\Common\\MessageBoard.html',
      1 => 1359960871,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3656515bde883c83a0-90703952',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_515bde883e8d80_25880462',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_515bde883e8d80_25880462')) {function content_515bde883e8d80_25880462($_smarty_tpl) {?><div class="MessageBoard">
	<div class="title">
		<a href="javascript:;">留言板</a>
	</div>
	<div class="body">
		<form name="MessageForm" method="post" action="__APP__/index.php?s=Message/save" id="ajaxform">
			<ul>
				<li><span class="title">姓名:</span><span class="content"><input name="username" class="w150" /></span></li>
				<li><span class="title">邮箱:</span><span class="content"><input name="email" class="w200" /></span></li>
				<li><span class="title">留言主题:</span><span class="content"><input name="title" class="w250" /></span></li>
				<li><span class="title">留言内容:</span><span class="content"><textarea name="content" rows="7" cols="50"></textarea></span></li>
				<li><span class="title">验证码:</span><span class="content"><input name="vcode" class="w50" />&nbsp;<img src="__APP__/index.php?s=Org/MessageBoardVcode" class="vcode" /></span></li>
				<li><input type="submit" name="subut" value="提交" class="button btngreen2" /></li>
			</ul>
		</form>
	</div>
</div><?php }} ?>