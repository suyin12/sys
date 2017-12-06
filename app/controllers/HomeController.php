<?php
/**
 * Date: 2017/12/1 15:56
 */
namespace app\controllers;

use app\models\Article;
use services\View;
use services\Mail;

class HomeController extends BaseController{
    public function home(){
        $article = Article::first();
        require_once __DIR__.'/../views/home.php';
    }
}