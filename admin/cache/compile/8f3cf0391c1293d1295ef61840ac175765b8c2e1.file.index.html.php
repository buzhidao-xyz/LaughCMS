<?php /* Smarty version Smarty-3.1.12, created on 2013-05-07 16:31:04
         compiled from "C:\xampp\htdocs\laugh\admin\themes\blue\Product\index.html" */ ?>
<?php /*%%SmartyHeaderCode:126025188bbc85a46f9-78598719%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f3cf0391c1293d1295ef61840ac175765b8c2e1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\blue\\Product\\index.html',
      1 => 1367142637,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '126025188bbc85a46f9-78598719',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'total' => 0,
    'accessStatus' => 0,
    'dataList' => 0,
    'd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5188bbc86df7c8_51897788',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5188bbc86df7c8_51897788')) {function content_5188bbc86df7c8_51897788($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/control_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="opTop">
	<a href="__APP__/index.php?s=Product/index" class="opTopOn">产品列表</a>
	<a href="__APP__/index.php?s=Product/add">新产品</a>
	<a href="__APP__/index.php?s=Product/recover">回收站</a>
</div>
<div class="captitle"><h5>文档列表 【目前共有<?php if ($_smarty_tpl->tpl_vars['total']->value){?><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
<?php }else{ ?>0<?php }?>条文档】</h5></div>
<ul class="table_list_title">
	<li class="table_list_l table_list_l30"></li>
	<li class="table_list_l table_list_l50">ID</li>
	<li class="table_list_l table_list_l300">文档标题</li>
	<li class="table_list_l table_list_l150">更新时间</li>
	<li class="table_list_l table_list_l120">所属栏目</li>
	<li class="table_list_l table_list_l80">文档作者</li>
	<li class="table_list_l table_list_l80">点击数</li>
	<li class="table_list_l table_list_l80">评论数</li>
	<?php if ($_smarty_tpl->tpl_vars['accessStatus']->value==1){?>
	<li class="table_list_l table_list_l120" accessStatus=<?php echo $_smarty_tpl->tpl_vars['accessStatus']->value;?>
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
		<li class="table_list_l table_list_l30">
			<input type="checkbox" name="archiveid[]" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" flag="archiveID" class="checkbox" />
		</li>
		<li class="table_list_l table_list_l50"><?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
</li>
		<li class="table_list_l table_list_l300" title="<?php echo $_smarty_tpl->tpl_vars['d']->value['title'];?>
">
			<?php echo $_smarty_tpl->tpl_vars['d']->value['title'];?>

		</li>
    	<li class="table_list_l table_list_l150"><?php echo mkdate($_smarty_tpl->tpl_vars['d']->value['updatetime']);?>
</li>
    	<li class="table_list_l table_list_l120"><?php echo $_smarty_tpl->tpl_vars['d']->value['columnname'];?>
</li>
		<li class="table_list_l table_list_l80"><?php echo $_smarty_tpl->tpl_vars['d']->value['author'];?>
</li>
		<li class="table_list_l table_list_l80"><?php echo $_smarty_tpl->tpl_vars['d']->value['clicknum'];?>
</li>
		<li class="table_list_l table_list_l80"><?php echo $_smarty_tpl->tpl_vars['d']->value['commentnum'];?>
</li>
    	<?php if ($_smarty_tpl->tpl_vars['accessStatus']->value==1){?>
    	<li class="table_list_l table_list_l120" accessStatus=<?php echo $_smarty_tpl->tpl_vars['accessStatus']->value;?>
>
    		<a href="__APPM__/index.php?s=Product/View&columnid=<?php echo $_smarty_tpl->tpl_vars['d']->value['columnid'];?>
&archiveid=<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" target="_blank">预览</a>
    		<a href="__APP__/index.php?s=Product/edit&archiveid=<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">修改</a>
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
<?php echo $_smarty_tpl->getSubTemplate ("public/page.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("Archive/archiveOpBottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("public/control_bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>