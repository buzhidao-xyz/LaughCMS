<?php /* Smarty version Smarty-3.1.12, created on 2013-01-16 11:03:02
         compiled from "C:\xampp\htdocs\laugh\themes\default\Public\blindwindow.html" */ ?>
<?php /*%%SmartyHeaderCode:181050f618668e5337-52889916%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4aa3ac6ea68a995e851df67f126ddc8f5f9832f3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\themes\\default\\Public\\blindwindow.html',
      1 => 1358305381,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '181050f618668e5337-52889916',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50f618669127d3_72409830',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50f618669127d3_72409830')) {function content_50f618669127d3_72409830($_smarty_tpl) {?><ul id="menu">
	<li>
		<a href="#">Weblog Tools</a>
		<ul>
			<li><a class="current" href="#">PivotX</a></li>
			<li><a href="#">WordPress</a></li>
			<li><a href="#">Textpattern</a></li>
			<li><a href="#">Typo</a></li>
		</ul>
	</li>
	<li>
		<a href="#">Programming Languages</a>
		<ul>
			<li><a href="#">PHP</a></li>
			<li><a href="#">Ruby</a></li>
			<li><a href="#">Python</a></li>
			<li><a href="#">PERL</a></li>
			<li><a href="#">Java</a></li>
			<li><a href="#">C#</a></li>
		</ul>
	</li>
	<li><a href="#">Marco's blog (no submenu)</a></li>
	<li>
		<a href="#">Cool Stuff</a>
		<ul>
			<li><a href="#">Apple</a></li>
			<li><a href="#">Nikon</a></li>
			<li><a href="#">XBOX360</a></li>
			<li><a href="#">Nintendo</a></li>
		</ul>
	</li>
	<li>
		<a href="#">Search Engines</a>
		<ul>
			<li><a href="#">Yahoo!</a></li>
			<li><a href="#">Google</a></li>
			<li><a href="#">Ask.com</a></li>
			<li><a href="#">Live Search</a></li>
		</ul>
	</li>
</ul>
<style type="text/css">
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
</style>
<script type="text/javascript">
function initMenu() {
  $('#menu ul').hide();
  $('#menu ul').children('.current').parent().show();
  //$('#menu ul:first').show();
  $('#menu li a').click(
    function() {
      var checkElement = $(this).next();
      if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
        return false;
        }
      if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
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
</script><?php }} ?>