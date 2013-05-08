<?php /* Smarty version Smarty-3.1.12, created on 2013-05-08 15:02:58
         compiled from "C:\xampp\htdocs\laugh\themes\default\Public\aboutus.html" */ ?>
<?php /*%%SmartyHeaderCode:93335189f8a2e8b907-91526587%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc586650093ec164aee5be2dfa69855f8c891f46' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\themes\\default\\Public\\aboutus.html',
      1 => 1367911518,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '93335189f8a2e8b907-91526587',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Column' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5189f8a2ef7978_96222946',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5189f8a2ef7978_96222946')) {function content_5189f8a2ef7978_96222946($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("include/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("Common/Top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("Common/Header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="WrapContainer" class="wrap">
	<div class="adBanner block">
		<a href="javascript:;" target="_blank"><img src="themes/default/images/ad_banner.png" width="1000" height="80" /></a>
	</div>
	<div class="CurPosition mtop5">
		当前位置: <a href="__APP__">首页</a> > <a href="__APP__/index.php?s=article">关于我们</a>
	</div>
	<div id="CenterShow" class="block mtop5">
		<div id="mainBlock" class="fleft w740">
			<div class="boxBlock">
				<div class="boxBlockTitle">
					<span class="title">关于我们</span>
				</div>
				<div class="boxBlockBody h576">
					<div class="contentBlock">
						<?php echo html_entity_decode($_smarty_tpl->tpl_vars['Column']->value['content']);?>

					</div>
				</div>
			</div>
		</div>
		<?php echo $_smarty_tpl->getSubTemplate ("Common/SideBlock.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div class="clear"></div>
	</div>
	<?php echo $_smarty_tpl->getSubTemplate ("Common/Flink.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
<?php echo $_smarty_tpl->getSubTemplate ("include/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>