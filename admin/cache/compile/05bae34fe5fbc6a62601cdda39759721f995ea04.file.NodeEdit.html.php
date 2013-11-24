<?php /* Smarty version Smarty-3.1.12, created on 2013-11-24 17:44:50
         compiled from "F:\website\laugh\admin\themes\blue\Node\NodeEdit.html" */ ?>
<?php /*%%SmartyHeaderCode:39545291ca92279829-31473644%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05bae34fe5fbc6a62601cdda39759721f995ea04' => 
    array (
      0 => 'F:\\website\\laugh\\admin\\themes\\blue\\Node\\NodeEdit.html',
      1 => 1381051085,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '39545291ca92279829-31473644',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nodeid' => 0,
    'groupTree' => 0,
    'g' => 0,
    'NodeInfo' => 0,
    'nodeTree' => 0,
    'd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5291ca923aadb0_49142820',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5291ca923aadb0_49142820')) {function content_5291ca923aadb0_49142820($_smarty_tpl) {?><div class="box">
<div class="boxContent">
<div class="boxPopupForm">
	<div class="boxTitle">
		<h5>编辑节点信息</h5>
	</div>
	<form name="boxform" action="__APP__/index.php?s=Node/NodeEditSave" method="post" id="colorBoxAjaxForm">
	<input type="hidden" name="nodeid" value="<?php echo $_smarty_tpl->tpl_vars['nodeid']->value;?>
" />
	<ul>
		<li class="formblock">
			<span>组: </span>
			<select id="select" name="groupid" style="width:150px;">
				<option value="">|-组菜单</option>
				<?php  $_smarty_tpl->tpl_vars['g'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['g']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['groupTree']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['g']->key => $_smarty_tpl->tpl_vars['g']->value){
$_smarty_tpl->tpl_vars['g']->_loop = true;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['g']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['NodeInfo']->value['groupid']==$_smarty_tpl->tpl_vars['g']->value['id']){?>selected<?php }?>>&nbsp;|-<?php echo $_smarty_tpl->tpl_vars['g']->value['title'];?>
</option>
				<?php } ?>
			</select>
		</li>
		<li class="formblock">
			<span>父节点: </span>
			<select name="pid" flag="nodepid" style="width:150px;">
				<option value="">|-节点菜单</option>
				<?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nodeTree']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
$_smarty_tpl->tpl_vars['d']->_loop = true;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['NodeInfo']->value['pid']==$_smarty_tpl->tpl_vars['d']->value['id']){?>selected<?php }?>>&nbsp;|-<?php echo $_smarty_tpl->tpl_vars['d']->value['title'];?>
</option>
				<?php } ?>
			</select>
		</li>
		<li class="formblock">
			<span>名称: </span>
			<input type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['NodeInfo']->value['title'];?>
" class="input w150" />
		</li>
		<li class="formblock">
			<span>描述: </span>
			<input type="text" name="remark" value="<?php echo $_smarty_tpl->tpl_vars['NodeInfo']->value['remark'];?>
" class="input w150" />
		</li>
		<li class="formblock">
			<span>Control: </span>
			<input type="text" name="control" value="<?php echo $_smarty_tpl->tpl_vars['NodeInfo']->value['control'];?>
" class="input w100" />
		</li>
		<li class="formblock">
			<span>Action: </span>
			<input type="text" name="action" value="<?php echo $_smarty_tpl->tpl_vars['NodeInfo']->value['action'];?>
" class="input w150" />
		</li>
		<li class="formblock">
			<span>是否显示: </span>
			<div class="item_list fleft">
				<label><input type="radio" name="isshow" value="1" class="radio" <?php if ($_smarty_tpl->tpl_vars['NodeInfo']->value['isshow']==1){?>checked<?php }?> />是</label>
				<label><input type="radio" name="isshow" value="0" class="radio" <?php if ($_smarty_tpl->tpl_vars['NodeInfo']->value['isshow']==0){?>checked<?php }?> />否</label>
			</div>
		</li>
		<li class="formblock bordernone">
			<input type="submit" name="subut" class="button btnblue2" value="确定" />
		</li>
	</ul>
	</form>
</div>
</div>
</div><?php }} ?>