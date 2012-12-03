<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="keywords" content="">
<link type="text/css" rel="stylesheet" href="themes/blue/style/common.css" media="screen">
<link type="text/css" rel="stylesheet" href="themes/blue/style/base.css" media="screen">
<link type="text/css" rel="stylesheet" href="themes/blue/style/global.css" media="screen">
<script type="text/javascript" src="themes/blue/js/jquery.js"></script>
<!-- <script type="text/javascript" src="themes/blue/js/PIE.js"></script> -->
<title>管理中心</title>
<script type="text/javascript">
var JS_APP = '/laugh/admin';
</script>
</head>

<body>
<link type="text/css" rel="stylesheet" href="themes/blue/style/login.css" media="screen">
<div id="loginTop"></div>
<div id="loginCenter">
    <div id="loginasdf">
        <div id="loginCaption"></div>
        <div id="loginPanel">
            <div class="login logTop">
                <h1>网站管理系统</h1>
            </div>
            <div class="login logForm">
                <form name="logform" method="post" action="/laugh/admin/?s=login/loginCheck">
                    <ul>
                        <li><span>用户名:</span><input type="text" name="username" value="" class="input" /></li>
                        <li><span>密&nbsp;&nbsp;&nbsp;码:</span><input type="password" name="password" value="" class="input" /></li>
                        <li><span>验证码:</span><input type="text" name="vcode" value="" class="input" style="width:80px;" />&nbsp;<img src="/laugh/admin/?s=vcode" class="vcode" /></li>
                        <li><input type="submit" name="subut" class="button" value="登录" /></li>
                    </ul>
                </form>
            </div>
            <div id="logError"></div>
            <div class="login logFoot">
                Powered by Laugh &copy; 2011-2012
            </div>
        </div>
    </div>
</div>
<div id="loginBottom"></div>
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
</body>
<script type="text/javascript" src="themes/default/js/public.js"></script>
<script type="text/javascript" src="themes/default/js/div_window.js"></script>
<script type="text/javascript" src="themes/default/js/common.js"></script>
<script type="text/javascript" src="themes/default/js/ajax.js"></script>
</html>