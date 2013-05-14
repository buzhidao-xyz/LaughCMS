<?php /* Smarty version Smarty-3.1.12, created on 2013-05-14 14:40:24
         compiled from "C:\xampp\htdocs\laugh\admin\themes\blue\Advertise\HomeCenterAd.html" */ ?>
<?php /*%%SmartyHeaderCode:248495191dc5842a153-93916751%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ccb7f77d1b6ed3e8f9eb899d8b7c7bd92356875' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\blue\\Advertise\\HomeCenterAd.html',
      1 => 1368168819,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '248495191dc5842a153-93916751',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'accessStatus' => 0,
    'total' => 0,
    'dataList' => 0,
    'start' => 0,
    'd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5191dc5858ba47_94133091',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5191dc5858ba47_94133091')) {function content_5191dc5858ba47_94133091($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/control_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php if ($_smarty_tpl->tpl_vars['accessStatus']->value==1){?>
<div class="formContainer" accessStatus=<?php echo $_smarty_tpl->tpl_vars['accessStatus']->value;?>
>
	<div class="formtitle"><h5>首页中部Banner</h5></div>
	<form name="newform" action="__APP__/index.php?s=Advertise/saveHomeCenterAd" method="post" class="newform" enctype="multipart/form-data">
		<ul class="formbody">
			<li class="formblock">
				<span>图片:</span>
				<input type="file" name="AdImage" class="input inputfile" style="width:230px;" />
				*尺寸 1000*80
			</li>
			<li class="formblock">
				<span>标题:</span>
				<input type="text" name="title" value="" class="input" style="width:250px;" />
			</li>
			<li class="formblock">
				<span>链接:</span>
				<input type="text" name="link" value="" class="input" style="width:300px;" />
			</li>
			<li class="formblock">
				<span>是否启用: </span>
				<div class="item_list fleft">
					<label><input type="radio" name="status" value="1" class="radio" checked="checked" />启用</label>
					<label><input type="radio" name="status" value="0" class="radio" />禁用</label>
				</div>
			</li>
			<li class="formblock bordernone bgf6">
				<input type="submit" name="subut" class="button btnblue2" value="添加" />
			</li>
		</ul>
	</form>
</div>
<?php }?>
<div class="captitle"><h5>首页中部banner列表【总计<?php if ($_smarty_tpl->tpl_vars['total']->value){?><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
<?php }else{ ?>0<?php }?>】</h5></div>
<ul class="table_list_title">
	<li class="table_list_l table_list_l30 table_list_no"></li>
	<li class="table_list_l table_list_l250">标题</li>
	<li class="table_list_l table_list_l350">链接</li>
	<li class="table_list_l table_list_l50">状态</li>
	<?php if ($_smarty_tpl->tpl_vars['accessStatus']->value==1){?>
	<li class="table_list_l table_list_l170" accessStatus=<?php echo $_smarty_tpl->tpl_vars['accessStatus']->value;?>
>管理</li>
	<?php }?>
</ul>
<div class="contentTableList">
    <?php if (isset($_smarty_tpl->tpl_vars['dataList']->value)&&is_array($_smarty_tpl->tpl_vars['dataList']->value)&&!empty($_smarty_tpl->tpl_vars['dataList']->value)){?>
	<?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dataList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
$_smarty_tpl->tpl_vars['d']->_loop = true;
?>
	<ul class="table_list">
		<li class="table_list_l table_list_l30 table_list_no"><?php echo $_smarty_tpl->tpl_vars['start']->value+1;?>
</li>
		<li class="table_list_l table_list_l250" title="<?php echo $_smarty_tpl->tpl_vars['d']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['d']->value['title'];?>
</li>
		<li class="table_list_l table_list_l350" title="<?php echo $_smarty_tpl->tpl_vars['d']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['d']->value['link'];?>
</li>
		<li class="table_list_l table_list_l50"><?php if ($_smarty_tpl->tpl_vars['d']->value['status']){?><font color="green">启用</font><?php }else{ ?><font color="gray">禁用</font><?php }?></li>
		<?php if ($_smarty_tpl->tpl_vars['accessStatus']->value==1){?>
		<li class="table_list_l table_list_l200" accessStatus=<?php echo $_smarty_tpl->tpl_vars['accessStatus']->value;?>
>
			<a name="imageview" href="__APPM__<?php echo $_smarty_tpl->tpl_vars['d']->value['path'];?>
">查看图片</a>
			<a name="ajax" href="__APP__/index.php?s=Advertise/UpdateHomeCenterAdStatus&id=<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
&status=<?php if ($_smarty_tpl->tpl_vars['d']->value['status']){?>0<?php }else{ ?>1<?php }?>">启用/禁用</a>
			<a name="ajax" msg="确定删除吗？" href="__APP__/index.php?s=Advertise/DeleteAdvertise&id=<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
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
	if (!$("input[name=AdImage]").val()) {
		alert("请选择图片！");
		return false;
	}
	if (!$("input[name=title]").val()) {
		alert("请填写标题！");
		return false;
	}
});
var AdvertiseClass = function (){
	var Obj = {
		imageview: $("a[name=imageview]")
	}
	Obj.imageview.click(function (){
		window.parent.colorboxImage($(this).attr("href"));
		return false;
	});
}
AdvertiseClass();
});
</script>
<?php echo $_smarty_tpl->getSubTemplate ("public/control_bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>