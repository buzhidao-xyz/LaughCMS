<?php /* Smarty version Smarty-3.1.12, created on 2013-04-09 17:28:22
         compiled from "C:\xampp\htdocs\laugh\themes\default\Image\body.html" */ ?>
<?php /*%%SmartyHeaderCode:170015163df36075cb5-71219339%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b63a2aeab951dd108be6004115c02130c34fa3d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\themes\\default\\Image\\body.html',
      1 => 1365499689,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '170015163df36075cb5-71219339',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CurrentPosition' => 0,
    'archiveInfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5163df360ea847_85779084',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5163df360ea847_85779084')) {function content_5163df360ea847_85779084($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("include/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("Common/Top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("Common/Header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="WrapContainer" class="wrap">
	<div class="adBanner block">
		<a href="javascript:;" target="_blank"><img src="themes/default/images/ad_banner.png" width="1000" height="80" /></a>
	</div>
	<div class="CurPosition mtop5">
		当前位置: <?php echo $_smarty_tpl->tpl_vars['CurrentPosition']->value;?>

	</div>
	<div id="CenterShow" class="block mtop5">
		<div id="mainBlock" class="fleft w740">
			<div class="boxBlock">
				<div class="boxBlockTitle">
					<span class="title"><?php echo $_smarty_tpl->tpl_vars['archiveInfo']->value['title'];?>
</span>
				</div>
				<div class="boxBlockBody">
					<div class="contentBlock">
						<?php echo $_smarty_tpl->getSubTemplate ("Image/image.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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