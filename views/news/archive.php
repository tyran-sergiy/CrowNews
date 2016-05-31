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

if (isset($_POST['ajax'])) {  // if we come to this page frow another page and main layout is alredy include, we just change our content
    
    echo $content;
} else { // if we come to our page witout any links or reload current page, we include our main layout and paste our content there
    
     include_once 'views/layouts/archiveLayout.php';
}