<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Db;

class Main extends Controller
{
    public function __construct($route)
    {
        parent::__construct($route);
        $this->view->layout = 'default';
    }

    public function indexAction()
    {
        $this->view->render('main page');
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
        $this->view->render('Add Products page');
    }

    public function allOrdersAction()
    {
        $this->view->render('All Orders page');
    }
    public function myOrdersAction()
    {
        $this->view->render('My Orders page');
    }
}
