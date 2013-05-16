<?php /* Smarty version Smarty-3.1.12, created on 2013-05-16 17:29:31
         compiled from "C:\xampp\htdocs\laugh\admin\themes\blue\Plugin\NavigationEdit.html" */ ?>
<?php /*%%SmartyHeaderCode:243015194a6fb293299-85295475%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6fd3414b9343283da915fa8bba4238fab92377b8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\blue\\Plugin\\NavigationEdit.html',
      1 => 1368696554,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '243015194a6fb293299-85295475',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'accessStatus' => 0,
    'navigationInfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5194a6fb302be9_35212249',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5194a6fb302be9_35212249')) {function content_5194a6fb302be9_35212249($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/control_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php if ($_smarty_tpl->tpl_vars['accessStatus']->value==1){?>
<div class="formContainer" accessStatus=<?php echo $_smarty_tpl->tpl_vars['accessStatus']->value;?>
>
	<div class="formtitle"><h5>编辑导航信息</h5></div>
	<form name="newform" action="__APP__/index.php?s=Plugin/NavigationEditSave" method="post" id="colorBoxAjaxForm" class="newform">
		<input type="hidden" name="navigationid" value="<?php echo $_smarty_tpl->tpl_vars['navigationInfo']->value['title'];?>
" />
		<ul class="formbody">
			<li class="formblock">
				<span>导航名称: </span>
				<input type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['navigationInfo']->value['title'];?>
" class="input w200" />
			</li>
			<li class="formblock">
				<span>导航地址: </span>
				<input type="text" name="link" value="<?php echo $_smarty_tpl->tpl_vars['navigationInfo']->value['link'];?>
" class="input w350" />
			</li>
			<li class="formblock bordernone bgf6">
				<input type="submit" name="subut" class="button btnblue2" value="编辑" />
			</li>
		</ul>
	</form>
</div>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("public/control_bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>