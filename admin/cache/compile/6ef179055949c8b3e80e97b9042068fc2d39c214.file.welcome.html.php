<?php /* Smarty version Smarty-3.1.12, created on 2013-02-22 12:31:08
         compiled from "C:\xampp\htdocs\laugh\admin\themes\green\Public\welcome.html" */ ?>
<?php /*%%SmartyHeaderCode:57325126f48caee8d9-26183462%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ef179055949c8b3e80e97b9042068fc2d39c214' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\green\\Public\\welcome.html',
      1 => 1359682851,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '57325126f48caee8d9-26183462',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'phpinfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5126f48cbefd04_72028524',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5126f48cbefd04_72028524')) {function content_5126f48cbefd04_72028524($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/control_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="captitle lineOrange">欢迎进入后台管理系统</div>
<div class="box boxLeft">
	<div class="boxTitle">
		<h5>·&nbsp;快捷操作</h5>
		<ul class="boxTab">
			<li><a tabid="#boxTab1" href="javascript:;">管理</a></li>
			<li><a tabid="#boxTab2" href="javascript:;">新增</a></li>
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
			<form name="boxform" action="__APP__/index.php?s=Public/saveFastOp" method="post" id="ajaxform">
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
						<input type="submit" name="subut" class="button btngreen2" value="添加" />
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
    	$("a",set).removeClass("selected").filter("[tabid='"+id+"']",set).addClass("selected"); 
    	for(i in list) $(list[i]).hide();
    	$(id).fadeIn();
    	return false;
	});
});
</script>
<?php echo $_smarty_tpl->getSubTemplate ("public/control_bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>