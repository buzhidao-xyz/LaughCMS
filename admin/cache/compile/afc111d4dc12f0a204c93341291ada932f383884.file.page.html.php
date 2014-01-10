<?php /* Smarty version Smarty-3.1.12, created on 2013-12-28 22:12:41
         compiled from "F:\website\laugh\admin\themes\blue\Public\page.html" */ ?>
<?php /*%%SmartyHeaderCode:1957952bedc592663f4-78106206%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'afc111d4dc12f0a204c93341291ada932f383884' => 
    array (
      0 => 'F:\\website\\laugh\\admin\\themes\\blue\\Public\\page.html',
      1 => 1366899152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1957952bedc592663f4-78106206',
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
  'unifunc' => 'content_52bedc59371292_93630561',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52bedc59371292_93630561')) {function content_52bedc59371292_93630561($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['page']->value)&&$_smarty_tpl->tpl_vars['page']->value&&count($_smarty_tpl->tpl_vars['page']->value['page'])>1){?>
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