<?php

function autoload($className){
    
      $array_path=array(
    
'/model/',
    '/components/', 
);
foreach ($array_path as $path)
{
    
    $path= ROOT.$path.$className.'.php';
  if(  is_file($path)){
      
      include_once $path;
  }
    
    
}
    
    
}