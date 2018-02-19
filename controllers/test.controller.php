<?php 
class TestController extends Controller{

	
	 public function testfunction(){
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
 }
}