<?php


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
   
   
        include ROOT.'/views/news/archive.php'; //include view
        return true;
        
    }
    
    
    /**
     *  Method which is called at the "/news/[0-9]+"  address
     * 
     * 
     * @param int $newsId
     * @return boolean
     */
    
    public function actionSingleNews($newsId) {
        
        $singleNews = News::getNewsById($newsId); // get needed news by id from darabase
        
         include_once ROOT.'/views/news/singleNews.php';     
        return true;
    }
}
