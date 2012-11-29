<?php /* Smarty version Smarty-3.1.12, created on 2012-11-29 14:46:00
         compiled from "C:\xampp\htdocs\laugh\admin\themes\smooth\Common\nodeTree.html" */ ?>
<?php /*%%SmartyHeaderCode:1300550b704a88486f1-06738769%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b295410312364fc7e08f8a93ce7b197de77c9750' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\smooth\\Common\\nodeTree.html',
      1 => 1354170509,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1300550b704a88486f1-06738769',
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
  'unifunc' => 'content_50b704a8943fe7_93681282',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50b704a8943fe7_93681282')) {function content_50b704a8943fe7_93681282($_smarty_tpl) {?><link rel="stylesheet" type="text/css" href="themes/smooth/style/nodeTree.css" media="screen" />
<div id="nodeTree">
	<span class="nodeTreeTitle">请选择节点</span>
	<?php if ($_smarty_tpl->tpl_vars['nodeTree']->value){?>
	<?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nodeTree']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
$_smarty_tpl->tpl_vars['d']->_loop = true;
?>
	<ul class="groupTree">
		<li><span class="expand"></span><input type="checkbox" name="group<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" /><?php echo $_smarty_tpl->tpl_vars['d']->value['title'];?>
</li>
		<ul class="parentNode">
		<?php if (isset($_smarty_tpl->tpl_vars['d']->value['cnode'])){?>
		<?php  $_smarty_tpl->tpl_vars['d1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d1']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['d']->value['cnode']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d1']->key => $_smarty_tpl->tpl_vars['d1']->value){
$_smarty_tpl->tpl_vars['d1']->_loop = true;
?>
			<li title="<?php echo $_smarty_tpl->tpl_vars['d1']->value['remark'];?>
"><span class="expand"></span><input type="checkbox" name="node[]" value="<?php echo $_smarty_tpl->tpl_vars['d1']->value['id'];?>
"  <?php if (in_array($_smarty_tpl->tpl_vars['d1']->value['id'],$_smarty_tpl->tpl_vars['roleInfo']->value['node'])){?>checked<?php }?> flag="pNode" /><?php echo $_smarty_tpl->tpl_vars['d1']->value['title'];?>
</li>
			<ul class="childNode">
			<?php if (isset($_smarty_tpl->tpl_vars['d1']->value['cnode'])){?>
			<?php  $_smarty_tpl->tpl_vars['d2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['d1']->value['cnode']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d2']->key => $_smarty_tpl->tpl_vars['d2']->value){
$_smarty_tpl->tpl_vars['d2']->_loop = true;
?>
				<li title="<?php echo $_smarty_tpl->tpl_vars['d2']->value['remark'];?>
"><input type="checkbox" name="node[]" value="<?php echo $_smarty_tpl->tpl_vars['d2']->value['id'];?>
"  <?php if (in_array($_smarty_tpl->tpl_vars['d2']->value['id'],$_smarty_tpl->tpl_vars['roleInfo']->value['node'])){?>checked<?php }?> flag="cNode" /><?php echo $_smarty_tpl->tpl_vars['d2']->value['title'];?>
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
			$(this).parent().next("ul").toggle(300);
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

	//选种组
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