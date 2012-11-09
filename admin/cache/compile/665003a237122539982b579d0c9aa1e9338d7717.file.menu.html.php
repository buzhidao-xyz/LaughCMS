<?php /* Smarty version Smarty-3.1.12, created on 2012-11-09 17:13:03
         compiled from "C:\xampp\htdocs\laugh\admin\themes\smooth\public\menu.html" */ ?>
<?php /*%%SmartyHeaderCode:2046509cc91fbc8362-05108533%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '665003a237122539982b579d0c9aa1e9338d7717' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\smooth\\public\\menu.html',
      1 => 1352449206,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2046509cc91fbc8362-05108533',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu' => 0,
    'k' => 0,
    'm' => 0,
    'm1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_509cc91fcb8f54_07761489',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509cc91fcb8f54_07761489')) {function content_509cc91fcb8f54_07761489($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("include/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="content" style="height:100%;background: url('themes/smooth/images/content.png') repeat-y top left;">
	<!-- end content / left -->
	<div id="left">
		<div id="menu">
        	<?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value){
$_smarty_tpl->tpl_vars['m']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['m']->key;
?>
			<h6 id="h-menu-menu<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><a href="javascript:#menu<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><span><?php echo $_smarty_tpl->tpl_vars['m']->value['title'];?>
</span></a></h6>
			<?php if (array_key_exists('cnode',$_smarty_tpl->tpl_vars['m']->value)){?>
			<ul id="menu-menu<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" class="closed">
				<?php  $_smarty_tpl->tpl_vars['m1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m1']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['m']->value['cnode']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m1']->key => $_smarty_tpl->tpl_vars['m1']->value){
$_smarty_tpl->tpl_vars['m1']->_loop = true;
?>
				<li><a target="main" hidefocus="true" href="__APP__/?s=<?php echo $_smarty_tpl->tpl_vars['m1']->value['control'];?>
/<?php echo $_smarty_tpl->tpl_vars['m1']->value['action'];?>
" class=""><?php echo html_entity_decode($_smarty_tpl->tpl_vars['m1']->value['title']);?>
</a></li>
				<?php } ?>
				<!--
				<li class="collapsible last">
					<a href="#" class="plus">Offers</a>
					<ul class="collapsed">
						<li><a href="">Coupon Codes</a></li>
						<li class="last"><a href="">Rebates</a></li>
					</ul>
				</li>
				-->
			</ul>
			<?php }?>
        	<?php } ?>
		</div>
	</div>
	<!-- end content / left -->
</div>
<?php echo $_smarty_tpl->getSubTemplate ("include/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>