<?php /* Smarty version Smarty-3.1.12, created on 2013-02-06 15:14:00
         compiled from "C:\xampp\htdocs\laugh\themes\default\Common\MessageBoard.html" */ ?>
<?php /*%%SmartyHeaderCode:1215511202b849a726-24836622%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '1215511202b849a726-24836622',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_511202b849d897_39854739',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_511202b849d897_39854739')) {function content_511202b849d897_39854739($_smarty_tpl) {?><div class="MessageBoard">
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