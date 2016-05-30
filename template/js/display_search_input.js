var displaySearch = function(url){
                $('.search-wrapper').hide();
               if( trim( url,'/' ) == 'search' ){
                            $('.search-wrapper').show();
           }
           };