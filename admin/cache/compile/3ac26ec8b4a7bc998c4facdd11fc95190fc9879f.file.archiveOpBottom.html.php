<?php /* Smarty version Smarty-3.1.12, created on 2013-05-09 16:22:16
         compiled from "C:\xampp\htdocs\laugh\admin\themes\blue\Archive\archiveOpBottom.html" */ ?>
<?php /*%%SmartyHeaderCode:22591518b5cb80d12c2-14565074%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ac26ec8b4a7bc998c4facdd11fc95190fc9879f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\blue\\Archive\\archiveOpBottom.html',
      1 => 1367142637,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22591518b5cb80d12c2-14565074',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Control' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_518b5cb80f2e98_89334608',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_518b5cb80f2e98_89334608')) {function content_518b5cb80f2e98_89334608($_smarty_tpl) {?><div id="opBottom" class="opBottom">
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