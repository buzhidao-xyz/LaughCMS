<?php /* Smarty version Smarty-3.1.12, created on 2013-05-09 16:17:27
         compiled from "C:\xampp\htdocs\laugh\admin\themes\blue\FileManage\newfile.html" */ ?>
<?php /*%%SmartyHeaderCode:4114518b5b97aa8181-12023853%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '098333bcb64e77c843d291c0ca825cb4a3d2212e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\blue\\FileManage\\newfile.html',
      1 => 1367142637,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4114518b5b97aa8181-12023853',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_518b5b97b0f779_33354057',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_518b5b97b0f779_33354057')) {function content_518b5b97b0f779_33354057($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/control_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
			<li class="formblock bordernone bgf6">
				<input type="submit" name="subut" class="button btnblue2 fleft" value="保存" />
				<input type="button" id="goback" name="goback" class="button btngreen2 fleft" value="返回" style="margin-left:50px;" />
			</li>
		</ul>
	</form>
</div>
<script type="text/javascript">

</script>
<?php echo $_smarty_tpl->getSubTemplate ("public/control_bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>