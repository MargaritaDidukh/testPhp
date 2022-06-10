<?php
namespace didukh\framework\views;

class View
{
    public array $route = [];
    public string $view;

    public function __construct(array $route, string $view = '')
    {
        $this->route = $route;
        $this->view = $view;
    }

    public function render($data)
    {

        if (is_array($data)){
            extract($data);
        }

        $fileView = SERVER . '/App/Views/' . $this->view . '.php';

        if (is_file($fileView)) {
            require $fileView;
        } else {
            echo '<h1> Файл представления не найден </h1>';
        }
    }
}

// class View
//{
//  public $route= [];
//  public $view;
//  public $layout;
//  public function __construct($route, $layout='', $view = '')
//  {
//      $this->route = $route;
//      if($layout === false){
//          $this->layout = null;
//      }else{
//          $this->layout = $layout;
//      }
//      $this->view = $view;
//  }
//
//    public function render($data)
//    {
//        $fileView = SERVER . '/App//Views/' . $this->layout . '/' . $this->view . '.php';
//
//        if(is_file($fileView)){
//            dump(11);
//            require $fileView;
//        }else{
//            dump(22);
//            echo 'View file undefound';
//        }
//
//  }
//}