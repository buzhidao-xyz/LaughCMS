<?php /* Smarty version Smarty-3.1.12, created on 2013-10-05 00:54:55
         compiled from "F:\website\laugh\admin\themes\blue\public\page.html" */ ?>
<?php /*%%SmartyHeaderCode:12475524ef2df833938-20022318%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '29bff2d1665988191156f5e9c9ce6ce01130e1e2' => 
    array (
      0 => 'F:\\website\\laugh\\admin\\themes\\blue\\public\\page.html',
      1 => 1366899152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12475524ef2df833938-20022318',
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
  'unifunc' => 'content_524ef2df90d5b8_87904658',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_524ef2df90d5b8_87904658')) {function content_524ef2df90d5b8_87904658($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['page']->value)&&$_smarty_tpl->tpl_vars['page']->value&&count($_smarty_tpl->tpl_vars['page']->value['page'])>1){?>
<div id="<?php if (isset($_smarty_tpl->tpl_vars['isface']->value)){?>facepage<?php }else{ ?>compage<?php }?>" class="pagination">
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
} else if ($('#facepage').length>0) {
    //bindpage($('#facepage'));   
}
</script>

<?php }?><?php }} ?>