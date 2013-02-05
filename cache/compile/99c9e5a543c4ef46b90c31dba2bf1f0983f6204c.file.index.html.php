<?php /* Smarty version Smarty-3.1.12, created on 2013-02-05 17:25:31
         compiled from "C:\xampp\htdocs\laugh\themes\default\QA\index.html" */ ?>
<?php /*%%SmartyHeaderCode:259315110d00bae6ec2-10103455%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99c9e5a543c4ef46b90c31dba2bf1f0983f6204c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\themes\\default\\QA\\index.html',
      1 => 1360052766,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '259315110d00bae6ec2-10103455',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5110d00bb4d689_32698930',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5110d00bb4d689_32698930')) {function content_5110d00bb4d689_32698930($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("include/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("Common/Top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("Common/Header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="WrapContainer" class="wrap">
	<div class="adBanner block">
		<a href="javascript:;" target="_blank"><img src="themes/default/images/ad_banner.png" width="1000" height="80" /></a>
	</div>
	<div class="CurPosition mtop5">
		当前位置: <a href="__APP__">首页</a> > <a href="__APP__/index.php?s=article">帮助中心</a>
	</div>
	<div id="CenterShow" class="block mtop5">
		<div id="mainBlock" class="fleft w740">
			<div class="boxBlock">
				<div class="boxBlockTitle">
					<span class="title">帮助中心</span>
				</div>
				<div class="boxBlockBody h576">
					<div class="contentBlock">
						<?php echo $_smarty_tpl->getSubTemplate ("Common/qaList.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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