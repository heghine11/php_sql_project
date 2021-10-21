<?php

namespace app\core;

use app\core\Db;

abstract class Model
{
    public $db;

    public function __construct($db)
    {
        $this->db = new Db;
    }
}