<?php
return array(
	//'配置项'=>'配置值'
		//'配置项'=>'配置值'
	//页面底部设置跟踪信息
	'SHOW_PAGE_TRACE' => true,
	//默认分组设置
	'DEFAULT_MDULE' => 'Home',
	'MODULE_ALLOW_LIST' => array('Home', 'Admin'),
		//开启smarty 模板引擎
	'TMPL_ENGINE_TYPE' => 'Smarty',     // 默认模板引擎 以下设置仅对使用Think模板引擎有效



	 /* 数据库设置 */
	'DB_TYPE' => 'mysql',     // 数据库类型
	'DB_HOST' => 'localhost', // 服务器地址
	'DB_NAME' => 'verb',          // 数据库名
	'DB_USER' => 'root',      // 用户名
	'DB_PWD' => 'root',          // 密码
	'DB_PORT' => '3306',        // 端口
	'DB_PREFIX' => 'wwg_',    // 数据库表前缀
);