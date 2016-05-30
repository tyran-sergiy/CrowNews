<?php

$contentOpen = '
    
       <div class="row news">
<div class="col-sm-12 col-md-12 text-center">
<h3 class="content-title">Recent news</h3>
</div>   
';

$contentMain = '';
foreach ($recentNews as $newsItem){
    
$contentMain = $contentMain."
    <div class='newsItem col-sm-12 col-md-12'>
                                  <div class='row'>
                                  <div class='col-sm-4 col-md-4'>
                                 <img src='{$newsItem['image']}' class='img-thumbnail' alt='{$newsItem['title']}'>
                            </div>
                                    <div class='caption col-sm-8 col-md-8'>
        <h3>{$newsItem['title']}</h3>
        <p>{$newsItem['short_content']} </p>
        <p><a href='/news/{$newsItem['id']}/'class='btn btn-primary single-news' role='button'>More...</a></p>
      </div>
                                      </div>
                                </div>";
}

$contentClose = '
    
   </div>';

$content = ($contentOpen.$contentMain.$contentClose);
if (isset($_POST['ajax'])) {
    
    echo "$content ";
} else {
    
     include_once 'views/layouts/mainLayout.php';
}