<?php

class App
{
    protected $controller = 'home';
    protected string $method = 'index';
    protected $params = [];

    public function __construct()
    {
        $url = $this->parseURL();
        print_r($url);
//        echo "hi";
        if (file_exists('../controllers/' . $url[0] . '.php')) {
            $this->controller = $url[0];
            unset($url[0]);
        }

        require_once '../controllers/Home.php';
//        echo $this->controller;
        $this->controller = new $this->controller;
        var_dump($this->controller);
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
//                echo 'ok';
                $this->method = $url[1];
                unset($url[1]);
            }
        }
        $this->params = $url ? array_values($url) : [];

        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseUrl()
    {
        if (isset($_GET['url'])) {
//            echo $_GET['url'];
            return explode('/',filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
    }
}


