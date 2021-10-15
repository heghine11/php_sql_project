<?php
class Controller
{
    public function model($model)
    {
//        echo $model;
        require_once '../models/User.php';
        return new $model();
    }

    public function view($view, $data= [])
    {
        require_once '../views/'. $view .'.php';
    }
}