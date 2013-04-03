<?php /* Smarty version Smarty-3.1.12, created on 2013-04-03 11:54:02
         compiled from "C:\xampp\htdocs\laugh\themes\default\Cooperate\index.html" */ ?>
<?php /*%%SmartyHeaderCode:17972515ba7da6a0b82-62200109%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58d40917d3de82f6098f574213396b1aae07c96b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\themes\\default\\Cooperate\\index.html',
      1 => 1359940001,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17972515ba7da6a0b82-62200109',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_515ba7da7128e8_08363222',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_515ba7da7128e8_08363222')) {function content_515ba7da7128e8_08363222($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("include/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("Common/Top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("Common/Header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="WrapContainer" class="wrap">
	<div class="adBanner block">
		<a href="javascript:;" target="_blank"><img src="themes/default/images/ad_banner.png" width="1000" height="80" /></a>
	</div>
	<div class="CurPosition mtop5">
		当前位置: <a href="__APP__">首页</a> > <a href="__APP__/index.php?s=article">招贤纳士</a>
	</div>
	<div id="CenterShow" class="block mtop5">
		<div id="mainBlock" class="fleft w740">
			<div id="ImgListBlock" class="boxBlock">
				<div class="boxBlockTitle">
					<span class="title">招贤纳士</span>
				</div>
				<div class="boxBlockBody">
					<?php echo $_smarty_tpl->getSubTemplate ("Common/CooperateList.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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