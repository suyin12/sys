<?php
/**
 * Date: 2017/12/1 15:38
 */

//定义PUBLIC_PATH
define('PUBLIC_PATH',__DIR__);

//启动器
require PUBLIC_PATH.'/../bootstrap.php';

//ini_set('display_errors',0);
//error_reporting(E_ALL);

//路由配置,开始处理
require '../config/routes.php';

