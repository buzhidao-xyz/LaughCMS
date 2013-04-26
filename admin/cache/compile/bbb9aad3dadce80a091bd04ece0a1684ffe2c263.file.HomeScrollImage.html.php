<?php /* Smarty version Smarty-3.1.12, created on 2013-04-26 10:33:39
         compiled from "C:\xampp\htdocs\laugh\admin\themes\blue\Image\HomeScrollImage.html" */ ?>
<?php /*%%SmartyHeaderCode:19535179e783ec38f4-24387495%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbb9aad3dadce80a091bd04ece0a1684ffe2c263' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\blue\\Image\\HomeScrollImage.html',
      1 => 1366269792,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19535179e783ec38f4-24387495',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'accessStatus' => 0,
    'total' => 0,
    'dataList' => 0,
    'd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5179e7840d86f0_53865273',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5179e7840d86f0_53865273')) {function content_5179e7840d86f0_53865273($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/control_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php if ($_smarty_tpl->tpl_vars['accessStatus']->value==1){?>
<div class="formContainer" accessStatus=<?php echo $_smarty_tpl->tpl_vars['accessStatus']->value;?>
>
	<div class="formtitle"><h5>添加首页轮播图片</h5></div>
	<form name="newform" action="__APP__/index.php?s=Image/saveHomeScrollImage" method="post" class="newform" enctype="multipart/form-data">
		<ul class="formbody">
			<li class="formblock">
				<span>图片:</span>
				<input type="file" name="scrollImage" class="input inputfile" style="width:230px;" />
				*尺寸 730*300
			</li>
			<li class="formblock">
				<span>标题:</span>
				<input type="text" name="title" value="" class="input" style="width:250px;" />
			</li>
			<li class="formblock">
				<span>链接:</span>
				<input type="text" name="link" value="" class="input" style="width:300px;" />
			</li>
			<li class="formblock bordernone">
				<input type="submit" name="subut" class="button btngreen2" value="添加" />
			</li>
		</ul>
	</form>
</div>
<?php }?>
<div class="captitle"><h5>内容模型列表【目前共有<?php if ($_smarty_tpl->tpl_vars['total']->value){?><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
<?php }else{ ?>0<?php }?>条数据】</h5></div>
<ul class="table_list_title">
	<li class="table_list_l table_list_l250">标题</li>
	<li class="table_list_l table_list_l350">链接</li>
	<li class="table_list_l table_list_l50">状态</li>
	<?php if ($_smarty_tpl->tpl_vars['accessStatus']->value==1){?>
	<li class="table_list_l table_list_l170" accessStatus=<?php echo $_smarty_tpl->tpl_vars['accessStatus']->value;?>
>管理操作</li>
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
		<li class="table_list_l table_list_l250" title="<?php echo $_smarty_tpl->tpl_vars['d']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['d']->value['title'];?>
</li>
		<li class="table_list_l table_list_l350" title="<?php echo $_smarty_tpl->tpl_vars['d']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['d']->value['link'];?>
</li>
		<li class="table_list_l table_list_l50"><?php if ($_smarty_tpl->tpl_vars['d']->value['isshow']){?><font color="green">显示</font><?php }else{ ?><font color="gray">隐藏</font><?php }?></li>
		<?php if ($_smarty_tpl->tpl_vars['accessStatus']->value==1){?>
		<li class="table_list_l table_list_l200" accessStatus=<?php echo $_smarty_tpl->tpl_vars['accessStatus']->value;?>
>
			<a name="imageview" href="__APPM__<?php echo $_smarty_tpl->tpl_vars['d']->value['path'];?>
">查看图片</a>
			<a href="__APP__/index.php?s=Image/UpdateHomeScrollImage&id=<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">修改</a>
			<a name="ajax" href="__APP__/index.php?s=Image/UpdateHomeScrollImageStatus&id=<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
&isshow=<?php if ($_smarty_tpl->tpl_vars['d']->value['isshow']){?>0<?php }else{ ?>1<?php }?>">显示/隐藏</a>
			<a name="ajax" msg="确定删除吗？" href="__APP__/index.php?s=Image/DeleteHomeScrollImage&id=<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">删除</a>
		</li>
		<?php }?>
	</ul>
	<?php } ?>
	<?php }else{ ?>
	<ul class="table_list"><li class="table_list_center">空</li></ul>
	<?php }?>
</div>
<script type="text/javascript">
$(document).ready(function (){
$("form[name=newform]").submit(function (){
	if (!$("input[name=path]").val()) {
		alert("请选择图片！");
		return false;
	}
	if (!$("input[name=link]").val()) {
		alert("请填写链接！");
		return false;
	}
});
var ImageClass = function (){
	var Obj = {
		imageview: $("a[name=imageview]"),
		updatestatus: $("a[name=updatestatus]")
	}
	Obj.imageview.click(function (){
		window.parent.colorboxImage($(this).attr("href"));
		return false;
	});
}
ImageClass();
});
</script>
<?php echo $_smarty_tpl->getSubTemplate ("public/control_bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>