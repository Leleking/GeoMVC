<?php

class View{
  protected $data;
  protected $path;

  protected static function getDefaultViewPath(){
    $router = App::getRouter();
    if (!$router){
      return false;
    }
    $controller_dir = $router->controller;
    $template_name  = $router->method_prefix.$router->action.'.php';
    return VIEW_PATH.DS.$controller_dir.DS.$template_name;
  }
  public function __construct($data = array(),$path = null){
    if (!$path){
      //DEFAULT path
      $path  = self::getDefaultViewPath();
    }
    if (!file_exists($path)){
      //throw new Exception('Template file is not found in path: '.$path);
       //header('location:/pages/error');
    }
    $this->path = $path;
    $this->data = $data;
  }


  public function render(){
    $data = $this->data;
    ob_start();
    include($this->path);
    $content = ob_get_clean();
    return $content;

  }
}
