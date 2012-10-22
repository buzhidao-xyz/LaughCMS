<?php /* Smarty version Smarty-3.1.11, created on 2012-10-22 21:35:07
         compiled from "/usr/local/webserver/site/laugh/admin/themes/default/public/body.html" */ ?>
<?php /*%%SmartyHeaderCode:20323753850854b8b57e0c7-72643959%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d4ef739e6718a48fb2c82c1555e4865e7c537de' => 
    array (
      0 => '/usr/local/webserver/site/laugh/admin/themes/default/public/body.html',
      1 => 1347541652,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20323753850854b8b57e0c7-72643959',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'groupid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50854b8b5c2f49_67745639',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50854b8b5c2f49_67745639')) {function content_50854b8b5c2f49_67745639($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("include/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<table border="0" cellPadding="0" cellSpacing="0" style="width:100%; height:100%; table-layout:fixed;">
 <tr><td width="160" height="90"></td><td></td></tr>
 <tr>
  <td valign="top">
   <iframe frameborder="0" id="menu" name="menu" width="160px" height="100%" src="__APP__/?s=public/menu&groupid=<?php echo $_smarty_tpl->tpl_vars['groupid']->value;?>
" scrolling="auto" class="iframe"></iframe>
  </td>
  <td valign="top">
   <iframe frameborder="0" id="main" name="main" width="100%" height="100%" src="__APP__/?s=public/welcome" scrolling="yes" class="iframe"></iframe>
  </td>
 </tr>
</table>
<?php echo $_smarty_tpl->getSubTemplate ("include/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>