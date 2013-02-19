<?php /* Smarty version Smarty-3.1.12, created on 2013-02-19 17:53:12
         compiled from "C:\xampp\htdocs\laugh\themes\default\Product\index.html" */ ?>
<?php /*%%SmartyHeaderCode:226851234b8897f431-80405611%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80e5206bd9c3ade278fa605e7fbefac65e63eca2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\themes\\default\\Product\\index.html',
      1 => 1360132531,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '226851234b8897f431-80405611',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51234b889f0aa3_54669725',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51234b889f0aa3_54669725')) {function content_51234b889f0aa3_54669725($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("include/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("Common/Top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("Common/Header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="WrapContainer" class="wrap">
	<div class="adBanner block">
		<a href="javascript:;" target="_blank"><img src="themes/default/images/ad_banner.png" width="1000" height="80" /></a>
	</div>
	<div class="CurPosition mtop5">
		当前位置: <a href="__APP__">首页</a> > <a href="__APP__/index.php?s=article">产品展示</a>
	</div>
	<div id="CenterShow" class="block mtop5">
		<div id="mainBlock" class="fleft w740">
			<div id="ImgListBlock" class="boxBlock">
				<div class="boxBlockTitle">
					<span class="title">产品展示</span>
				</div>
				<div class="boxBlockBody">
					<ul class="ProductList">
						<li><a href="__APP__/index.php?s=Product/product"><img src="themes/default/images/product/product_img1.jpg" /></a><a href="__APP__/index.php?s=Product/product">CTI融合通信专业资讯网</a></li>
						<li><a href="javascript:;"><img src="themes/default/images/product/product_img1.jpg" /></a><a href="javascript:;">产品一</a></li>
						<li><a href="javascript:;"><img src="themes/default/images/product/product_img1.jpg" /></a><a href="javascript:;">产品一</a></li>
					</ul>
					<?php echo $_smarty_tpl->getSubTemplate ("common/Page.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				</div>
			</div>
		</div>
		<?php echo $_smarty_tpl->getSubTemplate ("Common/SideBlock.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div class="clear"></div>
	</div>
	<?php echo $_smarty_tpl->getSubTemplate ("Common/Flink.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
<?php echo $_smarty_tpl->getSubTemplate ("include/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>