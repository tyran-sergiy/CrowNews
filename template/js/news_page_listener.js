 var paginationListener = function(){
 
 $('#content').on('click','.page',function() {    // call every time when we press pagination link
                var url = $(this).attr('href');

             
              
                if( url !=  window.location.pathname ){ // if link is different
                    window.history.pushState(null, null, url); //change url without page refresh
                         $('#content').css({'opacity':'0.3'}); // make visual loading effect 

                    
                      $.ajax({  //send to new url request that return new page content
                    url:     url ,
                    type: "POST",
                    data: {'ajax':1},
                    success: function(data){
                         $('#content').css({'opacity':'1'});
                        $('#content').html(data);
                    }
                });
                    
                
                
                
                }
                

                return false; // prevent default behavior
            });
            
 }
 
 $(document).ready(paginationListener);