<?php /* Smarty version Smarty-3.1.12, created on 2012-11-15 23:08:17
         compiled from "/usr/local/webserver/site/laugh/themes/default/Log/menu.html" */ ?>
<?php /*%%SmartyHeaderCode:53534551150a50561e602b9-71014616%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1889eb30bdf57a5e652c1478bf687fd104f7a69' => 
    array (
      0 => '/usr/local/webserver/site/laugh/themes/default/Log/menu.html',
      1 => 1352992079,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '53534551150a50561e602b9-71014616',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logfile' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50a50561e7d021_45446857',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a50561e7d021_45446857')) {function content_50a50561e7d021_45446857($_smarty_tpl) {?><style>
#menu {
    width:95%;
    height:30px;
    text-indent:30px;
    margin-top:20px;
    margin-left:5px;
    border-bottom:1px solid #999999;
}
#menu a {
    font-weight:bold;
    margin:10px;
}
ul {
    margin-bottom:30px;
}
ul li {
    margin:10px 5px;
}
ul#filelist li {
    margin:1px 5px;
}
#logtitle {
    width:95%;
    height:20px;
    line-height:20px;
    margin:10px 5px;
    color:#0099cc;
    font-weight:bold;
}
</style>

<script language="javascript">
$(document).ready(function () {
    $("body").scrollTop(100000);
});
</script>

<div id="menu">
    <?php if ($_smarty_tpl->tpl_vars['logfile']->value){?>
    <a href="?s=logs">当前日志</a> |
    <?php }else{ ?>
    <a href="?s=logs/backup">备份当前日志</a> |
    <a href="?s=logs/clear">清空日志</a> |
    <?php }?>
    <a href="?s=logs/logflist">日志列表</a>
</div><?php }} ?>