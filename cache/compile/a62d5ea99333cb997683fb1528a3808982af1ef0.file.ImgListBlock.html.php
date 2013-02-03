<?php /* Smarty version Smarty-3.1.12, created on 2013-02-03 14:08:28
         compiled from "G:\website\laugh\themes\default\Common\ImgListBlock.html" */ ?>
<?php /*%%SmartyHeaderCode:16414510dfedc533578-01698158%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a62d5ea99333cb997683fb1528a3808982af1ef0' => 
    array (
      0 => 'G:\\website\\laugh\\themes\\default\\Common\\ImgListBlock.html',
      1 => 1359810591,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16414510dfedc533578-01698158',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_510dfedc53a8c8_57725732',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_510dfedc53a8c8_57725732')) {function content_510dfedc53a8c8_57725732($_smarty_tpl) {?><div id="ImgListBlock" class="boxBlock fleft w740">
	<div class="boxBlockTitle">
		<span class="title">产品展示</span>
		<span class="link"><a href="javascript:;">更多>></a></span>
		<ul id="ImgboxTab" class="boxTab fleft">
			<li><a tabid="#boxTab1" href="javascript:;">分类一</a></li>
			<li><a tabid="#boxTab2" href="javascript:;">分类二</a></li>
		</ul>
	</div>
	<div class="boxBlockBody h350">
		<div id="boxTab1" class="boxTabContent">
			<ul class="imgList">
				<li><a href="javascript:;"><img src="themes/default/images/product/product_img1.jpg" /></a><a href="javascript:;">产品一</a></li>
				<li><a href="javascript:;"><img src="themes/default/images/product/product_img1.jpg" /></a><a href="javascript:;">产品一</a></li>
				<li><a href="javascript:;"><img src="themes/default/images/product/product_img1.jpg" /></a><a href="javascript:;">产品一</a></li>
				<li><a href="javascript:;"><img src="themes/default/images/product/product_img1.jpg" /></a><a href="javascript:;">产品一</a></li>
				<li><a href="javascript:;"><img src="themes/default/images/product/product_img1.jpg" /></a><a href="javascript:;">产品一</a></li>
				<li><a href="javascript:;"><img src="themes/default/images/product/product_img1.jpg" /></a><a href="javascript:;">产品一</a></li>
				<li><a href="javascript:;"><img src="themes/default/images/product/product_img1.jpg" /></a><a href="javascript:;">产品一</a></li>
				<li><a href="javascript:;"><img src="themes/default/images/product/product_img1.jpg" /></a><a href="javascript:;">产品一</a></li>
			</ul>
		</div>
		<div id="boxTab2" class="boxTabContent">
			<ul class="imgList">
				<li><a href="javascript:;"><img src="themes/default/images/product/product_img2.jpg" /></a><a href="javascript:;">产品一</a></li>
				<li><a href="javascript:;"><img src="themes/default/images/product/product_img2.jpg" /></a><a href="javascript:;">产品一</a></li>
				<li><a href="javascript:;"><img src="themes/default/images/product/product_img2.jpg" /></a><a href="javascript:;">产品一</a></li>
				<li><a href="javascript:;"><img src="themes/default/images/product/product_img2.jpg" /></a><a href="javascript:;">产品一</a></li>
				<li><a href="javascript:;"><img src="themes/default/images/product/product_img2.jpg" /></a><a href="javascript:;">产品一</a></li>
				<li><a href="javascript:;"><img src="themes/default/images/product/product_img2.jpg" /></a><a href="javascript:;">产品一</a></li>
				<li><a href="javascript:;"><img src="themes/default/images/product/product_img2.jpg" /></a><a href="javascript:;">产品一</a></li>
				<li><a href="javascript:;"><img src="themes/default/images/product/product_img2.jpg" /></a><a href="javascript:;">产品一</a></li>
			</ul>
		</div>
	</div>
</div>
<script type="text/javascript">
$(document).ready(function() {
//图片切换tab
$("#ImgListBlock ul#ImgboxTab").idTabs(function(id,list,set){ 
	$("a",set).removeClass("selected").filter("[tabid='"+id+"']",set).addClass("selected"); 
	for(i in list) $(list[i]).hide(); 
	$(id).fadeIn(); 
	return false; 
});
});
</script><?php }} ?>