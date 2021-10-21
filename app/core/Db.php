<?php

namespace app\core;

use PDO;

class Db
{
    protected $db;

    public function __construct()
    {
        $config = require 'app/configs/db.php';
        $this->db = new PDO('mysql:host='.$config['host'].';dbname='.$config['dbname'].'',
            $config['username'], $config['password']);
    }

    public function query($sql, $params = [])
    {
        $stmt = $this->db->prepare($sql);
        if (!empty($params)) {
            foreach ($params as $key=>$value) {
//                echo '<p>'.$key.'=>'.$value.'</p>';
                $stmt->bindValue(':' . $key, $value);
            }
        }
//        exit;
        $stmt->execute();
//        $query = $this->db->query($sql);
        return $stmt;
    }

    public function row($sql, $params = [])
    {
        $result = $this->query($sql, $params);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function column($sql, $params = [])
    {
        $result = $this->query($sql, $params);
        return $result->fetchColumn();
    }

}