<?php
//including the configuration file
require_once(ROOT.DS.'config'.DS.'config.php');

//the __autoload() enables you to call classes without having to use all the require_once statments
function __autoload($class_name){

	$lib_path 			= ROOT.DS.'lib'.DS.strtolower($class_name).'.class.php';
	$controllers_path 	= ROOT.DS.'controllers'.DS.str_replace('controller','',strtolower($class_name)).'.controller.php';
	$model_path			= ROOT.DS.'models'.DS.strtolower($class_name).'.php';


	if(file_exists($lib_path)){
		require_once($lib_path);
	}elseif(file_exists($controllers_path)){
		require_once($controllers_path);
	}elseif(file_exists($model_path)){
		require_once($model_path);
	}else
	{

		//handle exception for no class found
		 header('location:/pages/error');
		//throw new Exception ('Failed to inlcude class:  '.$class_name);
	}
}

function __($key,$default_value = ''){
	return Lang::get($key, $default_value);
}