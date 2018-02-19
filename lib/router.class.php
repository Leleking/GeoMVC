<?php
class Router{
	protected $uri;
	protected $controller;
	protected $action;
	protected $params;
	protected $language;
	protected $route;
	protected $method_prefix;

//using magic methods makes your code simple and easy
	public function __get($property){
		return $this->$property;
}

	public function __construct($uri){
		//assign uri to $this->uri
		//get default controller/action/method
		$this->uri 						= urldecode(trim($uri,'/'));

		/*please note that if using localhost in a say
			http:localhost:8000/websites/smvc/controller/action/param1/param2
			the name website and smve would move into path_parts[0],path_parts[1]

			you can use the array_shit to remove the them from the array

		*/
		$routes 							= Config::get('routes');
		$this->route					= Config::get('default_route');
		$this->method_prefix	= isset($route[$this->route]) ? $routes[$this->route] :'';
		$this->language     	= Config::get('default_language');
		$this->controller			= Config::get('default_controller');
		$this->action   			= Config::get('default_action');
		;
		$uri_parts 						= explode('?',$this->uri);
		$path 								= $uri_parts[0];
		$path_parts					= explode('/',$path);
		//please remove this code before you upload
		

		//echo '<pre> ';print_r($path_parts);

		if (count($path_parts)){

			//get language or route
		if(in_array(strtolower(current($path_parts)), array_keys($routes))){
			//if the route exists allocate to $this->route
				$this->route 		= strtolower(current($path_parts));
				$this->method_prefix = isset($routes[$this->route]) ? $routes[$this->route]:'';
				array_shift($path_parts);
			}elseif (in_array(strtolower(current($path_parts)),Config::get('language'))) {
				# code...
				$this->language = strtolower(current($path_parts));
				array_shift($path_parts);
			}
			//get controller
			if(current($path_parts)){
				$this->controller = strtolower(current($path_parts));
				array_shift($path_parts);
			}

			//get action
			if(current($path_parts)){
				$this->action = strtolower(current($path_parts));
				array_shift($path_parts);
			}
			$this->params   = $path_parts;

		}

	}




}
