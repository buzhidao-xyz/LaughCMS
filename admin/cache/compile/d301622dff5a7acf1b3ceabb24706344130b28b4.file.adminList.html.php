<?php /* Smarty version Smarty-3.1.12, created on 2012-11-19 22:26:25
         compiled from "/usr/local/webserver/site/laugh/admin/themes/smooth/Admin/adminList.html" */ ?>
<?php /*%%SmartyHeaderCode:190060830250aa41913b5be7-95117476%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd301622dff5a7acf1b3ceabb24706344130b28b4' => 
    array (
      0 => '/usr/local/webserver/site/laugh/admin/themes/smooth/Admin/adminList.html',
      1 => 1353330122,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '190060830250aa41913b5be7-95117476',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'total' => 0,
    'adminList' => 0,
    'd' => 0,
    'super_admin' => 0,
    'roleList' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50aa41914ee937_45831246',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50aa41914ee937_45831246')) {function content_50aa41914ee937_45831246($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("include/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="content">
	<div id="control">
		<div class="box">
			<div class="title">
				<h5>管理员列表 【目前共有<?php if ($_smarty_tpl->tpl_vars['total']->value){?><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
<?php }else{ ?>0<?php }?>条数据】</h5>
			</div>
			<div class="table">
				<ul class="table_list_title">
			    	<li class="table_list_l table_list_l120">用户名</li>
			    	<li class="table_list_l table_list_l150">拥有权限角色</li>
			    	<li class="table_list_l table_list_l150">创建时间</li>
			    	<li class="table_list_l table_list_l150">最后登录时间</li>
			    	<li class="table_list_l table_list_l120">最后登录IP</li>
			    	<li class="table_list_l table_list_l80">登录次数</li>
			    	<li class="table_list_l table_list_l80">账户状态</li>
			    	<li class="table_list_l table_list_l80">操作</li>
			    </ul>
			    <?php if ($_smarty_tpl->tpl_vars['adminList']->value){?>
			    <?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['adminList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
$_smarty_tpl->tpl_vars['d']->_loop = true;
?>
			    <ul class="table_list role_send_table">
					<li class="table_list_l table_list_l120"><?php echo $_smarty_tpl->tpl_vars['d']->value['username'];?>
</li>
    				<li class="table_list_l table_list_l150" name="role" roleid="<?php echo $_smarty_tpl->tpl_vars['d']->value['roleid'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['d']->value['rolename'];?>
"><?php echo $_smarty_tpl->tpl_vars['d']->value['rolename'];?>
</li>
			    	<li class="table_list_l table_list_l150"><?php echo mkdate($_smarty_tpl->tpl_vars['d']->value['createtime']);?>
</li>
			    	<li class="table_list_l table_list_l150"><?php echo mkdate($_smarty_tpl->tpl_vars['d']->value['lastlogintime']);?>
</li>
			    	<li class="table_list_l table_list_l120"><?php echo longs2ip($_smarty_tpl->tpl_vars['d']->value['lastloginip']);?>
</li>
			    	<li class="table_list_l table_list_l80"><?php echo $_smarty_tpl->tpl_vars['d']->value['logincount'];?>
</li>
			    	<li class="table_list_l table_list_l80">
			    		<?php if (in_array($_smarty_tpl->tpl_vars['d']->value['id'],$_smarty_tpl->tpl_vars['super_admin']->value)){?>
			    			<?php echo $_smarty_tpl->tpl_vars['d']->value['_status'];?>

			    		<?php }else{ ?>
			    			<a delurl="__APP__/?s=Admin/upAdminStatus&id=<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
&status=<?php if ($_smarty_tpl->tpl_vars['d']->value['status']){?>0<?php }else{ ?>1<?php }?>" href="javascript:;" name="del" msg="确定<?php if ($_smarty_tpl->tpl_vars['d']->value['status']){?>禁用<?php }else{ ?>启用<?php }?>吗？"><?php echo $_smarty_tpl->tpl_vars['d']->value['_status'];?>
</a>
			    		<?php }?>
			    	</li>
			    	<li class="table_list_l table_list_l80">
			    		<?php if (!in_array($_smarty_tpl->tpl_vars['d']->value['id'],$_smarty_tpl->tpl_vars['super_admin']->value)){?>
			    		<a href="javascript:;" name="modify" id="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" username="<?php echo $_smarty_tpl->tpl_vars['d']->value['username'];?>
">修改</a>&nbsp;&nbsp;
			    		<a delurl="__APP__/?s=Admin/delteAdmin&id=<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
			    		<?php }?>
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
	<form id="user_role_modify_div_form" action="__APP__/?s=Admin/roleAdmin">
		<input name="id" id="id" value="" type="hidden" />
		<input name="roleid" id="roleid" value="" type="hidden">
		<a href="javascript:;" class="modify_div_close" id="modify_div_close">X</a>
		<div class="form">
			<div class="fields">
			<ul class="formbody modify_div_box">
			<table align="center" border="0" cellspacing="0" cellpadding="0" style="width:100%;">
				<tr>
					<td  class="stgap" width="85%">
						<li class="noborder formblock colorblock">
							<span class="label">选择角色: </span>
							<select name="roles" id="roles">
								<?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['roleList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
$_smarty_tpl->tpl_vars['d']->_loop = true;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" desc="<?php echo $_smarty_tpl->tpl_vars['d']->value['remark'];?>
"><?php echo $_smarty_tpl->tpl_vars['d']->value['name'];?>
</option>
								<?php } ?>
							</select>
						</li>
					</td>
					<td class="stgap" width="15%"><input type="button" name="subut" id="addrole" class="" value="添加" /></td>
				</tr>
				<tr id="rolehr">
					<td class="stgap" colspan="2"><hr></td>
				</tr>
				<tr id="rolesubmit">
					<td colspan=2><div class="buttons"><input type="submit" name="subut" value="完成提交" /></div></td>
				</tr>
			</table>
			</ul>
			</div>
		</div>
	</form>
</div>
<!--弹出层-->
<script src="themes/smooth/js/role.js" type="text/javascript"></script>
<?php echo $_smarty_tpl->getSubTemplate ("include/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>