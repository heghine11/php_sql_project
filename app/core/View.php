<?php

namespace app\core;

class View
{
    public $path;
    public $route;
    public string $layout = 'default';
    public string $ext = 'php';

    public function __construct($route)
    {
        $this->route = $route;
        $this->path = $route['controller'] . '/' . $route['action'];
    }

    public function render($title, $vars= [])
    {
        extract($vars);
        if (file_exists("app/views/" . $this->path . "." . $this->ext)) {
            ob_start();
            require "app/views/" . $this->path . "." . $this->ext;
            $content = ob_get_clean();
            require "app/views/layouts/" . $this->layout . "." . $this->ext;
        } else {
            echo "Path not found";
        }
    }

//static sarqecinq vor aranc object sarqelu dimenq
    public static function errorCode($code)
    {
        http_response_code($code);
        $ext1 = "php";
        $path = "app/views/errors/" . $code . "." . $ext1;
        if (file_exists($path)) {
            require $path;
        }
        exit;
    }

    public function redirect($url)
    {
        header('location:'.$url);
        exit;
    }

}