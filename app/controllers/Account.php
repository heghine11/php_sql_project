<?php
namespace app\controllers;

use app\core\Controller;

class Account extends Controller
{
    public function loginAction()
    {
//        $this->view->redirect('/');
        $this->view->layout = 'custom';
        $this->view->render('login page');
    }
}
