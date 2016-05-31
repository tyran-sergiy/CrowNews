<?php





$contentMain = '';

$contentOpen = '
    
       <div class="row news">
<div class="col-sm-12 col-md-12 text-center">
<h3 class="content-title">News archive</h3>
</div>   
'.$paginationHTML;


foreach ($news as $newsItem){  // build html content
    
$date =  date( 'g:ia F/j/Y',$newsItem['date'] );

   $contentMain = $contentMain."<div class='newsItem hvr-glow col-sm-12 col-md-12'>
                                  <div class='row'>
                                  <div class='col-sm-4 col-md-4'>
                                 <img src='{$newsItem['image']}' class='img-thumbnail' alt='{$newsItem['title']}'>
                            </div>
                                    <div class='caption col-sm-8 col-md-8'>
        <h3>{$newsItem['title']}</h3>
         <h5 class='date'> $date </h5>
        <p>{$newsItem['short_content']} </p>
        <p><a href='/news/{$newsItem['id']}/'class='btn btn-primary single-news' role='button'>More...</a></p>
      </div>
                                      </div>
                                </div>";
}
    



$contentClose = $paginationHTML.'</div>' ;




$content = ($contentOpen.$contentMain.$contentClose);

if (isset($_POST['ajax']) ) {  /** if we send request from already loaded page, we only send response to js with page content variable.
                                  And js insert it into existing page**/
    echo "$content";
    
}else{  // else we load page first time and we include page layout, where variable with page content insert.

    include_once 'views/layouts/archiveLayout.php';
    
  
}