<?php

include_once ROOT.'/model/News.php';
class SiteController {
   /**
    * Method which is called at the "/"  address
    *   
    */
    
    public function actionIndex() {
        
        $db= Db::getConnection();
        $recentNews = News::getRecentNews(); // get three last news from DB
       include_once 'views/site/home.php';
        
        return true;
        
    }
    
    /**
     * Method which is called at the "/search/"  address
     * 
     */
    public function actionSearch() {
        
        
        if(isset($_POST['searchString'])){
            $searchString = $_POST['searchString'];
            
            $searchNews = News::searchNews($searchString);
            
        }
        
    include_once 'views/site/search.php';


         return true;
    
    
}
}
