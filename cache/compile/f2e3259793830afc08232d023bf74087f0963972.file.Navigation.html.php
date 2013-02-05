<?php /* Smarty version Smarty-3.1.12, created on 2013-02-05 17:25:31
         compiled from "C:\xampp\htdocs\laugh\themes\default\Common\Navigation.html" */ ?>
<?php /*%%SmartyHeaderCode:28555110d00bb9a7a6-88656661%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f2e3259793830afc08232d023bf74087f0963972' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\themes\\default\\Common\\Navigation.html',
      1 => 1359940001,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28555110d00bb9a7a6-88656661',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5110d00bb9dc09_62511142',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5110d00bb9dc09_62511142')) {function content_5110d00bb9dc09_62511142($_smarty_tpl) {?><link type="text/css" rel="stylesheet" href="public/plugin/superfish/css/superfish.css" media="screen">
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