<?php /* Smarty version Smarty-3.1.12, created on 2012-11-15 16:32:52
         compiled from "C:\xampp\htdocs\laugh\admin\themes\default\public\menu.html" */ ?>
<?php /*%%SmartyHeaderCode:1641650a4a8b441de11-16832565%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '066bba77e1bdafa0020e72dd7a26ba8c8608ee6c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\default\\public\\menu.html',
      1 => 1352942713,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1641650a4a8b441de11-16832565',
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
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50a4a8b44ad877_61800375',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a4a8b44ad877_61800375')) {function content_50a4a8b44ad877_61800375($_smarty_tpl) {?><!-- menu -->
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
</div><?php }} ?>