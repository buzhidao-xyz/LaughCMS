<?php /* Smarty version Smarty-3.1.12, created on 2013-05-30 14:01:29
         compiled from "F:\website\laugh\themes\sindgood\Common\Header.html" */ ?>
<?php /*%%SmartyHeaderCode:715451a6eb39c27100-61258461%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '085f9096b2c75ce1bca8794e0c6635faaa94a452' => 
    array (
      0 => 'F:\\website\\laugh\\themes\\sindgood\\Common\\Header.html',
      1 => 1369878687,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '715451a6eb39c27100-61258461',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51a6eb39c6a922_34171883',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a6eb39c6a922_34171883')) {function content_51a6eb39c6a922_34171883($_smarty_tpl) {?><div id="Header">
	<div id="HeaderMain">
		<div id="HeaderStatus">
			<div class="Logo">
				<a href="__APP__"><img src="__APP__/themes/sindgood/images/logo.png" /></a>
			</div>
			<div class="Center">
				<?php echo $_smarty_tpl->tpl_vars['Config']->value['HomeSiteTitle'];?>

			</div>
			<div class="Operate">
				<div class="OpTop">
					<a href="javascript:;" id="setHome">设为首页</a> | <a href="javascript:;" id="addFavorite">收藏本站</a>
				</div>
				<!-- <div class="Search">
					<form method="POST" action="__APP__/index.php?s=Search">
						<input type="text" onfocus="if (this.value=='搜索...') this.value='';" onblur="if (this.value=='') this.value='搜索...';" value="搜索..." size="20" class="sinput" name="keyword">
						<input type="submit" class="sbutton" value="GO">
					</form>
				</div> -->
				<div class="STelephone">
					<span class="title">服务热线：</span>
					<span class="content">0512-36607986</span>
				</div>
			</div>
		</div>
		<?php echo $_smarty_tpl->getSubTemplate ("Common/Navigation.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
</div>
<style type="text/css">
.STelephone {
	margin-top: 15px;
	margin-left: 12px;
}
.STelephone .title {
	color: #316AB0;
    font-family: "Arial";
    font-size: 14px;
    font-weight: bold;
}
.STelephone .content {
	color: #FF0000;
    font-family: "Georgia";
    font-size: 20px;
    font-weight: bold;
}
</style>
<script type="text/javascript">
//加入收藏 <a onclick="AddFavorite(window.location,document.title)">加入收藏</a>
function AddFavorite(sURL, sTitle)
{
    try {
        window.external.addFavorite(sURL, sTitle);
    } catch(e) {
        try {
            window.sidebar.addPanel(sTitle, sURL, "");
        } catch(e) {
            alert("加入收藏失败，请使用Ctrl+D进行添加");
        }
    }
}

//设为首页 <a onclick="SetHome(this,window.location)">设为首页</a>
function SetHome(obj,vrl){
    try {
        obj.style.behavior = 'url(#sindgood#homepage)';
        obj.setHomePage(vrl);
    } catch(e) {
        if(window.netscape) {
            try {
                netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");

	            var prefs = Components.classes['@mozilla.org/preferences-service;1'].getService(Components.interfaces.nsIPrefBranch);
	            prefs.setCharPref('browser.startup.homepage',vrl);
            } catch (e) {
                alert("此操作被浏览器拒绝！\n请在浏览器地址栏输入“about:config”并回车\n然后将 [signed.applets.codebase_principal_support]的值设置为'true',双击即可。");
            }
        }
    }
}
$(document).ready(function (){
	$("#setHome").click(function (){
		SetHome(this,window.location.href);
	});
	$("#addFavorite").click(function (){
		AddFavorite(window.location.href,$("title").text());
	});
});
</script><?php }} ?>