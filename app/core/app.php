<?php

class App{
    protected $controller = 'home';
    protected $method = 'index';
    protected $params = [];

    public function __construct() {
         $this->parseURL();
        echo "hi";
    }
//    public function __construct()
//    {
//        $this->parseURL();
////        var_dump($url);
//    }
    public function parseUrl(){
        if(isset($_GET['url'])){
            echo $_GET['url'];
//            return $url = explode('/',filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
//            return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
    }
}


