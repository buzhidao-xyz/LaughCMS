<?php /* Smarty version Smarty-3.1.12, created on 2013-05-20 17:12:21
         compiled from "C:\xampp\htdocs\laugh\themes\default\index.html" */ ?>
<?php /*%%SmartyHeaderCode:234605199e8f5b3c489-86659865%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f577bcee453c3488ab8e2271cee9d8619295461e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\themes\\default\\index.html',
      1 => 1368608163,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '234605199e8f5b3c489-86659865',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'AboutUs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5199e8f5bea5e2_83854302',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5199e8f5bea5e2_83854302')) {function content_5199e8f5bea5e2_83854302($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("include/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("Common/Top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("Common/Header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="WrapContainer" class="wrap">
	<div id="ImageFlash" class="block">
		<?php echo $_smarty_tpl->getSubTemplate ("Common/ImageFlash1.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div id="SImageCaption">
			<h1>Laugh CMS 正式版</h1>
			<h2 class="mtop5">LaughCMS企业网站管理系统,是一款代码完全开源免费PHP+MYSQL系统.系统安全,效率,易用并且可扩展性非常好。
			</h2>
			<h3 class="mtop10">系统版本: Laugh CMS 正式版</h3>
			<h4>软件语言: 简体中文UTF-8</h4>
			<h4>环境要求: IIS/Apache/Nginx + PHP5 + MySQL5</h4>
			<h4>用户手册: <a href="javascript:;" target="_blank">在线手册</a></h4>
			<h4>在线演示: <a href="javascript:;" target="_blank">演示地址</a></h4>
			<a id="downloadbtn" href="javascript:;" target="_blank"></a>
		</div>
		<div class="clear"></div>
	</div>
	<div id="CenterShow" class="block">
		<div class="boxBlock fleft w350">
			<div class="boxBlockTitle">
				<span class="title">新闻资讯</span>
				<span class="link"><a href="__APP__/index.php?s=Article/index&columnid=2">更多>></a></span>
			</div>
			<div class="boxBlockBody h170">
				<ul class="articleList">
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('cmstag_archive', array('columnid'=>2,'orderby'=>'createtime','orderway'=>'desc')); $_block_repeat=true; echo CMSTagArchive(array('columnid'=>2,'orderby'=>'createtime','orderway'=>'desc'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<li><a href="__APP__/index.php?s=Article/view&columnid=[field.columnid]&archiveid=[field.id]">[field.title]</a></li>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo CMSTagArchive(array('columnid'=>2,'orderby'=>'createtime','orderway'=>'desc'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</ul>
			</div>
		</div>
		<div class="boxBlock fleft w640 mleft10">
			<div class="boxBlockTitle">
				<span class="title"><?php echo $_smarty_tpl->tpl_vars['AboutUs']->value['columnname'];?>
</span>
			</div>
			<div class="boxBlockBody h170">
				<div class="boxBlockImg fleft">
					<img src="themes/default/images/aboutus_img.png" width="130" height="150" />
				</div>
				<div class="boxBlockText fleft w450">
					<?php echo htmlSubString(html_entity_decode($_smarty_tpl->tpl_vars['AboutUs']->value['content']),210);?>

					<a href="__APP__/index.php?s=<?php echo $_smarty_tpl->tpl_vars['AboutUs']->value['control'];?>
/<?php echo $_smarty_tpl->tpl_vars['AboutUs']->value['action'];?>
&columnid=<?php echo $_smarty_tpl->tpl_vars['AboutUs']->value['id'];?>
" class="viewbtn">阅读全文</a>
				</div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
	<div class="adBanner block">
		<?php echo CMSTagAdvertise(array('flag'=>1,'html'=>'<a href="[field.link]" target="_blank"><img src="[field.path]" width="1000" height="80" /></a>'),$_smarty_tpl);?>

	</div>
	<div id="BottomShow" class="block">
		<?php echo $_smarty_tpl->getSubTemplate ("Common/ProductList.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div class="boxBlock fleft w250 mleft10">
			<div class="boxBlockTitle">
				<span class="title">联系我们</span>
			</div>
			<div class="boxBlockBody h350">
				<div class="contactUS">
					<h5>电 话: XXXXXXXX</h5>
					<h5>邮 编: XXXXXXXX</h5>
					<h5>网 址: www.xxx.com</h5>
					<h5>Email: admin@admin.com</h5>
					<h5>联系地址: 江苏省苏州市工业园区若水路1号</h5>
					<h5>联系人: XXX</h5>
					<h4>Laugh CMS 软件科技公司</h4>
				</div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
	<?php echo $_smarty_tpl->getSubTemplate ("Common/Flink.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
<?php echo $_smarty_tpl->getSubTemplate ("include/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>