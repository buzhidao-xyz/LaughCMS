<?php /* Smarty version Smarty-3.1.12, created on 2012-12-09 15:22:40
         compiled from "G:\website\laugh\admin\themes\blue\login.html" */ ?>
<?php /*%%SmartyHeaderCode:3180050c43c400827a2-25988676%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05579bf9e38c3a9a413fffe29ccf756d908a23c8' => 
    array (
      0 => 'G:\\website\\laugh\\admin\\themes\\blue\\login.html',
      1 => 1355037095,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3180050c43c400827a2-25988676',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ecode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50c43c400dfdf8_58315361',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50c43c400dfdf8_58315361')) {function content_50c43c400dfdf8_58315361($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("include/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link type="text/css" rel="stylesheet" href="themes/blue/style/login.css" media="screen">
<div id="loginTop"></div>
<div id="loginCenter">
    <div id="loginasdf">
        <div id="loginCaption">
            <img src="themes/blue/images/login_caption_logo.png" width="173" height="60" />
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
                        <li><span>验证码:</span><input type="text" name="vcode" value="" class="input" style="width:80px;" />&nbsp;<img src="__APP__/index.php?s=vcode" class="vcode" /></li>
                        <li><input type="submit" name="subut" class="button btnyellow2" value="登录" /></li>
                    </ul>
                </form>
            </div>
            <div class="loginWelcome"></div>
        </div>
    </div>
    <div></div>
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
                return false;
            }
        },'json')
        return false;
    });
});
</script>
<?php echo $_smarty_tpl->getSubTemplate ("include/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>