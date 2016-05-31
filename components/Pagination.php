<?php


class Pagination {
    
    private $limit;
    
    private $count;
    
    private $amountPages;
    
    private $url;
    
    private $currentPage;
    
    
    /** 
     * Init paginaton object
     * 
     * 
     * @param int $limit news at one page
     * @param int $count
     * @param int $currentPage
     * @param string $url like "/page/" or "/page-"
     * 
     */
    
    public function __construct( $limit, $count, $currentPage, $url ) {
        
        
        $this->limit= $limit;
        
        $this->url = $url;
        
        $this->count = $count;
        
        $this->amountPages = $this->amount();
        
        $this->currentPage = $currentPage;
       
        if( $currentPage > $this->amountPages ){
        $this->currentPage = $this->amountPages;
        }
        
        if( $currentPage < 1 ){
        $this->currentPage = 1;
        }
        
        
    }
    
    /**
     * 
     * @return int count of pages
     */
    private function amount(){
        return ceil( $this->count/$this->limit );
    }
    
    /**
     * constract html 
     * 
     * @return string HTML to web page
     */
    
    public function getHTML(){
        
        $html =  "<nav class='text-center'> 
  <ul class='pagination'>";                      // open tags
        
              if($this->currentPage == 1 ){      //in case when current page is 1
                  
                  $html = $html . "<li class='disabled'><a aria-label='Previous'><span aria-hidden='true'>&laquo;</span></a></li>";
              }else { // if current page not 1, "Previous" button will enabled
                  $page = $this->url.'1';
                  $html = $html . "<li><a class = 'page' href = '/$page' aria-label='Previous'><span aria-hidden='true'>&laquo;</span></a></li>";
              }
              
             
                                                   
              
              
              
        for( $i = 1; $i <= $this->amountPages; $i++){
            
            $pagePath = $this->url.$i;
             if($i == $this->currentPage){ //in case when it`s current page add class 'active' and make <a> without href
                 
                 $html = $html . "<li class='active'><a>$i<span class='sr-only'>(current)</span></a></li>";
   
              }  else {
                   $html = $html . " <li><a class = 'page' href='/$pagePath'>$i</a></li>";
              }
              
            
            
        }
        
        
         if($this->currentPage == $this->amountPages ){ //
                  $html = $html . "<li class='disabled'><a aria-label='Next'><span aria-hidden='true'>&raquo;</span></a></li>";
              }else {//if current page not last page, "Next" button will enabled
                  $page = $this->url.$this->amountPages;
                  $html = $html . "<li><a class = 'page'  href = '/$page' aria-label='Next'><span aria-hidden='true'>&raquo;</span></a></li>";
              }
              
              $html = $html.'</ul></nav>'; // html close tags
             
        
        return $html;
    }
    
}
