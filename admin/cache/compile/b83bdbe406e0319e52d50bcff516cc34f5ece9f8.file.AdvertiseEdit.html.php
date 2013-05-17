<?php /* Smarty version Smarty-3.1.12, created on 2013-05-17 16:52:58
         compiled from "C:\xampp\htdocs\laugh\admin\themes\blue\Advertise\AdvertiseEdit.html" */ ?>
<?php /*%%SmartyHeaderCode:52045195efea5950d8-86105529%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b83bdbe406e0319e52d50bcff516cc34f5ece9f8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\blue\\Advertise\\AdvertiseEdit.html',
      1 => 1368780481,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '52045195efea5950d8-86105529',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'AdvertiseInfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5195efea5fda70_67821626',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5195efea5fda70_67821626')) {function content_5195efea5fda70_67821626($_smarty_tpl) {?><div class="box">
<div class="boxContent">
<div class="boxPopupForm">
	<div class="boxTitle">
		<h5>编辑广告信息</h5>
	</div>
	<form name="boxform" action="__APP__/index.php?s=Advertise/AdvertiseEditSave" method="post" id="colorBoxAjaxForm">
	<input type="hidden" name="advertiseid" value="<?php echo $_smarty_tpl->tpl_vars['AdvertiseInfo']->value['id'];?>
" />
	<ul>
		<li class="formblock">
			<span>标题：</span>
			<input type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['AdvertiseInfo']->value['title'];?>
" class="input" style="width:250px;" />
		</li>
		<li class="formblock">
			<span>链接：</span>
			<input type="text" name="link" value="<?php echo $_smarty_tpl->tpl_vars['AdvertiseInfo']->value['link'];?>
" class="input w350" />
		</li>
		<li class="formblock">
			<span>是否启用: </span>
			<div class="item_list fleft">
				<label><input type="radio" name="status" value="1" class="radio" <?php if ($_smarty_tpl->tpl_vars['AdvertiseInfo']->value['status']==1){?>checked="checked"<?php }?> />启用</label>
				<label><input type="radio" name="status" value="0" class="radio" <?php if ($_smarty_tpl->tpl_vars['AdvertiseInfo']->value['status']==0){?>checked="checked"<?php }?> />禁用</label>
			</div>
		</li>
		<li class="bordernone bgf6">
			<input type="submit" name="subut" class="button btnblue2" value="编辑" />
		</li>
	</ul>
	</form>
</div>
</div>
</div><?php }} ?>