<?php /* Smarty version Smarty-3.1.12, created on 2013-04-03 17:18:04
         compiled from "C:\xampp\htdocs\laugh\themes\default\Common\ProductList.html" */ ?>
<?php /*%%SmartyHeaderCode:25114515bf3cc7bccb9-23010617%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56d5806265209d4af3072e7e5411bb1411cabead' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\themes\\default\\Common\\ProductList.html',
      1 => 1364958859,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25114515bf3cc7bccb9-23010617',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ProductColumnID' => 0,
    'SubColumnList' => 0,
    'd' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_515bf3cc8a6132_38578422',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_515bf3cc8a6132_38578422')) {function content_515bf3cc8a6132_38578422($_smarty_tpl) {?><div id="ImgListBlock" class="boxBlock fleft w740">
	<div class="boxBlockTitle">
		<span class="title">产品展示</span>
		<span class="link"><a href="__APP__/index.php?s=Product/index&columnid=<?php echo $_smarty_tpl->tpl_vars['ProductColumnID']->value;?>
">更多>></a></span>
		<ul id="ImgboxTab" class="boxTab fleft">
			<?php if (is_array($_smarty_tpl->tpl_vars['SubColumnList']->value)&&!empty($_smarty_tpl->tpl_vars['SubColumnList']->value)){?>
			<?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SubColumnList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
$_smarty_tpl->tpl_vars['d']->_loop = true;
?>
			<li><a tabid="#boxTab<?php echo $_smarty_tpl->tpl_vars['d']->value['AutoIndex'];?>
" href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['d']->value['columnname'];?>
</a></li>
			<?php } ?>
			<?php }?>
		</ul>
	</div>
	<div class="boxBlockBody h350">
		<?php if (is_array($_smarty_tpl->tpl_vars['SubColumnList']->value)&&!empty($_smarty_tpl->tpl_vars['SubColumnList']->value)){?>
		<?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SubColumnList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
$_smarty_tpl->tpl_vars['d']->_loop = true;
?>
		<div id="boxTab<?php echo $_smarty_tpl->tpl_vars['d']->value['AutoIndex'];?>
" class="boxTabContent">
			<ul class="ProductList h335">
				<?php if (isset($_smarty_tpl->tpl_vars['d']->value['ProductList'])&&is_array($_smarty_tpl->tpl_vars['d']->value['ProductList'])&&!empty($_smarty_tpl->tpl_vars['d']->value['ProductList'])){?>
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['d']->value['ProductList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
				<li>
					<a class="img" href="__APP__/index.php?s=Product/view&columnid=<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
&archiveid=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><img src="__APP__<?php echo $_smarty_tpl->tpl_vars['v']->value['thumbimage'];?>
" /></a>
					<a class="title" href="__APP__/index.php?s=Product/view&columnid=<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
&archiveid=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a>
				</li>
				<?php } ?>
				<?php }?>
			</ul>
		</div>
		<?php } ?>
		<?php }?>
	</div>
</div>
<script type="text/javascript">
$(document).ready(function() {
//图片切换tab
$("#ImgListBlock ul#ImgboxTab").idTabs(function(id,list,set){ 
	$("a",set).removeClass("selected").filter("[tabid='"+id+"']",set).addClass("selected"); 
	for(i in list) $(list[i]).hide(); 
	$(id).fadeIn(); 
	return false; 
});
});
</script><?php }} ?>