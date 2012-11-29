<?php /* Smarty version Smarty-3.1.12, created on 2012-11-29 14:45:58
         compiled from "C:\xampp\htdocs\laugh\admin\themes\smooth\public\page.html" */ ?>
<?php /*%%SmartyHeaderCode:1601750b704a6be4043-54525269%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd585a65dc84e51e2177815e315a44971d4418496' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\smooth\\public\\page.html',
      1 => 1353466611,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1601750b704a6be4043-54525269',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'start' => 0,
    'length' => 0,
    'total' => 0,
    'page' => 0,
    'v' => 0,
    'k' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50b704a6d0b193_72351860',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50b704a6d0b193_72351860')) {function content_50b704a6d0b193_72351860($_smarty_tpl) {?><div class="pagination pagination-left">
	<div class="results">
		<span>显示数据 <?php echo $_smarty_tpl->tpl_vars['start']->value+1;?>
-<?php if ($_smarty_tpl->tpl_vars['start']->value+$_smarty_tpl->tpl_vars['length']->value>$_smarty_tpl->tpl_vars['total']->value){?><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['start']->value+$_smarty_tpl->tpl_vars['length']->value;?>
<?php }?> / <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</span>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['page']->value&&count($_smarty_tpl->tpl_vars['page']->value['page'])>1){?>
	<ul class="pager">
		<?php if ($_smarty_tpl->tpl_vars['page']->value['firstpage']['row']){?>
		<li><a class="pageprev graya fleft" href="<?php if ($_smarty_tpl->tpl_vars['page']->value['firstpage']['href']){?><?php echo $_smarty_tpl->tpl_vars['page']->value['firstpage']['href'];?>
<?php }else{ ?>javascript:;<?php }?>">首页</a></li>
		<?php }?>
		<li><a class="pageprev graya fleft" href="<?php if ($_smarty_tpl->tpl_vars['page']->value['prev']['href']){?><?php echo $_smarty_tpl->tpl_vars['page']->value['prev']['href'];?>
<?php }else{ ?>javascript:;<?php }?>">上一页</a></li>
		<span class="pageList none">
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['page']->value['page']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
			<?php if ($_smarty_tpl->tpl_vars['v']->value){?>
				<li><a class="jumpPageBtn fleft" href="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
</a></li>
			<?php }else{ ?>
				<?php if (isset($_smarty_tpl->tpl_vars['nowpage'])) {$_smarty_tpl->tpl_vars['nowpage'] = clone $_smarty_tpl->tpl_vars['nowpage'];
$_smarty_tpl->tpl_vars['nowpage']->value = $_smarty_tpl->tpl_vars['k']->value; $_smarty_tpl->tpl_vars['nowpage']->nocache = null; $_smarty_tpl->tpl_vars['nowpage']->scope = 0;
} else $_smarty_tpl->tpl_vars['nowpage'] = new Smarty_variable($_smarty_tpl->tpl_vars['k']->value, null, 0);?>
				<li class="current"><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
</li>
			<?php }?>
		<?php } ?>
		</span>
		<li><a class="pagenext graya fleft" href="<?php if ($_smarty_tpl->tpl_vars['page']->value['next']['href']){?><?php echo $_smarty_tpl->tpl_vars['page']->value['next']['href'];?>
<?php }else{ ?>javascript:;<?php }?>">下一页</a></li>
		<?php if ($_smarty_tpl->tpl_vars['page']->value['endpage']['row']){?>
		<li><a class="pageprev graya fleft" href="<?php if ($_smarty_tpl->tpl_vars['page']->value['endpage']['href']){?><?php echo $_smarty_tpl->tpl_vars['page']->value['endpage']['href'];?>
<?php }else{ ?>javascript:;<?php }?>">尾页</a></li>
		<?php }?>
	</ul>
	<?php }?>
</div><?php }} ?>