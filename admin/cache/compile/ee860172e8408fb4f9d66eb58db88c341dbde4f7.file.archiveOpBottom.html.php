<?php /* Smarty version Smarty-3.1.12, created on 2013-11-24 17:52:05
         compiled from "F:\website\laugh\admin\themes\blue\Archive\archiveOpBottom.html" */ ?>
<?php /*%%SmartyHeaderCode:80715291cc4544af96-13478347%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee860172e8408fb4f9d66eb58db88c341dbde4f7' => 
    array (
      0 => 'F:\\website\\laugh\\admin\\themes\\blue\\Archive\\archiveOpBottom.html',
      1 => 1366899152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '80715291cc4544af96-13478347',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Control' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5291cc455389b6_44462510',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5291cc455389b6_44462510')) {function content_5291cc455389b6_44462510($_smarty_tpl) {?><div id="opBottom" class="opBottom">
	<a href="javascript:;" name="checkAll">全选</a>
	<a href="javascript:;" name="unCheckAll">取消</a>
	<a href="javascript:;" name="archiveUpdate">更新</a>
	<a href="javascript:;" name="archiveReview">审核</a>
	<a href="__APP__/index.php?s=<?php echo $_smarty_tpl->tpl_vars['Control']->value;?>
/moveArchive" name="archiveMove">移动</a>
	<a href="javascript:;" name="archiveDelete">删除</a>
</div>
<script type="text/javascript">
$(document).ready(function (){
var archiveClass = function (){
	var archiveObj = {
		checkAll: $("#opBottom a[name=checkAll]"),
		unCheckAll: $("#opBottom a[name=unCheckAll]"),
		archiveUpdate: $("#opBottom a[name=archiveUpdate]"),
		archiveReview: $("#opBottom a[name=archiveReview]"),
		archiveMove: $("#opBottom a[name=archiveMove]"),
		archiveDelete: $("#opBottom a[name=archiveDelete]")
	}
	var getArchiveID = function (){
		var archiveid= "";
		$("input[name='archiveid[]']").each(function (){
			if ($(this).attr("checked")) archiveid += archiveid ? ","+$(this).val() : $(this).val();
		});
		return archiveid;
	};
	archiveObj.checkAll.click(function (){
		$("input[flag=archiveID]").attr("checked","checked");
	});
	archiveObj.unCheckAll.click(function (){
		$("input[flag=archiveID]").attr("checked",false);
	});

	//移动栏目
	archiveObj.archiveMove.colorbox();
	archiveObj.archiveMove.click(function (){
		var href = $(this).attr("href")+"&archiveid="+getArchiveID();
		window.parent.colorboxAjaxHtml(href);
		return false;
	});
	
	//删除文档
	archiveObj.archiveDelete.click(function (){
		var archiveid = getArchiveID();
		var d = {
			archiveid: archiveid
		};
		$.post("__APP__/index.php?s=Archive/recoverArchive",d,function (data){
			alert(data.info);
			if (!data.status) location.href = location.href;
		},'json');
	});
}
archiveClass();
});
</script><?php }} ?>