<?php 
/**
* 
*/
class add extends Model
{
	protected $mem_info;
	protected $name;
	

	function __construct()
	{
		$test = "model request";
		return $test;
	}
	public function getdata($lastname,$othername,$sex,$birthdate,$email,$residence,$room,$tel1,$tel2,$year,$course){

		$this->mem_info		= 	array(
			'lastname'          =>  $lastname,
			'othername'		=>  $othername,
			'sex'			=>  $sex,
			'birthdate'		=>  $birthdate,
			'email'			=>  $email,
			'residence'     =>  $residence,
			'room'			=>  $room,
			'tel1'			=>  $tel1,
			'tel2'			=>  $tel2,
			'year'			=>  $year,
			'course'		=>  $course
		);

		return $this->mem_info;

		
	}
	public function verify(){
		//verify the information
		//algorithm to check for the validation of the data
		$func   	=	App::$functions;
		
		$check = $func->empty_field($this->mem_info) ? true : false;
		 if ($check == true){
		 	$email = $func->email_validate($this->mem_info['email']) ? true : false;
		 	if ($email == true){
		 		$this->name = $this->mem_info['lastname']." ".$this->mem_info['othername'];
		 		$name = $func->name_validate($this->name);
		 		if($name == true){
		 			return true;
		 		}else return  false;
		 	}else{
		 		return false;
		 	}

		 }else {
		 	return false;
		 };
	}
	//sex,birthdate,email,residence,room,tel1,tel2,year,course

	//function to addmember into the database
	public function addmember(){
			$verified 		= 	$this->verify();
				if ($verified == true ){
				$sql = "INSERT INTO members(lastname,othername,sex,birthdate,email,residence,room,tel1,tel2,year,course) VALUES(" ;
				//this line of code takes all the data  in  your array and adds them to the sql statement 
				foreach ($this->mem_info as $info => $info_value) {
				$last_value = end(array_keys($this->mem_info));
					if (is_numeric( $info_value)){
						$sql .="$info_value,";
					}else if($info == $last_value){
						$sql .="'$info_value'";
					}else {
						$sql .="'$info_value',";
					}
					

				
				}
				$sql  .= ")";
				return App::$db->query($sql);
				}
				else
		return false;
		
		}
}


	
			
			
 				
				
					
				
				
