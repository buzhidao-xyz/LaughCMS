<?php /* Smarty version Smarty-3.1.12, created on 2013-10-07 21:25:36
         compiled from "F:\website\laugh\themes\default\Common\Header.html" */ ?>
<?php /*%%SmartyHeaderCode:212355252b6509f43f2-40962453%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87990114b9c9a1f1ed6a1e0c46274a3c816e20d9' => 
    array (
      0 => 'F:\\website\\laugh\\themes\\default\\Common\\Header.html',
      1 => 1370074334,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212355252b6509f43f2-40962453',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Config' => 0,
    'keyword' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5252b650a39bd3_88033246',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5252b650a39bd3_88033246')) {function content_5252b650a39bd3_88033246($_smarty_tpl) {?><div id="Header">
	<div id="HeaderMain">
		<div id="HeaderStatus">
			<div class="Logo">
				<a href="__APP__"><img src="__APP__/themes/default/images/logo.png" /></a>
			</div>
			<div class="Center">
				<?php echo $_smarty_tpl->tpl_vars['Config']->value['HomeSiteTitle'];?>

			</div>
			<div class="Operate">
				<div class="OpTop">
					<a href="javascript:;" id="setHome">设为首页</a> | <a href="javascript:;" id="addFavorite">收藏本站</a>
				</div>
				<div class="Search">
					<form method="POST" action="__APP__/index.php?s=Search">
						<input type="text" onfocus="if (this.value=='搜索...') this.value='';" onblur="if (this.value=='') this.value='搜索...';" value="<?php if (isset($_smarty_tpl->tpl_vars['keyword']->value)){?><?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
<?php }else{ ?>搜索...<?php }?>" size="20" class="sinput" name="keyword">
						<input type="submit" class="sbutton" value="GO">
					</form>
				</div>
			</div>
		</div>
		<?php echo $_smarty_tpl->getSubTemplate ("Common/Navigation.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
</div>
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
        obj.style.behavior = 'url(#default#homepage)';
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