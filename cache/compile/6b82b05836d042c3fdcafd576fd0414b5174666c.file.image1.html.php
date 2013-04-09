<?php /* Smarty version Smarty-3.1.12, created on 2013-04-09 17:27:34
         compiled from "C:\xampp\htdocs\laugh\themes\default\Image\image1.html" */ ?>
<?php /*%%SmartyHeaderCode:10915163df060e6e33-69620276%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b82b05836d042c3fdcafd576fd0414b5174666c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\themes\\default\\Image\\image1.html',
      1 => 1365499302,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10915163df060e6e33-69620276',
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
  'unifunc' => 'content_5163df06216c15_94938254',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5163df06216c15_94938254')) {function content_5163df06216c15_94938254($_smarty_tpl) {?><div class="articleTpl imageTpl">
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
		<div id="container">
			<div class="scrolltab">
				<span id="sLeftBtnA" class="sLeftBtnABan"></span>
				<span id="sRightBtnA" class="sRightBtnA"></span>
				<ul class="ulBigPic">
					<?php if (isset($_smarty_tpl->tpl_vars['archiveInfo']->value['archiveImage'])&&!empty($_smarty_tpl->tpl_vars['archiveInfo']->value['archiveImage'])){?>
					<?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['archiveInfo']->value['archiveImage']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value){
$_smarty_tpl->tpl_vars['image']->_loop = true;
?>
					<li class="">
						<span class="sPic">
							<i class="iBigPic"><a href="javascript:;" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['image']->value['imagetitle'];?>
"><img alt="<?php echo $_smarty_tpl->tpl_vars['image']->value['imagetitle'];?>
" src="__APP__<?php echo $_smarty_tpl->tpl_vars['image']->value['imagepath'];?>
" /></a></i>
						</span>
						<!-- <span class="sSideBox">
							<span class="sTitle"><a href="javascript:;" target="_blank" title="">图片标题</a></span>
							<span class="sIntro">简介：图片详情。</span>
							<span class="sMore"><a href="javascript:;" target="_blank">查看详细方案&gt;&gt;</a></span>
						</span> -->
					</li>
				  	<?php } ?>
				  	<?php }?>
				</ul><!--ulBigPic end-->
				<div class="dPicStatus">
					<div class="dPicStatusTag">&gt;</div>
					<div class="dPicStatusNav">1/8</div>
					<div class="dPicStatusSep">|</div>
					<div class="dPicStatusTitle"></div>
				</div>
				<div class="dSmallPicBox">
					<div class="dSmallPic">
						<ul class="ulSmallPic" style="width:2646px;left:0px" rel="stop">
							<?php if (isset($_smarty_tpl->tpl_vars['archiveInfo']->value['archiveImage'])&&!empty($_smarty_tpl->tpl_vars['archiveInfo']->value['archiveImage'])){?>
							<?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['archiveInfo']->value['archiveImage']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value){
$_smarty_tpl->tpl_vars['image']->_loop = true;
?>
							<li class="">
								<span class="sPic"><img alt="<?php echo $_smarty_tpl->tpl_vars['image']->value['imagetitle'];?>
" src="__APP__<?php echo $_smarty_tpl->tpl_vars['image']->value['thumbpath'];?>
" width="125" height="100" /></span>
								<span class="sTitle"><?php echo $_smarty_tpl->tpl_vars['image']->value['imagetitle'];?>
</span>
							</li>
						  	<?php } ?>
						  	<?php }?>
						</ul>
					</div>
					<span id="sLeftBtnB" class="sLeftBtnBBan"></span>
					<span id="sRightBtnB" class="sRightBtnB"></span>
				</div><!--dSmallPicBox end-->
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
				<a href="__APP__/index.php?s=Image/view&columnid=<?php echo $_smarty_tpl->tpl_vars['columnid']->value;?>
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
				<a href="__APP__/index.php?s=Image/view&columnid=<?php echo $_smarty_tpl->tpl_vars['columnid']->value;?>
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
<link type="text/css" rel="stylesheet" href="public/plugin/slidebox/slidebox.css" media="screen">
<script type="text/javascript" src="public/plugin/slidebox/slidebox.js"></script>
<script type="text/javascript">
$(document).ready(function (){
$(".scrolltab .ulSmallPic li:eq(0)").addClass("liSelected");
$(".scrolltab .dPicStatus .dPicStatusTitle").html($(".scrolltab .ulSmallPic li:eq(0) span.sTitle").text());
});
</script><?php }} ?>