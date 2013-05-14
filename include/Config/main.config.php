<?php
$config = array(
    'STYLE_DEFAULT' => ROOT_DIR.'/themes/default',
    'STYLE_PUBLIC'  => ROOT_DIR.'/themes/public',

    'INCLUDE_DIR'   => ROOT_DIR.'/include',
    'CACHE_DIR'     => ROOT_DIR.'/cache',
    'LOG_DIR'       => ROOT_DIR.'/data/log',
    'VENDOR'        => ROOT_DIR.'/include/Vendor',

    'UPLOAD_PATH'   => ROOT_DIR.'/Uploads',

    'COMPILE_LIFE_TIME' => 10, //编译文件有效时间 N秒

    'TEMPLATE_TYPE'    => 'Smarty',   //模版引擎类型 Laugh/Smarty
    //模版选项 Smarty模版起作用
    'TEMPLATE_OPTIONS' => array(
        'debug'            => false,
        'caching'          => false,
        'cache_lifetime'   => 120,
        'template'         => ROOT_DIR.'/themes/default',
        'template_compile' => ROOT_DIR.'/cache/compile',
        'template_cache'   => ROOT_DIR.'/cache/cache',
        'plugin_dir'       => ROOT_DIR.'/include/Vendor/Smarty/plugins',
    ),

    //Laugh数据模型数据库配置信息
    'DB' => array(
        'db0' => array (
            'dbtype'   => 'pdomysql',
            'host'     => 'localhost',
            'port'     => '3306',
            'username' => 'root',
            'password' => '123456',
            'database' => 'laugh',
            'prefix'   => 'la_'
        )
    )
);

