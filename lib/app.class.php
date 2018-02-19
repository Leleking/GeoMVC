<?php
/*
Please note the use of magic methods __get() and __set() in the classes to access various properties.
see php manuel for better understanding.

*/
class App{
  protected static $router;

public static $db;
public static $functions;

  public static function getRouter(){
    return self::$router;
  }

  public static function run($uri){
    self::$router = new Router($uri);
    //initialize the dababase
    self::$db = new DB(Config::get('dbhost'),Config::get('dbuser'),Config::get('dbpassword'),Config::get('dbname'));

    self::$functions = new Functions();
    //get the controller
    $controller_class = ucfirst(self::$router->controller).'Controller';
    //get the method_prefix
    $controller_method = strtolower(self::$router->method_prefix.self::$router->action);

    $controller_object    =  new $controller_class();
    if(method_exists($controller_object,$controller_method)){
      $view_path          = $controller_object->$controller_method();
      $view_object        = new View($controller_object->data,$view_path);
      $content             = $view_object->render();
    }
    //if the class and method do not exist then
    else{
         header('location: /pages/error');
      //throw new Exception('Method: '.$controller_method. 'of class'.$controller_class.' was not found');
    }
    $layout = self::$router->route;
    $layout_path = VIEW_PATH.DS.$layout.'.php';
    $layout_view_object = new View(compact('content'), $layout_path);
    //this is for controllers that do not need to render views
    //all methods with the string function in them do not render the views
    if(strpos($controller_method, 'function') == false){
      echo $layout_view_object->render();
    }
    
  }
}
