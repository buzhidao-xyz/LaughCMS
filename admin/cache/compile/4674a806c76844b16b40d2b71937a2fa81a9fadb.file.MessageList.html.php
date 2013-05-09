<?php /* Smarty version Smarty-3.1.12, created on 2013-05-09 16:19:06
         compiled from "C:\xampp\htdocs\laugh\admin\themes\blue\Plugin\MessageList.html" */ ?>
<?php /*%%SmartyHeaderCode:24636518b5bfa403022-54305466%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4674a806c76844b16b40d2b71937a2fa81a9fadb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\blue\\Plugin\\MessageList.html',
      1 => 1368086808,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24636518b5bfa403022-54305466',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'total' => 0,
    'dataList' => 0,
    'd' => 0,
    'accessStatus' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_518b5bfa506003_49825319',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_518b5bfa506003_49825319')) {function content_518b5bfa506003_49825319($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/control_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="captitle"><h5>留言信息列表 【总计<?php if ($_smarty_tpl->tpl_vars['total']->value){?><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
<?php }else{ ?>0<?php }?>】</h5></div>
<ul class="messageTitle">
</ul>
<div class="messageList">
    <?php if (isset($_smarty_tpl->tpl_vars['dataList']->value)&&is_array($_smarty_tpl->tpl_vars['dataList']->value)&&!empty($_smarty_tpl->tpl_vars['dataList']->value)){?>
    <?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dataList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
$_smarty_tpl->tpl_vars['d']->_loop = true;
?>
    <div class="messageBlock">
    	<div class="content">
    		<?php echo $_smarty_tpl->tpl_vars['d']->value['content'];?>

    	</div>
    	<div class="status">
	    	<div class="fleft"><input type="checkbox" name="messageid[]" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" /></div>
	    	<div class="username fleft"><?php echo $_smarty_tpl->tpl_vars['d']->value['username'];?>
</div>
	    	<div class="email fleft">邮箱: <a href="mailto:<?php echo $_smarty_tpl->tpl_vars['d']->value['email'];?>
"><?php echo $_smarty_tpl->tpl_vars['d']->value['email'];?>
</a></div>
	    	<?php if ($_smarty_tpl->tpl_vars['accessStatus']->value==1){?>
	    	<div class="delete" accessStatus=<?php echo $_smarty_tpl->tpl_vars['accessStatus']->value;?>
>
	    		[<a delurl="__APP__/index.php?s=Plugin/MessageDelete&messageid=<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" href="javascript:;" name="del" msg="确定删除吗？">删除</a>]
	    	</div>
	    	<?php }?>
	    	<div class="time"><?php echo mkdate($_smarty_tpl->tpl_vars['d']->value['createtime']);?>
</div>
	    </div>
    </div>
    <?php } ?>
    <?php }else{ ?>
    <div class="messageBlockNull">暂无留言信息！</div>
    <?php }?>
</div>
<div id="opBottom" class="opBottom">
	<a href="javascript:;" name="checkAll">全选</a>
	<a href="javascript:;" name="unCheckAll">取消</a>
	<a href="javascript:;" name="messageDelete">删除</a>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/page.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link type="text/css" rel="stylesheet" href="themes/blue/style/messageBoard.css" media="screen">
<script type="text/javascript">
$(document).ready(function (){
var messageClass = function (){
	var messageObj = {
		checkAll: $("#opBottom a[name=checkAll]"),
		unCheckAll: $("#opBottom a[name=unCheckAll]"),
		messageDelete: $("#opBottom a[name=messageDelete]")
	}
	var getMessageID = function (){
		var messageid= "";
		$("input[name='messageid[]']").each(function (){
			if ($(this).attr("checked")) messageid += messageid ? ","+$(this).val() : $(this).val();
		});
		return messageid;
	};
	messageObj.checkAll.click(function (){
		$("input[name='messageid[]']").attr("checked","checked");
	});
	messageObj.unCheckAll.click(function (){
		$("input[name='messageid[]']").attr("checked",false);
	});
	
	//删除文档
	messageObj.messageDelete.click(function (){
		var messageid = getMessageID();
		var d = {
			messageid: messageid
		};
		$.post("__APP__/index.php?s=Plugin/messageDelete",d,function (data){
			alert(data.info);
			if (!data.status) location.href = location.href;
		},'json');
	});
}
messageClass();
});
</script>
<?php echo $_smarty_tpl->getSubTemplate ("public/control_bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>