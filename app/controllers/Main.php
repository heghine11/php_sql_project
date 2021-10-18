<?php

namespace app\controllers;

use app\core\Controller;

class Main extends Controller
{
    public function indexAction()
    {
        $this->view->render('main page');
    }
}
