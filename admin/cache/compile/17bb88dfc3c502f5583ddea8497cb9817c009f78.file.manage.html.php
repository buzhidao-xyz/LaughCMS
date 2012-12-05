<?php /* Smarty version Smarty-3.1.12, created on 2012-12-05 15:47:05
         compiled from "C:\xampp\htdocs\laugh\admin\themes\blue\Group\manage.html" */ ?>
<?php /*%%SmartyHeaderCode:527450befbf96e9ed5-43723398%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17bb88dfc3c502f5583ddea8497cb9817c009f78' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\blue\\Group\\manage.html',
      1 => 1352342116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '527450befbf96e9ed5-43723398',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'perstatus' => 0,
    'total' => 0,
    'groupList' => 0,
    'd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50befbf97b42c7_60626143',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50befbf97b42c7_60626143')) {function content_50befbf97b42c7_60626143($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("include/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="perstatus" pers="<?php echo $_smarty_tpl->tpl_vars['perstatus']->value;?>
"></div>
<div id="control">
	<div class="control_nav">
		<h3>添加组</h3>
	</div>
	<div class="captitle"><h5>新组节点表单</h5></div>
	<form name="newform" action="__APP__/?s=Group/saveGroup" method="post" id="addajaxform">
		<input type="hidden" name="" />
		<ul class="formbody">
			<li class="formblock colorblock">
				<span>名称:</span>
				<input type="text" name="title" value="" class="input" style="width:150px;" />
			</li>
			<li class="formblock">
				<input type="submit" name="subut" class="button" value="添加" />
			</li>
		</ul>
	</form>
	<div class="control_nav">
		<h3>组节点列表</h3>
	</div>
	<div class="captitle"><h5>兑奖申请列表【目前共有<?php if ($_smarty_tpl->tpl_vars['total']->value){?><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
<?php }else{ ?>0<?php }?>条数据】</h5></div>
    <ul class="table_list_title">
    	<li class="table_list_l table_list_l150">组节点名称</li>
    	<li class="table_list_l table_list_l170">创建时间</li>
    	<li class="table_list_l table_list_l100">是/否显示</li>
    	<li class="table_list_l table_list_l150">操作</li>
    </ul>
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
    	<li class="table_list_l table_list_l150">
    		<a href="javascript:;" name="modify" id="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['d']->value['title'];?>
" isshow="<?php echo $_smarty_tpl->tpl_vars['d']->value['isshow'];?>
">修改</a>&nbsp;&nbsp;
    		<a delurl="__APP__/Group/deleteGroup" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    </ul>
    <?php } ?>
    <?php }else{ ?>
    <ul class="table_list"><li class="table_list_center">空</li></ul>
    <?php }?>
    <?php echo $_smarty_tpl->getSubTemplate ("public/page.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
<!--弹出层-->
<div id="modify_div" class="modify_div" style="display:none;">
	<form id="modify_div_form" action="__APP__/?s=Group/upGroup">
		<input name="id" value="" type="hidden" />
		<a href="javascript:;" class="modify_div_close" id="modify_div_close">X</a>
		<ul class="formbody modify_div_box">
			<li class="formblock colorblock">
				<span>组节点名称: </span>
				<input type="text" name="title" value="" class="input" style="width:150px;" />
			</li>
			<li class="auto colorblock">
				<span>是否显示: </span>
				<div class="show_list fleft">
					<label><input type="radio" name="isshow" value="1" class="radio" />是</label>
					<label><input type="radio" name="isshow" value="0" class="radio" />否</label>
				</div>
			</li>
			<li class="formblock">
				<input type="submit" name="subut" class="button" value="修改" />
			</li>
		</ul>
	</form>
</div>
<!--弹出层-->
<?php echo $_smarty_tpl->getSubTemplate ("include/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>