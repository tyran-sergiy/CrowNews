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
  
}
