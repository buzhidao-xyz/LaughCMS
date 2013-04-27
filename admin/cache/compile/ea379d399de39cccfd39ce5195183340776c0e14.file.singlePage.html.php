<?php /* Smarty version Smarty-3.1.12, created on 2013-04-27 18:56:39
         compiled from "C:\xampp\htdocs\laugh\admin\themes\blue\ColumnModel\singlePage.html" */ ?>
<?php /*%%SmartyHeaderCode:2015517baee761ace0-58183843%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea379d399de39cccfd39ce5195183340776c0e14' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\blue\\ColumnModel\\singlePage.html',
      1 => 1367059327,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2015517baee761ace0-58183843',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'total' => 0,
    'accessStatus' => 0,
    'dataList' => 0,
    'd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_517baee7748878_43453963',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_517baee7748878_43453963')) {function content_517baee7748878_43453963($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/control_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="opTop">
	<a href="__APP__/index.php?s=CTModel/addSinglePage">新增单页模型</a>
	<a href="__APP__/index.php?s=CTModel/singlePage" class="opTopOn">单页模型管理</a>
</div>
<div class="captitle"><h5>单页页面列表 【页面数<?php if ($_smarty_tpl->tpl_vars['total']->value){?><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
<?php }else{ ?>0<?php }?>】</h5></div>
<ul class="table_list_title">
	<li class="table_list_l table_list_l30"></li>
	<li class="table_list_l table_list_l50">ID</li>
	<li class="table_list_l table_list_l300">页面名称</li>
	<li class="table_list_l table_list_l150">更新时间</li>
	<li class="table_list_l table_list_l100">文档作者</li>
	<li class="table_list_l table_list_l80">点击数</li>
	<li class="table_list_l table_list_l80">评论数</li>
	<li class="table_list_l table_list_l70">状态</li>
	<?php if ($_smarty_tpl->tpl_vars['accessStatus']->value==1){?>
	<li class="table_list_l table_list_l120" accessStatus=<?php echo $_smarty_tpl->tpl_vars['accessStatus']->value;?>
>操作</li>
	<?php }?>
</ul>
<div class="contentTableList">
    <?php if ($_smarty_tpl->tpl_vars['dataList']->value){?>
    <?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dataList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
$_smarty_tpl->tpl_vars['d']->_loop = true;
?>
    <ul class="table_list">
		<li class="table_list_l table_list_l30">
			<input type="checkbox" name="singlepageid[]" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" flag="SinglePageID" class="checkbox" />
		</li>
		<li class="table_list_l table_list_l50"><?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
</li>
		<li class="table_list_l table_list_l300" title="<?php echo $_smarty_tpl->tpl_vars['d']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['d']->value['title'];?>
</li>
    	<li class="table_list_l table_list_l150"><?php echo mkdate($_smarty_tpl->tpl_vars['d']->value['updatetime']);?>
</li>
		<li class="table_list_l table_list_l100"><?php echo $_smarty_tpl->tpl_vars['d']->value['author'];?>
</li>
		<li class="table_list_l table_list_l80"><?php echo $_smarty_tpl->tpl_vars['d']->value['clicknum'];?>
</li>
		<li class="table_list_l table_list_l80"><?php echo $_smarty_tpl->tpl_vars['d']->value['commentnum'];?>
</li>
		<li class="table_list_l table_list_l70"><?php if ($_smarty_tpl->tpl_vars['d']->value['state']){?><font color="green">正常</font><?php }else{ ?><font color="gray">已删除</font><?php }?></li>
    	<?php if ($_smarty_tpl->tpl_vars['accessStatus']->value==1){?>
    	<li class="table_list_l table_list_l120" accessStatus=<?php echo $_smarty_tpl->tpl_vars['accessStatus']->value;?>
>
    		<a href="__APPM__/index.php?s=SinglePage/View&singlepageid=<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" target="_blank">预览</a>
    		<a href="__APP__/index.php?s=CTModel/editSinglePage&singlepageid=<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">修改</a>
    		<a delurl="__APP__/index.php?s=CTModel/deleteSinglePage&singlepageid=<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	<?php }?>
    </ul>
    <?php } ?>
    <?php }else{ ?>
    <ul class="table_list"><li class="table_list_center">空</li></ul>
    <?php }?>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/page.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="opBottom" class="opBottom">
	<a href="javascript:;" name="checkAll">全选</a>
	<a href="javascript:;" name="unCheckAll">取消</a>
	<a href="javascript:;" name="singlepageDelete">删除</a>
</div>
<link type="text/css" rel="stylesheet" href="public/plugin/colorbox/colorbox.css" media="screen">
<script type="text/javascript" src="public/plugin/colorbox/jquery.colorbox.js"></script>
<script type="text/javascript">
$(document).ready(function (){
var singlepageClass = function (){
	var singlepageObj = {
		checkAll: $("#opBottom a[name=checkAll]"),
		unCheckAll: $("#opBottom a[name=unCheckAll]"),
		singlepageDelete: $("#opBottom a[name=singlepageDelete]")
	}
	var getSinglePageID = function (){
		var singlepageid= "";
		$("input[name='singlepageid[]']").each(function (){
			if ($(this).attr("checked")) singlepageid += singlepageid ? ","+$(this).val() : $(this).val();
		});
		return singlepageid;
	};
	singlepageObj.checkAll.click(function (){
		$("input[flag=SinglePageID]").attr("checked","checked");
	});
	singlepageObj.unCheckAll.click(function (){
		$("input[flag=SinglePageID]").attr("checked",false);
	});
	
	//删除单页页面
	singlepageObj.singlepageDelete.click(function (){
		var singlepageid = getSinglePageID();
		var d = {
			singlepageid: singlepageid
		};
		$.post("__APP__/index.php?s=CTModel/deleteSinglePage",d,function (data){
			alert(data.info);
			if (!data.status) location.href = location.href;
		},'json');
	});
}
singlepageClass();
});
</script>
<?php echo $_smarty_tpl->getSubTemplate ("public/control_bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>