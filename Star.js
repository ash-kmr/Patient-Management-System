function createStar(obj){

        $(document).ready(function(){

                //var onStar = parseInt($(this).data('value'), 10); // The star currently selected
                
                var onStar = $(obj).attr('class');
                var stars = $(obj).children('li.star');
                    
                    for (i = 0; i < stars.length; i++) {
                      $(stars[i]).removeClass('selected');
                    }
                    
                    for (i = 0; i < onStar; i++) {
                      $(stars[i]).addClass('selected');
                    }
                    
                    // JUST RESPONSE (Not needed)
                    var ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
                    //$("#Ratings").val(ratingValue);
                    
        });                    
}
