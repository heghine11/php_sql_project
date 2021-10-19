<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Db;

class Main extends Controller
{
    public function indexAction()
    {
//        $vars = [
//            'name' => 'Hegh',
//            'age'=> '20',
//            'array'=> [1,2,3]
//        ];
        $db = new Db();
        $this->view->render('main page');
//        $this->view->render('main page', $vars);
    }

    public function homeAction()
    {
        $this->view->render('home page');
    }

    public function accountAction()
    {
        $this->view->render('account page');
    }
}
