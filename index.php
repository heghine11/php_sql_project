<?php
require("php_classes/Db.php");
//$db = new Db();

//$page = isset($_GET['page']) && file_exists($_GET['page'] . '.php') ? $_GET['page'] : 'home';
//include $page . '.php';
spl_autoload_register(function ($class) {
    $class = str_replace('\\', '/', $class);
    require_once '../'.$class . '.php';
});


$action = isset($_GET['action']) ? $_GET['action'] : '';
if(!$action && $_SERVER['REQUEST_URI'] == '/') {
    $action = 'index';
}

header("HTTP/1.0 404 Not Found");
exit;


