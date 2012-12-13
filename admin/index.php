<?php
//引入配置文件
require('include/config/config.php');

//加载路由器
require('route.php');

//初始化路由器/转发路由
new Route();