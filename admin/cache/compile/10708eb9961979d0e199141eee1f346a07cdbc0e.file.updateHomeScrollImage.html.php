<?php /* Smarty version Smarty-3.1.12, created on 2013-04-02 11:51:05
         compiled from "C:\xampp\htdocs\laugh\admin\themes\green\Image\updateHomeScrollImage.html" */ ?>
<?php /*%%SmartyHeaderCode:21845515a55a9b27f21-60078450%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10708eb9961979d0e199141eee1f346a07cdbc0e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\green\\Image\\updateHomeScrollImage.html',
      1 => 1364354769,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21845515a55a9b27f21-60078450',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'accessStatus' => 0,
    'HomeScrollImageInfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_515a55a9bc4bc6_96995058',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_515a55a9bc4bc6_96995058')) {function content_515a55a9bc4bc6_96995058($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/control_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php if ($_smarty_tpl->tpl_vars['accessStatus']->value==1){?>
<div class="formContainer" accessStatus=<?php echo $_smarty_tpl->tpl_vars['accessStatus']->value;?>
>
	<div class="formtitle"><h5>新组节点表单</h5></div>
	<form name="newform" action="__APP__/index.php?s=Image/saveUpdateHomeScrollImage" method="post" class="newform" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['HomeScrollImageInfo']->value['id'];?>
" />
		<ul class="formbody">
			<li class="formautoblock">
				<span>原图片:</span>
				<img src="__APPM__<?php echo $_smarty_tpl->tpl_vars['HomeScrollImageInfo']->value['path'];?>
" />
			</li>
			<li class="formblock">
				<span>图片:</span>
				<input type="file" name="path" class="input inputfile" style="width:230px;" />
				*尺寸 730*300
			</li>
			<li class="formblock">
				<span>标题:</span>
				<input type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['HomeScrollImageInfo']->value['title'];?>
" value="" class="input" style="width:250px;" />
			</li>
			<li class="formblock">
				<span>链接:</span>
				<input type="text" name="link" value="<?php echo $_smarty_tpl->tpl_vars['HomeScrollImageInfo']->value['link'];?>
" value="" class="input" style="width:300px;" />
			</li>
			<li class="formblock bordernone">
				<input type="submit" name="subut" class="button btngreen2" value="确定" />
			</li>
		</ul>
	</form>
</div>
<?php }?>
<script type="text/javascript">
$(document).ready(function (){
$("form[name=newform]").submit(function (){
	if (!$("input[name=link]").val()) {
		alert("请填写链接！");
		return false;
	}
});
});
</script>
<?php echo $_smarty_tpl->getSubTemplate ("public/control_bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>