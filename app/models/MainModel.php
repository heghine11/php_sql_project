<?php
namespace app\models;

use app\core\Model;
use app\core\Db;

class MainModel extends Model
{
    public function getNews()
    {
//        var_dump($this->db);
        $result = $this->db->row('SELECT * FROM users');
        return $result;
    }
}