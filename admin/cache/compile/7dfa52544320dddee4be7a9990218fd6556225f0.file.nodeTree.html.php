<?php /* Smarty version Smarty-3.1.12, created on 2012-12-11 00:19:53
         compiled from "G:\website\laugh\admin\themes\blue\Common\nodeTree.html" */ ?>
<?php /*%%SmartyHeaderCode:1698550c60ba953e524-48674605%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7dfa52544320dddee4be7a9990218fd6556225f0' => 
    array (
      0 => 'G:\\website\\laugh\\admin\\themes\\blue\\Common\\nodeTree.html',
      1 => 1355156387,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1698550c60ba953e524-48674605',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nodeTree' => 0,
    'd' => 0,
    'd1' => 0,
    'roleInfo' => 0,
    'd2' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50c60ba963c4b0_75299589',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50c60ba963c4b0_75299589')) {function content_50c60ba963c4b0_75299589($_smarty_tpl) {?><link rel="stylesheet" type="text/css" href="themes/blue/style/nodeTree.css" media="screen" />
<div id="nodeTree">
	<div class="nodeTreeTitle">
		<span class="titleNode w726">节点名称</span>
		<span class="titleAccess w120">浏览权限</span>
		<span class="titleManage w120">操作权限</span>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['nodeTree']->value){?>
	<?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nodeTree']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
$_smarty_tpl->tpl_vars['d']->_loop = true;
?>
	<ul class="groupTree">
		<li>
			<span class="expand"></span>
			<span class="w700"><?php echo $_smarty_tpl->tpl_vars['d']->value['title'];?>
</span>
			<span class="w120"><input type="checkbox" name="group<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" class="checkbox" /></span>
			<span class="w120"><input type="checkbox" name="group<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" class="checkbox" /></span>
		</li>
		<ul class="parentNode">
		<?php if (isset($_smarty_tpl->tpl_vars['d']->value['cnode'])){?>
		<?php  $_smarty_tpl->tpl_vars['d1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d1']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['d']->value['cnode']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d1']->key => $_smarty_tpl->tpl_vars['d1']->value){
$_smarty_tpl->tpl_vars['d1']->_loop = true;
?>
			<li title="<?php echo $_smarty_tpl->tpl_vars['d1']->value['remark'];?>
">
				<span class="expand"></span>
				<span class="w670"><?php echo $_smarty_tpl->tpl_vars['d1']->value['title'];?>
</span>
				<span class="w120"><input type="checkbox" name="node[]" value="<?php echo $_smarty_tpl->tpl_vars['d1']->value['id'];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['d1']->value['id'],$_smarty_tpl->tpl_vars['roleInfo']->value['node'])){?>checked<?php }?> flag="pNode" class="checkbox" /></span>
				<span class="w120"><input type="checkbox" name="node[]" value="<?php echo $_smarty_tpl->tpl_vars['d1']->value['id'];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['d1']->value['id'],$_smarty_tpl->tpl_vars['roleInfo']->value['node'])){?>checked<?php }?> flag="pNode" class="checkbox" /></span>
			</li>
			<ul class="childNode">
			<?php if (isset($_smarty_tpl->tpl_vars['d1']->value['cnode'])){?>
			<?php  $_smarty_tpl->tpl_vars['d2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['d1']->value['cnode']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d2']->key => $_smarty_tpl->tpl_vars['d2']->value){
$_smarty_tpl->tpl_vars['d2']->_loop = true;
?>
				<li title="<?php echo $_smarty_tpl->tpl_vars['d2']->value['remark'];?>
">
					<span class="w656"><?php echo $_smarty_tpl->tpl_vars['d2']->value['title'];?>
</span>
					<span class="w120"><input type="checkbox" name="node[]" value="<?php echo $_smarty_tpl->tpl_vars['d2']->value['id'];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['d2']->value['id'],$_smarty_tpl->tpl_vars['roleInfo']->value['node'])){?>checked<?php }?> flag="cNode" class="checkbox" /></span>
					<span class="w120"><input type="checkbox" name="node[]" value="<?php echo $_smarty_tpl->tpl_vars['d2']->value['id'];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['d2']->value['id'],$_smarty_tpl->tpl_vars['roleInfo']->value['node'])){?>checked<?php }?> flag="cNode" class="checkbox" /></span>
				</li>
			<?php } ?>
			<?php }?>
			</ul>
		<?php } ?>
		<?php }?>
		</ul>
	</ul>
	<?php } ?>
	<?php }?>
</div>
<script type="text/javascript">
var nodeTreeClass = function(){
	//定义对象属性
	var nodeTree = {
		expand: $("#nodeTree ul li span.expand"),
		node: $("#nodeTree ul li input[type=checkbox]"),
		pNode: $("#nodeTree ul li input[flag=pNode]"),
		cNode: $("#nodeTree ul li input[flag=cNode]")
	}

	//展开收缩 toggle动态
	nodeTree.ehNode = function() {
		nodeTree.expand.click(function (){
			if ($(this).attr("class").indexOf("back")<0) $(this).addClass("back");
			else $(this).removeClass("back");
			$(this).parent().next("ul").slideToggle(300);
		})
	}(window);

	//选中/不选中全部
	nodeTree.check = function(){
		nodeTree.node.click(function (){
			var nodeObj = $(this).parent().next("ul").find("input[type=checkbox]");
			if ($(this).attr("checked")) nodeObj.attr("checked",true);
			else nodeObj.attr("checked",false);
		})

		//选中子节点 默认选中父节点
		nodeTree.cNode.click(function (){
			var nodeObj = $(this).parent().parent().prev("li").find("input[type=checkbox]");
			var groupObj = $(this).parent().parent().parent().prev("li").find("input[type=checkbox]");
			if ($(this).attr("checked")) {
				nodeObj.attr("checked",true);
				groupObj.attr("checked",true);
			}
		})

		//选中父节点 默认选中组节点
		nodeTree.pNode.click(function (){
			var nodeObj = $(this).parent().parent().prev("li").find("input[type=checkbox]");
			if ($(this).attr("checked")) nodeObj.attr("checked",true);
		})
	}(window);

	//选中组
	var checkGroup = function (){
		nodeTree.pNode.each(function (){
			if ($(this).attr("checked"))
				$(this).parent().parent().prev("li").find("input[type=checkbox]").attr("checked",true);
		});
	}

	//选中组
	if (nodeTree.pNode.length > 0) {
		checkGroup();
	}
}
new nodeTreeClass();
</script><?php }} ?>