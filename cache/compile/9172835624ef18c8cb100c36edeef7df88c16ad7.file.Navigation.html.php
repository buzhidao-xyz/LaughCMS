<?php /* Smarty version Smarty-3.1.12, created on 2013-02-04 00:43:21
         compiled from "G:\website\laugh\themes\default\Common\Navigation.html" */ ?>
<?php /*%%SmartyHeaderCode:15433510e93a94a89d4-27504872%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9172835624ef18c8cb100c36edeef7df88c16ad7' => 
    array (
      0 => 'G:\\website\\laugh\\themes\\default\\Common\\Navigation.html',
      1 => 1359865505,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15433510e93a94a89d4-27504872',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_510e93a94ac9a9_90738180',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_510e93a94ac9a9_90738180')) {function content_510e93a94ac9a9_90738180($_smarty_tpl) {?><link type="text/css" rel="stylesheet" href="public/plugin/superfish/css/superfish.css" media="screen">
<link type="text/css" rel="stylesheet" href="themes/default/style/navigation.css" media="screen">
<ul class="headerNavigation">
	<li>
		<a href="__APP__/index.php" class="navon">网站首页</a>
	</li>
	<li>
		<a href="__APP__/index.php?s=article">新闻资讯</a>
		<ul class="SubNavigation">
			<li>
				<a href="#">子菜单一</a>
			</li>
			<li>
				<a href="#">子菜单二</a>
				<ul>
					<li><a href="#">子子栏目一</a></li>
					<li><a href="#">子子栏目一</a></li>
					<li><a href="#">子子栏目一</a></li>
				</ul>
			</li>
		</ul>
	</li>
	<li>
		<a href="__APP__/index.php?s=Product">产品展示</a>
	</li>
	<li>
		<a href="__APP__/index.php?s=Download">下载中心</a>
	</li>
	<li>
		<a href="__APP__/index.php?s=Image">客户案例</a>
	</li>
	<li>
		<a href="__APP__/index.php?s=Cooperate">招贤纳士</a>
	</li>
	<li>
		<a href="__APP__/index.php?s=Public/AboutUS">关于我们</a>
	</li>
	<li>
		<a href="__APP__/index.php?s=Public/ContactUS">联系我们</a>
	</li>
</ul>
<script type="text/javascript" src="public/plugin/superfish/js/hoverIntent.js"></script>
<script type="text/javascript" src="public/plugin/superfish/js/superfish.js"></script>
<script type="text/javascript">
	$('ul.headerNavigation').superfish();
</script><?php }} ?>