<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Db;
use app\models\ProductModel;

class Main extends Controller
{
//    public function __construct($route)
//    {
//        parent::__construct($route);
//        $this->view->layout = 'default';
//    }

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
        $db = new Db();
        $taskModel = new ProductModel();
//        $params = [
//            ':name' => $_POST['name'],
//            ':description' => $_POST['description'],
//            ':price' => $_POST['price'],
//        ];
        if ($_POST) {
            $taskModel->name = $_POST['name'] ?? '';
            $taskModel->description = $_POST['description'] ?? '';
            $taskModel->price = $_POST['price'];
                $taskModel->insertProduct();
//                $this->redirect('/');
            }


//        $data = $db->query($sql);
//        var_dump($data);
//        $result = $this->model->insertProduct();
//        var_dump($result);
        $this->view->render('main page');
        //        $sql = 'INSERT INTO products(name, description, price)
//                    VALUES (:name, :price, :description)';

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
