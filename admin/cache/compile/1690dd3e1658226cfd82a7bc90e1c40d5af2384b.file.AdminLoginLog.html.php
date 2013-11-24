<?php /* Smarty version Smarty-3.1.12, created on 2013-11-24 17:44:33
         compiled from "F:\website\laugh\admin\themes\blue\Log\AdminLoginLog.html" */ ?>
<?php /*%%SmartyHeaderCode:51625291ca81766982-47167100%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1690dd3e1658226cfd82a7bc90e1c40d5af2384b' => 
    array (
      0 => 'F:\\website\\laugh\\admin\\themes\\blue\\Log\\AdminLoginLog.html',
      1 => 1381140857,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '51625291ca81766982-47167100',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'adminname' => 0,
    'begintime' => 0,
    'endtime' => 0,
    'total' => 0,
    'accessStatus' => 0,
    'dataList' => 0,
    'start' => 0,
    'd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5291ca8188a2a2_72000342',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5291ca8188a2a2_72000342')) {function content_5291ca8188a2a2_72000342($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("Public/control_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="formContainer">
    <div class="formtitle"><h5>管理员登录日志查询</h5></div>
    <form name="newform" action="__APP__/index.php?s=Log/AdminLoginLog" method="post" class="newform">
        <ul class="formbody">
            <li class="formblock">
                <span>管理员名称: </span>
                <input type="text" name="adminname" value="<?php echo $_smarty_tpl->tpl_vars['adminname']->value;?>
" class="input w150" />
            </li>
            <li class="formblock">
                <span>日期: </span>
                <input type="text" name="begintime" value="<?php echo $_smarty_tpl->tpl_vars['begintime']->value;?>
" onClick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})" class="input w150" />
                至
                <input type="text" name="endtime" value="<?php echo $_smarty_tpl->tpl_vars['endtime']->value;?>
" onClick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})" class="input w150" />
            </li>
            <li class="formblock bordernone bgf6">
                <input type="submit" name="subut" class="button btnblue2" value="查询" />
            </li>
        </ul>
    </form>
</div>
<div class="captitle"><h5>管理后台登陆日志 【目前共有<?php if (isset($_smarty_tpl->tpl_vars['total']->value)){?><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
<?php }else{ ?>0<?php }?>条日志】</h5></div>
<ul class="table_list_title">
	<li class="table_list_l table_list_l30"></li>
	<li class="table_list_l table_list_l120">管理员名称</li>
	<li class="table_list_l table_list_l150">登录IP</li>
	<li class="table_list_l table_list_l150">登录时间</li>
	<?php if ($_smarty_tpl->tpl_vars['accessStatus']->value==1){?>
	<!-- <li class="table_list_l table_list_l200" accessStatus=<?php echo $_smarty_tpl->tpl_vars['accessStatus']->value;?>
>操作</li> -->
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
		<li class="table_list_l table_list_l30 table_list_no"><?php echo $_smarty_tpl->tpl_vars['start']->value+1;?>
</li>
		<li class="table_list_l table_list_l120"><?php echo $_smarty_tpl->tpl_vars['d']->value['adminname'];?>
</li>
		<li class="table_list_l table_list_l150"><?php echo ip2longs($_smarty_tpl->tpl_vars['d']->value['loginip']);?>
</li>
    	<li class="table_list_l table_list_l150"><?php echo mkdate($_smarty_tpl->tpl_vars['d']->value['logintime']);?>
</li>
    	<?php if ($_smarty_tpl->tpl_vars['accessStatus']->value==1){?>
    	<!-- <li class="table_list_l table_list_l200" accessStatus=<?php echo $_smarty_tpl->tpl_vars['accessStatus']->value;?>
>
    		<a delurl="__APP__/index.php?s=Log/AdminLoginLogDelete&logid=<?php echo $_smarty_tpl->tpl_vars['d']->value['logid'];?>
" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li> -->
    	<?php }?>
    </ul>
    <?php } ?>
    <?php }else{ ?>
    <ul class="table_list"><li class="table_list_center">空</li></ul>
    <?php }?>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("Public/page.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script src="public/plugin/My97DatePicker/WdatePicker.js" type="text/javascript"></script>
<?php echo $_smarty_tpl->getSubTemplate ("Public/control_bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>