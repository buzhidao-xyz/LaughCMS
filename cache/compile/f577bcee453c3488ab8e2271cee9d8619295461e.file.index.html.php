<?php /* Smarty version Smarty-3.1.12, created on 2013-04-02 17:21:11
         compiled from "C:\xampp\htdocs\laugh\themes\default\index.html" */ ?>
<?php /*%%SmartyHeaderCode:23863515aa3075e0253-55323733%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f577bcee453c3488ab8e2271cee9d8619295461e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\themes\\default\\index.html',
      1 => 1364461906,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23863515aa3075e0253-55323733',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ArticleList' => 0,
    'd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_515aa30766d317_15850867',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_515aa30766d317_15850867')) {function content_515aa30766d317_15850867($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("include/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
				<span class="link"><a href="javascript:;">更多>></a></span>
			</div>
			<div class="boxBlockBody h170">
				<ul class="articleList">
					<?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ArticleList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
$_smarty_tpl->tpl_vars['d']->_loop = true;
?>
					<li><a href="__APP__/index.php?s=article/view&columnid=<?php echo $_smarty_tpl->tpl_vars['d']->value['columnid'];?>
&archiveid=<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['d']->value['title'];?>
</a></li>
					<?php } ?>
				</ul>
			</div>
		</div>
		<div class="boxBlock fleft w640 mleft10">
			<div class="boxBlockTitle">
				<span class="title">关于我们</span>
			</div>
			<div class="boxBlockBody h170">
				<div class="boxBlockImg fleft">
					<img src="themes/default/images/aboutus_img.png" width="130" height="150" />
				</div>
				<div class="boxBlockText fleft w450">
					<span class="text">LaughCMS企业网站管理系统，是一款代码完全开源免费的PHP+MYSQL系统。</span>
					<span class="text">程序内置SEO优化机制，使企业网站更容易被推广。拥有企业网站常用的模块功能（企业简介模块、新闻模块、产品模块、下载模块、图片模块、招聘模块、在线留言、友情链接、会员与权限管理）。强大灵活的后台管理功能、静态页面生成功能、自定义模型功能、自制插件安装管理功能等可为企业打造出大气漂亮且具有营销力的精品网站...</span>
					<a href="javascript:;" class="viewbtn">阅读全文</a>
				</div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
	<div class="adBanner block">
		<a href="javascript:;" target="_blank"><img src="themes/default/images/ad_banner.png" width="1000" height="80" /></a>
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