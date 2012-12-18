<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="keywords" content="">
<link type="text/css" rel="stylesheet" href="themes/blue/style/common.css" media="screen">
<link type="text/css" rel="stylesheet" href="themes/blue/style/base.css" media="screen">
<link type="text/css" rel="stylesheet" href="themes/blue/style/global.css" media="screen">
<script type="text/javascript" src="themes/blue/js/jquery.js"></script>
<script type="text/javascript" src="themes/blue/js/div_window.js"></script>
<!-- <script type="text/javascript" src="themes/blue/js/PIE.js"></script> -->
<title>管理中心</title>
<script type="text/javascript">
var JS_APP = '/admin';
</script>
</head>

<body>
<link type="text/css" rel="stylesheet" href="themes/blue/style/login.css" media="screen">
<div id="loginTop"></div>
<div id="loginCenter">
    <div id="loginasdf">
        <div id="loginCaption">
            <!-- <img src="themes/blue/images/login_caption_logo.png" width="173" height="60" /> -->
        </div>
        <div id="loginPanel">
            <div class="login logTop">
                <h3>网站后台管理系统</h3>
            </div>
            <div id="logError"></div>
            <div class="login logForm">
                <form name="loginform" method="post" action="/admin/index.php?s=login/loginCheck">
                    <ul>
                        <li><span>用户名:</span><input type="text" name="username" value="" class="input" /></li>
                        <li><span>密&nbsp;&nbsp;&nbsp;码:</span><input type="password" name="password" value="" class="input" /></li>
                        <li><span>验证码:</span><input type="text" name="vcode" value="" class="input" style="width:80px;" />&nbsp;<img src="/admin/index.php?s=vcode" class="vcode" /></li>
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
                location.href = location.href;
                return false;
            }
        },'json')
        return false;
    });
});
</script>
</body>
<script type="text/javascript" src="themes/blue/js/jquery.corner.js"></script>
<script type="text/javascript" src="themes/blue/js/public.js"></script>
<script type="text/javascript" src="themes/blue/js/common.js"></script>
<script type="text/javascript" src="themes/blue/js/ajax.js"></script>
</html>