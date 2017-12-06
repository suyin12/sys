<?php
/**
 * BaseController
 * Date: 2017/12/1 15:55
 */
namespace app\controllers;

use services\View;
use services\Mail;

class BaseController {
    protected $view;
    protected $mail;
    public function __construct(){

    }

    public function __destruct(){

        $view = $this->view;

        if ( $view instanceof View ) {

            extract($view->data);

            require $view->view;

        }
        $mail = $this->mail;

        if ( $mail instanceof Mail ) {

            $mailer = new \Nette\Mail\SmtpMailer($mail->config);

            $mailer->send($mail);

        }

    }
}