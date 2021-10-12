<?php

class try_smth{
    var $controller = "HomeController";
    var $method = "index";
    var $params = [];

    public function __construct()
    {
        $url = $this->parseURL();
        var_dump($url);
    }

    private function parseURL(){
        if(isset($_GET['url'])) {
            return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
    }
}

?>
