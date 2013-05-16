<?php /* Smarty version Smarty-3.1.12, created on 2013-05-16 10:08:32
         compiled from "C:\xampp\htdocs\laugh\admin\themes\blue\node\manage.html" */ ?>
<?php /*%%SmartyHeaderCode:1844051943fa04418b3-71979248%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e66bbb7897d0161322a90479427c7ba46599ea5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\blue\\node\\manage.html',
      1 => 1367142637,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1844051943fa04418b3-71979248',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'total' => 0,
    'accessStatus' => 0,
    'nodeList' => 0,
    'd' => 0,
    'groupTree' => 0,
    'g' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51943fa05b5f52_30795800',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51943fa05b5f52_30795800')) {function content_51943fa05b5f52_30795800($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/control_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="captitle"><h5>节点列表 【目前共有<?php if ($_smarty_tpl->tpl_vars['total']->value){?><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
<?php }else{ ?>0<?php }?>条数据】</h5></div>
<ul class="table_list_title">
	<li class="table_list_l table_list_l150">名称</li>
	<li class="table_list_l table_list_l200">描述</li>
	<li class="table_list_l table_list_l100">Control</li>
	<li class="table_list_l table_list_l120">Action</li>
	<li class="table_list_l table_list_l150">创建时间</li>
	<li class="table_list_l table_list_l80">是/否显示</li>
	<?php if ($_smarty_tpl->tpl_vars['accessStatus']->value==1){?>
	<li class="table_list_l table_list_l100" accessStatus=<?php echo $_smarty_tpl->tpl_vars['accessStatus']->value;?>
>操作</li>
	<?php }?>
</ul>
<div class="contentTableList">
    <?php if ($_smarty_tpl->tpl_vars['nodeList']->value){?>
    <?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nodeList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
$_smarty_tpl->tpl_vars['d']->_loop = true;
?>
    <ul class="table_list">
		<li class="table_list_l table_list_l150"><?php echo $_smarty_tpl->tpl_vars['d']->value['title'];?>
</li>
		<li class="table_list_l table_list_l200" tooltip=1 title="<?php echo $_smarty_tpl->tpl_vars['d']->value['remark'];?>
"><?php echo $_smarty_tpl->tpl_vars['d']->value['remark'];?>
</li>
    	<li class="table_list_l table_list_l100"><?php echo $_smarty_tpl->tpl_vars['d']->value['control'];?>
</li>
    	<li class="table_list_l table_list_l120"><?php echo $_smarty_tpl->tpl_vars['d']->value['action'];?>
</li>
    	<li class="table_list_l table_list_l150"><?php echo mkdate($_smarty_tpl->tpl_vars['d']->value['createtime']);?>
</li>
    	<li class="table_list_l table_list_l80"><?php if ($_smarty_tpl->tpl_vars['d']->value['isshow']){?>显<?php }else{ ?>隐<?php }?></li>
    	<?php if ($_smarty_tpl->tpl_vars['accessStatus']->value==1){?>
    	<li class="table_list_l table_list_l100" accessStatus=<?php echo $_smarty_tpl->tpl_vars['accessStatus']->value;?>
>
    		<a href="javascript:;" name="modify" id="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['d']->value['title'];?>
" remark="<?php echo $_smarty_tpl->tpl_vars['d']->value['remark'];?>
" groupid="<?php echo $_smarty_tpl->tpl_vars['d']->value['groupid'];?>
" pid="<?php echo $_smarty_tpl->tpl_vars['d']->value['pid'];?>
" control="<?php echo $_smarty_tpl->tpl_vars['d']->value['control'];?>
" action="<?php echo $_smarty_tpl->tpl_vars['d']->value['action'];?>
" isshow="<?php echo $_smarty_tpl->tpl_vars['d']->value['isshow'];?>
">修改</a>&nbsp;&nbsp;
    		<a delurl="__APP__/index.php?s=Node/deleteNode&id=<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
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

<!--弹出层-->
<?php if ($_smarty_tpl->tpl_vars['accessStatus']->value==1){?>
<div id="modify_div" class="modify_div" style="display:none;">
	<div class="modify_div_Top">
		<h5>编辑组节点信息</h5>
		<a href="javascript:;" id="modify_div_close" class="close">×</a>
	</div>
	<form id="modify_div_form" action="__APP__/index.php?s=Node/upNode">
		<input name="id" value="" type="hidden" />
		<ul class="formbody">
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
">&nbsp;|-<?php echo $_smarty_tpl->tpl_vars['g']->value['title'];?>
</option>
					<?php } ?>
				</select>
			</li>
			<li class="formblock">
				<span>父节点: </span>
				<select name="pid" flag="nodepid" style="width:150px;">
					<option value="">|-节点菜单</option>
				</select>
			</li>
			<li class="formblock">
				<span>名称: </span>
				<input type="text" name="title" class="input w150" />
			</li>
			<li class="formblock">
				<span>描述: </span>
				<input type="text" name="remark" class="input w150" />
			</li>
			<li class="formblock">
				<span>Control: </span>
				<input type="text" name="control" class="input w100" />
			</li>
			<li class="formblock">
				<span>Action: </span>
				<input type="text" name="action" class="input w150" />
			</li>
			<li class="formblock bordernone">
				<input type="submit" name="subut" class="button btnblue2" value="修改" />
			</li>
		</ul>
	</form>
	<div class="modify_div_Bottom"></div>
</div>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("public/control_bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>