<?php /* Smarty version Smarty-3.1.12, created on 2013-04-23 14:15:21
         compiled from "C:\xampp\htdocs\laugh\admin\themes\green\FileManage\newfile.html" */ ?>
<?php /*%%SmartyHeaderCode:10353517626f92666f3-30733476%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ddb52339f6f015a42bfb8f8b142db56e22c9f41c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\green\\FileManage\\newfile.html',
      1 => 1366268658,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10353517626f92666f3-30733476',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_517626f92cc988_93589370',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_517626f92cc988_93589370')) {function content_517626f92cc988_93589370($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/control_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="captitle">
	<h5>文件管理 >> 新建文件</h5>
</div>
<div class="formContainer">
	<div class="formtitle"><h5>新建文件</h5></div>
	<form name="newform" action="__APP__/index.php?s=Plugin/newFile&action=save" method="post" class="newform">
		<ul class="formbody">
			<li class="formblock">
				<span>文件目录:</span>
				<input type="text" name="dir" value="<?php echo $_smarty_tpl->tpl_vars['dir']->value;?>
" class="input w250" />（. 表示根目录 ，不允许用 “..” 形式的路径） 
			</li>
			<li class="formblock">
				<span>文件名称:</span>
				<input type="text" name="filename" value="" class="input w250" />
			</li>
			<li class="formautoblock">
				<span>文件内容:</span>
				<textarea name="filecontent" rows="35" cols="110"></textarea>
			</li>
			<li class="formblock bordernone">
				<input type="submit" name="subut" class="button btngreen2 fleft" value="保存" />
				<input type="button" id="goback" name="goback" class="button btngreen2 fleft" value="返回" style="margin-left:50px;" />
			</li>
		</ul>
	</form>
</div>
<script type="text/javascript">

</script>
<?php echo $_smarty_tpl->getSubTemplate ("public/control_bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>