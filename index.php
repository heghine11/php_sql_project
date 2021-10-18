<?php

    use app\core\Router;

    spl_autoload_register(function ($className) {
        $path = str_replace('\\', '/', $className . '.php');
        if (file_exists($path)) {
            require $path;
        }
    });

    $router = new Router();
    $router->run();

//function myAutoLoader($className) {
//    $path = "app/controllers/";
//    $extension = ".php";
//    $fullPath = $path . $className . $extension;
//
//    if (!file_exists($fullPath)) {
//        return false;
//    }
//
//    require_once $fullPath;
//}



// /etc/nginx/sites-available/sql_php.com file
//server {
//    set $fcgi_server unix:/run/php/php7.4-fpm.sock;
//
//	listen 80 default_server;
//	listen [::]:80 default_server;
//	root /var/www/sql_php.com/php_sql_project/;
//	index index.php;
//	server_name sql_php.loc;
//
//	location / {
//        try_files $uri $uri/ =404;
//		if (!-e $request_filename){
//            rewrite ^(.+)$ /index.php?url=$1 break;
//  		}
//	}
//	location ~ \.php$ {
//    include snippets/fastcgi-php.conf;
//		fastcgi_pass unix:/var/run/php/php7.4-fpm.sock;
//	}
//}





//$app->router->get('/', function() {
//   return 'hey';
//});
//
//$app->run();
//https://www.youtube.com/watch?v=GTESlsYTUns -last
//https://www.youtube.com/watch?v=gQLiFtjU1WQ&list=PLk4WFMCLz7Cy-deb3GefNca_SrDWXz7gj&index=2
//https://www.youtube.com/watch?v=Rkg731t47dc&list=PL0Zuz27SZ-6MeRUt-z60DRxNqcrFAUYIb&index=12
//require("php_classes/Db.php");
//$db = new Db();
//var_dump($_GET);
//$page = isset($_GET['page']) && file_exists($_GET['page'] . '.php') ? $_GET['page'] : 'home';
//include $page . '.php';
//spl_autoload_register(function ($class) {
//    $class = str_replace('\\', '/', $class);
//    require_once '../'.$class . '.php';
//});
//
//
//$action = isset($_GET['action']) ? $_GET['action'] : '';
//if(!$action && $_SERVER['REQUEST_URI'] == '/') {
//    $action = 'index';
//}
//
//header("HTTP/1.0 404 Not Found");
//exit;



