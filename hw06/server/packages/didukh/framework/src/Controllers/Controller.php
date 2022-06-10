<?php

namespace didukh\framework\controllers;

use didukh\framework\views\View;

use didukh\framework\models\model;

class Controller
{
    public $route = [];
    public $view;
    public $layout;
    public $data = [];
    public function index()
    {
        $ob = new Model();
//        dd($ob->insertOne(['id'=>'9','title'=>'95title','description'=>'95desca']));
//        dd($ob->updateOne(['id'=>'43','title'=>'43title','description'=>'43desc'], ['description'=>'34desc']));
//        dd($ob->deleteOne(['id'=>'22']));
//        dump($ob->likeOne('description', '%a'));
//        dump($ob->whereIn('title', ['45title','testTitle']));
//        dump($ob->orderBy(['id', 'title'], 'DESC'));
          dump($ob->join('product', 'id', 'LEFT'));
    }
    public function __construct($route)
    {
        $this->route = $route;
        $this->view = $route[1];
    }
//    public function getView()
//    {
//        $viewObj = new View($this->route, 'Category', $this->view);
//        $viewObj->render($this->data);
//    }
    public function view(string $view, array $data = []): bool
    {
        $this->view = $view;

        $viewObj = new View($this->route, $this->view);
        $viewObj->render($data);
        return true;
    }

}
