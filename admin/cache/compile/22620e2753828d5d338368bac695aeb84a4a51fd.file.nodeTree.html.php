<?php /* Smarty version Smarty-3.1.12, created on 2013-01-14 22:20:08
         compiled from "G:\website\laugh\admin\themes\green\Common\nodeTree.html" */ ?>
<?php /*%%SmartyHeaderCode:2537550f4141881e768-09621276%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22620e2753828d5d338368bac695aeb84a4a51fd' => 
    array (
      0 => 'G:\\website\\laugh\\admin\\themes\\green\\Common\\nodeTree.html',
      1 => 1358172746,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2537550f4141881e768-09621276',
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
  'unifunc' => 'content_50f4141898a667_16917261',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50f4141898a667_16917261')) {function content_50f4141898a667_16917261($_smarty_tpl) {?><link rel="stylesheet" type="text/css" href="themes/green/style/nodeTree.css" media="screen" />
<div id="nodeTree">
	<div id="notice">*注意操作权限包含浏览权限 如果两个都勾选则只赋予操作权限</div>
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
	<div ul=1 class="ul groupTree">
		<div class="li" li=1>
			<span class="expand"></span>
			<span class="w700"><?php echo $_smarty_tpl->tpl_vars['d']->value['title'];?>
</span>
			<span class="w120"><input type="checkbox" name="group<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" flag="groupNode1" class="checkbox" /></span>
			<span class="w120"><input type="checkbox" name="group<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" flag="groupNode2" class="checkbox" /></span>
		</div>
		<div class="ul parentNode" ul=1>
		<?php if (isset($_smarty_tpl->tpl_vars['d']->value['cnode'])){?>
		<?php  $_smarty_tpl->tpl_vars['d1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d1']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['d']->value['cnode']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d1']->key => $_smarty_tpl->tpl_vars['d1']->value){
$_smarty_tpl->tpl_vars['d1']->_loop = true;
?>
			<div title="<?php echo $_smarty_tpl->tpl_vars['d1']->value['remark'];?>
" li=1 class="li">
				<span class="expand"></span>
				<span class="w670"><?php echo $_smarty_tpl->tpl_vars['d1']->value['title'];?>
</span>
				<span class="w120"><input type="checkbox" name="node[]" value="<?php echo $_smarty_tpl->tpl_vars['d1']->value['id'];?>
,0" <?php if (in_array($_smarty_tpl->tpl_vars['d1']->value['id'],$_smarty_tpl->tpl_vars['roleInfo']->value['node'])&&$_smarty_tpl->tpl_vars['roleInfo']->value['access'][$_smarty_tpl->tpl_vars['d1']->value['id']]==0){?>checked<?php }?> node="pNode" flag="pNode1" class="checkbox" /></span>
				<span class="w120"><input type="checkbox" name="node[]" value="<?php echo $_smarty_tpl->tpl_vars['d1']->value['id'];?>
,1" <?php if (in_array($_smarty_tpl->tpl_vars['d1']->value['id'],$_smarty_tpl->tpl_vars['roleInfo']->value['node'])&&$_smarty_tpl->tpl_vars['roleInfo']->value['access'][$_smarty_tpl->tpl_vars['d1']->value['id']]==1){?>checked<?php }?> node="pNode" flag="pNode2" class="checkbox" /></span>
			</div>
			<div class="ul childNode" ul=1>
			<?php if (isset($_smarty_tpl->tpl_vars['d1']->value['cnode'])){?>
			<?php  $_smarty_tpl->tpl_vars['d2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['d1']->value['cnode']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d2']->key => $_smarty_tpl->tpl_vars['d2']->value){
$_smarty_tpl->tpl_vars['d2']->_loop = true;
?>
				<div flag=1 title="<?php echo $_smarty_tpl->tpl_vars['d2']->value['remark'];?>
" li=1 class="li">
					<span class="w656"><?php echo $_smarty_tpl->tpl_vars['d2']->value['title'];?>
</span>
					<span class="w120"><input type="checkbox" name="node[]" value="<?php echo $_smarty_tpl->tpl_vars['d2']->value['id'];?>
,0" <?php if (in_array($_smarty_tpl->tpl_vars['d2']->value['id'],$_smarty_tpl->tpl_vars['roleInfo']->value['node'])&&$_smarty_tpl->tpl_vars['roleInfo']->value['access'][$_smarty_tpl->tpl_vars['d2']->value['id']]==0){?>checked<?php }?> node="cNode" flag="cNode1" class="checkbox" /></span>
					<span class="w120"><input type="checkbox" name="node[]" value="<?php echo $_smarty_tpl->tpl_vars['d2']->value['id'];?>
,1" <?php if (in_array($_smarty_tpl->tpl_vars['d2']->value['id'],$_smarty_tpl->tpl_vars['roleInfo']->value['node'])&&$_smarty_tpl->tpl_vars['roleInfo']->value['access'][$_smarty_tpl->tpl_vars['d2']->value['id']]==1){?>checked<?php }?> node="cNode" flag="cNode2" class="checkbox" /></span>
				</div>
			<?php } ?>
			<?php }?>
			</div>
		<?php } ?>
		<?php }?>
		</div>
	</div>
	<?php } ?>
	<?php }?>
</div>
<script type="text/javascript">
var nodeTreeClass = function(){
	//定义对象属性
	var nodeTree = {
		expand: $("#nodeTree div[ul=1] div[li=1] span.expand"),
		node: $("#nodeTree div[ul=1] div[li=1] input[type=checkbox]"),
		pNode: $("#nodeTree div[ul=1] div[li=1] input[node=pNode]"),
		cNode: $("#nodeTree div[ul=1] div[li=1] input[node=cNode]")
	}

	//展开收缩 toggle动态
	nodeTree.ehNode = function() {
		nodeTree.expand.click(function (){
			if ($(this).attr("class").indexOf("back")<0) $(this).addClass("back");
			else $(this).removeClass("back");
			$(this).parent().next("div[ul=1]").slideToggle(300);
		})
	}(window);

	//选中/不选中全部
	nodeTree.check = function(){
		nodeTree.node.click(function (){
			var nodeObj;
			if ($(this).attr("flag") == "groupNode1") {
				var nodeObj = $(this).parent().parent().next("div[ul=1]").find("input[flag=pNode1],input[flag=cNode1]");
			} else if ($(this).attr("flag") == "groupNode2") {
				var nodeObj = $(this).parent().parent().next("div[ul=1]").find("input[flag=pNode2],input[flag=cNode2]");
			} else if ($(this).attr("flag") == "pNode1") {
				var nodeObj = $(this).parent().parent().next("div[ul=1]").find("input[flag=cNode1]");
			} else if ($(this).attr("flag") == "pNode2") {
				var nodeObj = $(this).parent().parent().next("div[ul=1]").find("input[flag=cNode2]");
			}
			if (nodeObj) {
				if ($(this).attr("checked")) nodeObj.attr("checked",true);
				else nodeObj.attr("checked",false);
			}
		})

		//选中子节点 默认选中父节点
		nodeTree.cNode.click(function (){
			if ($(this).attr("flag") == "cNode1") {
				var nodeObj = $(this).parent().parent().parent().prev("div[li=1]").find("input[flag=pNode1]");
				var groupObj = $(this).parent().parent().parent().parent().prev("div[li=1]").find("input[flag=groupNode1]");
			} else if ($(this).attr("flag") == "cNode2") {
				var nodeObj = $(this).parent().parent().parent().prev("div[li=1]").find("input[flag=pNode2]");
				var groupObj = $(this).parent().parent().parent().parent().prev("div[li=1]").find("input[flag=groupNode2]");
			}
			if ($(this).attr("checked")) {
				nodeObj.attr("checked",true);
				groupObj.attr("checked",true);
			}
		})

		//选中父节点 默认选中组节点
		nodeTree.pNode.click(function (){
			if ($(this).attr("flag") == "pNode1") {
				var nodeObj = $(this).parent().parent().parent().prev("div[li=1]").find("input[flag=groupNode1]");
			} else if ($(this).attr("flag") == "pNode2") {
				var nodeObj = $(this).parent().parent().parent().prev("div[li=1]").find("input[flag=groupNode2]");
			}
			if ($(this).attr("checked")) nodeObj.attr("checked",true);
		})
	}(window);

	//选中组
	var checkGroup = function (){
		nodeTree.pNode.each(function (){
			if ($(this).attr("checked")) {
				if ($(this).attr("flag") == "pNode1") {
					$(this).parent().parent().parent().prev("div[li=1]").find("input[flag=groupNode1]").attr("checked",true);
				} else if ($(this).attr("flag") == "pNode2") {
					$(this).parent().parent().parent().prev("div[li=1]").find("input[flag=groupNode2]").attr("checked",true);
				}
			}
		});
	}

	//选中组
	if (nodeTree.pNode.length > 0) {
		if ($("input[name=id]").val()>0) {
			$("input[isSetNode=1]").click();
			$("#nodeTree").slideDown(300);
		}
		checkGroup();
		$("#nodeTree ul li").each(function (){
			if (!$(this).next().attr("flag"))
				$(this).css("border-bottom",0);
		});

	}
}
new nodeTreeClass();
</script><?php }} ?>