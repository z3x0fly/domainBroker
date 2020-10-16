// Custom Scripts for Primal Template //

jQuery(function($) {
    "use strict";


/* --------- Wow Init ------ */

  new WOW().init();


  /* ------ Countdown ----- */

 

/*----- Preloader ----- */

    $(window).onload = function() {
  		setTimeout(function() {
        $('#loading').fadeOut('slow', function() {
        });
      }, 500);
    };


});
