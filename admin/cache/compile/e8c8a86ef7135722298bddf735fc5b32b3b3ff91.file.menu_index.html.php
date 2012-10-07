<?php /* Smarty version Smarty-3.1.11, created on 2012-10-07 22:45:32
         compiled from "/usr/local/webserver/site/laugh/admin/themes/default/public/menu_index.html" */ ?>
<?php /*%%SmartyHeaderCode:5055663155071958cbfb419-32949922%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8c8a86ef7135722298bddf735fc5b32b3b3ff91' => 
    array (
      0 => '/usr/local/webserver/site/laugh/admin/themes/default/public/menu_index.html',
      1 => 1347544252,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5055663155071958cbfb419-32949922',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5071958cc2f321_04896795',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5071958cc2f321_04896795')) {function content_5071958cc2f321_04896795($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("include/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="menu">
    <ul>
        <li class="menulist">
			<div><a target="main" hidefocus="true" href="javascript:;">基本信息</a></div>
			<ul class="menusub">
				<li><a target="main" hidefocus="true" href="javascript:;" class="">个人信息</a></li>
			</ul>
		</li>
    </ul>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("include/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>