<?php /* Smarty version Smarty-3.1.12, created on 2013-05-30 14:01:30
         compiled from "F:\website\laugh\themes\sindgood\include\foot.html" */ ?>
<?php /*%%SmartyHeaderCode:2405951a6eb3a0b4da3-51203785%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be3ebc6d04804bd3978d83d3c911d191011f1951' => 
    array (
      0 => 'F:\\website\\laugh\\themes\\sindgood\\include\\foot.html',
      1 => 1369887319,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2405951a6eb3a0b4da3-51203785',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FootNavigationList' => 0,
    'd' => 0,
    'Config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51a6eb3a0ff9a0_14659122',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a6eb3a0ff9a0_14659122')) {function content_51a6eb3a0ff9a0_14659122($_smarty_tpl) {?><div id="Footer">
	<ul id="Link">
		<?php if (isset($_smarty_tpl->tpl_vars['FootNavigationList']->value)&&!empty($_smarty_tpl->tpl_vars['FootNavigationList']->value)){?>
		<?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['FootNavigationList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
$_smarty_tpl->tpl_vars['d']->_loop = true;
?>
		<li <?php if ($_smarty_tpl->tpl_vars['d']->value['AutoIndex']==1){?>class="bordernone"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['d']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['d']->value['title'];?>
</a></li>
		<?php } ?>
		<?php }?>
	</ul>
	<div id="copyright">
		<?php echo $_smarty_tpl->tpl_vars['Config']->value['sitename'];?>

		<br/>
		Powered by <a target="_blank" href="javascript:;">LaughCMS v1.0 Released</a> 版权所有 © 2012-2013, All right reserved. 
	</div>
</div>
<script type="text/javascript" src="public/js/scrollToTop.js"></script>
</body>
</html><?php }} ?>