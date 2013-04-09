<?php /* Smarty version Smarty-3.1.12, created on 2013-04-09 17:28:32
         compiled from "C:\xampp\htdocs\laugh\themes\default\Image\Msonary.html" */ ?>
<?php /*%%SmartyHeaderCode:64315163df409c0e76-52646944%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab47aecdc105cc81a8196d3731369900c0cdba63' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\themes\\default\\Image\\Msonary.html',
      1 => 1365497312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '64315163df409c0e76-52646944',
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
  'unifunc' => 'content_5163df40a6ded4_34085432',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5163df40a6ded4_34085432')) {function content_5163df40a6ded4_34085432($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['archiveInfo']->value['archiveImage'])&&!empty($_smarty_tpl->tpl_vars['archiveInfo']->value['archiveImage'])){?>
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