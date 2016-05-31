<?php include_once ROOT.'/views/layouts/header.php'; ?>



            <div class="container">
               <div class="col-sm-12 col-md-12 head-nav">
   <ul class="nav nav-tabs">
  <li role="presentation"><a href="/">Home</a></li>
  <li role="presentation"><a href="/search/">Search</a></li>
  <li role="presentation"><a href="/news/page/1">Archive   </a></li>
</ul>    
                    </div>
            </div>
        <div class="main">
            <div class="container">
                <div class="row hr-sides">

                  
                    <div class="col-sm-12 col-md-12" id="content">
                        
                       
                        <div class='row news'>
    <div class='col-xs-12 col-md-5 news-image'>
                         <img src='<?php echo $singleNews['image'] ?>' class='img-thumbnail img-responsive' alt='image'/>
                            </div>
                            <div class='col-xs-12 col-md-7'>
                                <h2><?php echo $singleNews['title'] ?></h2>
                                <br>
                                <h4 class='date'>Date : <?php echo  date( 'g:ia F/j/Y', $singleNews['date'] );?></h4>
                                <br>    
                            </div>
                            
                            <p class='news-page-text'><?php echo $singleNews['text'] ?></p>
                            </div>
                            
                            
                        

            
                    </div>
                    
                        <footer class="footer col-xs-12 col-md-12" style="border-top:1px solid grey; padding-top:20px;">
      <div class="container text-center">
          
          <p>Please contact <a href='mailto: Tyran.sr@outlook.com'>Tyran.sr@outlook.com</a>
with your questions, comments, and suggestions</p>
        <p>Copyright © Tyran Sergiy. All rights reserved.</p>
      </div>
    </footer>
                </div>
                
            
                
            </div>

                

            </div>
        

       
    </body>
</html>