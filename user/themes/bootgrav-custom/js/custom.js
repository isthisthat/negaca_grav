$(document).ready(function() {

// SCROLLSPY

  $("#navbar-collapse-main a[href^='#']").on('click', function(e) {

     // prevent default anchor click behavior
     e.preventDefault();

     // store hash
     var hash = this.hash;

     // animate
     $('html, body').animate({
         scrollTop: $(hash).offset().top
       }, 300, function(){

         // when done, add hash to url
         // (default click behaviour)
         window.location.hash = hash;
       });
  });

// GALLERY

    $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });

// POPOVER

    $('#popover-help').popover();

});
