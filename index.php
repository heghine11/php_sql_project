<?php

use app\core\Router;

    spl_autoload_register(function ($className) {
        $path = str_replace('\\', '/', $className . '.php');
        if (file_exists($path)) {
            require $path;
        }
    });

    $action = $_GET['action'] ?? '';
    if(!$action && $_SERVER['REQUEST_URI'] == '/') {
        $action = 'index';
    }

    $router = new Router();
    $router->run();

