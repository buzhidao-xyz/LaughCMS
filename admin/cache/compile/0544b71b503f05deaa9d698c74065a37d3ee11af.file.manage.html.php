<?php /* Smarty version Smarty-3.1.12, created on 2012-11-21 13:29:00
         compiled from "C:\xampp\htdocs\laugh\admin\themes\smooth\node\manage.html" */ ?>
<?php /*%%SmartyHeaderCode:3054450ac669cc57771-77785907%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0544b71b503f05deaa9d698c74065a37d3ee11af' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\smooth\\node\\manage.html',
      1 => 1352700330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3054450ac669cc57771-77785907',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'total' => 0,
    'nodeList' => 0,
    'd' => 0,
    'groupTree' => 0,
    'g' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50ac669cd8e618_49432369',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50ac669cd8e618_49432369')) {function content_50ac669cd8e618_49432369($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("include/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="content">
	<div id="control">
		<div class="box">
			<div class="title">
				<h5>节点列表 【目前共有<?php if ($_smarty_tpl->tpl_vars['total']->value){?><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
<?php }else{ ?>0<?php }?>条数据】</h5>
			</div>
			<div class="table">
				<ul class="table_list_title">
			    	<li class="table_list_l table_list_l150">名称</li>
			    	<li class="table_list_l table_list_l200">描述</li>
			    	<li class="table_list_l table_list_l100">Control</li>
			    	<li class="table_list_l table_list_l120">Action</li>
			    	<li class="table_list_l table_list_l150">创建时间</li>
			    	<li class="table_list_l table_list_l80">是/否显示</li>
			    	<li class="table_list_l table_list_l100">操作</li>
			    </ul>
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
			    	<li class="table_list_l table_list_l100">
			    		<a href="javascript:;" name="modify" id="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['d']->value['title'];?>
" remark="<?php echo $_smarty_tpl->tpl_vars['d']->value['remark'];?>
" groupid="<?php echo $_smarty_tpl->tpl_vars['d']->value['groupid'];?>
" pid="<?php echo $_smarty_tpl->tpl_vars['d']->value['pid'];?>
" control="<?php echo $_smarty_tpl->tpl_vars['d']->value['control'];?>
" action="<?php echo $_smarty_tpl->tpl_vars['d']->value['action'];?>
" isshow="<?php echo $_smarty_tpl->tpl_vars['d']->value['isshow'];?>
">修改</a>&nbsp;&nbsp;
			    		<a delurl="__APP__/?s=Node/deleteNode&id=<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
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
	<form id="modify_div_form" action="__APP__/?s=Node/upNode">
		<input name="id" value="" type="hidden" />
		<a href="javascript:;" class="modify_div_close" id="modify_div_close">X</a>
		<div class="form">
			<div class="fields">
				<div class="field field-first">
					<div class="label">
						<label for="select">组:</label>
					</div>
					<div class="select">
						<select name="groupid">
							<option value="" >|-组菜单</option>
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
					</div>
				</div>
				<div class="field">
					<div class="label">
						<label for="select">父节点:</label>
					</div>
					<div class="select" id="nodepid">
						<select name="pid">
							<option value="" >|-节点菜单</option>
						</select>
					</div>
				</div>
				<div class="field">
					<div class="label">
						<label for="input-small">名称:</label>
					</div>
					<div class="input" style="float:left;">
						<input type="text" id="input-small" name="title" class="small" />
					</div>
				</div>
				<div class="field">
					<div class="label">
						<label for="input-small">描述:</label>
					</div>
					<div class="input" style="float:left;">
						<input type="text" id="input-small" name="remark" class="small" />
					</div>
				</div>
				<div class="field">
					<div class="label">
						<label for="input-small">Control:</label>
					</div>
					<div class="input" style="float:left;">
						<input type="text" id="input-small" name="control" class="small" />
					</div>
				</div>
				<div class="field">
					<div class="label">
						<label for="input-small">Action:</label>
					</div>
					<div class="input" style="float:left;">
						<input type="text" id="input-small" name="action" class="small" />
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