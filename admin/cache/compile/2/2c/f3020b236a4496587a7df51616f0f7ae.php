<!DOCTYPE html>
<html>
<head>
	<title>Laugh Admin Center</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<!-- stylesheets -->
	<link rel="stylesheet" type="text/css" href="themes/smooth/style/reset.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="themes/smooth/style/style.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="themes/smooth/style/table.css" media="screen" />
	<link id="color" rel="stylesheet" type="text/css" href="themes/smooth/style/colors/blue.css" />
	<link rel="stylesheet" type="text/css" href="themes/smooth/style/common.css" media="screen" />
	<!-- scripts (jquery) -->
	<script src="themes/smooth/js/jquery-1.4.2.min.js" type="text/javascript"></script>
	<!--[if IE]><script language="javascript" type="text/javascript" src="themes/smooth/js/excanvas.min.js"></script><![endif]-->
	<script src="themes/smooth/js/jquery-ui-1.8.custom.min.js" type="text/javascript"></script>
	<script src="themes/smooth/js/jquery.ui.selectmenu.js" type="text/javascript"></script>
	<script src="themes/smooth/js/jquery.flot.min.js" type="text/javascript"></script>
	<script src="themes/smooth/js/tiny_mce/tiny_mce.js" type="text/javascript"></script>
	<script src="themes/smooth/js/tiny_mce/jquery.tinymce.js" type="text/javascript"></script>
	<!-- scripts (custom) -->
	<script src="themes/smooth/js/smooth.js" type="text/javascript"></script>
	<script src="themes/smooth/js/smooth.menu.js" type="text/javascript"></script>
	<script src="themes/smooth/js/smooth.chart.js" type="text/javascript"></script>
	<script src="themes/smooth/js/smooth.table.js" type="text/javascript"></script>
	<script src="themes/smooth/js/smooth.form.js" type="text/javascript"></script>
	<script src="themes/smooth/js/smooth.dialog.js" type="text/javascript"></script>
	<script src="themes/smooth/js/smooth.autocomplete.js" type="text/javascript"></script>
	<script src="themes/smooth/js/div_window.js" type="text/javascript"></script>
	<script src="themes/smooth/js/common.js" type="text/javascript"></script>
	<script src="themes/smooth/js/ajax.js" type="text/javascript"></script>
	<script type="text/javascript">
	var JS_APP = '/laugh/admin';
	var style_path = "themes/smooth/style/colors";
	$(document).ready(function () {
		$("#box-tabs, #box-left-tabs").tabs();
	});
	</script>
</head>

<body>
<div id="login">
    <!-- login -->
    <div class="title">
        <h5>管理中心</h5>
        <div class="corner tl"></div>
        <div class="corner tr"></div>
    </div>
    <div class="messages">
            </div>
    <div class="inner">
        <form name="logform" method="post" action="/laugh/admin/?s=login/loginCheck">
        <div class="form">
            <!-- fields -->
            <div class="fields">
                <div class="field">
                    <div class="label">
                        <label for="username">用户名:</label>
                    </div>
                    <div class="input">
                        <input type="text" id="username" name="username" size="40" value="" class="focus" />
                    </div>
                </div>
                <div class="field">
                    <div class="label">
                        <label for="password">密码:</label>
                    </div>
                    <div class="input">
                        <input type="password" id="password" name="password" size="40" value="" class="focus" />
                    </div>
                </div>
                <div class="field">
                    <div class="label">
                        <label for="password">验证码:</label>
                    </div>
                    <div class="input">
                        <input type="text" id="vcode" name="vcode" value="" class="focus" style="width:109px;" />&nbsp;<img src="/laugh/admin/?s=vcode" class="vcode" />
                    </div>
                </div>
                <div class="buttons">
                    <input type="submit" value="登录" />
                </div>
            </div>
            <!-- end fields -->
        </div>
        </form>
    </div>
    <!-- end login -->
    <div id="colors-switcher" class="color">
        <a href="" class="blue" title="Blue"></a>
        <a href="" class="green" title="Green"></a>
        <a href="" class="brown" title="Brown"></a>
        <a href="" class="purple" title="Purple"></a>
        <a href="" class="red" title="Red"></a>
        <a href="" class="greyblue" title="GreyBlue"></a>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        style_path = "themes/smooth/style/colors";

        $("input.focus").focus(function () {
            if (this.value == this.defaultValue) {
                this.value = "";
            }
            else {
                this.select();
            }
        });

        $("input.focus").blur(function () {
            if ($.trim(this.value) == "") {
                this.value = (this.defaultValue ? this.defaultValue : "");
            }
        });

        $("input:submit, input:reset").button();
    });
</script>
</body>
</html>