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
<div class="formContainer" accessStatus=1>
	<div class="formtitle"><h5>修改文档资料</h5></div>
	<form name="newform" action="/laugh/admin/index.php?s=Article/saveEdit" enctype="multipart/form-data" method="post" class="newform">
		<input type="hidden" name="archiveid" value="8" />
		<ul class="formbody">
			<div class="shtabtitlec">
				<div class="shtabtitle shtabcurrent"><a href="javascript:;"><span>常规内容</span></a></div>
				<div class="shtabtitle"><a href="javascript:;"><span>高级内容</span></a></div>
				<div class="shtabtitle"><a href="javascript:;"><span>文档内容</span></a></div>
			</div>
			<div class="shtabcontentc">
			<div class="shtabcontent shtabcontentcurrent">
				<li class="formblock">
					<span>文档标题:</span>
					<input type="text" name="title" value="PHP单例模式经典讲解" class="input w300" />
				</li>
				<li class="formblock">
					<span>文档标签:</span>
					<input type="text" name="tag" value="PHP,单利模式" class="input w300" /> (','号分开)
				</li>
				<li class="formblock">
					<span>文档主栏目: </span>
					<select id="select" name="columnid" style="width:230px;">
						<option value="">|-请选择栏目...</option><option value="1">&nbsp;&nbsp;|-网站首页</option><option value="2">&nbsp;&nbsp;|-新闻资讯</option><option value="3">&nbsp;&nbsp;&nbsp;&nbsp;|-IT知识</option><option value="12">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|-PHP知识</option><option value="4">&nbsp;&nbsp;&nbsp;&nbsp;|-网络知识</option><option value="5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|-前端知识</option><option value="13">&nbsp;&nbsp;&nbsp;&nbsp;|-数据库知识</option><option value="6">&nbsp;&nbsp;|-产品展示</option><option value="7">&nbsp;&nbsp;|-客户案例</option><option value="8">&nbsp;&nbsp;|-下载中心</option><option value="9">&nbsp;&nbsp;|-招贤纳士</option><option value="10">&nbsp;&nbsp;|-关于我们</option><option value="11">&nbsp;&nbsp;|-联系我们</option>
					</select>
				</li>
				<li class="formblock">
					<span>文档缩略图:</span>
					<input type="file" name="image" value="" class="input w150" style="height: 22px;" />
				</li>
				<li class="formblock">
					<span>文档来源:</span>
					<input type="text" name="source" value="" class="input w200" />
				</li>
				<li class="formblock">
					<span>作者:</span>
					<input type="text" name="author" value="admin" class="input w150" />
				</li>
				<li class="formblock">
					<span>更新时间:</span>
					<input type="text" id="dpicker0" name="publishtime" value="2013-03-28 15:51:04" onClick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})" class="input w150" />
					<img width="16" height="22" align="absmiddle" onclick="WdatePicker({el:'dpicker0',dateFmt:'yyyy-MM-dd HH:mm:ss'})" style="cursor:pointer" src="public/plugin/My97DatePicker/skin/datePicker.gif">
				</li>
				<li class="formblock">
					<span>是否允许评论: </span>
					<div class="item_list fleft">
						<label><input type="radio" name="status" value="1" class="radio" checked />允许</label>
						<label><input type="radio" name="status" value="0" class="radio"  />禁止</label>
					</div>
				</li>
			</div>
			<div class="shtabcontent">
				<li class="formblock">
					<span>SEO标题:</span>
					<input type="text" name="seotitle" value="" class="input w300" />
				</li>
				<li class="formautoblock">
					<span>关键字:</span>
					<textarea name="keyword" rows="1" cols="47"></textarea>
				</li>
				<li class="formautoblock">
					<span>摘要内容:</span>
					<textarea name="description" rows="2" cols="47"></textarea>
				</li>
			</div>
			<div class="shtabcontent">
				<li class="formautoblock">
					<span>文档内容:</span>
					<div class="FullTextEditor">
						<textarea name="content" id="myEditor" rows="3" cols="50">&lt;p&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt;首先我们要知道明确单例模式这个概念，那么什么是单例模式呢？&lt;br /&gt;单例模式顾名思义，就是只有一个实例。&lt;br /&gt;作为对象的创建模式， 单例模式确保某一个类只有一个实例，而且自行实例化并向整个系统提供这个实例，&lt;br /&gt;这个类我们称之为单例类。&lt;br /&gt;单例模式的要点有三个：&lt;br /&gt;一是某个类只能有一个实例；&lt;br /&gt;二是它必须自行创建这个实例；&lt;br /&gt;三是它必须自行向整个系统提供这个实例。&lt;br /&gt;下面我们讨论下为什么要使用PHP单例模式？&lt;br /&gt;多数 人都是从单例模式的字面上的意思来理解它的用途, 认为这是对系统资源的节省, 可以避免重复实例化, 是一种&rdquo;计划生育&rdquo;. 而PHP每次执行完页面都是会从内存中清理掉所有的资源. 因而PHP中的单例实际每次运行都是需要重新实例化的, 这样就失去了单例重复实例化的意义了. 单单从这个方面来说, PHP的单例的确有点让各位失望. 但是单例仅仅只有这个功能和应用吗? 答案是否定的,我们一起来看看。&lt;br /&gt;1. php的应用主要在于数据库应用, 所以一个应用中会存在大量的数据库操作, 在使用面向对象的方式开发时(废话), 如果使用单例模式, 则可以避免大量的new 操作消耗的资源。&lt;br /&gt;2. 如果系统中需要有一个类来全局控制某些配置信息, 那么使用单例模式可以很方便的实现. 这个可以参看zend Framework的FrontController部分。&lt;br /&gt;3. 在一次页面请求中, 便于进行调试, 因为所有的代码(例如数据库操作类db)都集中在一个类中, 我们可以在类中设置钩子, 输出日志，从而避免到处var_dump, echo。&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;&lt;pre class=&quot;brush:php;toolbar:false;&quot;&gt;/**
* 设计模式之单例模式
* $_instance必须声明为静态的私有变量
* 构造函数和析构函数必须声明为私有,防止外部程序new
* 类从而失去单例模式的意义
* getInstance()方法必须设置为公有的,必须调用此方法
* 以返回实例的一个引用
* ::操作符只能访问静态变量和静态函数
* new对象都会消耗内存
* 使用场景:最常用的地方是数据库连接。
* 使用单例模式生成一个对象后，
* 该对象可以被其它众多对象所使用。
*/
class Example
{
//保存例实例在此属性中
private static $_instance;
  
//构造函数声明为private,防止直接创建对象
private function __construct()
{
echo &lsquo;I am Construceted&rsquo;;
}
  
//单例方法
public static function singleton()
{
if(!isset(self::$_instance))
{
$c=__CLASS__;
self::$_instance=new $c;
}
return self::$_instance;
}
  
//阻止用户复制对象实例
public function __clone()
{
trigger_error(&lsquo;Clone is not allow&rsquo; ,E_USER_ERROR);
}
  
function test()
{
echo(&ldquo;test&rdquo;);
  
}
}
  
