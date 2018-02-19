<?php
DEFINE('DS', DIRECTORY_SEPARATOR);
DEFINE('ROOT',dirname(dirname(__FILE__)));
DEFINE('VIEW_PATH',ROOT.DS.'views');


require_once(ROOT.DS.'lib'.DS.'init.php');



App::run($_SERVER['REQUEST_URI']);


