<?php /* Smarty version Smarty-3.1.12, created on 2012-11-16 21:47:34
         compiled from "/usr/local/webserver/site/laugh/admin/themes/smooth/public/welcome.html" */ ?>
<?php /*%%SmartyHeaderCode:192549961450a643f6540f91-48003966%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61e3d7b1afd635474c40454999b656c0d7d58f62' => 
    array (
      0 => '/usr/local/webserver/site/laugh/admin/themes/smooth/public/welcome.html',
      1 => 1353071319,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '192549961450a643f6540f91-48003966',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'phpinfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50a643f6594da8_84070611',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a643f6594da8_84070611')) {function content_50a643f6594da8_84070611($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("include/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="content">
	<div id="control">
		<div class="captitle">欢迎进入后台管理系统</div>
		<!-- box / left -->
		<div id="box-left-tabs" class="box box-left box-padding">
			<!-- box / title -->
			<div class="title">
				<h5>快捷操作</h5>
				<ul class="links">
					<li><a href="#box-left-forms">管理</a></li>
					<li><a href="#box-left-other">新增</a></li>
				</ul>
			</div>
			<!-- end box / title -->
			<div id="box-left-forms">
				<a href="#">栏目管理</a>
				<a href="#">文档管理</a>
				<a href="#">评论管理</a>
				<a href="#">内容发布</a>
				<a href="#">系统设置</a>
			</div>
			<div id="box-left-other">
				<form action="__APP__/?s=Public/newFastOperation" method="post" name="newOpform" id="addajaxform">
				<div class="form">
					<div class="fields">
						<div class="field field-first">
							<div class="label">
								<label for="input">链接标题:</label>
							</div>
							<div class="input">
								<input type="text" name="opname" value="" />
							</div>
						</div>
						<div class="field">
							<div class="label">
								<label for="input">链接地址:</label>
							</div>
							<div class="input">
								<input type="text" name="oplink" value="" />
							</div>
						</div>
						<div class="buttons">
							<input type="submit" name="submit" value="添加" />
						</div>
					</div>
				</div>
				</form>
			</div>
		</div>
		<!-- end box / left -->
		<!-- box / right -->
		<div class="box box-right">
			<!-- box / title -->
			<div class="title">
				<h5>信息统计</h5>
			</div>
			<!-- end box / title -->
		</div>
		<!-- end box / right -->
		<!-- box / left -->
		<div class="box box-left box-padding mtop15" style="clear:both;">
			<div class="title">
				<h5>系统基本信息</h5>
			</div>
			<div class="content">
				<ul>
					<li class="title">PHP环境摘要---></li>
					<li><span class="sleft">PHP版本: </span><span class="sright"><?php echo $_smarty_tpl->tpl_vars['phpinfo']->value['php_version'];?>
</span></li>
					<li><span class="sleft">是否安全模式: </span><span class="sright"><?php echo $_smarty_tpl->tpl_vars['phpinfo']->value['safe_mode'];?>
</span></li>
					<li><span class="sleft">Register_Globals: </span><span class="sright"></span></li>
					<li><span class="sleft">Magic_Quotes_Gpc: </span><span class="sright"></span></li>
					<li><span class="sleft">支持上传的最大文件: </span><span class="sright"></span></li>
					<li><span class="sleft">是否允许打开远程连接: </span><span class="sright"></span></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("include/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>