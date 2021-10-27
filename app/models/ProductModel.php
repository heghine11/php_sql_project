<?php
namespace app\models;

use app\core\Model;

class ProductModel extends Model
{
    public $name;
    public $description;
    public $price;
    protected $id;

    public function insertProduct()
    {
        $sql = '';
        $table = static::getTableName();
        if($this->name && $this->price && $this->description) {
        $sql = "INSERT INTO $table (`name`, `description`, `price`) 
                    VALUES (?,?,?)";
//        echo $this->description;
    }
        else{
            echo "required fields are missing";
        }
        $this->db->query($sql, [$this->name, $this->description, $this->price]);
        $this->id = $this->db->lastInsertedId();
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
