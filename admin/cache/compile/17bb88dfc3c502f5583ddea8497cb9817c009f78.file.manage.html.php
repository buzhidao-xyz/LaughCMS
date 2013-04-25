<?php /* Smarty version Smarty-3.1.12, created on 2013-04-25 15:01:52
         compiled from "C:\xampp\htdocs\laugh\admin\themes\blue\Group\manage.html" */ ?>
<?php /*%%SmartyHeaderCode:1415178d4e0c2ef51-52398401%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17bb88dfc3c502f5583ddea8497cb9817c009f78' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\blue\\Group\\manage.html',
      1 => 1366268658,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1415178d4e0c2ef51-52398401',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'accessStatus' => 0,
    'total' => 0,
    'groupList' => 0,
    'd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5178d4e0d54942_47935275',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5178d4e0d54942_47935275')) {function content_5178d4e0d54942_47935275($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/control_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!-- <div class="control_nav">
	<h3>添加组</h3>
</div> -->
<?php if ($_smarty_tpl->tpl_vars['accessStatus']->value==1){?>
<div class="formContainer" accessStatus=<?php echo $_smarty_tpl->tpl_vars['accessStatus']->value;?>
>
	<div class="formtitle"><h5>新组节点表单</h5></div>
	<form name="newform" action="__APP__/index.php?s=Group/saveGroup" method="post" id="ajaxform" class="newform">
		<input type="hidden" name="" />
		<ul class="formbody">
			<li class="formblock">
				<span>名称:</span>
				<input type="text" name="title" value="" class="input" style="width:150px;" />
			</li>
			<li class="formblock bordernone">
				<input type="submit" name="subut" class="button btngreen2" value="添加" />
			</li>
		</ul>
	</form>
</div>
<?php }?>
<div class="captitle"><h5>组节点列表【目前共有<?php if ($_smarty_tpl->tpl_vars['total']->value){?><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
<?php }else{ ?>0<?php }?>条数据】</h5></div>
<ul class="table_list_title">
	<li class="table_list_l table_list_l150">组节点名称</li>
	<li class="table_list_l table_list_l170">创建时间</li>
	<li class="table_list_l table_list_l100">是/否显示</li>
	<?php if ($_smarty_tpl->tpl_vars['accessStatus']->value==1){?>
	<li class="table_list_l table_list_l150" accessStatus=<?php echo $_smarty_tpl->tpl_vars['accessStatus']->value;?>
>操作</li>
	<?php }?>
</ul>
<div class="contentTableList">
	<?php if ($_smarty_tpl->tpl_vars['groupList']->value){?>
	<?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['groupList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
$_smarty_tpl->tpl_vars['d']->_loop = true;
?>
	<ul class="table_list">
		<li class="table_list_l table_list_l150"><?php echo $_smarty_tpl->tpl_vars['d']->value['title'];?>
</li>
		<li class="table_list_l table_list_l170"><?php echo mkdate($_smarty_tpl->tpl_vars['d']->value['createtime']);?>
</li>
		<li class="table_list_l table_list_l100"><?php if ($_smarty_tpl->tpl_vars['d']->value['isshow']){?>显<?php }else{ ?>隐<?php }?></li>
		<?php if ($_smarty_tpl->tpl_vars['accessStatus']->value==1){?>
		<li class="table_list_l table_list_l150" accessStatus=<?php echo $_smarty_tpl->tpl_vars['accessStatus']->value;?>
>
			<a href="javascript:;" name="modify" id="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['d']->value['title'];?>
" isshow="<?php echo $_smarty_tpl->tpl_vars['d']->value['isshow'];?>
">修改</a>&nbsp;&nbsp;
			<a delurl="__APP__/Group/deleteGroup" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
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
<div id="modify_div" class="modify_div" style="display:none;" accessStatus=<?php echo $_smarty_tpl->tpl_vars['accessStatus']->value;?>
>
	<div class="modify_div_Top">
		<h5>编辑组节点信息</h5>
		<a href="javascript:;" id="modify_div_close" class="close">×</a>
	</div>
	<form id="modify_div_form" action="__APP__/?s=Group/upGroup">
		<input name="id" value="" type="hidden" />
		<ul class="formbody modify_div_box">
			<li class="formblock">
				<span>组节点名称: </span>
				<input type="text" name="title" value="" class="input" style="width:150px;" />
			</li>
			<li class="formblock">
				<span>是否显示: </span>
				<div class="item_list fleft">
					<label><input type="radio" name="isshow" value="1" class="radio" />是</label>
					<label><input type="radio" name="isshow" value="0" class="radio" />否</label>
				</div>
			</li>
			<li class="formblock bordernone">
				<input type="submit" name="subut" class="button btngreen2" value="修改" />
			</li>
		</ul>
	</form>
	<div class="modify_div_Bottom"></div>
</div>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("public/control_bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>