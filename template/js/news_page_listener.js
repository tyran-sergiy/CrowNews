 var paginationListener = function(){
 
 $('#content').on('click','.page',function() {
                var url = $(this).attr('href');

             
              
                if( url !=  window.location.pathname ){
                    window.history.pushState(null, null, url);
                         $('#content').css({'opacity':'0.3'});

                    
                      $.ajax({
                    url:     url ,
                    type: "POST",
                    data: {'ajax':1},
                    success: function(data){
                         $('#content').css({'opacity':'1'});
                        $('#content').html(data);
                    }
                });
                    
                
         setCurrentNavtab();
                
                
                }
                

                return false;
            });
            
 }
 
 $(document).ready(paginationListener);