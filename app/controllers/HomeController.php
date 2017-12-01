<?php
/**
 * Date: 2017/12/1 15:56
 */
namespace app\controllers;

use app\models\Article;

class HomeController extends BaseController{
    public function home(){
        $article = Article::first();
        require dirname(__FILE__).'/../views/home.php';
    }
}