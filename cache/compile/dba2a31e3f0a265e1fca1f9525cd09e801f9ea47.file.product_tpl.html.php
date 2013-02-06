<?php /* Smarty version Smarty-3.1.12, created on 2013-02-06 17:27:17
         compiled from "C:\xampp\htdocs\laugh\themes\default\Product\product_tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:10893511221f5280096-08367006%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dba2a31e3f0a265e1fca1f9525cd09e801f9ea47' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\themes\\default\\Product\\product_tpl.html',
      1 => 1360142768,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10893511221f5280096-08367006',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_511221f52a9ea4_37149110',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_511221f52a9ea4_37149110')) {function content_511221f52a9ea4_37149110($_smarty_tpl) {?><div class="productTpl">
	<h2 class="title">CTI融合通信专业资讯网</h2>
	<div class="status">
		<span class="title">点击次数:</span>
		<span class="content">202次</span>
		<span class="title">发布时间:</span>
		<span class="content">2012-02-06 10:13:55</span>
		<span class="title">作者:</span>
		<span class="content">admin</span>
	</div>
	<div class="body">
		<div class="ImageShow">
			<div id="mainImage"></div>
			<ul class="galleryFlash galleryImage">
			    <li class="active"><img src="themes/default/images/product/detail_img1.jpg" alt="1" title="产品详情图1"></li>
			    <li><img src="themes/default/images/product/detail_img2.jpg" alt="2" title="产品详情图2"></li>
			    <li><img src="themes/default/images/product/detail_img3.jpg" alt="3" title="产品详情图3"></li>
			</ul>
		</div>
		<div class="productInfo">
			<div class="infoTitle">
				<ul id="productInfoboxTab" class="boxTab fleft">
					<li><a tabid="#productInfoboxTab1" href="javascript:;">规格参数</a></li>
					<li><a tabid="#productInfoboxTab2" href="javascript:;">详细描述</a></li>
				</ul>
			</div>
			<div class="infoBody">
				<div id="productInfoboxTab1" class="boxTabContent">
					<ul class="flinkList">
						<li><a href="javascript:;">链接一</a></li>
						<li><a href="javascript:;">链接二三</a></li>
						<li><a href="javascript:;">链接四四四四</a></li>
						<li><a href="javascript:;">链接六六六</a></li>
						<li><a href="javascript:;">链接五六七八九十</a></li>
					</ul>
				</div>
				<div id="productInfoboxTab2" class="boxTabContent">
					<ul class="flinkList">
						<li><a href="javascript:;">链接二</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="operate">
		<?php echo $_smarty_tpl->getSubTemplate ("include/share0.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div class="operateLink"><a href="javascript:;">[打印此页]</a>&nbsp;&nbsp;&nbsp;<a href="javascript:self.close();">[关闭]</a></div>
	</div>
	<div class="about">
		<dl>
			<dt>上一篇:</dt>
			<dd><a href="javascript:;">新手使用MetInfo建站步骤？</a></dd>
		</dl>
		<dl>
			<dt>下一篇:</dt>
			<dd><a href="javascript:;">新手使用MetInfo建站步骤？</a></dd>
		</dl>
	</div>
</div>
<link type="text/css" rel="stylesheet" href="public/plugin/galleria/galleria.css" media="screen">
<script type="text/javascript" src="public/plugin/galleria/jquery.galleria.js"></script>
<style type="text/css">
#mainImage {
	width:650px;
	height:325px;
	margin:0 auto 5px auto;
	clear: both;
	overflow: hidden;
	text-align: center;
	border-bottom: 1px dashed #DEDEDE;
}
#mainImage img {
	width: auto;
	height:auto;
	max-width: 650px;
	max-height: 300px;
}
#mainImage span.caption {
	font: 13px;
	display: block;
}
.galleryImage{
	padding: 0 15px;
	margin:0 auto;
	clear: both;
	overflow: hidden;
	text-align: center;
}
.galleryImage li{
	width:65px;
	height:50px;
	margin: 1px 2px;
	border:1px double #333;
}
.galleryImage li div {
	text-align: center;
}
</style>
<script type="text/javascript">
$(document).ready(function(){
// $('.galleryImage').addClass('galleryImage');
$('ul.galleryImage').galleria({
	history   : true, // activates the history object for bookmarking, back-button etc.
	clickNext : true, // helper for making the image clickable
	insert    : '#mainImage', // the containing selector for our main image
	// let's add some image effects for demonstration purposes
	onImage   : function(image,caption,thumb) {
		// fade in the image & caption
		image.css('display','none').toggle();//fadeIn(1);
		caption.css('display','none').toggle();//fadeIn(1);
		
		// fetch the thumbnail container
		var _li = thumb.parents('li');
		
		// fade out inactive thumbnail
		_li.siblings().children('img.selected').fadeTo(500,0.5);
		
		// fade in active thumbnail
		thumb.fadeTo('fast',1).addClass('selected');
		
		// add a title for the clickable image
		image.attr('title','Next image >>');
	},
	onThumb : function(thumb) { // thumbnail effects goes here
		
		// fetch the thumbnail container
		var _li = thumb.parents('li');
		
		// if thumbnail is active, fade all the way.
		var _fadeTo = _li.is('.active') ? '1' : '0.5';
		
		// fade in the thumbnail when finnished loading
		thumb.css({
			display: 'none',
			opacity: _fadeTo
		}).fadeIn(1000);
		
		// hover effects
		thumb.hover(
			function() {
				thumb.fadeTo('fast',1);
			},
			// don't fade out if the parent is active
			function() {
				_li.not('.active').children('img').fadeTo('fast',0.5);
			}
		)
	}
});

//产品信息展示
$(".productInfo ul#productInfoboxTab").idTabs(function(id,list,set){
	$("a",set).removeClass("selected").filter("[tabid='"+id+"']",set).addClass("selected"); 
	for(i in list) $(list[i]).hide();
	$(id).fadeIn();
	return false;
});
});
</script><?php }} ?>