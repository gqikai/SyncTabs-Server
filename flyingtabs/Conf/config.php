<?php
return array(
	//'配置项'=>'配置值'
	'URL_MODEL' => 4,

    /* 数据库设置 */
    'DB_TYPE'               => 'mysql',     // 数据库类型
    'DB_HOST'               => '127.0.0.1', // 服务器地址
    'DB_NAME'               => 'flyingtabs',          // 数据库名
    'DB_USER'               => 'root',      // 用户名
    'DB_PWD'                => 'Gqikai123',          // 密码
    'DB_PORT'               => '',        // 端口
    'DB_PREFIX'             => 'ft_',    // 数据库表前缀
    'DB_FIELDTYPE_CHECK'    => false,       // 是否进行字段类型检查
    'DB_FIELDS_CACHE'       => true,        // 启用字段缓存
	
    //修改模板引擎为smarty
    'TMPL_ENGINE_TYPE'		=>  'Smarty',     // 默认模板引擎 
    
    //在页面底部显示日志信息
     'SHOW_PAGE_TRACE'   => true,   // 显示页面Trace信息
    
);
?>