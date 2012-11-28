<?php /* Smarty version Smarty-3.1.12, created on 2012-11-28 17:05:23
         compiled from "C:\xampp\htdocs\laugh\admin\themes\smooth\Role\manage.html" */ ?>
<?php /*%%SmartyHeaderCode:2422350b5d3d37bd189-59916658%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'baf94ffe4a2fd9d72fac7c09e66fec12d56a582b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\smooth\\Role\\manage.html',
      1 => 1353907176,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2422350b5d3d37bd189-59916658',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'total' => 0,
    'roleList' => 0,
    'd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50b5d3d38cd029_53591063',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50b5d3d38cd029_53591063')) {function content_50b5d3d38cd029_53591063($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("include/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="content">
	<div id="control">
		<div class="box mtop10">
			<div class="title">
				<h5>角色列表 【目前共有<?php if ($_smarty_tpl->tpl_vars['total']->value){?><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
<?php }else{ ?>0<?php }?>条数据】</h5>
			</div>
			<div class="table">
				<ul class="table_list_title">
			    	<li class="table_list_l table_list_l150">角色名</li>
			    	<li class="table_list_l table_list_l200">描述</li>
			    	<li class="table_list_l table_list_l150">创建时间</li>
			    	<li class="table_list_l table_list_l100">状态</li>
			    	<li class="table_list_l table_list_l150">操作</li>
			    </ul>
			    <?php if ($_smarty_tpl->tpl_vars['roleList']->value){?>
			     <?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['roleList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
$_smarty_tpl->tpl_vars['d']->_loop = true;
?>
			    <ul class="table_list">
					<li class="table_list_l table_list_l150"><?php echo $_smarty_tpl->tpl_vars['d']->value['name'];?>
</li>
					<li class="table_list_l table_list_l200" title="<?php echo $_smarty_tpl->tpl_vars['d']->value['remark'];?>
"><?php echo $_smarty_tpl->tpl_vars['d']->value['remark'];?>
</li>
			    	<li class="table_list_l table_list_l150"><?php echo mkdate($_smarty_tpl->tpl_vars['d']->value['createtime']);?>
</li>
			    	<li class="table_list_l table_list_l100">
			    		<a delurl="__APP__/?s=Role/upRoleStatus&id=<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
&status=<?php if ($_smarty_tpl->tpl_vars['d']->value['status']){?>0<?php }else{ ?>1<?php }?>" href="javascript:;" name="del" msg="确定<?php if ($_smarty_tpl->tpl_vars['d']->value['status']){?>禁用<?php }else{ ?>启用<?php }?>吗？"><?php if ($_smarty_tpl->tpl_vars['d']->value['status']){?>启用<?php }else{ ?>禁用<?php }?></a>
			    	</li>
			    	<li class="table_list_l table_list_l150">
			    		<a href="__APP__/?s=Role/newRole&id=<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">修改</a>&nbsp;&nbsp;
			    		<a delurl="__APP__/?s=Role/deleteRole&id=<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
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
<?php echo $_smarty_tpl->getSubTemplate ("include/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>