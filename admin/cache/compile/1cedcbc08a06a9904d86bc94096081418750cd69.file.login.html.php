<?php /* Smarty version Smarty-3.1.12, created on 2012-11-11 10:30:23
         compiled from "/usr/local/webserver/site/laugh/admin/themes/default/login.html" */ ?>
<?php /*%%SmartyHeaderCode:204580776509f0dbf50d3b0-19907152%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1cedcbc08a06a9904d86bc94096081418750cd69' => 
    array (
      0 => '/usr/local/webserver/site/laugh/admin/themes/default/login.html',
      1 => 1347194154,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '204580776509f0dbf50d3b0-19907152',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ecode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_509f0dbf5b9eb5_86812490',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509f0dbf5b9eb5_86812490')) {function content_509f0dbf5b9eb5_86812490($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("include/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="logPanel">
    <div class="login logTop">
        <h1>网站管理系统</h1>
    </div>
    <div class="login logForm">
        <form name="logform" method="post" action="__APP__/?s=login/loginCheck">
            <ul>
                <li><span>用户名:</span><input type="text" name="username" value="" class="input" /></li>
                <li><span>密&nbsp;&nbsp;&nbsp; 码:</span><input type="password" name="password" value="" class="input" /></li>
                <li><span>验证码:</span><input type="text" name="vcode" value="" class="input" style="width:80px;" />&nbsp;<img src="__APP__/?s=vcode" class="vcode" /></li>
                <li><input type="submit" name="subut" class="button" value="登录" /></li>
            </ul>
        </form>
    </div>
    <div id="logError"><?php echo $_smarty_tpl->tpl_vars['ecode']->value;?>
</div>
    <div class="login logFoot">
        Powered by Laugh &copy; 2011-2012
    </div>
</div>
<script language="javascript">
$(document).ready(function(){
    $("form[name=logform]").submit(function() {
        var username = $(this).find("input[name=username]").val();
        var password = $(this).find("input[name=password]").val();
        var vcode = $(this).find("input[name=vcode]").val();
        
        if (!username || !password || !vcode) {
            alert('请填写完整登录信息!');
            return false;
        }
        
        return true;
    });
});
</script>
<?php echo $_smarty_tpl->getSubTemplate ("include/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>