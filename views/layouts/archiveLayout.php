<!doctype html>
<html>
    <head>
        <link rel="shortcut icon" href="/template/favicon.png" type="image/x-icon">
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:400,700' />
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css' />
        <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
        <link rel='stylesheet' href='/template/css/style.css' />
        <title>CrowNews</title>
    </head>
    <body>
        <header class="header">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                      
                        
              <h1><span class="green">Crow</span>News</h1>
              
                </div>
                
            </div>
                
                <div class="col-sm-12 col-md-12 head-nav">
   <ul class="nav nav-tabs">
  <li role="presentation"><a href="/">Home</a></li>
  <li role="presentation"><a href="/search/">Search</a></li>
  <li role="presentation" class="active"><a href="/news/page/1">Archive   </a></li>
</ul>    
                    </div>
            </div>
        </header>
        <div class="main">
            <div class="container">
                <div class="row hr-sides">

                  
                    <div class="col-sm-12 col-md-12" id="content">
                        
                       
                   
         <?php echo "$content"; ?>
                           
                            
                            
                        

            
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
        <script src="/template/js/news_page_listener.js"></script>
      
        <script>
        $(document).ready(function() {


/**
 *  bind function that call when we use arrows "previous page" , "next page" on HTML history API
 */
            $(window).bind('popstate', function() {
          
                 $('#content').css({'opacity':'0.3'});

               $.ajax({
                    url:  location.pathname ,
                    type: "POST",
                    data: {'ajax':1},
                    success: function(data){
                        $('#content').css({'opacity':'1'});
                        $('#content').html(data);
                    }
                });
            });
            
           
           
         
           
              
               
        });
    </script>
    </body>
</html>