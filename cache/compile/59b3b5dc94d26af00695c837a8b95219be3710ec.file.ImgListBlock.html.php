<?php /* Smarty version Smarty-3.1.12, created on 2013-02-01 16:51:35
         compiled from "C:\xampp\htdocs\laugh\themes\default\Public\ImgListBlock.html" */ ?>
<?php /*%%SmartyHeaderCode:11496510b82172b6910-82387332%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59b3b5dc94d26af00695c837a8b95219be3710ec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\themes\\default\\Public\\ImgListBlock.html',
      1 => 1359682306,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11496510b82172b6910-82387332',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_510b82172beda9_41623048',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_510b82172beda9_41623048')) {function content_510b82172beda9_41623048($_smarty_tpl) {?><div id="ImgListBlock" class="boxBlock fleft w740">
	<div class="boxBlockTitle">
		<span class="title">产品展示</span>
		<span class="link"><a href="javascript:;">更多>></a></span>
		<ul id="ImgboxTab" class="boxTab fleft">
			<li><a tabid="#boxTab1" href="javascript:;">分类一</a></li>
			<li><a tabid="#boxTab2" href="javascript:;">分类二</a></li>
		</ul>
	</div>
	<div class="boxBlockBody h330">
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