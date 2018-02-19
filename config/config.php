<?php
//set the site name
Config::set('site_name','HCI - Knust ');
//Config::set('site_name','Geo_MVC');
Config::set('language',array('en','fr'));



//set route for admin or default
Config::set('routes',array(
  'default' => '',
  'admin'   => 'admin',
));

//set default routes
Config::set('default_route','default');
Config::set('default_language','en');
Config::set('default_controller','pages');
Config::set('default_action','index');

//set database
/*Please note that this is the localhost database*/
Config::set('dbhost','localhost');
Config::set('dbuser','harvest');
Config::set('dbpassword','harvest123');
Config::set('dbname','hci');