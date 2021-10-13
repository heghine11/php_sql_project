<?php

    class HomeController {
        public function index($a='', $b='') {
            echo "hi";
            echo $a, ' ', $b;
        }
    }
//class HomeController extends Controller{
//    public function index(){
//        $items = $this->model('item')->get();
//        $this->view('home/itemList',['items'=>$items]);
//  }
//}
