$(document).ready(function(){
   console.log('ML');

   // Offset = Anchors + Outside Main Page
   $(".menu-item a").click(function () {
      $('.main-navigation').removeClass('toggled');
      let target = $(this.hash);
      if (target.length) {
         $('html, body').animate({
            scrollTop: target.offset().top - 280
         }, 0);
         return false;
      }
   });

   $('a[href*="#"]:not([href="#"])').click(function() {
      const target = $(this.hash);
      if (target.length) {
         $('html, body').animate({ scrollTop: target.offset().top - 280 }, 0);
         return false;
      }
   });

   $(function($) {
      let hash = window.location.hash;
      if (hash && hash !== '#' && $(hash).length) {
         $('html, body').animate({
            scrollTop: $(hash).offset().top + 180
         }, 'linear');
      }
   });
});

// JS