<?php 


ini_set('display_errors','On');
  
define('ROOT', dirname(__FILE__));


require_once(ROOT.'/components/Autoload.php');
spl_autoload_register('autoload');

$router=new Router();
$router->run();
