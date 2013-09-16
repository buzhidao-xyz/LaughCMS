<?php /* Smarty version Smarty-3.1.12, created on 2013-09-16 11:02:36
         compiled from "G:\github\laugh\themes\default\Common\Flink.html" */ ?>
<?php /*%%SmartyHeaderCode:14659523674cc2b7011-55642439%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fea82e13bb2d461b6a91f1a36609efcd6cb66b73' => 
    array (
      0 => 'G:\\github\\laugh\\themes\\default\\Common\\Flink.html',
      1 => 1378872396,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14659523674cc2b7011-55642439',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FlinkList' => 0,
    'd' => 0,
    'd1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_523674cc2f6548_57575697',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_523674cc2f6548_57575697')) {function content_523674cc2f6548_57575697($_smarty_tpl) {?><div id="Flink" class="boxBlock block">
	<div class="FlinkTitle">
		<span class="title">友情链接</span>
		<ul id="FlinkboxTab" class="boxTab fleft">
			<?php if (isset($_smarty_tpl->tpl_vars['FlinkList']->value)&&!empty($_smarty_tpl->tpl_vars['FlinkList']->value)){?>
			<?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['FlinkList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
$_smarty_tpl->tpl_vars['d']->_loop = true;
?>
			<li><a tabid="#flinkboxTab<?php echo $_smarty_tpl->tpl_vars['d']->value['autoIndex'];?>
" href="javascript:;" <?php if ($_smarty_tpl->tpl_vars['d']->value['autoIndex']==1){?>class="bordernone"<?php }?>><?php echo $_smarty_tpl->tpl_vars['d']->value['catalogname'];?>
</a></li>
			<?php } ?>
			<?php }?>
		</ul>
	</div>
	<div class="FlinkBody">
		<?php if (isset($_smarty_tpl->tpl_vars['FlinkList']->value)&&!empty($_smarty_tpl->tpl_vars['FlinkList']->value)){?>
		<?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['FlinkList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
$_smarty_tpl->tpl_vars['d']->_loop = true;
?>
		<div id="flinkboxTab<?php echo $_smarty_tpl->tpl_vars['d']->value['autoIndex'];?>
" class="boxTabContent">
			<ul class="flinkList">
				<?php if (isset($_smarty_tpl->tpl_vars['d']->value['flinklist'])&&!empty($_smarty_tpl->tpl_vars['d']->value['flinklist'])){?>
				<?php  $_smarty_tpl->tpl_vars['d1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d1']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['d']->value['flinklist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d1']->key => $_smarty_tpl->tpl_vars['d1']->value){
$_smarty_tpl->tpl_vars['d1']->_loop = true;
?>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['d1']->value['linkurl'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['d1']->value['linkname'];?>
</a></li>
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
//友情链接切换tab
$("#Flink ul#FlinkboxTab").idTabs(function(id,list,set){
	$("a",set).removeClass("selected").filter("[tabid='"+id+"']",set).addClass("selected"); 
	for(i in list) $(list[i]).hide();
	$(id).fadeIn();
	return false;
});
});
</script><?php }} ?>