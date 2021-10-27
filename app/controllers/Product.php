<?php
namespace app\controllers;

use app\core\Controller;
use app\models\ProductModel;
use app\core\Db;

class Product extends Controller
{

    public function addProductsAction()
    {
        $productModel = new ProductModel();

        if (isset($_POST['submit'])) {
            $productModel->name = $_POST['name'] ?? '';
            $productModel->description = $_POST['description']?? '';
            $productModel->price = $_POST['price'] ?? '';
            if($productModel->name && $productModel->price && $productModel->description) {
                $productModel->insertProduct();
//                echo $productModel->description;
//                $this->view->redirect('/');
            }else{
                echo "required fields are missing";
            }

//        $params = [
//            ':name' => $_POST['name'],
//            ':description' => $_POST['description'],
//            ':price' => $_POST['price'],
//        ];

        }


//        $data = $db->query($sql);
//        var_dump($data);
//        $result = $this->model->insertProduct();
//        var_dump($result);
        $this->view->render('product page');
        //        $sql = 'INSERT INTO products(name, description, price)
//                    VALUES (:name, :price, :description)';

    }
}
