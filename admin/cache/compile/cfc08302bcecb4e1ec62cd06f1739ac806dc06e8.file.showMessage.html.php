<?php /* Smarty version Smarty-3.1.12, created on 2013-01-23 17:29:07
         compiled from "C:\xampp\htdocs\laugh\admin\themes\green\Common\showMessage.html" */ ?>
<?php /*%%SmartyHeaderCode:1456150ffad63c7d587-12853495%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cfc08302bcecb4e1ec62cd06f1739ac806dc06e8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\green\\Common\\showMessage.html',
      1 => 1358933345,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1456150ffad63c7d587-12853495',
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
  'unifunc' => 'content_50ffad63cedbc8_80318065',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50ffad63cedbc8_80318065')) {function content_50ffad63cedbc8_80318065($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("include/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="box">
<div class="boxContent">
<div class="boxFrom">
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
	margin-top: 30px;
}
.box .boxTitle h5 {
	float: none;
	display: block;
	padding: 0;
	text-align: center;
}
.box .boxMessage {
	height: 150px;
}
.box .boxMessage .message {
	padding-top: 30px;
	text-align: center;
}
.box .boxMessage .jump{
	padding-top: 10px;
	text-align: center;
}
</style>
<script type="text/javascript">
(function(){
var wait = document.getElementById('wait'),href = document.getElementById('href').href;
// var interval = setInterval(function(){
// 	var time = --wait.innerHTML;
// 	if(time == 0) {
// 		location.href = href;
// 		clearInterval(interval);
// 	};
// }, 1000);
})();
</script>
<?php echo $_smarty_tpl->getSubTemplate ("include/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>