<?php /* Smarty version Smarty-3.1.12, created on 2013-02-22 14:18:10
         compiled from "C:\xampp\htdocs\laugh\themes\default\Common\ProductList.html" */ ?>
<?php /*%%SmartyHeaderCode:198951270da29d4ad4-25008208%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56d5806265209d4af3072e7e5411bb1411cabead' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\themes\\default\\Common\\ProductList.html',
      1 => 1359940001,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198951270da29d4ad4-25008208',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51270da29dd526_81771378',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51270da29dd526_81771378')) {function content_51270da29dd526_81771378($_smarty_tpl) {?><div id="ImgListBlock" class="boxBlock fleft w740">
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
			<ul class="ProductList">
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
			<ul class="ProductList">
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