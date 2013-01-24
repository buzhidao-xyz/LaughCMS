<?php /* Smarty version Smarty-3.1.12, created on 2013-01-24 10:45:09
         compiled from "C:\xampp\htdocs\laugh\admin\themes\green\Common\showMessage.html" */ ?>
<?php /*%%SmartyHeaderCode:293775100a0356cee62-63909742%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cfc08302bcecb4e1ec62cd06f1739ac806dc06e8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\green\\Common\\showMessage.html',
      1 => 1358991066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '293775100a0356cee62-63909742',
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
  'unifunc' => 'content_5100a035743297_87201046',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5100a035743297_87201046')) {function content_5100a035743297_87201046($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("include/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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