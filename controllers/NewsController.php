<?php

include ROOT.'/components/Pagination.php';
include ROOT.'/model/News.php';

class NewsController {
   
    /**
     * Method which is called at the "/news/page/[0-9]+"  address
     * 
     * 
     * 
     * @param int $currentPage
     * @return boolean
     */
    public function actionArchive($currentPage){
        
        $limit = News::SHOW_NEWS_ON_PAGE; //get const limit news at one page
       
        $count = News::countNews();
        
        $pagination = new Pagination( $limit, $count, $currentPage, 'news/page/' ); 
     
        $paginationHTML = $pagination->getHTML(); //get pagination html for current page
    
       $news = News::getNews($currentPage); //get news from database
   
   
        include ROOT.'/views/news/news.php'; //include view
        return true;
        
    }
    
    
}
