<?php /* Smarty version Smarty-3.1.12, created on 2013-01-18 14:40:24
         compiled from "C:\xampp\htdocs\laugh\themes\default\Public\navigation.html" */ ?>
<?php /*%%SmartyHeaderCode:1253950f8ee58d4e6f1-80634041%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '838c8f00cb03e78312f8d6729a16a363bbf2b1b9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\themes\\default\\Public\\navigation.html',
      1 => 1358317169,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1253950f8ee58d4e6f1-80634041',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50f8ee58d5cd90_31171665',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50f8ee58d5cd90_31171665')) {function content_50f8ee58d5cd90_31171665($_smarty_tpl) {?><link type="text/css" rel="stylesheet" href="public/plugin/superfish/css/superfish.css" media="screen">
<link type="text/css" rel="stylesheet" href="themes/default/style/navigation.css" media="screen">
<ul class="headerNavigation">
	<li>
		<a href="#a">菜单一</a>
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
		<a href="#">菜单二</a>
	</li>
</ul>
<script type="text/javascript" src="public/plugin/superfish/js/hoverIntent.js"></script>
<script type="text/javascript" src="public/plugin/superfish/js/superfish.js"></script>
<script type="text/javascript">
	$('ul.headerNavigation').superfish();
</script><?php }} ?>