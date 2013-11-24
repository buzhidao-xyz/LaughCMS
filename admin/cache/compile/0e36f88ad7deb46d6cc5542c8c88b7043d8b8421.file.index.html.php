<?php /* Smarty version Smarty-3.1.12, created on 2013-11-24 17:52:05
         compiled from "F:\website\laugh\admin\themes\blue\Topic\index.html" */ ?>
<?php /*%%SmartyHeaderCode:279765291cc451a1933-56294123%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e36f88ad7deb46d6cc5542c8c88b7043d8b8421' => 
    array (
      0 => 'F:\\website\\laugh\\admin\\themes\\blue\\Topic\\index.html',
      1 => 1381140859,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '279765291cc451a1933-56294123',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'columnid' => 0,
    'total' => 0,
    'accessStatus' => 0,
    'dataList' => 0,
    'd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5291cc452f86e7_78483645',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5291cc452f86e7_78483645')) {function content_5291cc452f86e7_78483645($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("Public/control_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="opTop">
	<a href="__APP__/index.php?s=Topic/index&columnid=<?php echo $_smarty_tpl->tpl_vars['columnid']->value;?>
" class="opTopOn">专题列表</a> |
	<a href="__APP__/index.php?s=Topic/add&columnid=<?php echo $_smarty_tpl->tpl_vars['columnid']->value;?>
">发布新专题</a> |
	<a href="__APP__/index.php?s=Topic/recover&columnid=<?php echo $_smarty_tpl->tpl_vars['columnid']->value;?>
">回收站</a>
</div>
<div class="captitle"><h5>专题列表 【目前共有<?php if (isset($_smarty_tpl->tpl_vars['total']->value)){?><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
<?php }else{ ?>0<?php }?>条文档】</h5></div>
<ul class="table_list_title">
	<li class="table_list_l table_list_l30"></li>
	<li class="table_list_l table_list_l50">ID</li>
	<li class="table_list_l table_list_l300">专题标题</li>
	<li class="table_list_l table_list_l150">更新时间</li>
	<li class="table_list_l table_list_l120">所属栏目</li>
	<li class="table_list_l table_list_l80">文档作者</li>
	<?php if ($_smarty_tpl->tpl_vars['accessStatus']->value==1){?>
	<li class="table_list_l table_list_l200" accessStatus=<?php echo $_smarty_tpl->tpl_vars['accessStatus']->value;?>
>操作</li>
	<?php }?>
</ul>
<div class="contentTableList">
    <?php if (isset($_smarty_tpl->tpl_vars['dataList']->value)&&$_smarty_tpl->tpl_vars['dataList']->value){?>
    <?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dataList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
$_smarty_tpl->tpl_vars['d']->_loop = true;
?>
    <ul class="table_list">
		<li class="table_list_l table_list_l30">
			<input type="checkbox" name="archiveid[]" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" flag="archiveID" class="checkbox" />
		</li>
		<li class="table_list_l table_list_l50"><?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
</li>
		<li class="table_list_l table_list_l300" title="<?php echo $_smarty_tpl->tpl_vars['d']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['d']->value['title'];?>
</li>
    	<li class="table_list_l table_list_l150"><?php echo mkdate($_smarty_tpl->tpl_vars['d']->value['updatetime']);?>
</li>
    	<li class="table_list_l table_list_l120"><?php echo $_smarty_tpl->tpl_vars['d']->value['columnname'];?>
</li>
		<li class="table_list_l table_list_l80"><?php echo $_smarty_tpl->tpl_vars['d']->value['author'];?>
</li>
    	<?php if ($_smarty_tpl->tpl_vars['accessStatus']->value==1){?>
    	<li class="table_list_l table_list_l200" accessStatus=<?php echo $_smarty_tpl->tpl_vars['accessStatus']->value;?>
>
    		<a href="__APPM__/index.php?s=Topic/View&columnid=<?php echo $_smarty_tpl->tpl_vars['d']->value['columnid'];?>
&archiveid=<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" target="_blank">预览</a>
    		<a href="__APP__/index.php?s=Topic/edit&archiveid=<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">修改</a>
    		<a href="__APP__/index.php?s=Topic/TopicCardList&archiveid=<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">专题项</a>
    		<a href="__APP__/index.php?s=Topic/TopicArticleList&archiveid=<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">专题文档</a>
    		<a delurl="__APP__/index.php?s=Archive/recoverArchive&archiveid=<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	<?php }?>
    </ul>
    <?php } ?>
    <?php }else{ ?>
    <ul class="table_list"><li class="table_list_center">空</li></ul>
    <?php }?>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("Public/page.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("Archive/archiveOpBottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("Public/control_bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>