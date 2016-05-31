      
   var searchKeyUpListener = function(){
          var timeout = null;
              $('body').on('keyup', '.search',function(){ //call every time when we press any key when search input on focus
            var searchString = $('input').val();
        if( !searchString.match(/^$|^\s+$/g) && searchString.length > 2){    //check if search string is not empty and without only white space
                  clearTimeout(timeout); // clear timeout if user still type text
    timeout = setTimeout(function() {
               $.ajax({   //ajax reques that return content according to search string
                    url:  'search/' ,
                    type: "POST",
                    data: {'ajax':1,'searchString':searchString},
                    success : function(content){
                       
                        $('#content').html(content);
                        
                    }
                });
            }, 500);
                 }else{
                     $('#content').html('<h4 class="text-center text-danger warning">Search string is too short or empty<h4>');
                 }
                   
                   return false;
                  
              });
          };
          
          $(document).ready(searchKeyUpListener);