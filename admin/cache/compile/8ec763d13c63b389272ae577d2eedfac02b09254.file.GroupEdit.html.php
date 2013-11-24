<?php /* Smarty version Smarty-3.1.12, created on 2013-11-24 17:44:41
         compiled from "F:\website\laugh\admin\themes\blue\Group\GroupEdit.html" */ ?>
<?php /*%%SmartyHeaderCode:140975291ca89ce5404-52412897%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ec763d13c63b389272ae577d2eedfac02b09254' => 
    array (
      0 => 'F:\\website\\laugh\\admin\\themes\\blue\\Group\\GroupEdit.html',
      1 => 1381029586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '140975291ca89ce5404-52412897',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'groupid' => 0,
    'GroupInfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5291ca89d4e6b0_56029130',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5291ca89d4e6b0_56029130')) {function content_5291ca89d4e6b0_56029130($_smarty_tpl) {?><div class="box">
<div class="boxContent">
<div class="boxPopupForm">
	<div class="boxTitle">
		<h5>编辑组菜单</h5>
	</div>
	<form name="boxform" action="__APP__/index.php?s=Group/GroupEditSave" method="post" id="colorBoxAjaxForm">
	<input type="hidden" name="groupid" value="<?php echo $_smarty_tpl->tpl_vars['groupid']->value;?>
" />
	<ul>
		<li class="formblock">
			<span>组菜单名称: </span>
			<input type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['GroupInfo']->value['title'];?>
" class="input w200" />
		</li>
		<li class="formblock">
			<span>是否显示: </span>
			<div class="item_list fleft">
				<label><input type="radio" name="isshow" value="1" class="radio" <?php if ($_smarty_tpl->tpl_vars['GroupInfo']->value['isshow']==1){?>checked<?php }?> />是</label>
				<label><input type="radio" name="isshow" value="0" class="radio" <?php if ($_smarty_tpl->tpl_vars['GroupInfo']->value['isshow']==0){?>checked<?php }?> />否</label>
			</div>
		</li>
		<li class="bordernone bgf6">
			<input type="submit" name="subut" class="button btnblue2" value="确定" />
		</li>
	</ul>
	</form>
</div>
</div>
</div><?php }} ?>