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
        $stmt->execute($params);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        return $stmt;
//        if (!empty($params)) {
//            $stmt->bindParam(':name', $params['name'], PDO::PARAM_STR);
//            $stmt->bindParam(':description', $params['description'], PDO::PARAM_STR);
//            $stmt->bindParam(':price', $params['price'], PDO::PARAM_INT);
//    }

//            foreach ($params as $key=>$value) {
////                echo '<p>'.$key.'=>'.$value.'</p>';
//                $stmt->bindParam(':' . $key, $_POST['']);
//            }

//        exit;
//        $stmt->execute();
//        $query = $this->db->query($sql);
//        return $stmt;
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

    public function lastInsertedId()
    {
        return $this->db->lastInsertId();
    }

}