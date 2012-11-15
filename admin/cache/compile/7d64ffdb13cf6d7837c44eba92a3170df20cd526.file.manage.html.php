<?php /* Smarty version Smarty-3.1.12, created on 2012-11-15 22:13:00
         compiled from "/usr/local/webserver/site/laugh/admin/themes/smooth/Group/manage.html" */ ?>
<?php /*%%SmartyHeaderCode:20608692450a4f86c828b80-76577321%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d64ffdb13cf6d7837c44eba92a3170df20cd526' => 
    array (
      0 => '/usr/local/webserver/site/laugh/admin/themes/smooth/Group/manage.html',
      1 => 1352899196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20608692450a4f86c828b80-76577321',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'total' => 0,
    'groupList' => 0,
    'd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50a4f86c8bf265_94374085',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a4f86c8bf265_94374085')) {function content_50a4f86c8bf265_94374085($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("include/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="content">
	<div id="control">
		<div class="box">
			<div class="title">
				<h5>新组节点表单</h5>
			</div>
			<form name="newform" action="__APP__/?s=Group/saveGroup" method="post" id="addajaxform">
			<div class="form">
				<div class="fields">
					<div class="field  field-first">
						<div class="label">
							<label for="input-small">名称:</label>
						</div>
						<div class="input" style="float:left;">
							<input type="text" id="input-small" name="title" class="small" />
						</div>
					</div>
					<div class="buttons">
						<input type="submit" name="submit" value="添加" />
					</div>
				</div>
			</div>
			</form>
		</div>
		<div class="box mtop10">
			<div class="title">
				<h5>组节点列表 【目前共有<?php if ($_smarty_tpl->tpl_vars['total']->value){?><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
<?php }else{ ?>0<?php }?>条数据】</h5>
			</div>
			<div class="table">
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
		</div>
	</div>
</div>
<!--弹出层-->
<div id="modify_div" class="modify_div" style="display:none;">
	<form id="modify_div_form" action="__APP__/?s=Group/upGroup">
		<input name="id" value="" type="hidden" />
		<a href="javascript:;" class="modify_div_close" id="modify_div_close">X</a>
		<div class="form">
			<div class="fields">
				<div class="field field-first">
					<div class="label">
						<label for="input-small">名称:</label>
					</div>
					<div class="input" style="float:left;">
						<input type="text" id="input-small" name="title" class="small" />
					</div>
				</div>
				<div class="field">
					<div class="label label-radio">
						<label for="input-small">是否显示:</label>
					</div>
					<div class="radios" style="float:left;">
						<div class="radio">
							<input type="radio" name="isshow" value="1" class="radio" /><label>是</label>
						</div>
						<div class="radio">
							<input type="radio" name="isshow" value="0" class="radio" /><label>否</label>
						</div>
					</div>
				</div>
				<div class="buttons">
					<input type="submit" name="submit" value="修改" />
				</div>
			</div>
		</div>
	</form>
</div>
<!--弹出层-->
<?php echo $_smarty_tpl->getSubTemplate ("include/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>