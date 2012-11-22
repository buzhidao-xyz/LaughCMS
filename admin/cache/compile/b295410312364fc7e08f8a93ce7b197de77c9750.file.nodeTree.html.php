<?php /* Smarty version Smarty-3.1.12, created on 2012-11-22 17:24:01
         compiled from "C:\xampp\htdocs\laugh\admin\themes\smooth\Common\nodeTree.html" */ ?>
<?php /*%%SmartyHeaderCode:2360250adef3191c8e8-55804826%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b295410312364fc7e08f8a93ce7b197de77c9750' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\smooth\\Common\\nodeTree.html',
      1 => 1353576239,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2360250adef3191c8e8-55804826',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nodeTree' => 0,
    'd' => 0,
    'd1' => 0,
    'd2' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50adef319d2c83_83559646',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50adef319d2c83_83559646')) {function content_50adef319d2c83_83559646($_smarty_tpl) {?><link rel="stylesheet" type="text/css" href="themes/smooth/style/nodeTree.css" media="screen" />
<div id="nodeTree">
	<span class="nodeTreeTitle">请选择节点</span>
	<?php if ($_smarty_tpl->tpl_vars['nodeTree']->value){?>
	<?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nodeTree']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
$_smarty_tpl->tpl_vars['d']->_loop = true;
?>
	<ul class="groupTree">
		<li><span class="expand"></span><input type="checkbox" name="group<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" /><?php echo $_smarty_tpl->tpl_vars['d']->value['title'];?>
</li>
		<ul class="parentNode">
		<?php if (isset($_smarty_tpl->tpl_vars['d']->value['cnode'])){?>
		<?php  $_smarty_tpl->tpl_vars['d1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d1']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['d']->value['cnode']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d1']->key => $_smarty_tpl->tpl_vars['d1']->value){
$_smarty_tpl->tpl_vars['d1']->_loop = true;
?>
			<li title="<?php echo $_smarty_tpl->tpl_vars['d1']->value['remark'];?>
"><span class="expand"></span><input type="checkbox" name="parentNode<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" /><?php echo $_smarty_tpl->tpl_vars['d1']->value['title'];?>
</li>
			<ul class="childNode">
			<?php if (isset($_smarty_tpl->tpl_vars['d1']->value['cnode'])){?>
			<?php  $_smarty_tpl->tpl_vars['d2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['d1']->value['cnode']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d2']->key => $_smarty_tpl->tpl_vars['d2']->value){
$_smarty_tpl->tpl_vars['d2']->_loop = true;
?>
				<li title="<?php echo $_smarty_tpl->tpl_vars['d2']->value['remark'];?>
"><input type="checkbox" name="childNode<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" /><?php echo $_smarty_tpl->tpl_vars['d2']->value['title'];?>
</li>
			<?php } ?>
			<?php }?>
			</ul>
		<?php } ?>
		<?php }?>
		</ul>
	</ul>
	<?php } ?>
	<?php }?>
</div>
<script type="text/javascript">
$(document).ready(function (){
$("#nodeTree ul li span.expand").click(function(){
	alert($(this).index());
	// $(this).parent().parent().find("ul:eq(0)").css('display','none').css("position","");
});
});
</script><?php }} ?>