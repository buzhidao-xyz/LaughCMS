<?php /* Smarty version Smarty-3.1.12, created on 2013-04-08 17:46:25
         compiled from "C:\xampp\htdocs\laugh\themes\default\Image\image.html" */ ?>
<?php /*%%SmartyHeaderCode:27777516291f1ca37b2-60225190%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d35790c88e8bd15a827e4d743e378b82ca13fd3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\themes\\default\\Image\\image.html',
      1 => 1365409476,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27777516291f1ca37b2-60225190',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'archiveInfo' => 0,
    'columnid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_516291f1d77ee0_19102672',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_516291f1d77ee0_19102672')) {function content_516291f1d77ee0_19102672($_smarty_tpl) {?><div class="articleTpl imageTpl">
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
		<div id="container" class="transitions-enabled infinite-scroll clearfix">
		  <div class="box col2">
		    <p>
		      <a rel="group" href="__APP__/themes/default/images/product/detail_img1.jpg" title="图片一"><img src="__APP__/themes/default/images/product/detail_img1.jpg"  /></a>
		    </p>
		  </div>
		  <div class="box col1">
		    <p>
		      <a rel="group" href="__APP__/themes/default/images/product/detail_img2.jpg" title="图片二"><img src="__APP__/themes/default/images/product/detail_img2.jpg"  /></a>
		    </p>
		  </div>
		  <div class="box col3">
		    <p>
		      <a rel="group" href="__APP__/themes/default/images/product/detail_img3.jpg" title="图片三"><img src="__APP__/themes/default/images/product/detail_img3.jpg"  /></a>
		    </p>
		  </div>
		  <div class="box col1">
		    <p>
		      <a rel="group" href="__APP__/themes/default/images/product/detail_img1.jpg" title="图片四"><img src="__APP__/themes/default/images/product/detail_img1.jpg"  /></a>
		    </p>
		  </div>
		  <div class="box col2">
		    <p>
		      <a rel="group" href="__APP__/themes/default/images/product/detail_img2.jpg" title="图片五"><img src="__APP__/themes/default/images/product/detail_img2.jpg"  /></a>
		    </p>
		  </div>
		  <div class="box col1">
		    <p>
		      <a rel="group" href="__APP__/themes/default/images/product/detail_img3.jpg" title="图片六"><img src="__APP__/themes/default/images/product/detail_img3.jpg"  /></a>
		    </p>
		  </div>
		  <div class="box col5">
		    <p>
		      <a rel="group" href="__APP__/themes/default/images/product/detail_img3.jpg" title="图片七"><img src="__APP__/themes/default/images/product/detail_img3.jpg"  /></a>
		    </p>
		  </div>
		  <div class="box col1">
		    <p>
		      <a rel="group" href="__APP__/themes/default/images/product/product_img2.jpg" title="图片八"><img src="__APP__/themes/default/images/product/product_img2.jpg"  /></a>
		    </p>
		  </div>
		  <div class="box col1">
		    <p>
		      <a rel="group" href="__APP__/themes/default/images/product/product_img1.jpg" title="图片九"><img src="__APP__/themes/default/images/product/product_img1.jpg"  /></a>
		    </p>
		  </div>
		</div>
		<nav id="page-nav"><a href="__APP__/index.php?s=Image/Msonary&columnid=<?php echo $_smarty_tpl->tpl_vars['columnid']->value;?>
&archiveid=<?php echo $_smarty_tpl->tpl_vars['archiveInfo']->value['id'];?>
&page=2"></a></nav>
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
				<a href="__APP__/index.php?s=article/view&columnid=<?php echo $_smarty_tpl->tpl_vars['columnid']->value;?>
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
				<a href="__APP__/index.php?s=article/view&columnid=<?php echo $_smarty_tpl->tpl_vars['columnid']->value;?>
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
<link type="text/css" rel="stylesheet" href="public/plugin/masonry/style.css" media="screen">
<script type="text/javascript" src="public/plugin/masonry/jquery.masonry.js"></script>
<script type="text/javascript" src="public/plugin/masonry/jquery.infinitescroll.min.js"></script>
<script type="text/javascript" src="public/plugin/masonry/modernizr-transitions.js"></script>
<link type="text/css" rel="stylesheet" href="public/plugin/colorbox/colorbox.css" media="screen">
<script type="text/javascript" src="public/plugin/colorbox/jquery.colorbox.js"></script>
<script type="text/javascript">
$(function(){
    var $container = $('#container');

    $container.imagesLoaded(function(){
		$container.masonry({
			itemSelector: '.box',
			columnWidth: 100,
        	isAnimated: !Modernizr.csstransitions
		});
    });
    
    $container.infinitescroll({
		navSelector  : '#page-nav',    // selector for the paged navigation 
		nextSelector : '#page-nav a',  // selector for the NEXT link (to page 2)
		itemSelector : '.box',     // selector for all items you'll retrieve
			loading: {
				finishedMsg: '没有了',
				img: JS_APP+'/public/plugin/masonry/loading.gif'
			}
		},
		// trigger Masonry as a callback
		function( newElements ) {
			// hide new items while they are loading
			var $newElems = $( newElements ).css({ opacity: 0 });
			// ensure that images load before adding to masonry layout
			$newElems.imagesLoaded(function(){
				// show elems now they're ready
				$newElems.animate({ opacity: 1 });
				$container.masonry( 'appended', $newElems, true );
				//colorbox展示大图
			    $("#container .box a").colorbox({
			    	//图集标记
			    	rel: "group",
			    	//图集图片自动切换
			    	slideshow: true,
			    	//图片切换时间间隔
			    	slideshowSpeed : 30000,
			    	//图片标题
			    	title: function (){
			    		return $(this).attr("title");
			    	}
			    });
			});
		}
    );

    //colorbox展示大图
    $("#container .box a").colorbox({
    	//图集标记
    	rel: "group",
    	//图集图片自动切换
    	slideshow: true,
    	//图片切换时间间隔
    	slideshowSpeed : 30000,
    	//图片标题
    	title: function (){
    		return $(this).attr("title");
    	}
    });
});
</script><?php }} ?>