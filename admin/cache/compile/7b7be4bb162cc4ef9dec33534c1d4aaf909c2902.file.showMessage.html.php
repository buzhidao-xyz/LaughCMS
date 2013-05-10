<?php /* Smarty version Smarty-3.1.12, created on 2013-05-10 15:16:16
         compiled from "C:\xampp\htdocs\laugh\admin\themes\blue\Common\showMessage.html" */ ?>
<?php /*%%SmartyHeaderCode:27666518c9ec05978e4-38904151%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b7be4bb162cc4ef9dec33534c1d4aaf909c2902' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\blue\\Common\\showMessage.html',
      1 => 1368169030,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27666518c9ec05978e4-38904151',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'msgTitle' => 0,
    'message' => 0,
    'waitSecond' => 0,
    'jumpUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_518c9ec060d4d0_42604139',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_518c9ec060d4d0_42604139')) {function content_518c9ec060d4d0_42604139($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("include/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="box">
<div class="boxContent">
<div class="boxPopupForm">
	<div class="boxTitle">
		<h5><?php echo $_smarty_tpl->tpl_vars['msgTitle']->value;?>
</h5>
	</div>
	<div class="boxMessage">
		<div class="message"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
		<div class="jump">
			页面即将自动跳转 
			等待时间 <b id="wait"><?php echo $_smarty_tpl->tpl_vars['waitSecond']->value;?>
</b> 秒
		</div>
		<div class="jumpUrl">
			<a id="href" href="<?php echo $_smarty_tpl->tpl_vars['jumpUrl']->value;?>
">如果你的浏览器没反应，请点击这里...</a>
		</div>
	</div>
</div>
</div>
</div>
<style type="text/css">
.box {
	float: none;
	margin-top: 30px;
	margin: 30px auto;
}
.box .boxContent {
	width: 470px;
	margin: 0 auto;
	border: 1px solid #3A6EA5;
}
.box .boxMessage {
	height: 150px;
}
.box .boxMessage .message {
	padding-top: 30px;
	text-align: center;
	color: #FF6600;
}
.box .boxMessage .jump {
	padding-top: 5px;
	text-align: center;
}
.box .boxMessage .jumpUrl {
	padding-top: 5px;
	text-align: center;
}
.box .boxMessage .jumpUrl a {
	text-decoration: underline;
}
</style>
<script type="text/javascript">
(function(){
var interval = setInterval(function(){
	var time = parseInt($("#wait").text())-1;
	$("#wait").text(time);
	if(time == 0) {
		location.href = $("#href").attr("href");
		clearInterval(interval);
	};
}, 1000);
})();
</script>
<?php echo $_smarty_tpl->getSubTemplate ("include/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>