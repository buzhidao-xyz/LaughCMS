<?php /* Smarty version Smarty-3.1.12, created on 2013-04-02 14:48:33
         compiled from "C:\xampp\htdocs\laugh\themes\default\Product\product.html" */ ?>
<?php /*%%SmartyHeaderCode:23713515a7f4157db09-68547230%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3fba16b363d30e46a1ea9c626c1e15f11f20389d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\themes\\default\\Product\\product.html',
      1 => 1364871537,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23713515a7f4157db09-68547230',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'archiveInfo' => 0,
    'image' => 0,
    'columnid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_515a7f416bdeb1_95578168',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_515a7f416bdeb1_95578168')) {function content_515a7f416bdeb1_95578168($_smarty_tpl) {?><div class="productTpl">
	<h2 class="title"><?php echo $_smarty_tpl->tpl_vars['archiveInfo']->value['title'];?>
</h2>
	<div class="status">
		<span class="title">点击次数:</span>
		<span class="content"><?php echo $_smarty_tpl->tpl_vars['archiveInfo']->value['clicknum'];?>
 次</span>
		<span class="title">发布时间:</span>
		<span class="content"><?php echo mkdate($_smarty_tpl->tpl_vars['archiveInfo']->value['publishtime']);?>
</span>
		<span class="title">作者:</span>
		<span class="content"><?php echo $_smarty_tpl->tpl_vars['archiveInfo']->value['author'];?>
</span>
	</div>
	<div class="body">
		<div class="ImageShow">
			<div id="mainImage"></div>
			<ul class="galleryFlash galleryImage">
				<?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['archiveInfo']->value['archiveImage']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value){
$_smarty_tpl->tpl_vars['image']->_loop = true;
?>
			    <li class="active">
			    	<img src="__APP__<?php echo $_smarty_tpl->tpl_vars['image']->value['thumbpath'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['image']->value['imagetitle'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['image']->value['imagetitle'];?>
">
			    </li>
			    <?php } ?>
			</ul>
		</div>
		<div class="productInfo">
			<div class="infoTitle">
				<ul id="productInfoboxTab" class="infoboxTab fleft">
					<li><a tabid="#productInfoboxTab1" href="javascript:;">规格参数</a></li>
					<li><a tabid="#productInfoboxTab2" href="javascript:;">详细描述</a></li>
				</ul>
			</div>
			<div class="infoBody">
				<div id="productInfoboxTab1" class="boxTabContent productInfoContent">
					<dl>
						<dt>型号:</dt>
						<dd><?php echo $_smarty_tpl->tpl_vars['archiveInfo']->value['model'];?>
</dd>
					</dl>
					<dl>
						<dt>品牌:</dt>
						<dd><?php echo $_smarty_tpl->tpl_vars['archiveInfo']->value['brand'];?>
</dd>
					</dl>
					<dl>
						<dt>颜色:</dt>
						<dd><?php echo $_smarty_tpl->tpl_vars['archiveInfo']->value['color'];?>
</dd>
					</dl>
					<dl>
						<dt>材质:</dt>
						<dd><?php echo $_smarty_tpl->tpl_vars['archiveInfo']->value['material'];?>
</dd>
					</dl>
					<dl>
						<dt>尺寸:</dt>
						<dd><?php echo $_smarty_tpl->tpl_vars['archiveInfo']->value['size'];?>
</dd>
					</dl>
					<dl>
						<dt>价格:</dt>
						<dd><?php echo $_smarty_tpl->tpl_vars['archiveInfo']->value['price'];?>
</dd>
					</dl>
					<dl>
						<dt>数量:</dt>
						<dd><?php echo $_smarty_tpl->tpl_vars['archiveInfo']->value['total'];?>
</dd>
					</dl>
				</div>
				<div id="productInfoboxTab2" class="boxTabContent productInfoContent">
					<?php echo html_entity_decode($_smarty_tpl->tpl_vars['archiveInfo']->value['instruction']);?>

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
			<dd>
				<?php if (!empty($_smarty_tpl->tpl_vars['archiveInfo']->value['prev'])){?>
				<a href="__APP__/index.php?s=Product/view&columnid=<?php echo $_smarty_tpl->tpl_vars['columnid']->value;?>
&archiveid=<?php echo $_smarty_tpl->tpl_vars['archiveInfo']->value['prev']['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['archiveInfo']->value['prev']['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['archiveInfo']->value['prev']['title'];?>
</a>
				<?php }else{ ?>
				<font color="grey">没有了！</font>
				<?php }?>
			</dd>
		</dl>
		<dl>
			<dt>下一篇:</dt>
			<dd>
				<?php if (!empty($_smarty_tpl->tpl_vars['archiveInfo']->value['next'])){?>
				<a href="__APP__/index.php?s=Product/view&columnid=<?php echo $_smarty_tpl->tpl_vars['columnid']->value;?>
&archiveid=<?php echo $_smarty_tpl->tpl_vars['archiveInfo']->value['next']['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['archiveInfo']->value['next']['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['archiveInfo']->value['next']['title'];?>
</a>
				<?php }else{ ?>
				<font color="grey">没有了！</font>
				<?php }?>
			</dd>
		</dl>
	</div>
</div>
<link type="text/css" rel="stylesheet" href="public/plugin/galleria/galleria.css" media="screen">
<script type="text/javascript" src="public/plugin/galleria/jquery.galleria.js"></script>
<style type="text/css">
#mainImage {
	float: left;
	width:550px;
	height:375px;
	margin:0 auto;
	padding-right: 3px;
	overflow: hidden;
	text-align: center;
	border-right: 1px dashed #CCC;
}
#mainImage img {
	width: auto;
	height:auto;
	max-width: 550px;
	max-height: 350px;
}
#mainImage span.caption {
	font: 13px;
	display: block;
}
.galleryImage {
	float: left;
	width: 113px;
	height: 350px;
	padding-left: 2px;
	margin:0 auto;
	overflow: hidden;
	text-align: center;
}
.galleryImage li{
	width:50px;
	height:55px;
	margin: 1px 2px;
	border:1px solid #999;
}
.galleryImage li div {
	text-align: center;
}
</style>
<script type="text/javascript">
$(document).ready(function(){
$('ul.galleryImage').galleria({
	history   : false, // activates the history object for bookmarking, back-button etc.
	clickNext : true, // helper for making the image clickable
	insert    : '#mainImage', // the containing selector for our main image
	// let's add some image effects for demonstration purposes
	onImage   : function(image,caption,thumb) {
		image.css('display','none').toggle();//fadeIn(1);
		caption.css('display','none').toggle();//fadeIn(1);
		
		// fetch the thumbnail container
		var _li = thumb.parents('li');
		
		// fade out inactive thumbnail
		_li.siblings().fadeTo('fast',0.5);
		
		// fade in active thumbnail
		_li.fadeTo('fast',1).addClass('selected');
	},
	onThumb : function(thumb) { // thumbnail effects goes here
		// fetch the thumbnail container
		var _li = thumb.parents('li');
		
		// if thumbnail is active, fade all the way.
		var _fadeTo = _li.is('.active') ? '1' : '0.5';
		
		// fade in the thumbnail when finnished loading
		_li.css({
			display: 'none',
			opacity: _fadeTo
		}).fadeIn(1000);
		
		// hover effects
		_li.hover(
			function() {
				_li.fadeTo('fast',1);
			}, function() {
				_li.not('.active').fadeTo('fast',0.5);
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
</script>
<link type="text/css" rel="stylesheet" href="themes/default/style/shCoreDefault.css" media="screen">
<script type="text/javascript" src="themes/default/js/shCore.js"></script>
<script type="text/javascript">
//为了在编辑器之外能展示高亮代码
SyntaxHighlighter.highlight();
//调整左右对齐
for(var i=0,di;di=SyntaxHighlighter.highlightContainers[i++];){
    var tds = di.getElementsByTagName('td');
    for(var j=0,li,ri;li=tds[0].childNodes[j];j++){
        ri = tds[1].firstChild.childNodes[j];
        ri.style.height = li.style.height = ri.offsetHeight + 'px';
    }
}
</script><?php }} ?>