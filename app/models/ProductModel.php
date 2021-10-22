<?php
namespace app\models;

use app\core\Model;

class ProductModel extends Model
{
    public $name;
    public $description;
    public $price;

    public function insertProduct()
    {
        $table = static::getTableName();

        $sql = "INSERT INTO $table (`name`, `description`, `price`) VALUES (?,?,?)";

        $this->db->query($sql, [$this->name, $this->description, $this->price]);
        return $this;
//        $result = $this->db->query('INSERT INTO products(name, description, price)
//                    VALUES (:name, :price, :description)');
//        return $result;
    }

    public static function getTableName()
    {
        return 'products';
    }
}
