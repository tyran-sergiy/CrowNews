<?php include_once ROOT.'/views/layouts/header.php'; ?>



            <div class="container">
               <div class="col-sm-12 col-md-12 head-nav">
   <ul class="nav nav-tabs">
       <li role="presentation" class="active"><a href="/">Home</a></li>
  <li role="presentation"><a href="/search/">Search</a></li>
  <li role="presentation"><a href="/news/page/1">Archive   </a></li>
</ul>    
                    </div>
            </div>
        <div class="main">
            <div class="container">
                <div class="row hr-sides">

                   
                    <div class="col-sm-12 col-md-12" id="content">
                        
                            
<div class="row news">
<div class="col-sm-12 col-md-12 text-center">
<h3 class="content-title">Recent news</h3>
</div>   
             <?php   foreach ($recentNews as $newsItem): ?>
                   <div class='newsItem col-sm-12 col-md-12'>
                                  <div class='row'>
                                  <div class='col-sm-4 col-md-4'>
                                 <img src=' <?php echo $newsItem['image'] ;?>' class='img-thumbnail' alt=' <?php $newsItem['title'] ?>'>
                            </div>
                                    <div class='caption col-sm-8 col-md-8'>
        <h3> <?php echo $newsItem['title'] ?></h3>
        <h5 class="date"> <?php  echo date( 'g:ia F/j/Y',$newsItem['date'] );?></h5>
        <p> <?php  echo $newsItem['short_content'] ?> </p>
        <p><a href='/news/<?php echo $newsItem['id'];?>/'class='btn btn-primary single-news' role='button'>More...</a></p>
      </div>
                                      </div>
                                </div>
    <?php endforeach; ?>
</div>
                            
                        

            
                    </div>
                    
                    
                         <footer class="footer col-xs-12 col-md-12">
      
          <div class="container text-center">
          <p>Please contact <a href='mailto: Tyran.sr@outlook.com'>Tyran.sr@outlook.com</a>
with your questions, comments, and suggestions</p>
         
            
          
        <p>Copyright © Tyran Sergiy. All rights reserved.</p>
          </div>
    
    </footer>
                    
            
                </div>
                
                       
            
                
            </div>

                

            </div>
        

        <script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
        <script src="/template/js/curl_hover.js"></script>
      
        <script>
        $(document).ready(function() {

        });
    </script>
    </body>
</html>

