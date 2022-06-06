<?php
namespace didukh\framework\views;
 class View
{
  public $route= [];
  public $view;
  public $layout;
  public function __construct($route, $layout='', $view = '')
  {
      $this->route = $route;
      if($layout === false){
          $this->layout = null;
      }else{
          $this->layout = $layout;
      }
      $this->view = $view;
  }

    public function render($data)
    {
//        if($data){
//
//        }
        $fileView = SERVER . '/App//Views/' . $this->layout . '/' . $this->view . '.php';

        if(is_file($fileView)){
            dump(11);
            require $fileView;
        }else{
            dump(22);
            echo 'View file undefound';
        }

  }
}