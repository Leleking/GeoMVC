<?php
class PagesController extends Controller{

	public function __construct($data = array()){
		parent::__construct($data);
			$this->model = new Page();
		}

  public function index(){
  $this->data['test_content']  = 'this is the pages controller';
 }
 public function view(){
   $params     = App::getRouter()->params;
   if(isset($params[0])){
     $alias = strtolower($params[0]);
     $this->data['t'] = "dd";

   }
 }
 public function error(){
  
 	
 }
  public function testfunction(){
    
    /*
  if(isset($_POST['test'])){
    $show = $_POST['test2'];
    $functions = new Functions();
    $test = $functions->alertNull($show);
    echo $test;
    echo 'functions class is working';
  }else
  {

    return 'not working';
  }
  */
 }

 public function events(){
  
 }

}
