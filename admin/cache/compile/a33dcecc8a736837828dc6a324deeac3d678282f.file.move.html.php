<?php /* Smarty version Smarty-3.1.12, created on 2013-04-02 09:34:17
         compiled from "C:\xampp\htdocs\laugh\admin\themes\green\Archive\move.html" */ ?>
<?php /*%%SmartyHeaderCode:11960515a3599d2cac6-76862225%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a33dcecc8a736837828dc6a324deeac3d678282f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\green\\Archive\\move.html',
      1 => 1364803816,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11960515a3599d2cac6-76862225',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ArchiveID' => 0,
    'columnTree' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_515a3599d73c04_11798961',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_515a3599d73c04_11798961')) {function content_515a3599d73c04_11798961($_smarty_tpl) {?><div class="box">
<div class="boxContent">
<div class="boxFrom">
	<div class="boxTitle">
		<h5>移动文档栏目</h5>
	</div>
	<form name="boxform" action="__APP__/index.php?s=Archive/moveArchive&action=save" method="post" id="ajaxform">
	<ul>
		<li>
			<span>文档ID:</span>
			<input type="text" name="archiveid" value="<?php echo $_smarty_tpl->tpl_vars['ArchiveID']->value;?>
" class="input w200" readonly /> (','号分开)
		</li>
		<li>
			<span>目标栏目: </span>
			<select id="select" name="columnid" style="width:230px;">
				<?php echo $_smarty_tpl->tpl_vars['columnTree']->value;?>

			</select>
		</li>
		<li class="bordernone">
			<input type="submit" name="subut" class="button btngreen2" value="修改" />
		</li>
	</ul>
	</form>
</div>
</div>
</div>
<script type="text/javascript">
$("form[name=boxform]").submit(function (){
	if (!$("input[name=archiveid]").val()) {
		alert("请选择文档！");
		return false;
	}
	if (!$("select[name=columnid]").val()) {
		alert("请选择目标栏目！");
		return false;
	}
});
</script><?php }} ?>