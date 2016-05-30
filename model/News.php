<?php




class News {
 
   const SHOW_NEWS_ON_PAGE = 3; // limit news on one page
    
   
   /**
    * get latest news
    * count of latest news is const
    * 
    * @return array array with recent news
    */
    public static function getRecentNews(){
        
        $count = self::SHOW_NEWS_ON_PAGE;
        $db=Db::getConnection();
        
        $sql = "SELECT id, title, short_content, image, date "
                . "FROM news "
                . "ORDER BY id "
                . "DESC LIMIT :count";
        
        $result = $db->prepare($sql);
        
        $result->bindParam(':count', $count, PDO::PARAM_INT);
        
        $result->execute();
        
        $recentNews = array();
        $i = 0;
        
        while ($row = $result->fetch(PDO::FETCH_ASSOC)){
            
            $recentNews[$i]['id'] = $row['id'];
            $recentNews[$i]['title'] = $row['title'];
            $recentNews[$i]['short_content'] = $row['short_content'];
            $recentNews[$i]['image'] = $row['image'];
            $recentNews[$i]['date'] = $row['date'];
            $i++;
            
        }
        
        return $recentNews;
    }
    
    
    /**
     * 
     * get news for current page
     * 
     * @param int $page current page number
     * @return array news array in current page
     */
    public static function getNews($page = 1) {
        $limit = self::SHOW_NEWS_ON_PAGE;
        
        $db = Db::getConnection();
         $offset=($page-1)*  $limit;
         
        $sql = "SELECT id, title, short_content, image, date "
                . "FROM news "
                . "ORDER BY id DESC "
                . "LIMIT :count "
                . "OFFSET :offset";
        
        $result = $db->prepare($sql);
        
        $result->bindParam(':count', $limit, PDO::PARAM_INT);
        $result->bindParam(':offset', $offset,  PDO::PARAM_INT);
        
        $result->execute();
        
        $news = array();
        $i = 0;
        
        while ($row = $result->fetch(PDO::FETCH_ASSOC)){
            
            $news[$i]['id'] = $row['id'];
            $news[$i]['title'] = $row['title'];
            $news[$i]['short_content'] = $row['short_content'];
            $news[$i]['image'] = $row['image'];
            $news[$i]['date'] = $row['date'];
            $i++;
            
        }
        
        
        return $news;
    }
    
    
    /**
     * get news count
     * @return int all news count
     */
    public static function countNews(){
        
        
        $db = Db::getConnection();
        
     $count =  $db->query("SELECT COUNT(id) as count from news");
        
        
     return $count->fetch()['count'];
    }
    
    
    /**
     * Get news that match for pattern
     * 
     * @param string $searchString
     * @return array news that match with pattern
     */
    public static function searchNews($searchString){
        
        $db = Db::getConnection();
        
       $result = $db->prepare("SELECT id, title, short_content, image, date "
               . "FROM news "
               . "WHERE title LIKE '%$searchString%' "
               . "OR "
               . " short_content LIKE  '%$searchString%' "
               . "OR "
               . "text LIKE '%$searchString%'");
        
       $result->execute();
       
       $searchNews = array();
       $i = 0;
       while ($row = $result->fetch(PDO::FETCH_ASSOC)){
           
            $searchNews[$i]['id'] = $row['id'];
            $searchNews[$i]['title'] = $row['title'];
            $searchNews[$i]['short_content'] = $row['short_content'];
            $searchNews[$i]['image'] = $row['image'];
            $searchNews[$i]['date'] = $row['date'];
            $i++;
           
       }
       return $searchNews;
    }

    
}
