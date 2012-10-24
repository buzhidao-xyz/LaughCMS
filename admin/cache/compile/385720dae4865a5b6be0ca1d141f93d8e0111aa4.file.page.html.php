<?php /* Smarty version Smarty-3.1.12, created on 2012-10-24 17:14:55
         compiled from "C:\xampp\htdocs\laugh\admin\themes\default\public\page.html" */ ?>
<?php /*%%SmartyHeaderCode:235285087b18f8d3f98-83430959%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '385720dae4865a5b6be0ca1d141f93d8e0111aa4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\default\\public\\page.html',
      1 => 1351055791,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '235285087b18f8d3f98-83430959',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
    'isface' => 0,
    'v' => 0,
    'k' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5087b18f9f0914_39042976',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5087b18f9f0914_39042976')) {function content_5087b18f9f0914_39042976($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['page']->value&&count($_smarty_tpl->tpl_vars['page']->value['page'])>1){?>
<div id="<?php if ($_smarty_tpl->tpl_vars['isface']->value){?>facepage<?php }else{ ?>compage<?php }?>" class="pagination">
	<?php if ($_smarty_tpl->tpl_vars['page']->value['firstpage']['row']){?>
	<a class="pageprev graya fleft" href="<?php if ($_smarty_tpl->tpl_vars['page']->value['firstpage']['href']){?><?php echo $_smarty_tpl->tpl_vars['page']->value['firstpage']['href'];?>
<?php }else{ ?>javascript:;<?php }?>">首页</a> 
	<?php }?>
	<a class="pageprev graya fleft" href="<?php if ($_smarty_tpl->tpl_vars['page']->value['prev']['href']){?><?php echo $_smarty_tpl->tpl_vars['page']->value['prev']['href'];?>
<?php }else{ ?>javascript:;<?php }?>">上一页</a> 
	<span class="pageList none">
	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['page']->value['page']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
		<?php if ($_smarty_tpl->tpl_vars['v']->value){?>
			<a class="jumpPageBtn fleft" href="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
">第 <?php echo $_smarty_tpl->tpl_vars['k']->value;?>
 页</a>
		<?php }else{ ?>
			<?php if (isset($_smarty_tpl->tpl_vars['nowpage'])) {$_smarty_tpl->tpl_vars['nowpage'] = clone $_smarty_tpl->tpl_vars['nowpage'];
$_smarty_tpl->tpl_vars['nowpage']->value = $_smarty_tpl->tpl_vars['k']->value; $_smarty_tpl->tpl_vars['nowpage']->nocache = null; $_smarty_tpl->tpl_vars['nowpage']->scope = 0;
} else $_smarty_tpl->tpl_vars['nowpage'] = new Smarty_variable($_smarty_tpl->tpl_vars['k']->value, null, 0);?>
			<span class="current fleft bge7" href="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" style="">第 <?php echo $_smarty_tpl->tpl_vars['k']->value;?>
 页</span>
		<?php }?>
	<?php } ?>
	</span>
	<a class="pagenext graya fleft" href="<?php if ($_smarty_tpl->tpl_vars['page']->value['next']['href']){?><?php echo $_smarty_tpl->tpl_vars['page']->value['next']['href'];?>
<?php }else{ ?>javascript:;<?php }?>">下一页</a>
	<?php if ($_smarty_tpl->tpl_vars['page']->value['endpage']['row']){?>
	<a class="pageprev graya fleft" href="<?php if ($_smarty_tpl->tpl_vars['page']->value['endpage']['href']){?><?php echo $_smarty_tpl->tpl_vars['page']->value['endpage']['href'];?>
<?php }else{ ?>javascript:;<?php }?>">尾页</a> 
	<?php }?>
</div>

<script>
var bindpage = function($obj){
    $obj.find('.pagecur').hover(function(){
		$obj.find('.pageList').show();
	},function(){
		$obj.find('.pageList').hide();
	})
    
}
if($('#compage').length>0){
    //bindpage($('#compage'));
}
else if($('#facepage').length>0){
    //bindpage($('#facepage'));   
}
</script>

<?php }?><?php }} ?>