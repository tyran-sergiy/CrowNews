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
    
    

}
