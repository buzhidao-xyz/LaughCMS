<?php /* Smarty version Smarty-3.1.12, created on 2013-05-17 09:47:10
         compiled from "C:\xampp\htdocs\laugh\themes\default\Download\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1159951958c1ebda8a8-91216068%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ed13491c35e3df74e3c1442205bbe5a9241c629' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\themes\\default\\Download\\index.html',
      1 => 1368669462,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1159951958c1ebda8a8-91216068',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CurrentPosition' => 0,
    'Column' => 0,
    'ArchiveList' => 0,
    'd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51958c1ecb7512_34705631',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51958c1ecb7512_34705631')) {function content_51958c1ecb7512_34705631($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("include/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("Common/Top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("Common/Header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="WrapContainer" class="wrap">
	<div class="adBanner block">
		<?php echo CMSTagAdvertise(array('flag'=>2,'html'=>'<a href="[field.link]" target="_blank"><img src="[field.path]" width="1000" height="80" /></a>'),$_smarty_tpl);?>

	</div>
	<div class="CurPosition mtop5">
		当前位置: <?php echo $_smarty_tpl->tpl_vars['CurrentPosition']->value;?>

	</div>
	<div id="CenterShow" class="block mtop5">
		<div id="mainBlock" class="fleft w740">
			<div id="ImgListBlock" class="boxBlock">
				<div class="boxBlockTitle">
					<span class="title"><?php echo $_smarty_tpl->tpl_vars['Column']->value['columnname'];?>
</span>
				</div>
				<div class="boxBlockBody">
					<div class="downloadList">
						<ul class="downloadTitle">
							<li class="w50">序号</li>
							<li class="w250">文件名称</li>
							<li class="w100">大小</li>
							<li class="w100">发布时间</li>
							<li class="w50">下载</li>
						</ul>
						<?php if (isset($_smarty_tpl->tpl_vars['ArchiveList']->value)&&!empty($_smarty_tpl->tpl_vars['ArchiveList']->value)){?>
						<?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ArchiveList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
$_smarty_tpl->tpl_vars['d']->_loop = true;
?>
						<ul class="downloadBody">
							<li class="w50"><?php echo $_smarty_tpl->tpl_vars['d']->value['AutoIndex'];?>
</li>
							<li class="w250"><?php echo $_smarty_tpl->tpl_vars['d']->value['filename'];?>
</li>
							<li class="w100"><?php echo formatBytes($_smarty_tpl->tpl_vars['d']->value['filesize']);?>
</li>
							<li class="w100"><?php echo mkdate($_smarty_tpl->tpl_vars['d']->value['createtime'],'d');?>
</li>
							<li class="w50"><a href="__APP__/index.php?s=File/Download&id=<?php echo $_smarty_tpl->tpl_vars['d']->value['attachmentid'];?>
" target="_blank">下载</a></li>
						</ul>
						<?php } ?>
						<?php }?>
					</div>
					<?php echo $_smarty_tpl->getSubTemplate ("common/Page.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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