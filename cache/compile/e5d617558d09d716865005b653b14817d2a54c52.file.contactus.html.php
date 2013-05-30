<?php /* Smarty version Smarty-3.1.12, created on 2013-05-29 20:31:21
         compiled from "F:\website\laugh\themes\default\Public\contactus.html" */ ?>
<?php /*%%SmartyHeaderCode:294951a5f51919afa7-29938113%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5d617558d09d716865005b653b14817d2a54c52' => 
    array (
      0 => 'F:\\website\\laugh\\themes\\default\\Public\\contactus.html',
      1 => 1367932289,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '294951a5f51919afa7-29938113',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Column' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51a5f519240637_54381623',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a5f519240637_54381623')) {function content_51a5f519240637_54381623($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("include/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("Common/Top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("Common/Header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="WrapContainer" class="wrap">
	<div class="adBanner block">
		<a href="javascript:;" target="_blank"><img src="themes/default/images/ad_banner.png" width="1000" height="80" /></a>
	</div>
	<div class="CurPosition mtop5">
		当前位置: <a href="__APP__">首页</a> > <a href="__APP__/index.php?s=article">联系我们</a>
	</div>
	<div id="CenterShow" class="block mtop5">
		<div id="mainBlock" class="fleft w740">
			<div class="boxBlock">
				<div class="boxBlockTitle">
					<span class="title">联系我们</span>
				</div>
				<div class="boxBlockBody h576">
					<div class="contentBlock">
						<div class="contactUS">
							<!-- <h5>电 话: XXXXXXXX</h5>
							<h5>邮 编: XXXXXXXX</h5>
							<h5>网 址: www.xxx.com</h5>
							<h5>Email: admin@admin.com</h5>
							<h5>联系地址: 江苏省苏州市工业园区若水路1号</h5>
							<h5>联系人: XXX</h5>
							<h4>Laugh CMS 软件科技公司</h4> -->
							<?php echo html_entity_decode($_smarty_tpl->tpl_vars['Column']->value['content']);?>

						</div>
						<?php echo $_smarty_tpl->getSubTemplate ("Common/MessageBoard.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

					</div>
				</div>
			</div>
		</div>
		<div id="sideBlock" class="fleft w250 mleft10">
			<div class="boxBlock">
				<div class="boxBlockTitle">
					<span class="title">快捷导航</span>
				</div>
				<div class="boxBlockBody h200">
					<ul class="SideNavList">
						<li><a href="javascript:;">新闻资讯</a></li>
						<li><a href="javascript:;">产品展示</a></li>
						<li><a href="javascript:;">招贤纳士</a></li>
						<li><a href="javascript:;">关于我们</a></li>
						<li><a href="javascript:;">联系我们</a></li>
					</ul>
				</div>
			</div>
			<div class="boxBlock mtop10">
				<div class="boxBlockTitle">
					<span class="title">网站标签</span>
				</div>
				<div class="boxBlockBody">
					<?php echo $_smarty_tpl->getSubTemplate ("Common/TagCloud.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				</div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
	<?php echo $_smarty_tpl->getSubTemplate ("Common/Flink.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
<?php echo $_smarty_tpl->getSubTemplate ("include/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>