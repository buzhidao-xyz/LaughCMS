<?php /* Smarty version Smarty-3.1.12, created on 2013-05-16 10:08:11
         compiled from "C:\xampp\htdocs\laugh\admin\themes\blue\login.html" */ ?>
<?php /*%%SmartyHeaderCode:775051943f8bc9b483-86559052%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b09a5a66ecb58a67ebe1c2ac1196a0d8329708e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\blue\\login.html',
      1 => 1367902798,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '775051943f8bc9b483-86559052',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ecode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51943f8be12772_76814652',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51943f8be12772_76814652')) {function content_51943f8be12772_76814652($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("include/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link type="text/css" rel="stylesheet" href="themes/blue/style/login.css" media="screen">
<div id="loginPanel">
    <div class="logTop">LaughCMS网站管理系统</div>
    <div id="logError"><?php echo $_smarty_tpl->tpl_vars['ecode']->value;?>
</div>
    <div class="logForm">
        <div class="Loglogo"><a href="__APPM__" target="_blank"><img src="themes/blue/images/logo_white.png" width="180" height="60" /></a></div>
        <form name="loginform" method="post" action="__APP__/index.php?s=login/loginCheck">
            <ul>
                <li><span>用户名:</span><input type="text" name="username" value="" class="input" /></li>
                <li><span>密&nbsp;&nbsp;&nbsp;码:</span><input type="password" name="password" value="" class="input" /></li>
                <li><span>验证码:</span><input type="text" name="vcode" value="" class="input" style="width:80px;" />&nbsp;<img src="__APP__/index.php?s=Org/Vcode" class="vcode" /></li>
                <li><input type="submit" name="subut" class="button btngreen2" value="登录" /></li>
            </ul>
        </form>
    </div>
</div>
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