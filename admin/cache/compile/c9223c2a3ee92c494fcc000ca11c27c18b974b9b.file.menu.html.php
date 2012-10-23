<<<<<<< HEAD:admin/cache/compile/c9223c2a3ee92c494fcc000ca11c27c18b974b9b.file.menu.html.php
<?php /* Smarty version Smarty-3.1.11, created on 2012-10-22 21:35:07
         compiled from "/usr/local/webserver/site/laugh/admin/themes/default/public/menu.html" */ ?>
<?php /*%%SmartyHeaderCode:164729310950854b8b997ca6-96893625%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
=======
<?php /* Smarty version Smarty-3.1.12, created on 2012-10-23 15:29:49
         compiled from "C:\xampp\htdocs\laugh\admin\themes\default\public\menu.html" */ ?>
<?php /*%%SmartyHeaderCode:324275086476d43d527-79959709%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
>>>>>>> page:admin/cache/compile/066bba77e1bdafa0020e72dd7a26ba8c8608ee6c.file.menu.html.php
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9223c2a3ee92c494fcc000ca11c27c18b974b9b' => 
    array (
      0 => '/usr/local/webserver/site/laugh/admin/themes/default/public/menu.html',
      1 => 1350825361,
      2 => 'file',
    ),
  ),
<<<<<<< HEAD:admin/cache/compile/c9223c2a3ee92c494fcc000ca11c27c18b974b9b.file.menu.html.php
  'nocache_hash' => '164729310950854b8b997ca6-96893625',
=======
  'nocache_hash' => '324275086476d43d527-79959709',
>>>>>>> page:admin/cache/compile/066bba77e1bdafa0020e72dd7a26ba8c8608ee6c.file.menu.html.php
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu' => 0,
    'm' => 0,
    'm1' => 0,
  ),
  'has_nocache_code' => false,
<<<<<<< HEAD:admin/cache/compile/c9223c2a3ee92c494fcc000ca11c27c18b974b9b.file.menu.html.php
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50854b8be19942_86917812',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50854b8be19942_86917812')) {function content_50854b8be19942_86917812($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("include/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
=======
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5086476d50de95_74431823',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5086476d50de95_74431823')) {function content_5086476d50de95_74431823($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("include/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
>>>>>>> page:admin/cache/compile/066bba77e1bdafa0020e72dd7a26ba8c8608ee6c.file.menu.html.php

<div class="menu">
    <ul>
        <?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value){
$_smarty_tpl->tpl_vars['m']->_loop = true;
?>
		<li class="menulist">
			<div><a target="main" hidefocus="true" href="javascript:;" class=""><?php echo $_smarty_tpl->tpl_vars['m']->value['title'];?>
</a></div>
			<?php if (array_key_exists('cnode',$_smarty_tpl->tpl_vars['m']->value)){?>
			<ul class="menusub">
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
			</ul>
			<?php }?>
		</li>
        <?php } ?>
    </ul>
</div>
<script language="javascript">
$(document).ready(function() {
	// $('.menu ul li a:eq(0)').attr('class', 'tabon');
});
</script>
<?php echo $_smarty_tpl->getSubTemplate ("include/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>