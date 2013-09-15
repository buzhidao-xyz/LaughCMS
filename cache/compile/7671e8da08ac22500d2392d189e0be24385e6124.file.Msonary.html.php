<?php /* Smarty version Smarty-3.1.12, created on 2013-09-09 22:22:17
         compiled from "F:\website\laugh\themes\default\Image\Msonary.html" */ ?>
<?php /*%%SmartyHeaderCode:851522dd99957ace7-36358519%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7671e8da08ac22500d2392d189e0be24385e6124' => 
    array (
      0 => 'F:\\website\\laugh\\themes\\default\\Image\\Msonary.html',
      1 => 1366899154,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '851522dd99957ace7-36358519',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'archiveInfo' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_522dd9996240d5_03128766',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522dd9996240d5_03128766')) {function content_522dd9996240d5_03128766($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['archiveInfo']->value['archiveImage'])&&!empty($_smarty_tpl->tpl_vars['archiveInfo']->value['archiveImage'])){?>
<?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['archiveInfo']->value['archiveImage']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value){
$_smarty_tpl->tpl_vars['image']->_loop = true;
?>
  <div class="box col<?php echo $_smarty_tpl->tpl_vars['image']->value['coln'];?>
">
    <p>
        <a rel="group" href="__APP__<?php echo $_smarty_tpl->tpl_vars['image']->value['imagepath'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['image']->value['imagetitle'];?>
"><img src="__APP__<?php echo $_smarty_tpl->tpl_vars['image']->value['thumbpath'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['image']->value['imagetitle'];?>
" /></a>
    </p>
  </div>
<?php } ?>
<?php }?><?php }} ?>