//------------------------------------------------------------------|
// Site Setup. Call functions & initialize plugins                  |
// inside of window.onload function                                 |
//------------------------------------------------------------------|
window.onload = function() {

  // Strict Mode On
  "use strict";

  //------------------------------------------------------------------|
  // Cut the Mustard Check                                            |
  // Check if browser supports modern js. Don't load wrapped JS if    |
  // it doesn't pass this check.                                      |
  // Ensure base non-js functionality when JS doesn't load.           |
  //------------------------------------------------------------------|
  var supports = !!document.querySelector && !!window.addEventListener;
  if ( !supports ) {
    return;
  }
  // Add class to body if js supported. Use this for styling elements requiring JS
  document.body.className += ' has-modern-js';

    // });
  $(document).ready( function () {

  // Hamburger menu for mobile view
    $( '#js-brg' ).click(function(event){
      event.preventDefault();
      if ($('body').hasClass('is-menu-expanded')) {
        $('body').removeClass('is-menu-expanded');
      } else {
        $('body').addClass('is-menu-expanded');
        $('body').removeClass('is-login-expanded');
      }
    });
    
    // Scrolling classes for navigation
    var body = $("body");
    $(window).scroll(function() {
      var scroll = $(window).scrollTop();
      if (scroll >= 50) {
        body.addClass('is-scrolled');
      } else {
        body.removeClass('is-scrolled');
      }
    });
   
  });

  
};




