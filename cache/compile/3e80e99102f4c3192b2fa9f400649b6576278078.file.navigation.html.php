<?php /* Smarty version Smarty-3.1.12, created on 2013-02-02 20:20:28
         compiled from "G:\website\laugh\themes\default\Public\navigation.html" */ ?>
<?php /*%%SmartyHeaderCode:25523510d048c6fa1c5-74116714%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e80e99102f4c3192b2fa9f400649b6576278078' => 
    array (
      0 => 'G:\\website\\laugh\\themes\\default\\Public\\navigation.html',
      1 => 1359781332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25523510d048c6fa1c5-74116714',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_510d048c6fdda7_78322979',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_510d048c6fdda7_78322979')) {function content_510d048c6fdda7_78322979($_smarty_tpl) {?><link type="text/css" rel="stylesheet" href="public/plugin/superfish/css/superfish.css" media="screen">
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
		<a href="__APP__/index.php?s=Public/AboutUS">关于我们</a>
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