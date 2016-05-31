var hover = function(){
    
             
             /**
              * Hover when mouse enter on "more" button
              */
             
            $('body').on('mouseenter','.btn-primary',function(){

        $(this).parents('.newsItem').first().addClass('hvr-curl-top-right');
            
        });
        
          $('body').on('mouseleave','.btn-primary',function(){

        $(this).parents('.newsItem').first().removeClass('hvr-curl-top-right');
            
        });
    
}

$(document).ready(hover);