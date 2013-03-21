<?php /* Smarty version Smarty-3.1.12, created on 2013-03-21 17:28:54
         compiled from "C:\xampp\htdocs\laugh\themes\default\Common\Flink.html" */ ?>
<?php /*%%SmartyHeaderCode:19415514ad2d6098fd6-74535878%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '171f7a938f34fcb516d7468097b1646c292b8607' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\themes\\default\\Common\\Flink.html',
      1 => 1360142414,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19415514ad2d6098fd6-74535878',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_514ad2d60a0620_07030512',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_514ad2d60a0620_07030512')) {function content_514ad2d60a0620_07030512($_smarty_tpl) {?><div id="Flink" class="boxBlock block">
	<div class="FlinkTitle">
		<span class="title">友情链接</span>
		<ul id="FlinkboxTab" class="boxTab fleft">
			<li><a tabid="#flinkboxTab1" href="javascript:;" class="bordernone">分类一</a></li>
			<li><a tabid="#flinkboxTab2" href="javascript:;">分类二</a></li>
		</ul>
	</div>
	<div class="FlinkBody">
		<div id="flinkboxTab1" class="boxTabContent">
			<ul class="flinkList">
				<li><a href="javascript:;">链接一</a></li>
				<li><a href="javascript:;">链接二三</a></li>
				<li><a href="javascript:;">链接四四四四</a></li>
				<li><a href="javascript:;">链接六六六</a></li>
				<li><a href="javascript:;">链接五六七八九十</a></li>
			</ul>
		</div>
		<div id="flinkboxTab2" class="boxTabContent">
			<ul class="flinkList">
				<li><a href="javascript:;">链接二</a></li>
			</ul>
		</div>
	</div>
</div>
<script type="text/javascript">
$(document).ready(function() {
//友情链接切换tab
$("#Flink ul#FlinkboxTab").idTabs(function(id,list,set){
	$("a",set).removeClass("selected").filter("[tabid='"+id+"']",set).addClass("selected"); 
	for(i in list) $(list[i]).hide();
	$(id).fadeIn();
	return false;
});
});
</script><?php }} ?>