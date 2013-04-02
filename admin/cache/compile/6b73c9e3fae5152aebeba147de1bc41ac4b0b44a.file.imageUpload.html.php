<?php /* Smarty version Smarty-3.1.12, created on 2013-04-02 15:03:04
         compiled from "C:\xampp\htdocs\laugh\admin\themes\green\public\imageUpload.html" */ ?>
<?php /*%%SmartyHeaderCode:3861515a82a832a685-09073794%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b73c9e3fae5152aebeba147de1bc41ac4b0b44a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\green\\public\\imageUpload.html',
      1 => 1364871458,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3861515a82a832a685-09073794',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ArchiveInfo' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_515a82a83774c7_24393081',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_515a82a83774c7_24393081')) {function content_515a82a83774c7_24393081($_smarty_tpl) {?><div id="imageUpload">
	<div id="imageTitle">产品图片:</div>
	<div id="imageBody">
		<div id="imageBox">
			<?php if (isset($_smarty_tpl->tpl_vars['ArchiveInfo']->value['archiveImage'])&&is_array($_smarty_tpl->tpl_vars['ArchiveInfo']->value['archiveImage'])){?>
			<?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ArchiveInfo']->value['archiveImage']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value){
$_smarty_tpl->tpl_vars['image']->_loop = true;
?>
			<div class="imageBlock">
				<input type="hidden" name="imageids[]" value="<?php echo $_smarty_tpl->tpl_vars['image']->value['id'];?>
" />
				<span class="imageBlockimage">
					<img src="__APPM__<?php echo $_smarty_tpl->tpl_vars['image']->value['thumbpath'];?>
" width="150" height="auto" />
				</span>
				<span class="imageBlocktitle"><?php echo $_smarty_tpl->tpl_vars['image']->value['imagetitle'];?>
</span>
			</div>
			<?php } ?>
			<?php }?>
		</div>
		<div id="imageUploadBox" ajaxUrl="__APP__/index.php?s=Image/saveUploadImage">
			<span>
				图片: <input type="file" id="images" name="images" class="input w230 inputfile" />
			</span>
			<span>
				描述: <input type="text" name="imageTitle" value="" class="input w300" />
			</span>
			<span>
				<input type="button" name="imageUploadButton" class="button btngreen2 btupload" value="上传" />
			</span>
		</div>
	</div>
</div>
<link type="text/css" rel="stylesheet" href="themes/green/style/imageUpload.css" media="screen">
<script type="text/javascript" src="themes/green/js/ajaxfileupload.js"></script>
<script type="text/javascript" src="themes/green/js/imageUpload.js"></script><?php }} ?>