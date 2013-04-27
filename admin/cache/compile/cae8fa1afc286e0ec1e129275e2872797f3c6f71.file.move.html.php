<?php /* Smarty version Smarty-3.1.12, created on 2013-04-27 19:31:50
         compiled from "C:\xampp\htdocs\laugh\admin\themes\blue\Archive\move.html" */ ?>
<?php /*%%SmartyHeaderCode:10226517bb72657d9e5-35055877%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cae8fa1afc286e0ec1e129275e2872797f3c6f71' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\blue\\Archive\\move.html',
      1 => 1367061386,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10226517bb72657d9e5-35055877',
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
  'unifunc' => 'content_517bb7265c4e71_60231731',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_517bb7265c4e71_60231731')) {function content_517bb7265c4e71_60231731($_smarty_tpl) {?><div class="box">
<div class="boxContent">
<div class="boxPopupForm">
	<div class="boxTitle">
		<h5>移动文档栏目</h5>
	</div>
	<form name="boxform" action="__APP__/index.php?s=Archive/moveArchive&action=save" method="post" id="colorBoxAjaxForm">
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
		<li class="bordernone bgf6">
			<input type="submit" name="subut" class="button btnblue2" value="修改" />
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