<?php /* Smarty version Smarty-3.1.12, created on 2013-10-20 20:33:33
         compiled from "F:\website\laugh\admin\themes\blue\Admin\adminList.html" */ ?>
<?php /*%%SmartyHeaderCode:290355263cd9d850530-48710684%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca7c5e0cf07d8eb794b6ca4bd6dd9684599eaefc' => 
    array (
      0 => 'F:\\website\\laugh\\admin\\themes\\blue\\Admin\\adminList.html',
      1 => 1381140854,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '290355263cd9d850530-48710684',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'total' => 0,
    'accessStatus' => 0,
    'adminList' => 0,
    'd' => 0,
    'superAdmin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5263cd9daba519_62849247',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5263cd9daba519_62849247')) {function content_5263cd9daba519_62849247($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("Public/control_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="captitle"><h5>组节点列表【目前共有<?php if ($_smarty_tpl->tpl_vars['total']->value){?><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
<?php }else{ ?>0<?php }?>条数据】</h5></div>
<ul class="table_list_title">
	<li class="table_list_l table_list_l120">用户名</li>
	<li class="table_list_l table_list_l150">拥有权限角色</li>
	<li class="table_list_l table_list_l150">创建时间</li>
	<li class="table_list_l table_list_l150">最后登录时间</li>
	<li class="table_list_l table_list_l120">最后登录IP</li>
	<li class="table_list_l table_list_l80">登录次数</li>
	<?php if ($_smarty_tpl->tpl_vars['accessStatus']->value==1){?>
	<li class="table_list_l table_list_l80" accessStatus=<?php echo $_smarty_tpl->tpl_vars['accessStatus']->value;?>
>账户状态</li>
	<li class="table_list_l table_list_l150" accessStatus=<?php echo $_smarty_tpl->tpl_vars['accessStatus']->value;?>
>操作</li>
	<?php }?>
</ul>
<div class="contentTableList">
	<?php if ($_smarty_tpl->tpl_vars['adminList']->value){?>
	<?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['adminList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
$_smarty_tpl->tpl_vars['d']->_loop = true;
?>
	<ul class="table_list role_send_table">
		<li class="table_list_l table_list_l120"><?php echo $_smarty_tpl->tpl_vars['d']->value['adminname'];?>
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
		<?php if ($_smarty_tpl->tpl_vars['accessStatus']->value==1){?>
		<li class="table_list_l table_list_l80" accessStatus=<?php echo $_smarty_tpl->tpl_vars['accessStatus']->value;?>
>
			<?php if (in_array($_smarty_tpl->tpl_vars['d']->value['id'],$_smarty_tpl->tpl_vars['superAdmin']->value)){?>
				<?php echo $_smarty_tpl->tpl_vars['d']->value['_status'];?>

			<?php }else{ ?>
				<a delurl="__APP__/index.php?s=Admin/AdminStatusEdit&id=<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
&status=<?php if ($_smarty_tpl->tpl_vars['d']->value['status']){?>0<?php }else{ ?>1<?php }?>" href="javascript:;" name="del" msg="确定<?php if ($_smarty_tpl->tpl_vars['d']->value['status']){?>禁用<?php }else{ ?>启用<?php }?>吗？"><?php echo $_smarty_tpl->tpl_vars['d']->value['_status'];?>
</a>
			<?php }?>
		</li>
		<li class="table_list_l table_list_l150" accessStatus=<?php echo $_smarty_tpl->tpl_vars['accessStatus']->value;?>
>
			<?php if (!in_array($_smarty_tpl->tpl_vars['d']->value['id'],$_smarty_tpl->tpl_vars['superAdmin']->value)){?>
			<a delurl="__APP__/index.php?s=Admin/AdminPasswdReset&id=<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" href="javascript:;" name="del" msg="确定重置密码吗？">重置密码</a>
	    	<a name="colorboxEdit" href="__APP__/index.php?s=Admin/AdminEdit&id=<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">修改</a>
			<a delurl="__APP__/index.php?s=Admin/AdminDelete&id=<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
			<?php }?>
		</li>
		<?php }?>
	</ul>
	<?php } ?>
	<?php }else{ ?>
	<ul class="table_list"><li class="table_list_center">空</li></ul>
	<?php }?>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("Public/page.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("Public/control_bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>