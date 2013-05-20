<?php /* Smarty version Smarty-3.1.12, created on 2013-05-20 14:04:34
         compiled from "C:\xampp\htdocs\laugh\admin\themes\blue\Plugin\FlinkIndex.html" */ ?>
<?php /*%%SmartyHeaderCode:205585199bcf28c1a42-77829433%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed5f5fdebc9707154a6e3d132d525cb6a76061aa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\blue\\Plugin\\FlinkIndex.html',
      1 => 1368087421,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '205585199bcf28c1a42-77829433',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'accessStatus' => 0,
    'catalogList' => 0,
    'c' => 0,
    'total' => 0,
    'dataList' => 0,
    'd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5199bcf29f59d2_43646450',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5199bcf29f59d2_43646450')) {function content_5199bcf29f59d2_43646450($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/control_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="opTop">
	<a href="__APP__/index.php?s=Plugin/FlinkIndex" class="opTopOn">友情链接管理</a>
	<a href="__APP__/index.php?s=Plugin/FlinkCatalogIndex">分类管理</a>
</div>
<?php if ($_smarty_tpl->tpl_vars['accessStatus']->value==1){?>
<div class="formContainer" accessStatus=<?php echo $_smarty_tpl->tpl_vars['accessStatus']->value;?>
>
	<div class="formtitle"><h5>添加友情链接</h5></div>
	<form name="newform" action="__APP__/index.php?s=Plugin/FlinkSave" method="post" id="ajaxform" class="newform">
		<ul class="formbody">
			<li class="formblock">
				<span>选择分类: </span>
				<select name="catalogid" style="width:150px;">
					<option value="">|-分类列表</option>
					<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['catalogList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
">&nbsp;|-<?php echo $_smarty_tpl->tpl_vars['c']->value['catalogname'];?>
</option>
					<?php } ?>
				</select>
			</li>
			<li class="formblock">
				<span>链接名称: </span>
				<input type="text" name="linkname" value="" class="input w150" />
			</li>
			<li class="formblock">
				<span>链接地址: </span>
				<input type="text" name="linkurl" value="" class="input w250" />
			</li>
			<li class="formblock bordernone bgf6">
				<input type="submit" name="subut" class="button btnblue2" value="添加" />
			</li>
		</ul>
	</form>
</div>
<?php }?>
<div class="captitle"><h5>友情链接列表 【链接数<?php if ($_smarty_tpl->tpl_vars['total']->value){?><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
<?php }else{ ?>0<?php }?>】</h5></div>
<ul class="table_list_title">
	<li class="table_list_l table_list_l30"></li>
	<li class="table_list_l table_list_l170">链接名称</li>
	<li class="table_list_l table_list_l400">链接地址</li>
	<li class="table_list_l table_list_l150">分类</li>
	<li class="table_list_l table_list_l150">添加时间</li>
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
		<li class="table_list_l table_list_l30"><?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
</li>
		<li class="table_list_l table_list_l170"><?php echo $_smarty_tpl->tpl_vars['d']->value['linkname'];?>
</li>
		<li class="table_list_l table_list_l400"><a href="<?php echo $_smarty_tpl->tpl_vars['d']->value['linkurl'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['d']->value['linkurl'];?>
</a></li>
		<li class="table_list_l table_list_l150"><?php echo $_smarty_tpl->tpl_vars['d']->value['catalogname'];?>
</li>
    	<li class="table_list_l table_list_l150"><?php echo mkdate($_smarty_tpl->tpl_vars['d']->value['createtime']);?>
</li>
    	<?php if ($_smarty_tpl->tpl_vars['accessStatus']->value==1){?>
    	<li class="table_list_l table_list_l100" accessStatus=<?php echo $_smarty_tpl->tpl_vars['accessStatus']->value;?>
>
    		<a name="FlinkEdit" href="__APP__/index.php?s=Plugin/FlinkEdit&id=<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">修改</a>
    		<a delurl="__APP__/index.php?s=Plugin/FlinkDelete&id=<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
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

<script type="text/javascript">
$(document).ready(function (){
	$("a[name=FlinkEdit]").click(function (){
		window.parent.colorboxAjaxHtml($(this).attr("href"));
		return false;
	});
});
</script>
<?php echo $_smarty_tpl->getSubTemplate ("public/control_bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>