<?php
namespace libs;

use PDO;

class Db extends DefaultLib
{

    protected static $instance;

    protected $dsn = 'mysql:host=localhost;dbname=shoppingSystem';
    protected $username = 'heghine';
    protected $password = 'Heghine111+';

    protected $pdo;

    public function __construct()
    {
        $this->pdo = new PDO($this->dsn, $this->username, $this->password);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function queryOne($query, $binds = [])
    {
        $query = $this->query($query, $binds);
        return $query->fetch();
    }

    public function query($sql, $data = null)
    {
        if ($data !== null) {
            $dat = array_values($data);
        }
        $sel = $this->pdo->prepare($sql);
        if ($data !== null) {
            $sel->execute($dat);
        } else {
            $sel->execute();
        }
        $sel->setFetchMode(PDO::FETCH_OBJ);
        return $sel;
//        $query = $this->pdo->prepare($sql);
//        $query->execute($binds);
//        $query->setFetchMode(PDO::FETCH_OBJ);
//        return $query;
    }

    public function queryAll($query, $binds = [])
    {
        $query = $this->query($query, $binds);
        return $query->fetchAll();
    }

    public function lastInsertedId()
    {
        return $this->pdo->lastInsertId();
    }

}