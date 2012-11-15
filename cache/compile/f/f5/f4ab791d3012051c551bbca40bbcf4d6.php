<style>
#menu {
    width:95%;
    height:30px;
    text-indent:30px;
    margin-top:20px;
    margin-left:5px;
    border-bottom:1px solid #999999;
}
#menu a {
    font-weight:bold;
    margin:10px;
}
ul {
    margin-bottom:30px;
}
ul li {
    margin:10px 5px;
}
ul#filelist li {
    margin:1px 5px;
}
#logtitle {
    width:95%;
    height:20px;
    line-height:20px;
    margin:10px 5px;
    color:#0099cc;
    font-weight:bold;
}
</style>

<script language="javascript">
$(document).ready(function () {
    $("body").scrollTop(100000);
});
</script>

<div id="menu">
        <a href="?s=logs">当前日志</a> |
        <a href="?s=logs/logflist">日志列表</a>
</div>
<ul id="filelist">
        <li><a href="?s=logs/index&f=access.log">access.log</a></li>
        <li><a href="?s=logs/index&f=access_20120202170537.log">access_20120202170537.log</a></li>
        <li><a href="?s=logs/index&f=access_20120501223943.log">access_20120501223943.log</a></li>
    </ul>