<?php

/**
 * @Author: AZYF
 * @Date:   2017-12-11 10:51:42
 * @Last Modified by:   Marte
 * @Last Modified time: 2018-04-02 23:28:04
 */
header("Content-type:text/html;charset=utf-8");
	//开发模式
define('APP_DEBUG', true);
	//设置静态资源请求文件路径常量
define('SITE_URL', '/zydongci/');

	//设置静态资源文件路径常量
define('CSS_URL', '/zydongci/Home/Public/css/');
define('IMG_URL', '/zydongci/Home/Public/images/');
define('JS_URL', '/zydongci/Home/Public/js/');

	//包含入口文件
include_once './ThinkPHP/ThinkPHP.php';
