<?php /* Smarty version Smarty-3.1.12, created on 2013-01-30 18:05:15
         compiled from "C:\xampp\htdocs\laugh\themes\default\Public\ImageFlash.html" */ ?>
<?php /*%%SmartyHeaderCode:327465108f05bc19623-29092049%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1abcbd690e0b4c69946a3cc08bd11e5c20efcfe8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\themes\\default\\Public\\ImageFlash.html',
      1 => 1359540278,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '327465108f05bc19623-29092049',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5108f05bc30993_05756042',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5108f05bc30993_05756042')) {function content_5108f05bc30993_05756042($_smarty_tpl) {?><link media="screen" href="public/plugin/xslider/slides.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="public/plugin/xslider/slides.min.js"></script>
<div id="SImageContainer">
	<div class="slides_container">
		<div>
			<a href="javascript:;" title="Laugh CMS" target="_blank"><img src="themes/default/images/flash/flash_img1.jpg" alt="Slide 1"></a>
			<div class="caption" style="bottom:0">
				<p>剑网三</p>
			</div>
		</div>
		<div>
			<a href="javascript:;" title="Laugh CMS" target="_blank"><img src="themes/default/images/flash/flash_img2.jpg" alt="Slide 1"></a>
			<div class="caption" style="bottom:0">
				<p>剑网三</p>
			</div>
		</div>
		<div>
			<a href="javascript:;" title="Laugh CMS" target="_blank"><img src="themes/default/images/flash/flash_img3.jpg" alt="Slide 1"></a>
			<div class="caption" style="bottom:0">
				<p>剑网三</p>
			</div>
		</div>
	</div>
	<a href="javascript:;" id="prev" class="prev"></a>
	<a href="javascript:;" id="next" class="next"></a>
</div>
<script type="text/javascript">
$(function(){
$('#SImageContainer').slides({
	preload: true,
	preloadImage: 'public/plugin/xslider/image/loading.gif',
	play: 5000,
	pause: 2500,
	hoverPause: true,
	animationStart: function(){
		$('.caption').animate({
			bottom:-25
		},100);
	},
	animationComplete: function(current){
		$('.caption').animate({
			bottom:0
		},200);
		if (window.console && console.log) {
			// example return of current slide number
			console.log(current);
		};
	}
});
$('#SImageContainer').hover(function (){
	$("a#prev,a#next,ul.pagination").fadeIn();
}, function (){
	$("a#prev,a#next,ul.pagination").fadeOut();
});
});
</script><?php }} ?>