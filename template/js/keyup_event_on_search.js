      
   var searchKeyUpListener = function(){
          var timeout = null;
              $('body').on('keyup', '.search',function(){
            var searchString = $('input').val();
        if( !searchString.match(/^$|^\s+$/g) && searchString.length > 1){    
                  clearTimeout(timeout);
    timeout = setTimeout(function() {
               $.ajax({
                    url:  'search/' ,
                    type: "POST",
                    data: {'ajax':1,'searchString':searchString},
                    success : function(data){
                        
                        
                        $('#content').html(data);
                        
                    }
                });
            }, 500);
                 }else
                   
                   return false;
                  
              });
          };
          
          $(document).ready(searchKeyUpListener);