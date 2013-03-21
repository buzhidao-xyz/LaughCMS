<?php /* Smarty version Smarty-3.1.12, created on 2013-03-21 17:01:03
         compiled from "C:\xampp\htdocs\laugh\themes\default\Article\article.html" */ ?>
<?php /*%%SmartyHeaderCode:27481514acc4f2b4633-63836766%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d058c71fe0a49d721c3548d523f2c22f20e8e7a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\themes\\default\\Article\\article.html',
      1 => 1363854841,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27481514acc4f2b4633-63836766',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'articleInfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_514acc4f2f47a7_05959876',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_514acc4f2f47a7_05959876')) {function content_514acc4f2f47a7_05959876($_smarty_tpl) {?><div class="articleTpl">
	<h2 class="title"><?php echo $_smarty_tpl->tpl_vars['articleInfo']->value['title'];?>
</h2>
	<div class="status">
		<span class="title">点击次数:</span>
		<span class="content"><?php echo $_smarty_tpl->tpl_vars['articleInfo']->value['clicknum'];?>
 次</span>
		<span class="title">发布时间:</span>
		<span class="content"><?php echo mkdate($_smarty_tpl->tpl_vars['articleInfo']->value['publishtime']);?>
</span>
		<span class="title">作者:</span>
		<span class="content"><?php echo $_smarty_tpl->tpl_vars['articleInfo']->value['author'];?>
</span>
	</div>
	<div class="body">
		<div class="articleContent">
			<?php echo html_entity_decode($_smarty_tpl->tpl_vars['articleInfo']->value['content']);?>

		</div>
	</div>
	<div class="operate">
		<?php echo $_smarty_tpl->getSubTemplate ("include/share0.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div class="operateLink"><a href="javascript:;">[打印此页]</a>&nbsp;&nbsp;&nbsp;<a href="javascript:self.close();">[关闭]</a></div>
	</div>
	<div class="about">
		<dl>
			<dt>上一篇:</dt>
			<dd><a href="javascript:;">新手使用MetInfo建站步骤？</a></dd>
		</dl>
		<dl>
			<dt>下一篇:</dt>
			<dd><a href="javascript:;">新手使用MetInfo建站步骤？</a></dd>
		</dl>
	</div>
</div><?php }} ?>