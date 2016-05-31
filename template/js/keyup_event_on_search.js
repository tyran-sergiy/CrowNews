      
   var searchKeyUpListener = function(){
          var timeout = null;
              $('body').on('keyup', '.search',function(){
            var searchString = $('input').val();
        if( !searchString.match(/^$|^\s+$/g) && searchString.length > 2){    //check if search string is not empty and without only white space
                  clearTimeout(timeout); // clear timeout if user still type text
    timeout = setTimeout(function() {
               $.ajax({
                    url:  'search/' ,
                    type: "POST",
                    data: {'ajax':1,'searchString':searchString},
                    success : function(content){
                       
                        $('#content').html(content);
                        
                    }
                });
            }, 500);
                 }else{
                     $('#content').html('Search string is too short or empty');
                 }
                   
                   return false;
                  
              });
          };
          
          $(document).ready(searchKeyUpListener);