<?php /* Smarty version Smarty-3.1.12, created on 2012-11-08 23:19:04
         compiled from "/usr/local/webserver/site/laugh/admin/themes/smooth/Group/manage.html" */ ?>
<?php /*%%SmartyHeaderCode:1181773034509bcd68260235-89669371%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d64ffdb13cf6d7837c44eba92a3170df20cd526' => 
    array (
      0 => '/usr/local/webserver/site/laugh/admin/themes/smooth/Group/manage.html',
      1 => 1352387942,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1181773034509bcd68260235-89669371',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'total' => 0,
    'groupList' => 0,
    'd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_509bcd6830bc46_84516762',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509bcd6830bc46_84516762')) {function content_509bcd6830bc46_84516762($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("include/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="control" style="display:none;">
	<div class="control_nav">
		<h3>组节点列表</h3>
	</div>
	<div class="captitle"><h5>兑奖申请列表【目前共有<?php if ($_smarty_tpl->tpl_vars['total']->value){?><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
<?php }else{ ?>0<?php }?>条数据】</h5></div>
    <ul class="table_list_title">
    	<li class="table_list_l table_list_l150">组节点名称</li>
    	<li class="table_list_l table_list_l170">创建时间</li>
    	<li class="table_list_l table_list_l100">是/否显示</li>
    	<li class="table_list_l table_list_l150">操作</li>
    </ul>
    <?php if ($_smarty_tpl->tpl_vars['groupList']->value){?>
     <?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['groupList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
$_smarty_tpl->tpl_vars['d']->_loop = true;
?>
    <ul class="table_list">
		<li class="table_list_l table_list_l150"><?php echo $_smarty_tpl->tpl_vars['d']->value['title'];?>
</li>
    	<li class="table_list_l table_list_l170"><?php echo mkdate($_smarty_tpl->tpl_vars['d']->value['createtime']);?>
</li>
    	<li class="table_list_l table_list_l100"><?php if ($_smarty_tpl->tpl_vars['d']->value['isshow']){?>显<?php }else{ ?>隐<?php }?></li>
    	<li class="table_list_l table_list_l150">
    		<a href="javascript:;" name="modify" id="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['d']->value['title'];?>
" isshow="<?php echo $_smarty_tpl->tpl_vars['d']->value['isshow'];?>
">修改</a>&nbsp;&nbsp;
    		<a delurl="__APP__/Group/deleteGroup" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    </ul>
    <?php } ?>
    <?php }else{ ?>
    <ul class="table_list"><li class="table_list_center">空</li></ul>
    <?php }?>
    <?php echo $_smarty_tpl->getSubTemplate ("public/page.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
<!--弹出层-->
<div id="modify_div" class="modify_div" style="display:none;">
	<form id="modify_div_form" action="__APP__/?s=Group/upGroup">
		<input name="id" value="" type="hidden" />
		<a href="javascript:;" class="modify_div_close" id="modify_div_close">X</a>
		<ul class="formbody modify_div_box">
			<li class="formblock colorblock">
				<span>组节点名称: </span>
				<input type="text" name="title" value="" class="input" style="width:150px;" />
			</li>
			<li class="auto colorblock">
				<span>是否显示: </span>
				<div class="show_list fleft">
					<label><input type="radio" name="isshow" value="1" class="radio" />是</label>
					<label><input type="radio" name="isshow" value="0" class="radio" />否</label>
				</div>
			</li>
			<li class="formblock">
				<input type="submit" name="subut" class="button" value="修改" />
			</li>
		</ul>
	</form>
</div>
<!--弹出层-->
<div id="content">
	<div class="blankhd"></div>
	<div id="control">
		<div class="box">
			<div class="title">
				<h5>新组节点表单</h5>
			</div>
			<form name="newform" action="__APP__/?s=Group/saveGroup" method="post" id="addajaxform">
			<div class="form">
				<div class="fields">
					<div class="field  field-first">
						<div class="label">
							<label for="input-small">名称:</label>
						</div>
						<div class="input" style="float:left;">
							<input type="text" id="input-small" name="title" class="small" />
						</div>
					</div>
					<div class="buttons">
						<input type="submit" name="submit" value="添加" />
					</div>
				</div>
			</div>
			</form>
		</div>
		<div class="box mtop10">
			<div class="title">
				<h5>组节点列表</h5>
			</div>
			<div class="table">
				<form action="" method="post">
				<table>
					<thead>
						<tr>
							<th class="left">Title</th>
							<th>Price</th>
							<th>Added</th>
							<th>Category</th>
							<th class="selected last"><input type="checkbox" class="checkall" /></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="title">24" LED Monitor</td>
							<td class="price">$110.00</td>
							<td class="date">April 25th, 2010 at 4:15 PM</td>
							<td class="category">Monitors</td>
							<td class="selected last"><input type="checkbox" /></td>
						</tr>
						<tr>
							<td class="title">27" LCD Flat Panel</td>
							<td class="price">$150.00</td>
							<td class="date">April 25th, 2010 at 4:15 PM</td>
							<td class="category">Monitors</td>
							<td class="selected last"><input type="checkbox" /></td>
						</tr>
						<tr>
							<td class="title">6GB 240-Pin DDR3 SDRAM DDR3 1600</td>
							<td class="price">$80.00</td>
							<td class="date">April 25th, 2010 at 4:15 PM</td>
							<td class="category">Memory</td>
							<td class="selected last"><input type="checkbox" /></td>
						</tr>
						<tr>
							<td class="title">500GB 7200 RPM 16MB Cache SATA 3.0Gb/s 3.5</td>
							<td class="price">$92.00</td>
							<td class="date">April 25th, 2010 at 4:15 PM</td>
							<td class="category">Hard Drives</td>
							<td class="selected last"><input type="checkbox" /></td>
						</tr>
						<tr>
							<td class="title">2GB 240-Pin DDR3 SDRAM DDR3 1600</td>
							<td class="price">$52.00</td>
							<td class="date">April 25th, 2010 at 4:15 PM</td>
							<td class="category">Memory</td>
							<td class="selected last"><input type="checkbox" /></td>
						</tr>
					</tbody>
				</table>
				<!-- pagination -->
				<div class="pagination pagination-left">
					<div class="results">
						<span>showing results 1-10 of 207</span>
					</div>
					<ul class="pager">
						<li class="disabled">&laquo; prev</li>
						<li class="current">1</li>
						<li><a href="">2</a></li>
						<li><a href="">3</a></li>
						<li><a href="">4</a></li>
						<li><a href="">5</a></li>
						<li class="separator">...</li>
						<li><a href="">20</a></li>
						<li><a href="">21</a></li>
						<li><a href="">next &raquo;</a></li>
					</ul>
				</div>
				<!-- end pagination -->
				<!-- table action -->
				<div class="action">
					<select name="action">
						<option value="" class="locked">Set status to Deleted</option>
						<option value="" class="unlocked">Set status to Published</option>
						<option value="" class="folder-open">Move to Category</option>
					</select>
					<div class="button">
						<input type="submit" name="submit" value="Apply to Selected" />
					</div>
				</div>
				<!-- end table action -->
				</form>
			</div>
		</div>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("include/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>