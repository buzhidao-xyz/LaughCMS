<?php /* Smarty version Smarty-3.1.12, created on 2013-05-29 13:20:37
         compiled from "F:\website\laugh\themes\default\Plugin\cooperate.html" */ ?>
<?php /*%%SmartyHeaderCode:662151a590251fd5a1-49375577%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0c5d65ab53ce56537fdb05403a11ae1537e1b78' => 
    array (
      0 => 'F:\\website\\laugh\\themes\\default\\Plugin\\cooperate.html',
      1 => 1366899155,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '662151a590251fd5a1-49375577',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CooperateList' => 0,
    'd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51a590253f4660_76729167',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a590253f4660_76729167')) {function content_51a590253f4660_76729167($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("include/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("Common/Top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("Common/Header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="WrapContainer" class="wrap">
	<div class="adBanner block">
		<a href="javascript:;" target="_blank"><img src="themes/default/images/ad_banner.png" width="1000" height="80" /></a>
	</div>
	<div class="CurPosition mtop5">
		当前位置: <a href="__APP__">首页</a> > <a href="__APP__/index.php?s=article">招贤纳士</a>
	</div>
	<div id="CenterShow" class="block mtop5">
		<div id="mainBlock" class="fleft w740">
			<div id="ImgListBlock" class="boxBlock">
				<div class="boxBlockTitle">
					<span class="title">招贤纳士</span>
				</div>
				<div class="boxBlockBody">
					<div class="CooperateList">
						<?php if (isset($_smarty_tpl->tpl_vars['CooperateList']->value)&&!empty($_smarty_tpl->tpl_vars['CooperateList']->value)){?>
						<?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['CooperateList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
$_smarty_tpl->tpl_vars['d']->_loop = true;
?>
						<div class="CooperateListTitle">
							<a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['d']->value['position'];?>
</a>
						</div>
						<ul>
							<li>
								<span class="title">招聘职位:</span>
								<span class="content"><?php echo $_smarty_tpl->tpl_vars['d']->value['position'];?>
</span>
							</li>
							<li>
								<span class="title">招聘人数:</span>
								<span class="content"><?php echo $_smarty_tpl->tpl_vars['d']->value['quantity'];?>
 人</span>
							</li>
							<li>
								<span class="title">学历要求:</span>
								<span class="content"><?php echo $_smarty_tpl->tpl_vars['d']->value['education'];?>
</span>
							</li>
							<li>
								<span class="title">工作经验:</span>
								<span class="content"><?php echo $_smarty_tpl->tpl_vars['d']->value['experience'];?>
</span>
							</li>
							<li>
								<span class="title">工作地点:</span>
								<span class="content"><?php echo $_smarty_tpl->tpl_vars['d']->value['place'];?>
</span>
							</li>
							<li>
								<span class="title">工作性质:</span>
								<span class="content"><?php echo $_smarty_tpl->tpl_vars['d']->value['nature'];?>
</span>
							</li>
							<li>
								<span class="title">发布时间:</span>
								<span class="content"><?php echo mkdate($_smarty_tpl->tpl_vars['d']->value['publishtime'],'d');?>
</span>
							</li>
							<li>
								<span class="title">更新时间:</span>
								<span class="content"><?php echo mkdate($_smarty_tpl->tpl_vars['d']->value['updatetime'],'d');?>
</span>
							</li>
							<li>
								<span class="title">工资待遇:</span>
								<span class="content"><?php echo $_smarty_tpl->tpl_vars['d']->value['salary'];?>
</span>
							</li>
							<li>
								<span class="title">有效期:</span>
								<span class="content"><?php echo $_smarty_tpl->tpl_vars['d']->value['salary'];?>
</span>
							</li>
							<li class="caption">
								<span class="title">职位描述:</span>
								<span class="content">
								<?php echo html_entity_decode($_smarty_tpl->tpl_vars['d']->value['description']);?>

								</span>
							</li>
						</ul>
						<?php } ?>
						<?php }?>
					</div>
					<?php echo $_smarty_tpl->getSubTemplate ("Common/Page.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				</div>
			</div>
		</div>
		<?php echo $_smarty_tpl->getSubTemplate ("Common/SideBlock.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div class="clear"></div>
	</div>
	<?php echo $_smarty_tpl->getSubTemplate ("Common/Flink.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
<script type="text/javascript">
$(document).ready(function (){
var CooperateClass = function (){
	var CoObj = {
		CoTitle: $(".CooperateList .CooperateListTitle a")
	}

	CoObj.CoTitle.click(function (){
		$(this).parent().next("ul").slideToggle();
	});
}
CooperateClass();
});
</script>
<?php echo $_smarty_tpl->getSubTemplate ("include/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>