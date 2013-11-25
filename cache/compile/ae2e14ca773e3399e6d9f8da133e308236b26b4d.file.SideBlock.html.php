<?php /* Smarty version Smarty-3.1.12, created on 2013-11-25 23:45:38
         compiled from "F:\website\laugh\themes\default\Common\SideBlock.html" */ ?>
<?php /*%%SmartyHeaderCode:14086529370a282a270-34048129%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae2e14ca773e3399e6d9f8da133e308236b26b4d' => 
    array (
      0 => 'F:\\website\\laugh\\themes\\default\\Common\\SideBlock.html',
      1 => 1369831376,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14086529370a282a270-34048129',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_529370a2846274_25103708',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529370a2846274_25103708')) {function content_529370a2846274_25103708($_smarty_tpl) {?><div id="sideBlock" class="fleft w250 mleft10">
	<div class="boxBlock">
		<div class="boxBlockTitle">
			<span class="title">快捷导航</span>
		</div>
		<div class="boxBlockBody">
			<ul class="SideNavList">
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('cmstag_navigation', array('flag'=>2)); $_block_repeat=true; echo CMSTagNavigation(array('flag'=>2), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<li><a href="javascript:;">[field.title]</a></li>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo CMSTagNavigation(array('flag'=>2), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</ul>
		</div>
	</div>
	<div class="boxBlock mtop10">
		<div class="boxBlockTitle">
			<span class="title">联系我们</span>
		</div>
		<div class="boxBlockBody">
			<div class="contactUS">
				<?php echo $_smarty_tpl->tpl_vars['Config']->value['AboutUs'];?>

			</div>
		</div>
	</div>
</div><?php }} ?>