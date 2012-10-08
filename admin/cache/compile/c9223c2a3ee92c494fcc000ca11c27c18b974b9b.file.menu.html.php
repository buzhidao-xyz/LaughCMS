<?php /* Smarty version Smarty-3.1.11, created on 2012-10-07 22:30:09
         compiled from "/usr/local/webserver/site/laugh/admin/themes/default/public/menu.html" */ ?>
<?php /*%%SmartyHeaderCode:89665510507191f11a7d51-89382067%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9223c2a3ee92c494fcc000ca11c27c18b974b9b' => 
    array (
      0 => '/usr/local/webserver/site/laugh/admin/themes/default/public/menu.html',
      1 => 1347546118,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '89665510507191f11a7d51-89382067',
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
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_507191f124cbe5_96544905',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_507191f124cbe5_96544905')) {function content_507191f124cbe5_96544905($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("include/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
" class=""><?php echo $_smarty_tpl->tpl_vars['m1']->value['title'];?>
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