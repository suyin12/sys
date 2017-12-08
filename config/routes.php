<?php
/**
 * Date: 2017/12/1 15:40
 */

use NoahBuscher\Macaw\Macaw;
//博客控制器
Macaw::get('index','app\controllers\BlogController@index');
Macaw::get('about','app\controllers\BlogController@about');
Macaw::get('content','app\controllers\BlogController@content');

Macaw::$error_callback=function(){
    throw new Exception("路由无匹配项 404 Not Found");
};

Macaw::dispatch();
