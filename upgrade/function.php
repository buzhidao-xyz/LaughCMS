<?php
/**
 * 显示系统消息
 * $msg string 消息字符串
 * $exit int 是否退出 0不退出 1退出 默认0
 */
function showmessage($msg=null,$exit=0)
{
	echo '<div class="message">'.$msg.'</div>';

	if ($exit) showFoot();
}

//显示头
function showHead()
{
	echo <<<EOT
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>系统更新</title>
</head>

<body>
<div class="container">
EOT;
}

//显示底
function showFoot()
{
	echo <<<EOT
</div>
</body>
</html>
EOT;
	exit();
}