// 这个写法会出错，因为构造方法被声明为private
$test = new Example;
  
// 下面将得到Example类的单例对象
$test = Example::singleton();
$test-&amp;gt;test();
  
// 复制对象将导致一个E_USER_ERROR.
$test_clone = clone $test;
?&amp;gt;&lt;/pre&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;</textarea>
					</div>
				</li>
			</div>
			<li class="formblock bordernone">
				<input type="submit" name="subut" class="button btngreen2" value="修改" />
			</li>
		</ul>
	</form>
</div>
<script src="public/plugin/UEditor/editor_config.js" type="text/javascript"></script>
<script src="public/plugin/UEditor/editor_all_min.js" type="text/javascript"></script>
<script src="public/plugin/My97DatePicker/WdatePicker.js" type="text/javascript"></script>
<script type="text/javascript">
    UE.getEditor('myEditor',{
    	initialFrameWidth: 900,
    	initialFrameHeight: 320
    });
    $("form[name=newform]").submit(function(){
    	var title = $(this).find("input[name=title]").val();
    	if (!title) {
    		alert("请填写文档标题!");
    		return false;
    	}
    	var columnid = $(this).find("select[name=columnid]").val();
    	if (!columnid) {
    		alert("请选择文档所在主栏目!");
    		return false;
    	}
    });
    $("select[name=columnid]").find("option").each(function (){
    	if ($(this).val()=="3") $(this).attr("selected",true);
    });
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