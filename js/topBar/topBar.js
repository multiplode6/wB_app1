(function($){
  $(function(){  
    var scroll = $(document).scrollTop();
    var headerHeight = $('.page-header').outerHeight();
    
    $(window).scroll(function() {
      var scrolled = $(document).scrollTop();
      if (scrolled > headerHeight){
        $('.page-header').addClass('off-canvas');
      } else {
        $('.page-header').removeClass('off-canvas');
      }

        if (scrolled > scroll){
         $('.page-header').removeClass('fixed');
        } else {
        $('.page-header').addClass('fixed');
        }             
      scroll = $(document).scrollTop();  
     });
       
   });
})(jQuery); 