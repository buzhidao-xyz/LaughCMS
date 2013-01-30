<?php /* Smarty version Smarty-3.1.12, created on 2013-01-30 23:54:24
         compiled from "G:\website\laugh\themes\default\index.html" */ ?>
<?php /*%%SmartyHeaderCode:125251094230afa9d2-41676461%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'edeaac6efa5d4100610b986d2fdaf430c423e600' => 
    array (
      0 => 'G:\\website\\laugh\\themes\\default\\index.html',
      1 => 1359561261,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '125251094230afa9d2-41676461',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51094230b67331_36538725',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51094230b67331_36538725')) {function content_51094230b67331_36538725($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("include/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("Public/Top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("Public/Header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="WrapContainer" class="wrap">
	<div id="ImageFlash" class="block">
		<?php echo $_smarty_tpl->getSubTemplate ("Public/ImageFlash1.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div id="SImageCaption">
			<h1>Laugh CMS 正式版</h1>
			<h2 class="mtop5">LaughCMS企业网站管理系统,是一款代码完全开源免费PHP+MYSQL系统.系统安全,效率,易用并且可扩展性非常好。
			</h2>
			<h3 class="mtop10">系统版本: Laugh CMS 正式版</h3>
			<h4>软件语言: 简体中文 UTF-8</h4>
			<h4>环境要求: IIS/Apache/Nginx + PHP5 + MySQL5</h4>
			<h4>用户手册: <a href="javascript:;" target="_blank">在线手册</a></h4>
			<h4>在线演示: <a href="javascript:;" target="_blank">演示地址</a></h4>
			<a id="downloadbtn" href="javascript:;" target="_blank"></a>
		</div>
		<div class="clear"></div>
	</div>
	<div id="CenterShow" class="block">
		<div class="boxBlock fleft w300">
			<div class="boxBlockTitle">新闻咨询</div>
			<div class="boxBlockBody">body</div>
		</div>
		<div class="boxBlock fleft w690 mleft10">
			<div class="boxBlockTitle">关于我们</div>
			<div class="boxBlockBody">body</div>
		</div>
	</div>
	<div class="adBanner block">
		广告banner图片1000*80
	</div>
	<div id="BottomShow" class="block">
		产品展示 联系我们
	</div>
	<div id="Flink" class="block">
		友情链接
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("include/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>