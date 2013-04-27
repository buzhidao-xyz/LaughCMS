<?php /* Smarty version Smarty-3.1.12, created on 2013-04-27 18:55:14
         compiled from "C:\xampp\htdocs\laugh\admin\themes\blue\Archive\recoverOpBottom.html" */ ?>
<?php /*%%SmartyHeaderCode:17117517bae929723e1-02604701%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5c658c611fbec62929879ef191ac4e6dd0a6201' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\blue\\Archive\\recoverOpBottom.html',
      1 => 1366269561,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17117517bae929723e1-02604701',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_517bae929a06d9_92658438',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_517bae929a06d9_92658438')) {function content_517bae929a06d9_92658438($_smarty_tpl) {?><div id="opBottom" class="opBottom">
	<a href="javascript:;" name="checkAll">全选</a>
	<a href="javascript:;" name="unCheckAll">取消</a>
	<a href="javascript:;" name="archiveBack">还原</a>
	<a href="javascript:;" name="archiveDelete">删除</a>
</div>
<script type="text/javascript">
$(document).ready(function (){
var archiveClass = function (){
	var archiveObj = {
		checkAll: $("#opBottom a[name=checkAll]"),
		unCheckAll: $("#opBottom a[name=unCheckAll]"),
		archiveBack: $("#opBottom a[name=archiveBack]"),
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
	//回收文档
	archiveObj.archiveBack.click(function (){
		var d = {
			archiveid: getArchiveID()
		};
		$.post("__APP__/index.php?s=archive/backarchive",d,function (data){
			alert(data.info);
			if (!data.status) location.href = location.href;
		},'json');
	});
	//删除文档
	archiveObj.archiveDelete.click(function (){
		var d = {
			archiveid: getArchiveID()
		};
		$.post("__APP__/index.php?s=Archive/deleteArchive",d,function (data){
			alert(data.info);
			if (!data.status) location.href = location.href;
		},'json');
	});
}
archiveClass();
});
</script><?php }} ?>