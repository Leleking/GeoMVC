<?php
class Controller{
  protected $data;
  protected $model;
  protected $params;

  public function __get($property){
		return $this->$property;
}

public function __construct($data = array()){
  $this->data       =   $data;
  $this->params     =   App::getRouter()->params;
}
}
