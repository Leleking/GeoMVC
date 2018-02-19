<?php 
class AddnewController extends Controller{

	public function __construct($data = array()){
		parent::__construct($data);
			$this->model = new add();
		}

  public function index(){
  $this->data['test_content']  = 'this is the pages controller';
 }
 public function member(){
 //$this->data['test2'] = "l";
 }
 
 public function memberfunction(){
 	$lastname 	= $_POST['lastname'];
 	$othername 	= $_POST['othername'];
 	$sex	    = $_POST['sex'];
 	$birthdate  = $_POST['birthdate'];
 	$email		= $_POST['email'];
 	$residence	= $_POST['residence'];
 	$room		= $_POST['room'];
 	$tel1 		= $_POST['tel1'];
 	$tel2 		= $_POST['tel2'];
 	$year		= $_POST['year'];
 	$course		= $_POST['course'];
 	$test =$this->model->getdata($lastname,$othername,$sex,$birthdate,$email,$residence,$room,$tel1,$tel2,$year,$course);
 	$this->data['info'] =$this->model->addmember();
 	if($this->data['info'] == true){

 		//send email
 		echo "success";
 	}else echo "access denied";
 	
 	

 }
 public function event(){
 	//loads the events php
 }
 
}
