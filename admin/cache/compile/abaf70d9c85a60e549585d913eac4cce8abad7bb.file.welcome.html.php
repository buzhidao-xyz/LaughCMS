<?php /* Smarty version Smarty-3.1.12, created on 2013-05-17 15:19:56
         compiled from "C:\xampp\htdocs\laugh\admin\themes\blue\Public\welcome.html" */ ?>
<?php /*%%SmartyHeaderCode:162775195da1c8ec3b2-63057075%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'abaf70d9c85a60e549585d913eac4cce8abad7bb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\blue\\Public\\welcome.html',
      1 => 1367142637,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '162775195da1c8ec3b2-63057075',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'phpinfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5195da1c989dd5_08559032',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5195da1c989dd5_08559032')) {function content_5195da1c989dd5_08559032($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/control_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="captitle lineGray">欢迎进入后台管理系统</div>
<div class="box boxWrap box970">
	<div class="boxTitle">
		<h5><b>快捷操作</b><span>Navigation Link</span></h5>
		<!-- <ul class="boxTab">
			<li><a tabid="#boxTab1" href="javascript:;">管理</a></li>
			<li><a tabid="#boxTab2" href="javascript:;">新增</a></li>
		</ul> -->
	</div>
	<div id="boxTab1" class="boxContent boxTabContent">
		<a href="__APP__/index.php?s=Column/index">栏目管理</a>
		<a href="__APP__/index.php?s=Article/index">文档管理</a>
		<a href="#">评论管理</a>
		<a href="__APP__/index.php?s=Article/newArticle">内容发布</a>
		<a href="#">系统设置</a>
	</div>
	<!-- <div id="boxTab2" class="boxContent boxTabContent">
		<div class="boxNewFrom">
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
	</div> -->
</div>
<div class="box boxWrap">
	<div class="boxTitle">
		<h5><b>个人信息</b><span>Profile Info</span></h5>
	</div>
	<div class="boxContent">
		<ul class="tableBlock">
			<li><span>会员名:</span>admin</li>
			<li><span>所属会员组:</span>超级管理员</li>
			<li><span>最后登陆时间:</span>2013-04-26 09:44:13</li>
			<li><span>最后登陆IP:</span>127.0.0.1</li>
			<li><span>登陆次数:</span>20次</li>
		</ul>
	</div>
</div>
<div class="box boxWrap">
	<div class="boxTitle">
		<h5><b>统计信息</b><span>Site Stats</span></h5>
	</div>
	<div class="boxContent">
		<ul class="statsBlock">
			<li><b>单页模型</b><br><span>0</span></li>
			<li><b>文章模型</b><br><span>0</span></li>
			<li><b>产品模型</b><br><span>0</span></li>
			<li><b>图片模型</b><br><span>0</span></li>
			<li><b>下载模型</b><br><span>0</span></li>
			<li><b>信息反馈</b><br><span>0</span></li>
			<li><b>在线留言</b><br><span>0</span></li>
			<li><b>会员总数</b><br><span>0</span></li>
			<li><b>栏目总数</b><br><span>0</span></li>
			<li><b></b><span></span></li>
			<li><b></b><span></span></li>
			<li><b></b><span></span></li>
			<li><b></b><span></span></li>
			<li><b></b><span></span></li>
			<li><b></b><span></span></li>
			<li><b></b><span></span></li>
			<li><b></b><span></span></li>
			<li><b></b><span></span></li>
			<li><b></b><span></span></li>
			<li><b></b><span></span></li>
		</ul>
	</div>
</div>
<div class="box boxWrap">
	<div class="boxTitle">
		<h5><b>系统基本信息</b><span>System Info</span></h5>
	</div>
	<div class="boxContent">
		<ul class="tableBlock">
			<li><span>PHP版本:</span><?php echo $_smarty_tpl->tpl_vars['phpinfo']->value['php_version'];?>
</li>
			<li><span>是否安全模式:</span><?php if ($_smarty_tpl->tpl_vars['phpinfo']->value['safe_mode']){?>是<?php }else{ ?>否<?php }?></li>
			<li><span>Register_Globals:</span><?php if ($_smarty_tpl->tpl_vars['phpinfo']->value['register_globals']){?>开启<?php }else{ ?>关闭<?php }?></li>
			<li><span>Magic_Quotes_Gpc:</span><?php if ($_smarty_tpl->tpl_vars['phpinfo']->value['magic_quotes_gpc']){?>开启<?php }else{ ?>关闭<?php }?></li>
			<li><span>支持上传的最大文件:</span><?php echo $_smarty_tpl->tpl_vars['phpinfo']->value['upload_max_filesize'];?>
</li>
			<li><span>是否允许打开远程连接:</span><?php if ($_smarty_tpl->tpl_vars['phpinfo']->value['allow_url_fopen']){?>是<?php }else{ ?>否<?php }?></li>
		</ul>
	</div>
</div>
<div class="box boxWrap">
	<div class="boxTitle">
		<h5><b>官方动态</b><span>Official Info</span></h5>
	</div>
	<div class="boxContent">
		<ul class="tableBlock">
			<li><span>LaughCMS版本:</span>v1.0 Released 20130426</li>
			<li><span>授权类型:</span>已授权[免费]</li>
			<li><span>序列号:</span></li>
			<li><span>程序更新:</span>无</li>
			<li><span>最后更新时间:</span>2013-04-26</li>
		</ul>
	</div>
</div>
<style type="text/css">
.boxWrap {
	width: 480px;
	padding: 0 10px 10px 0;
}
.boxWrap .boxContent {
	border: 1px solid #DDDDDD;
  	border-bottom: 0;
}
.box970 {
	width: 970px;
}
.box970 .boxContent {
	border-bottom: 1px solid #DDDDDD;
}
</style>
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