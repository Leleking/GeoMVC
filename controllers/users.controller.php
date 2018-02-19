<?php
class UsersController extends Controller{

	public function __construct($data = array()){
		parent::__construct($data);
			$this->model = new User();
		}

  public function index(){
  $this->data['test_content']  = $this->model;
 }
 public function view(){
   $params     = App::getRouter()->params;
   if(isset($params[0])){
     $alias = strtolower($params[0]);
     $this->data['content'] ='the view is'.$alias.' view';
   }
 }
 public function error(){
 	
 }
 
}
