<?php /* Smarty version Smarty-3.1.12, created on 2013-05-09 16:18:07
         compiled from "C:\xampp\htdocs\laugh\admin\themes\blue\Plugin\CooperateIndex.html" */ ?>
<?php /*%%SmartyHeaderCode:26065518b5bbf79b442-66125547%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd280e55c2481212b98692e9c444f0bb193fa41a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\blue\\Plugin\\CooperateIndex.html',
      1 => 1367903027,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26065518b5bbf79b442-66125547',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'total' => 0,
    'accessStatus' => 0,
    'dataList' => 0,
    'start' => 0,
    'd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_518b5bbf8a17d5_10887879',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_518b5bbf8a17d5_10887879')) {function content_518b5bbf8a17d5_10887879($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/control_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="opTop">
	<a href="__APP__/index.php?s=Plugin/CooperateIndex" class="opTopOn">人才招聘列表</a>
	<a href="__APP__/index.php?s=Plugin/CooperateAdd">发布新招聘信息</a>
</div>
<div class="captitle"><h5>人才招聘信息列表 【信息数<?php if ($_smarty_tpl->tpl_vars['total']->value){?><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
<?php }else{ ?>0<?php }?>】</h5></div>
<ul class="table_list_title">
	<li class="table_list_l table_list_l30"></li>
	<li class="table_list_l table_list_l200">招聘职位</li>
	<li class="table_list_l table_list_l80">招聘人数</li>
	<li class="table_list_l table_list_l100">学历要求</li>
	<li class="table_list_l table_list_l100">工作性质</li>
	<li class="table_list_l table_list_l150">发布时间</li>
	<li class="table_list_l table_list_l150">更新时间</li>
	<li class="table_list_l table_list_l100">工资待遇</li>
	<?php if ($_smarty_tpl->tpl_vars['accessStatus']->value==1){?>
	<li class="table_list_l table_list_l100" accessStatus=<?php echo $_smarty_tpl->tpl_vars['accessStatus']->value;?>
>操作</li>
	<?php }?>
</ul>
<div class="contentTableList">
    <?php if ($_smarty_tpl->tpl_vars['dataList']->value){?>
    <?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dataList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
$_smarty_tpl->tpl_vars['d']->_loop = true;
?>
    <ul class="table_list">
		<li class="table_list_l table_list_l30"><?php echo $_smarty_tpl->tpl_vars['start']->value+1;?>
</li>
		<li class="table_list_l table_list_l200"><?php echo $_smarty_tpl->tpl_vars['d']->value['position'];?>
</li>
		<li class="table_list_l table_list_l80"><?php echo $_smarty_tpl->tpl_vars['d']->value['quantity'];?>
</li>
		<li class="table_list_l table_list_l100"><?php echo $_smarty_tpl->tpl_vars['d']->value['education'];?>
</li>
		<li class="table_list_l table_list_l100"><?php echo $_smarty_tpl->tpl_vars['d']->value['nature'];?>
</li>
    	<li class="table_list_l table_list_l150"><?php echo mkdate($_smarty_tpl->tpl_vars['d']->value['publishtime']);?>
</li>
    	<li class="table_list_l table_list_l150"><?php echo mkdate($_smarty_tpl->tpl_vars['d']->value['updatetime']);?>
</li>
		<li class="table_list_l table_list_l100"><?php echo $_smarty_tpl->tpl_vars['d']->value['salary'];?>
</li>
    	<?php if ($_smarty_tpl->tpl_vars['accessStatus']->value==1){?>
    	<li class="table_list_l table_list_l100" accessStatus=<?php echo $_smarty_tpl->tpl_vars['accessStatus']->value;?>
>
    		<a href="__APP__/index.php?s=Plugin/CooperateEdit&id=<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">修改</a>
    		<a delurl="__APP__/index.php?s=Plugin/CooperateDelete&id=<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
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

<?php echo $_smarty_tpl->getSubTemplate ("public/control_bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>