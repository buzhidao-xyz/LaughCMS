<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="keywords" content="">
<link type="text/css" rel="stylesheet" href="themes/blue/style/common.css" media="screen">
<link type="text/css" rel="stylesheet" href="themes/blue/style/global.css" media="screen">
<script type="text/javascript" src="public/js/jquery.js"></script>
<script type="text/javascript" src="themes/blue/js/div_window.js"></script>
<link type="text/css" rel="stylesheet" href="public/plugin/colorbox/colorbox.css" media="screen">
<script type="text/javascript" src="public/plugin/colorbox/jquery.colorbox.js"></script>
<title>LaughCMS网站管理系统</title>
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
	<div id="controlContent">
<div class="captitle"><h5>留言信息列表 【总计5】</h5></div>
<ul class="messageTitle">
</ul>
<div class="messageList">
            <div class="messageBlock">
    	<div class="content">
    		续上条，#剑网3#安史之乱中，大庄主叶英亲自开炉，率领庄中弟子，取西湖血铁和湖边寒泉冶铸兵刃千柄；并且开藏剑武库，清点庄中所藏兵器，共计千余把；又命三庄主叶炜带这些兵器前去朔方军营中助阵。二庄主叶晖同剩下两位庄主出尽庄中钱财，购买粮食衣物，前去战乱地区赈济灾民。
    	</div>
    	<div class="status">
	    	<div class="fleft"><input type="checkbox" name="messageid[]" value="5" /></div>
	    	<div class="username fleft">luochuan</div>
	    	<div class="email fleft">邮箱: <a href="mailto:luochuan.wang@gmail.com">luochuan.wang@gmail.com</a></div>
	    		    	<div class="delete" accessStatus=1>
	    		[<a delurl="/laugh/admin/index.php?s=Plugin/MessageDelete&messageid=5" href="javascript:;" name="del" msg="确定删除吗？">删除</a>]
	    	</div>
	    		    	<div class="time">2013-05-09 16:15:10</div>
	    </div>
    </div>
        <div class="messageBlock">
    	<div class="content">
    		【php浮点数计算问题】如果用php的+-*/计算浮点数的时候，可能会遇到一些计算结果错误的问题，比如echo intval( 0.58*100 );会打印57，而不是58，这个其实是计算机底层二进制无法精确表示浮点数的一个bug
    	</div>
    	<div class="status">
	    	<div class="fleft"><input type="checkbox" name="messageid[]" value="4" /></div>
	    	<div class="username fleft">maomao</div>
	    	<div class="email fleft">邮箱: <a href="mailto:maomao@mao.com">maomao@mao.com</a></div>
	    		    	<div class="delete" accessStatus=1>
	    		[<a delurl="/laugh/admin/index.php?s=Plugin/MessageDelete&messageid=4" href="javascript:;" name="del" msg="确定删除吗？">删除</a>]
	    	</div>
	    		    	<div class="time">2013-05-09 16:14:29</div>
	    </div>
    </div>
        <div class="messageBlock">
    	<div class="content">
    		【人民日报：名人微博也只是个人观点】 有些名人微博自认为最能代表民意，实际名人微博与任何微博一样，都是个人观点而已。但名人微博中间的娱乐明星微博最有观众，也最具号召力，可明星的微博尽管不乏理性观点，但多是感性表达。于是，影迷、视迷、舞台迷的数量决定了道理的取舍
    	</div>
    	<div class="status">
	    	<div class="fleft"><input type="checkbox" name="messageid[]" value="3" /></div>
	    	<div class="username fleft">wangbq</div>
	    	<div class="email fleft">邮箱: <a href="mailto:wangbq@www.com">wangbq@www.com</a></div>
	    		    	<div class="delete" accessStatus=1>
	    		[<a delurl="/laugh/admin/index.php?s=Plugin/MessageDelete&messageid=3" href="javascript:;" name="del" msg="确定删除吗？">删除</a>]
	    	</div>
	    		    	<div class="time">2013-05-09 16:14:04</div>
	    </div>
    </div>
        <div class="messageBlock">
    	<div class="content">
    		续上条，坊主叶芷青带领外坊精锐弟子同扬州太守镇守扬州城，组织百姓避难，不善武功的秀坊弟子则留在坊中裁剪布料，缝制新衣。楚秀萧白胭率领内坊精英弟子携带姑娘们做的衣服和食物前去北方，支援唐军，内外坊空前团结，不分彼此。叶芷青发下门主令，让天下的七秀坊弟子互助互爱，拯救百姓，对抗狼牙军
    	</div>
    	<div class="status">
	    	<div class="fleft"><input type="checkbox" name="messageid[]" value="2" /></div>
	    	<div class="username fleft">wbq</div>
	    	<div class="email fleft">邮箱: <a href="mailto:wbq0525@163.com">wbq0525@163.com</a></div>
	    		    	<div class="delete" accessStatus=1>
	    		[<a delurl="/laugh/admin/index.php?s=Plugin/MessageDelete&messageid=2" href="javascript:;" name="del" msg="确定删除吗？">删除</a>]
	    	</div>
	    		    	<div class="time">2013-05-09 16:13:24</div>
	    </div>
    </div>
        <div class="messageBlock">
    	<div class="content">
    		安史之乱爆发后，藏剑山庄远在江南，并未被战争波及。但是身为大唐子民，藏剑山庄也不能身免。藏剑家学渊源，以儒立身。虽身在江湖，亦不忘忠君之念，誓与狼牙军不两立。叶英同时发布门主令，命藏剑山庄弟子襄助唐军，敢有投靠叛军者，藏剑山庄定不能容。
    	</div>
    	<div class="status">
	    	<div class="fleft"><input type="checkbox" name="messageid[]" value="1" /></div>
	    	<div class="username fleft">luochuan</div>
	    	<div class="email fleft">邮箱: <a href="mailto:luochuan.wang@gmail.com">luochuan.wang@gmail.com</a></div>
	    		    	<div class="delete" accessStatus=1>
	    		[<a delurl="/laugh/admin/index.php?s=Plugin/MessageDelete&messageid=1" href="javascript:;" name="del" msg="确定删除吗？">删除</a>]
	    	</div>
	    		    	<div class="time">2013-05-09 16:12:10</div>
	    </div>
    </div>
        </div>
