<?php

namespace app\core;

class Router
{
    protected array $routes = [];
    protected array $params = [];

    public function __construct()
    {
        $array = require 'app/configs/routes.php';
        foreach ($array as $key => $value) {
            $this->add($key, $value);
        }
    }

    public function add($route, $params)
    {
        $route = '#^'.$route.'$#';
        $this->routes[$route] = $params;
    }

    public function match(): bool
    {
        $url = trim($_SERVER['REQUEST_URI'], '/'); //REQUEST_URI-current url
        foreach ($this->routes as $route => $params) {
            if(preg_match($route, $url, $matches)) {
                $this->params = $params;
                return true;
            }
        }
        return false;
    }

    public function run()
    {
       if($this->match()) {
           $path = 'app\controllers\\'. ucfirst($this->params['controller']);
           if (class_exists($path)) {
               $action = $this->params['action'] . 'Action';
               if(method_exists($path, $action)) {
                   $controller = new $path($this->params);
                   $controller->$action();
               } else {
                   echo "Method not found.";
               }
           }
           else {
               echo "Class not found.";
           }
       }
       else {
           echo "Route is invalid.";
       }
    }
}