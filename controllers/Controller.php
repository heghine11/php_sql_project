<?php
class Controller
{
    public function model($model)
    {
        if (file_exists('../models/' . $model . '.php')) {
            require_once '../models/' . $model . '.php';
            return new $model();
        } else
            return null;
    }

    public function view($name, $data = []){
        if(file_exists('../views/'.$name.'.php')){
            include('../views/'.$name.'.php');
        } else {
            echo "ERROR: View $name not found!";
        }
    }
}