<div id="opBottom" class="opBottom">
	<a href="javascript:;" name="checkAll">全选</a>
	<a href="javascript:;" name="unCheckAll">取消</a>
	<a href="javascript:;" name="messageDelete">删除</a>
</div>

<link type="text/css" rel="stylesheet" href="themes/blue/style/messageBoard.css" media="screen">
<script type="text/javascript">
$(document).ready(function (){
var messageClass = function (){
	var messageObj = {
		checkAll: $("#opBottom a[name=checkAll]"),
		unCheckAll: $("#opBottom a[name=unCheckAll]"),
		messageDelete: $("#opBottom a[name=messageDelete]")
	}
	var getMessageID = function (){
		var messageid= "";
		$("input[name='messageid[]']").each(function (){
			if ($(this).attr("checked")) messageid += messageid ? ","+$(this).val() : $(this).val();
		});
		return messageid;
	};
	messageObj.checkAll.click(function (){
		$("input[name='messageid[]']").attr("checked","checked");
	});
	messageObj.unCheckAll.click(function (){
		$("input[name='messageid[]']").attr("checked",false);
	});
	
	//删除文档
	messageObj.messageDelete.click(function (){
		var messageid = getMessageID();
		var d = {
			messageid: messageid
		};
		$.post("/laugh/admin/index.php?s=Plugin/messageDelete",d,function (data){
			alert(data.info);
			if (!data.status) location.href = location.href;
		},'json');
	});
}
messageClass();
});
</script>
    </div>
</div>
</body>
<script type="text/javascript" src="themes/blue/js/jquery.corner.js"></script>
<script type="text/javascript" src="themes/blue/js/public.js"></script>
<script type="text/javascript" src="themes/blue/js/common.js"></script>
<script type="text/javascript" src="themes/blue/js/ajax.js"></script>
<script type="text/javascript" src="public/js/jquery.idTabs.min.js"></script>
</html>