<?php /* Smarty version Smarty-3.1.12, created on 2013-11-24 17:44:45
         compiled from "F:\website\laugh\admin\themes\blue\Node\manage.html" */ ?>
<?php /*%%SmartyHeaderCode:194065291ca8d0e11a8-76340096%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b9170501846013c64c80ea448f58c2687a4f109' => 
    array (
      0 => 'F:\\website\\laugh\\admin\\themes\\blue\\Node\\manage.html',
      1 => 1381140857,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '194065291ca8d0e11a8-76340096',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'total' => 0,
    'accessStatus' => 0,
    'nodeList' => 0,
    'd' => 0,
    'dd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5291ca8d2de803_03895128',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5291ca8d2de803_03895128')) {function content_5291ca8d2de803_03895128($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("Public/control_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="captitle"><h5>节点列表 【节点数<?php if ($_smarty_tpl->tpl_vars['total']->value){?><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
<?php }else{ ?>0<?php }?>】</h5></div>
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
    		<a name="colorboxEdit" href="__APP__/index.php?s=Node/NodeEdit&id=<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">修改</a>
    		<a delurl="__APP__/index.php?s=Node/deleteNode&id=<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	<?php }?>
    </ul>
    <div class="cnodelist">
    	<?php if (is_array($_smarty_tpl->tpl_vars['d']->value['cnode'])&&!empty($_smarty_tpl->tpl_vars['d']->value['cnode'])){?>
    	<?php  $_smarty_tpl->tpl_vars['dd'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dd']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['d']->value['cnode']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dd']->key => $_smarty_tpl->tpl_vars['dd']->value){
$_smarty_tpl->tpl_vars['dd']->_loop = true;
?>
    	<ul class="table_list">
			<li class="table_list_l table_list_l150" style="text-indent:13px;"><?php echo $_smarty_tpl->tpl_vars['dd']->value['title'];?>
</li>
			<li class="table_list_l table_list_l200" tooltip=1 title="<?php echo $_smarty_tpl->tpl_vars['dd']->value['remark'];?>
"><?php echo $_smarty_tpl->tpl_vars['dd']->value['remark'];?>
</li>
	    	<li class="table_list_l table_list_l100"><?php echo $_smarty_tpl->tpl_vars['dd']->value['control'];?>
</li>
	    	<li class="table_list_l table_list_l120"><?php echo $_smarty_tpl->tpl_vars['dd']->value['action'];?>
</li>
	    	<li class="table_list_l table_list_l150"><?php echo mkdate($_smarty_tpl->tpl_vars['dd']->value['createtime']);?>
</li>
	    	<li class="table_list_l table_list_l80"><?php if ($_smarty_tpl->tpl_vars['dd']->value['isshow']){?>显<?php }else{ ?>隐<?php }?></li>
	    	<?php if ($_smarty_tpl->tpl_vars['accessStatus']->value==1){?>
	    	<li class="table_list_l table_list_l100" accessStatus=<?php echo $_smarty_tpl->tpl_vars['accessStatus']->value;?>
>
	    		<a name="colorboxEdit" href="__APP__/index.php?s=Node/NodeEdit&id=<?php echo $_smarty_tpl->tpl_vars['dd']->value['id'];?>
">修改</a>
	    		<a delurl="__APP__/index.php?s=Node/deleteNode&id=<?php echo $_smarty_tpl->tpl_vars['dd']->value['id'];?>
" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
	    	</li>
	    	<?php }?>
	    </ul>
	    <?php } ?>
    	<?php }?>
    </div>
    <?php } ?>
    <?php }else{ ?>
    <ul class="table_list"><li class="table_list_center">空</li></ul>
    <?php }?>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("Public/control_bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>