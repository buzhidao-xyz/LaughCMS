<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="keywords" content="">
<link type="text/css" rel="stylesheet" href="themes/green/style/common.css" media="screen">
<link type="text/css" rel="stylesheet" href="themes/green/style/global.css" media="screen">
<script type="text/javascript" src="public/js/jquery.js"></script>
<script type="text/javascript" src="themes/green/js/div_window.js"></script>
<!-- <script type="text/javascript" src="themes/blue/js/PIE.js"></script> -->
<link type="text/css" rel="stylesheet" href="public/plugin/colorbox/colorbox.css" media="screen">
<script type="text/javascript" src="public/plugin/colorbox/jquery.colorbox.js"></script>
<title>管理中心</title>
<script type="text/javascript">
var JS_APP = '/laugh/admin';
var JS_APPM = 'http://localhost:82/laugh';
function colorboxAjaxHtml(url) {
	$.post(url,{},function (data){
		$.colorbox({ html: data });
	});
}
function colorboxHtml(url) {
	$.colorbox({ href: url });
}
function colorboxImage(url) {
	$.colorbox({ href: url });
}
</script>
</head>

<body>
<style type="text/css">
	body { background: none; }
</style>
<div id="control">
	<ul class="controlTop">
		<li class="controlLeftTop"></li>
		<li class="controlRightTop"></li>
	</ul>
	<div id="controlContent">
<div class="captitle">
	<h5>文件管理 >> 修改文件</h5>
</div>
<div class="formContainer">
	<div class="formtitle"><h5>修改文件</h5></div>
	<form name="newform" action="/laugh/admin/index.php?s=Plugin/fileEdit&action=save" method="post" class="newform">
		<input type="hidden" name="dir" value="./admin/themes/green" />
		<input type="hidden" name="oldfilename" value="login.html" />
		<ul class="formbody">
			<li class="formblock">
				<span>文件目录:</span>
				<input type="text" name="newdir" value="./admin/themes/green" class="input w250" />（. 表示根目录 ，不允许用 “..” 形式的路径） 
			</li>
			<li class="formblock">
				<span>文件名称:</span>
				<input type="text" name="newfilename" value="login.html" class="input w250" />
			</li>
			<li class="formautoblock">
				<span>文件内容:</span>
				<textarea name="filecontent" rows="35" cols="110">{include file=&quot;include/head.html&quot;}
&lt;link type=&quot;text/css&quot; rel=&quot;stylesheet&quot; href=&quot;themes/green/style/login.css&quot; media=&quot;screen&quot;&gt;
&lt;div id=&quot;loginTop&quot;&gt;&lt;/div&gt;
&lt;div id=&quot;loginCenter&quot;&gt;
    &lt;div id=&quot;loginasdf&quot;&gt;
        &lt;div id=&quot;loginCaption&quot;&gt;
            &lt;a href=&quot;http://localhost:82/laugh&quot; target=&quot;_blank&quot;&gt;&lt;img src=&quot;themes/green/images/logo.png&quot; width=&quot;173&quot; height=&quot;60&quot; /&gt;&lt;/a&gt;
        &lt;/div&gt;
        &lt;div id=&quot;loginPanel&quot;&gt;
            &lt;div class=&quot;login logTop&quot;&gt;
                &lt;h3&gt;网站后台管理系统&lt;/h3&gt;
            &lt;/div&gt;
            &lt;div id=&quot;logError&quot;&gt;{$ecode}&lt;/div&gt;
            &lt;div class=&quot;login logForm&quot;&gt;
                &lt;form name=&quot;loginform&quot; method=&quot;post&quot; action=&quot;/laugh/admin/index.php?s=login/loginCheck&quot;&gt;
                    &lt;ul&gt;
                        &lt;li&gt;&lt;span&gt;用户名:&lt;/span&gt;&lt;input type=&quot;text&quot; name=&quot;username&quot; value=&quot;&quot; class=&quot;input&quot; /&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;span&gt;密&amp;nbsp;&amp;nbsp;&amp;nbsp;码:&lt;/span&gt;&lt;input type=&quot;password&quot; name=&quot;password&quot; value=&quot;&quot; class=&quot;input&quot; /&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;span&gt;验证码:&lt;/span&gt;&lt;input type=&quot;text&quot; name=&quot;vcode&quot; value=&quot;&quot; class=&quot;input&quot; style=&quot;width:80px;&quot; /&gt;&amp;nbsp;&lt;img src=&quot;/laugh/admin/index.php?s=Org/Vcode&quot; class=&quot;vcode&quot; /&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;input type=&quot;submit&quot; name=&quot;subut&quot; class=&quot;button btngreen2&quot; value=&quot;登录&quot; /&gt;&lt;/li&gt;
                    &lt;/ul&gt;
                &lt;/form&gt;
            &lt;/div&gt;
            &lt;div class=&quot;loginWelcome&quot;&gt;&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div id=&quot;loginBottom&quot;&gt;Powered by xxx &amp;copy; 2012-2015&lt;/div&gt;
&lt;script language=&quot;javascript&quot;&gt;
$(document).ready(function(){
    $(&quot;form[name=loginform]&quot;).submit(function() {
        var username = $(this).find(&quot;input[name=username]&quot;).val();
        var password = $(this).find(&quot;input[name=password]&quot;).val();
        var vcode = $(this).find(&quot;input[name=vcode]&quot;).val();
        
        if (!username || !password || !vcode) {
            alert('请填写完整登录信息!');
            return false;
        }

        var d = {
            username: username,
            password: password,
            vcode: vcode
        }
        $.post($(this).attr(&quot;action&quot;), d, function(data){
            if (!data.status) {
                location.href = JS_APP+&quot;/index.php?s=index&quot;;
                return true;
            } else {
                $(&quot;#logError&quot;).html(data.info);
                location.href = location.href;
                return false;
            }
        },'json')
        return false;
    });

    //点击刷新验证码
    $(&quot;img.vcode&quot;).click(function (){
        $(this).attr(&quot;src&quot;, &quot;/laugh/admin/index.php?s=Org/Vcode&amp;&quot;+Math.random()*100);
    });
});
&lt;/script&gt;
{include file=&quot;include/foot.html&quot;}</textarea>
			</li>
			<li class="formblock bordernone">
				<input type="submit" name="subut" class="button btngreen2 fleft" value="保存" />
				<input type="button" id="goback" name="goback" class="button btngreen2 fleft" value="返回" style="margin-left:50px;" />
			</li>
		</ul>
	</form>
</div>
    </div>
    <ul class="controlBottom">
		<li class="controlLeftBottom"></li>
		<li class="controlRightBottom"></li>
	</ul>
</div>
</body>
<script type="text/javascript" src="themes/green/js/jquery.corner.js"></script>
<script type="text/javascript" src="themes/green/js/public.js"></script>
<script type="text/javascript" src="themes/green/js/common.js"></script>
<script type="text/javascript" src="themes/green/js/ajax.js"></script>
<script type="text/javascript" src="public/js/jquery.idTabs.min.js"></script>
</html>