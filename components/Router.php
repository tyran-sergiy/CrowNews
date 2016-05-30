<?php

class Router {
    
    private $routes;
    
   /**
    * Method to init routes
    */
    public  function __construct() {
        $routesPath=ROOT.'/config/routes.php'; 
        $this->routes =  include $routesPath;  // file routes.php returns routes array       
    }
    
    
    
    /**
     * 
     * @return string uri without '/' on the beginning and end of string
     */
        private function  getUri(){
        
        
         if(!empty($_SERVER['REQUEST_URI']))
            return trim($_SERVER['REQUEST_URI'],'/'); // Strip '/' from the beginning and end 
        
    }

    
    
    /**
     * 
     * function that according to uri selects the desired controller and action
     * 
     */
    public function run(){
        
        
        $uri= $this->getUri(); //
        
    
        foreach($this->routes as $pattern => $path){ // each route has type "regular expression" => "controllerName/actionName"
            
            if(preg_match("~$pattern~", $uri)){ // compares the pattern with uri
              
                
                $fullRoute = preg_replace("~$pattern~", $path, $uri); /** if path looks like controller/actions/params 
                                                                we get full route with param
                                                                                                                             **/
                                                                                                                          
                $segments=  explode('/', $fullRoute); // split $path and now we have array [0]=>"controllerName", [1]=>"actionName"
                
                $controllerName= ucfirst(array_shift($segments)).'Controller'; //get and delete controller name from array
                $actionName= 'action'.ucfirst(array_shift($segments));//get and delete action name from array
                
                
                $params=$segments; //we already delete controller and action from array. Now array contains only params
                
                $controllerFile=ROOT.'/controllers/'.$controllerName.'.php';
                
                if(file_exists($controllerFile)){    //if controller exists we include it 
                    include_once $controllerFile;
                }else{
                    die($controllerName);
                }
            
            $controllerObject= new $controllerName; //create controller object
                 
         //   ini_set('display_errors','Off');// wrong uri cause error here and $result equals NULL. 
            $result=call_user_func_array(array($controllerObject ,$actionName),$params); // call the desire controller and action
            ini_set('display_errors','On');
         
               
            if($result==NULL){ // if $result equals NULL user type wrong uri and we have error in the code above
                
                echo 'ERROR 404';
                break;
            }  else {
                
                break;
            }
            
                        
                
            }
            
            
        }
        
        
        
        
    }
    
    
}
