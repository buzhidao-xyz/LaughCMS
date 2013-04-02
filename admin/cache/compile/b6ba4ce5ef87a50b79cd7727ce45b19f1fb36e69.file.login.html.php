<?php /* Smarty version Smarty-3.1.12, created on 2013-04-02 11:45:52
         compiled from "C:\xampp\htdocs\laugh\admin\themes\green\login.html" */ ?>
<?php /*%%SmartyHeaderCode:16963515a54701a5f05-01435873%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6ba4ce5ef87a50b79cd7727ce45b19f1fb36e69' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\green\\login.html',
      1 => 1359940001,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16963515a54701a5f05-01435873',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ecode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_515a5470202955_30839286',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_515a5470202955_30839286')) {function content_515a5470202955_30839286($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("include/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link type="text/css" rel="stylesheet" href="themes/green/style/login.css" media="screen">
<div id="loginTop"></div>
<div id="loginCenter">
    <div id="loginasdf">
        <div id="loginCaption">
            <a href="__APPM__" target="_blank"><img src="themes/green/images/logo.png" width="173" height="60" /></a>
        </div>
        <div id="loginPanel">
            <div class="login logTop">
                <h3>网站后台管理系统</h3>
            </div>
            <div id="logError"><?php echo $_smarty_tpl->tpl_vars['ecode']->value;?>
</div>
            <div class="login logForm">
                <form name="loginform" method="post" action="__APP__/index.php?s=login/loginCheck">
                    <ul>
                        <li><span>用户名:</span><input type="text" name="username" value="" class="input" /></li>
                        <li><span>密&nbsp;&nbsp;&nbsp;码:</span><input type="password" name="password" value="" class="input" /></li>
                        <li><span>验证码:</span><input type="text" name="vcode" value="" class="input" style="width:80px;" />&nbsp;<img src="__APP__/index.php?s=Org/Vcode" class="vcode" /></li>
                        <li><input type="submit" name="subut" class="button btngreen2" value="登录" /></li>
                    </ul>
                </form>
            </div>
            <div class="loginWelcome"></div>
        </div>
    </div>
</div>
<div id="loginBottom">Powered by xxx &copy; 2012-2015</div>
<script language="javascript">
$(document).ready(function(){
    $("form[name=loginform]").submit(function() {
        var username = $(this).find("input[name=username]").val();
        var password = $(this).find("input[name=password]").val();
        var vcode = $(this).find("input[name=vcode]").val();
        
        if (!username || !password || !vcode) {
            alert('请填写完整登录信息!');
            return false;
        }

        var d = {
            username: username,
            password: password,
            vcode: vcode
        }
        $.post($(this).attr("action"), d, function(data){
            if (!data.status) {
                location.href = JS_APP+"/index.php?s=index";
                return true;
            } else {
                $("#logError").html(data.info);
                location.href = location.href;
                return false;
            }
        },'json')
        return false;
    });

    //点击刷新验证码
    $("img.vcode").click(function (){
        $(this).attr("src", "__APP__/index.php?s=Org/Vcode&"+Math.random()*100);
    });
});
</script>
<?php echo $_smarty_tpl->getSubTemplate ("include/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>