<?php /* Smarty version Smarty-3.1.12, created on 2013-04-23 17:14:39
         compiled from "C:\xampp\htdocs\laugh\admin\themes\green\FileManage\fileEdit.html" */ ?>
<?php /*%%SmartyHeaderCode:262517650ffce58f1-92206728%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6417db998a5967507ffcbada0483989c8323ced3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\green\\FileManage\\fileEdit.html',
      1 => 1366271917,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '262517650ffce58f1-92206728',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dir' => 0,
    'oldfilename' => 0,
    'filecontent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_517650ffd71378_36644731',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_517650ffd71378_36644731')) {function content_517650ffd71378_36644731($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/control_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="captitle">
	<h5>文件管理 >> 修改文件</h5>
</div>
<div class="formContainer">
	<div class="formtitle"><h5>修改文件</h5></div>
	<form name="newform" action="__APP__/index.php?s=Plugin/fileEdit&action=save" method="post" class="newform">
		<input type="hidden" name="dir" value="<?php echo $_smarty_tpl->tpl_vars['dir']->value;?>
" />
		<input type="hidden" name="oldfilename" value="<?php echo $_smarty_tpl->tpl_vars['oldfilename']->value;?>
" />
		<ul class="formbody">
			<li class="formblock">
				<span>文件目录:</span>
				<input type="text" name="newdir" value="<?php echo $_smarty_tpl->tpl_vars['dir']->value;?>
" class="input w250" />（. 表示根目录 ，不允许用 “..” 形式的路径） 
			</li>
			<li class="formblock">
				<span>文件名称:</span>
				<input type="text" name="newfilename" value="<?php echo $_smarty_tpl->tpl_vars['oldfilename']->value;?>
" class="input w250" />
			</li>
			<li class="formautoblock">
				<span>文件内容:</span>
				<textarea name="filecontent" rows="35" cols="110"><?php echo $_smarty_tpl->tpl_vars['filecontent']->value;?>
</textarea>
			</li>
			<li class="formblock bordernone">
				<input type="submit" name="subut" class="button btngreen2 fleft" value="保存" />
				<input type="button" id="goback" name="goback" class="button btngreen2 fleft" value="返回" style="margin-left:50px;" />
			</li>
		</ul>
	</form>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/control_bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>