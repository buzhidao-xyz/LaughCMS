<?php /* Smarty version Smarty-3.1.12, created on 2013-01-30 23:54:24
         compiled from "G:\website\laugh\themes\default\Public\navigation.html" */ ?>
<?php /*%%SmartyHeaderCode:1663851094230c06707-88351324%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e80e99102f4c3192b2fa9f400649b6576278078' => 
    array (
      0 => 'G:\\website\\laugh\\themes\\default\\Public\\navigation.html',
      1 => 1359547532,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1663851094230c06707-88351324',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51094230c0b924_46698146',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51094230c0b924_46698146')) {function content_51094230c0b924_46698146($_smarty_tpl) {?><link type="text/css" rel="stylesheet" href="public/plugin/superfish/css/superfish.css" media="screen">
<link type="text/css" rel="stylesheet" href="themes/default/style/navigation.css" media="screen">
<ul class="headerNavigation">
	<li>
		<a href="#a" class="navon">网站首页</a>
	</li>
	<li>
		<a href="#">新闻资讯</a>
		<ul class="SubNavigation">
			<li>
				<a href="#ab">子菜单一</a>
			</li>
			<li>
				<a href="#">子菜单一二三</a>
				<ul>
					<li><a href="#">子子栏目一</a></li>
					<li><a href="#">子子栏目一</a></li>
					<li><a href="#">子子栏目一</a></li>
					<li><a href="#">子子栏目一</a></li>
					<li><a href="#">子子栏目一</a></li>
				</ul>
			</li>
			<li>
				<a href="#">子菜单三</a>
				<ul>
					<li><a href="#">子子栏目一</a></li>
					<li><a href="#">子子栏目一</a></li>
					<li><a href="#">子子栏目一</a></li>
					<li><a href="#">子子栏目一</a></li>
					<li><a href="#">子子栏目一</a></li>
				</ul>
			</li>
		</ul>
	</li>
	<li>
		<a href="#">产品展示</a>
	</li>
	<li>
		<a href="#">下载中心</a>
	</li>
	<li>
		<a href="#">客户案例</a>
	</li>
	<li>
		<a href="#">招贤纳士</a>
	</li>
	<li>
		<a href="#">关于我们</a>
	</li>
	<li>
		<a href="#">联系我们</a>
	</li>
</ul>
<script type="text/javascript" src="public/plugin/superfish/js/hoverIntent.js"></script>
<script type="text/javascript" src="public/plugin/superfish/js/superfish.js"></script>
<script type="text/javascript">
	$('ul.headerNavigation').superfish();
</script><?php }} ?>