<?php /* Smarty version Smarty-3.1.12, created on 2013-03-21 17:28:53
         compiled from "C:\xampp\htdocs\laugh\themes\default\Common\Navigation.html" */ ?>
<?php /*%%SmartyHeaderCode:1816514ad2d5dca920-96054740%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f2e3259793830afc08232d023bf74087f0963972' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\themes\\default\\Common\\Navigation.html',
      1 => 1363854051,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1816514ad2d5dca920-96054740',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ColumnList' => 0,
    'd' => 0,
    'd1' => 0,
    'd2' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_514ad2d5eb11c2_04432232',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_514ad2d5eb11c2_04432232')) {function content_514ad2d5eb11c2_04432232($_smarty_tpl) {?><link type="text/css" rel="stylesheet" href="public/plugin/superfish/css/superfish.css" media="screen">
<link type="text/css" rel="stylesheet" href="themes/default/style/navigation.css" media="screen">
<ul class="headerNavigation">
	<?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ColumnList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
$_smarty_tpl->tpl_vars['d']->_loop = true;
?>
	<li>
		<a href="__APP__/index.php?s=<?php echo $_smarty_tpl->tpl_vars['d']->value['control'];?>
/<?php echo $_smarty_tpl->tpl_vars['d']->value['action'];?>
&columnid=<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" class="<?php if (isset($_smarty_tpl->tpl_vars['d']->value['navon'])&&$_smarty_tpl->tpl_vars['d']->value['navon']){?>navon<?php }?>"><?php echo $_smarty_tpl->tpl_vars['d']->value['columnname'];?>
</a>
		<?php if (isset($_smarty_tpl->tpl_vars['d']->value['SubColumnList'])&&!empty($_smarty_tpl->tpl_vars['d']->value['SubColumnList'])){?>
		<ul class="SubNavigation">
			<?php  $_smarty_tpl->tpl_vars['d1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d1']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['d']->value['SubColumnList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d1']->key => $_smarty_tpl->tpl_vars['d1']->value){
$_smarty_tpl->tpl_vars['d1']->_loop = true;
?>
			<li>
				<a href="__APP__/index.php?s=<?php echo $_smarty_tpl->tpl_vars['d1']->value['control'];?>
/<?php echo $_smarty_tpl->tpl_vars['d1']->value['action'];?>
&columnid=<?php echo $_smarty_tpl->tpl_vars['d1']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['d1']->value['columnname'];?>
</a>
				<?php if (isset($_smarty_tpl->tpl_vars['d1']->value['SubColumnList'])&&!empty($_smarty_tpl->tpl_vars['d1']->value['SubColumnList'])){?>
				<ul>
					<?php  $_smarty_tpl->tpl_vars['d2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['d1']->value['SubColumnList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d2']->key => $_smarty_tpl->tpl_vars['d2']->value){
$_smarty_tpl->tpl_vars['d2']->_loop = true;
?>
					<li><a href="__APP__/index.php?s=<?php echo $_smarty_tpl->tpl_vars['d2']->value['control'];?>
/<?php echo $_smarty_tpl->tpl_vars['d2']->value['action'];?>
&columnid=<?php echo $_smarty_tpl->tpl_vars['d2']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['d2']->value['columnname'];?>
</a></li>
					<?php } ?>
				</ul>
				<?php }?>
			</li>
			<?php } ?>
		</ul>
		<?php }?>
	</li>
	<?php } ?>
</ul>
<script type="text/javascript" src="public/plugin/superfish/js/hoverIntent.js"></script>
<script type="text/javascript" src="public/plugin/superfish/js/superfish.js"></script>
<script type="text/javascript">
	$('ul.headerNavigation').superfish();
</script><?php }} ?>