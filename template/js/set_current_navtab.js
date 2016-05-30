var setCurrentNavtab = function(){
    
    
        $('.nav-tabs>li').find('a').each(function(){
                $(this).parent('li').removeClass('active');
                
              if(
                      window.location.pathname.indexOf('/news/page') == 1 
                      ||
                  trim( window.location.pathname,'/' ) == trim($(this).attr('href'),'/') 
                      ||
                       ( window.location.pathname.indexOf('news/page/') == $(this).attr('href').indexOf('news/page') 
                      &&
                      window.location.pathname.indexOf('news/page/')!= -1 ) 
                ){  
                   $(this).parent('li').addClass('active');
               }
               
           });
           
    
}