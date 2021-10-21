<?php
namespace app\models;

use app\core\Model;

class ProductModel extends Model
{
    public $db;

    public function __construct($db)
    {
        parent::__construct($db);
    }
//
//    public static function getProductsList()
//    {
//        $result = $db->query('SELECT id, name, price, description FROM products ORDER BY id ASC');
//        $productsList = array();
//        $i = 0;
//        while ($row = $result->fetch()) {
//            $productsList[$i]['id'] = $row['id'];
//            $productsList[$i]['name'] = $row['name'];
//            $productsList[$i]['description'] = $row['description'];
//            $productsList[$i]['price'] = $row['price'];
//            $i++;
//        }
//        return $productsList;
//    }
}
