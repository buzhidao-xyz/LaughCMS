/**
 * ajax请求统一放在此文件中
 * by laucen 2012-10-12
 */
$(document).ready(function() {
	//添加新组/节点
	$("select[name=groupid]").change(function (){
		var d = {
			c: 'Node',
			f: 'nodeTree',
			groupid: $(this).val()
		}
		$.post(JS_APP+'/?s=AJAX', d, function(data){
			// var data = $.parseJSON(data);
			$("select[flag=nodepid]").html(data.data);
		},'json')
	});
});