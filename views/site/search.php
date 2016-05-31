<?php

$contentOpen = '<div class="row news">';


$contentMain = '';
if(isset($_POST['searchString'])){
foreach ($searchNews as $newsItem){
    
    $date =  date( 'g:ia F/j/Y',$newsItem['date'] );
$contentMain = $contentMain." <div class='newsItem col-sm-12 col-md-12'>
                                  <div class='row'>
                                  <div class='col-sm-4 col-md-4'>
                                 <img src='{$newsItem['image']}' class='img-thumbnail' alt='{$newsItem['title']}'>
                            </div>
                                    <div class='caption col-sm-6 col-md-6'>
        <h3>{$newsItem['title']}</h3>
            <h5 class = 'date'>$date</h5>
        <p>{$newsItem['short_content']} </p>
        <p><a href='/news/{$newsItem['id']}/'class='btn btn-primary' role='button'>More...</a></p>
      </div>
                                      </div>
                                </div>";
}
}
$contentClose = '</div>';




    $content = ($contentOpen.$contentMain.$contentClose);
if (isset($_POST['ajax']) ) {
    echo "$content";
    
}else{

    include_once 'views/layouts/searchLayout.php';
    
  
}

?>