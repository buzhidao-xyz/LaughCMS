<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="keywords" content="">
<link type="text/css" rel="stylesheet" href="themes/green/style/common.css" media="screen">
<link type="text/css" rel="stylesheet" href="themes/green/style/base.css" media="screen">
<link type="text/css" rel="stylesheet" href="themes/green/style/global.css" media="screen">
<script type="text/javascript" src="public/js/jquery.js"></script>
<script type="text/javascript" src="themes/green/js/div_window.js"></script>
<!-- <script type="text/javascript" src="themes/blue/js/PIE.js"></script> -->
<title>管理中心</title>
<script type="text/javascript">
var JS_APP = '/laugh/admin';
var JS_APPM = 'http://localhost:82/laugh';
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
		<input type="hidden" name="dir" value="./themes/default/Public" />
		<input type="hidden" name="oldfilename" value="blindwindow.html" />
		<ul class="formbody">
			<li class="formblock">
				<span>文件目录:</span>
				<input type="text" name="newdir" value="./themes/default/Public" class="input w250" />（. 表示根目录 ，不允许用 “..” 形式的路径） 
			</li>
			<li class="formblock">
				<span>文件名称:</span>
				<input type="text" name="newfilename" value="blindwindow.html" class="input w250" />
			</li>
			<li class="formautoblock">
				<span>文件内容:</span>
				<textarea name="filecontent" rows="35" cols="110">&lt;ul id=&quot;menu&quot;&gt;
	&lt;li&gt;
		&lt;a href=&quot;#&quot;&gt;Weblog Tools&lt;/a&gt;
		&lt;ul&gt;
			&lt;li&gt;&lt;a class=&quot;current&quot; href=&quot;#&quot;&gt;PivotX&lt;/a&gt;&lt;/li&gt;
			&lt;li&gt;&lt;a href=&quot;#&quot;&gt;WordPress&lt;/a&gt;&lt;/li&gt;
			&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Textpattern&lt;/a&gt;&lt;/li&gt;
			&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Typo&lt;/a&gt;&lt;/li&gt;
		&lt;/ul&gt;
	&lt;/li&gt;
	&lt;li&gt;
		&lt;a href=&quot;#&quot;&gt;Programming Languages&lt;/a&gt;
		&lt;ul&gt;
			&lt;li&gt;&lt;a href=&quot;#&quot;&gt;PHP&lt;/a&gt;&lt;/li&gt;
			&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Ruby&lt;/a&gt;&lt;/li&gt;
			&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Python&lt;/a&gt;&lt;/li&gt;
			&lt;li&gt;&lt;a href=&quot;#&quot;&gt;PERL&lt;/a&gt;&lt;/li&gt;
			&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Java&lt;/a&gt;&lt;/li&gt;
			&lt;li&gt;&lt;a href=&quot;#&quot;&gt;C#&lt;/a&gt;&lt;/li&gt;
		&lt;/ul&gt;
	&lt;/li&gt;
	&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Marco's blog (no submenu)&lt;/a&gt;&lt;/li&gt;
	&lt;li&gt;
		&lt;a href=&quot;#&quot;&gt;Cool Stuff&lt;/a&gt;
		&lt;ul&gt;
			&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Apple&lt;/a&gt;&lt;/li&gt;
			&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Nikon&lt;/a&gt;&lt;/li&gt;
			&lt;li&gt;&lt;a href=&quot;#&quot;&gt;XBOX360&lt;/a&gt;&lt;/li&gt;
			&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Nintendo&lt;/a&gt;&lt;/li&gt;
		&lt;/ul&gt;
	&lt;/li&gt;
	&lt;li&gt;
		&lt;a href=&quot;#&quot;&gt;Search Engines&lt;/a&gt;
		&lt;ul&gt;
			&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Yahoo!&lt;/a&gt;&lt;/li&gt;
			&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Google&lt;/a&gt;&lt;/li&gt;
			&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Ask.com&lt;/a&gt;&lt;/li&gt;
			&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Live Search&lt;/a&gt;&lt;/li&gt;
		&lt;/ul&gt;
	&lt;/li&gt;
&lt;/ul&gt;
&lt;style type=&quot;text/css&quot;&gt;
body {
  font-family: Helvetica, Arial, sans-serif;
  font-size: 0.9em;
}

p {
  line-height: 1.5em;
}

ul#menu, ul#menu ul {
  list-style-type:none;
  margin: 0;
  padding: 0;
  width: 15em;
}

ul#menu a {
  display: block;
  text-decoration: none;	
}

ul#menu li {
  margin-top: 1px;
}

ul#menu li a {
  background: #333;
  color: #fff;	
  padding: 0.5em;
}

ul#menu li a:hover {
  background: #000;
}

ul#menu li ul li a {
  background: #ccc;
  color: #000;
  padding-left: 20px;
}

ul#menu li ul li a:hover,ul#menu li ul .current a {
  background: #aaa;
  border-left: 5px #000 solid;
  padding-left: 15px;
}

.code { border: 1px solid #ccc; list-style-type: decimal-leading-zero; padding: 5px; margin: 0; }
.code code { display: block; padding: 3px; margin-bottom: 0; }
.code li { background: #ddd; border: 1px solid #ccc; margin: 0 0 2px 2.2em; }
.indent1 { padding-left: 1em; }
.indent2 { padding-left: 2em; }
&lt;/style&gt;
&lt;script type=&quot;text/javascript&quot;&gt;
function initMenu() {
  $('#menu ul').hide();
  $('#menu ul').children('.current').parent().show();
  //$('#menu ul:first').show();
  $('#menu li a').click(
    function() {
      var checkElement = $(this).next();
      if((checkElement.is('ul')) &amp;&amp; (checkElement.is(':visible'))) {
        return false;
        }
      if((checkElement.is('ul')) &amp;&amp; (!checkElement.is(':visible'))) {
        $('#menu ul:visible').slideUp('normal');
        checkElement.slideDown('normal');
        return false;
        }
      }
    );
  }
$(document).ready(function() {
	initMenu();
});
&lt;/script&gt;</textarea>
			</li>
			<li class="formblock bordernone">
				<input type="submit" name="subut" class="button btngreen2 fleft" value="保存" />
				<input type="button" id="goback" name="goback" class="button btngreen2 fleft" value="返回" style="margin-left:50px;" />
			</li>
		</ul>
	</form>
</div>
<script type="text/javascript">

</script>
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