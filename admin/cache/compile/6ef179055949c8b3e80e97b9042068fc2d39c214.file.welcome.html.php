<?php /* Smarty version Smarty-3.1.12, created on 2013-01-17 15:02:28
         compiled from "C:\xampp\htdocs\laugh\admin\themes\green\Public\welcome.html" */ ?>
<?php /*%%SmartyHeaderCode:1503250f7a2046ce300-21206634%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ef179055949c8b3e80e97b9042068fc2d39c214' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\green\\Public\\welcome.html',
      1 => 1358145812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1503250f7a2046ce300-21206634',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'phpinfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50f7a20476aad4_41009162',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50f7a20476aad4_41009162')) {function content_50f7a20476aad4_41009162($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/control_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="captitle lineOrange">欢迎进入后台管理系统</div>
<div class="box boxLeft">
	<div class="boxTitle">
		<h5>·&nbsp;快捷操作</h5>
		<ul class="boxTab">
			<li><a href="#boxTab1">管理</a></li>
			<li><a href="#boxTab2">新增</a></li>
		</ul>
	</div>
	<div id="boxTab1" class="boxContent boxTabContent">
		<a href="__APP__/index.php?s=Column/index">栏目管理</a>
		<a href="__APP__/index.php?s=Article/index">文档管理</a>
		<a href="#">评论管理</a>
		<a href="__APP__/index.php?s=Article/newArticle">内容发布</a>
		<a href="#">系统设置</a>
	</div>
	<div id="boxTab2" class="boxContent boxTabContent">
		<div class="boxFrom">
			<form name="boxform" action="__APP__/index.php?s=Public/saveFastOp" method="post" id="addajaxform">
				<ul>
					<li>
						<span>名称：</span>
						<input type="text" name="title" autocomplete="off" value="" class="input w150" />
					</li>
					<li>
						<span>链接：</span>
						<input type="text" name="remark" autocomplete="off" value="" class="input w250" />
					</li>
					<li class="bordernone">
						<input type="submit" name="subut" class="button btnyellow2" value="添加" />
					</li>
				</ul>
			</form>
		</div>
	</div>
</div>
<div class="box boxRight">
	<div class="boxTitle">
		<h5>·&nbsp;信息统计</h5>
	</div>
	<div class="boxContent">
	</div>
</div>
<div class="box boxLeft">
	<div class="boxTitle">
		<h5>·&nbsp;系统基本信息</h5>
	</div>
	<div class="boxContent">
		<ul>
			<li class="title lineOrange"><span>PHP环境摘要 ------ </span></li>
			<li><span class="sleft">PHP版本：</span><span class="sright"><?php echo $_smarty_tpl->tpl_vars['phpinfo']->value['php_version'];?>
</span></li>
			<li><span class="sleft">是否安全模式：</span><span class="sright"><?php if ($_smarty_tpl->tpl_vars['phpinfo']->value['safe_mode']){?>是<?php }else{ ?>否<?php }?></span></li>
			<li><span class="sleft">Register_Globals：</span><span class="sright"><?php if ($_smarty_tpl->tpl_vars['phpinfo']->value['register_globals']){?>开启<?php }else{ ?>关闭<?php }?></span></li>
			<li><span class="sleft">Magic_Quotes_Gpc：</span><span class="sright"><?php if ($_smarty_tpl->tpl_vars['phpinfo']->value['magic_quotes_gpc']){?>开启<?php }else{ ?>关闭<?php }?></span></li>
			<li><span class="sleft">支持上传的最大文件：</span><span class="sright"><?php echo $_smarty_tpl->tpl_vars['phpinfo']->value['upload_max_filesize'];?>
</span></li>
			<li><span class="sleft">是否允许打开远程连接：</span><span class="sright"><?php if ($_smarty_tpl->tpl_vars['phpinfo']->value['allow_url_fopen']){?>是<?php }else{ ?>否<?php }?></span></li>
		</ul>
	</div>
</div>
<script type="text/javascript">
$(document).ready(function(){
	$(".boxTitle ul.boxTab").idTabs(function(id,list,set){ 
    	$("a",set).removeClass("selected").filter("[href='"+id+"']",set).addClass("selected"); 
    	for(i in list) $(list[i]).hide(); 
    	$(id).fadeIn(); 
    	return false; 
	});
});
</script>
<?php echo $_smarty_tpl->getSubTemplate ("public/control_bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>