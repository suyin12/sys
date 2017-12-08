<?php
/**
 * Date: 2017/12/1 15:56
 */
namespace app\controllers;

use app\models\Article;
use services\View;
use services\Mail;

class BlogController extends BaseController{
    public function index(){
        $article = Article::first();
        require_once __DIR__.'/../views/blog/index.php';
    }
    public function about(){
        $article = Article::first();
        require_once __DIR__.'/../views/blog/about.php';
    }
    public function messageBoard(){
        $article = Article::first();
        require_once __DIR__.'/../views/blog/about.php';
    }
    public function content(){
        $article = Article::first();
        require_once __DIR__.'/../views/blog/content.php';
    }
}