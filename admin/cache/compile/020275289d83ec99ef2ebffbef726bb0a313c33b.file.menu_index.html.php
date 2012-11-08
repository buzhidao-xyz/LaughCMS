<?php /* Smarty version Smarty-3.1.12, created on 2012-11-08 23:18:31
         compiled from "/usr/local/webserver/site/laugh/admin/themes/smooth/public/menu_index.html" */ ?>
<?php /*%%SmartyHeaderCode:265339228509bcd474dc9a7-88985662%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '020275289d83ec99ef2ebffbef726bb0a313c33b' => 
    array (
      0 => '/usr/local/webserver/site/laugh/admin/themes/smooth/public/menu_index.html',
      1 => 1352385716,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '265339228509bcd474dc9a7-88985662',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_509bcd4750fd61_48044857',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509bcd4750fd61_48044857')) {function content_509bcd4750fd61_48044857($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("include/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!-- content -->
<div id="content" style="background: url('themes/smooth/images/content.png') repeat-y top left;">
	<div class="blankhd"></div>
	<!-- end content / left -->
	<div id="left">
		<div id="menu">
			<h6 id="h-menu-menu1" class="selected"><a target="main" hidefocus="true" href="javascript:#menu1"><span>基本信息</span></a></h6>
			<ul id="menu-menu1" class="opend">
				<li><a target="main" hidefocus="true" href="javascript:;" class="">个人信息</a></li>
			</ul>
		</div>
	</div>
	<!-- end content / left -->
</div>
<?php echo $_smarty_tpl->getSubTemplate ("include/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>