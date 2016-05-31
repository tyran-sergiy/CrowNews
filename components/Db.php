<?php


class Db {
    
    /**
     * 
     * @return \PDO pdo object with connection to darabase
     */
    
     public static function  getConnection(){
        
        $params = include ROOT.'/config/db_params.php'; // include file that return params array
      
        $dsn="mysql:host={$params['host']};dbname={$params['dbName']}";
        $pdo=new PDO($dsn,$params['user'],$params['password']);
        
        return $pdo;
        
        
    }
    
}
