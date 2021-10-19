<?php

namespace app\core;

use PDO;

class Db
{

//    protected static $instance;
//
//    protected $dsn = 'mysql:host=localhost;dbname=shoppingSystem';
//    protected $username = 'heghine';
//    protected $password = 'Heghine111+';
//
//    protected $pdo;

    protected $db;

    public function __construct()
    {
        $config = require 'app/configs/db.php';
        $this->db = new PDO('mysql:host='.$config['host'].';dbname='.$config['dbname'].'',
            $config['username'], $config['password']);
//        $this->pdo = new PDO($this->dsn, $this->username, $this->password);
//        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

}