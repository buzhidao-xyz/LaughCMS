<?php /* Smarty version Smarty-3.1.12, created on 2013-05-09 16:15:11
         compiled from "C:\xampp\htdocs\laugh\themes\default\Common\MessageBoard.html" */ ?>
<?php /*%%SmartyHeaderCode:1979518b5b0f403669-77628129%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02b8a043962bff7f4d557a3041df245a539adc44' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\themes\\default\\Common\\MessageBoard.html',
      1 => 1367996807,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1979518b5b0f403669-77628129',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_518b5b0f412a15_82835941',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_518b5b0f412a15_82835941')) {function content_518b5b0f412a15_82835941($_smarty_tpl) {?><div class="MessageBoard">
	<div class="title">
		<a href="javascript:;">留言板</a>
	</div>
	<div class="body">
		<form name="MessageForm" method="post" action="__APP__/index.php?s=Plugin/saveMessage" id="MessageBoard">
			<ul>
				<li><span class="title">姓名:</span><span class="content"><input name="username" class="w150" /></span></li>
				<li><span class="title">邮箱:</span><span class="content"><input name="email" class="w200" /></span></li>
				<li><span class="title">内容:</span><span class="content"><textarea name="content" rows="7" cols="50"></textarea></span></li>
				<li><span class="title">验证码:</span><span class="content"><input name="vcode" class="w50" />&nbsp;<img src="__APP__/index.php?s=Org/MessageBoardVcode" class="vcode" /></span></li>
				<li><input type="submit" name="subut" value="提交" class="button btngreen2" /></li>
			</ul>
		</form>
	</div>
</div>
<script type="text/javascript">
$(document).ready(function (){
	$('#MessageBoard').live("submit", function(){
        $("#MessageBoard input[type=submit]").attr('disabled','disabled');
        if($('#MessageBoard').length>0){
            var url = $('#MessageBoard').attr('action');
            var data = $("#MessageBoard").serialize();
            $.post(url,data,function(data){
                alert(data.info);
                if (!data.status) {
                    location.href = location.href;
                }
                $("#MessageBoard input[type=submit]").removeAttr('disabled');
            }, 'json');
            return false;
        } else {
            alert('表单为空');
        }
    });
});
</script><?php }} ?>