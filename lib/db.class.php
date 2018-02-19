<?php

class DB{
//$conn is the variable holding the connection
	protected $conn;

	public  function __construct($dbhost,$dbuser,$dbpassword,$dbname){

		$this->conn = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
		if(mysqli_connect_error()){
			throw new exception("Database unavailable");
		}
	}
	//database function to query information
	
	//this is not yet complete due to  the fact of sql injection
	public  function query($sql){

		if( !$this->conn ){
			return false;
		} 
		$result = $this->conn->query($sql);

		if(is_bool($result)){
			return $result;
		} 
		
		$data = array();
		
		while($row = mysqli_fetch_assoc($result)){
			$data[] = $row;
		}

		return $data;



	}

}