<?php /* Smarty version Smarty-3.1.12, created on 2013-01-30 18:06:14
         compiled from "C:\xampp\htdocs\laugh\themes\default\Public\ImageFlash1.html" */ ?>
<?php /*%%SmartyHeaderCode:190275108f096293d78-25566117%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa756535db168800197b782fc025aea17cf7b148' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\themes\\default\\Public\\ImageFlash1.html',
      1 => 1359540282,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '190275108f096293d78-25566117',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5108f09629bd76_56894366',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5108f09629bd76_56894366')) {function content_5108f09629bd76_56894366($_smarty_tpl) {?><link media="screen" href="public/plugin/xslider/xslider.css" rel="stylesheet" type="text/css">
<div id="SImageContainer" class="slider">
	<div class="conbox">
		<div><a href="javascript:;" title="title1"><img src="themes/default/images/flash/flash_img1.jpg" alt="Slide 1"></a></div>
		<div><a href="javascript:;" title="title1"><img src="themes/default/images/flash/flash_img2.jpg" alt="Slide 1"></a></div>
		<div><a href="javascript:;" title="title1"><img src="themes/default/images/flash/flash_img3.jpg" alt="Slide 1"></a></div>
	</div>
	<div class="switcher">
		<a href="#" class="cur">1</a>
		<a href="#">2</a>
		<a href="#">3</a>
	</div>
</div><!--slider end-->
<script type="text/javascript" src="public/plugin/xslider/jquery.Xslider.js"></script>
<script type="text/javascript">
$(document).ready(function(){
// 焦点图片淡隐淡现
$("#SImageContainer").Xslider({
	affect: 'fade', //效果  有scrollx|scrolly|fade|none
	speed: 800, //动画速度
	space: 6000, //时间间隔
	auto: true, //自动滚动
	trigger: 'mouseover', //触发事件 注意用mouseover代替hover
	conbox: '.conbox', //内容容器id或class
	ctag: 'div', //内容标签 默认为<a>
	switcher: '.switcher', //切换触发器id或class
	stag: 'a', //切换器标签 默认为a
	current:'cur', //当前切换器样式名称
	rand:false //是否随机指定默认幻灯图片
});
});
</script><?php }} ?>