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
        $params = [
            'id' => 2,
//            'first_name' => 'mark'
        ];
        $data = $db->row('SELECT first_name FROM `users` WHERE id = :id', $params);
//        var_dump($data);
        $result = $this->model->getNews();
//        var_dump($result);
        $vars = [
            'first_name' => $result,
        ];
        $news = $this->view->render('main page', $vars);
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

    public function addProductsAction()
    {
        $this->view->render('add products page');
    }
}
