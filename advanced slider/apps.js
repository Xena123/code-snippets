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

  //------------------------------------------------------------------|
  // Define variables                                                 |
  //------------------------------------------------------------------|

  //------------------------------------------------------------------|
  // Initialize Site: Call setup functions & code                     |
  //------------------------------------------------------------------|

  //------------------------------------------------------------------|
  // Initialize Site: Plugins                                         |
  //------------------------------------------------------------------|
/*
  if ( document.getElementById( 'map' ) ) {
    startGoogleMap();
  }

  startIsotope();
  */

  //------------------------------------------------------------------|
  // Initialize Site: Event Listeners                                 |
  //------------------------------------------------------------------|
  /*
  document.getElementById( 'js-brg' ).addEventListener('click', toggleNav, false);

  document.getElementById( 'find-btn' ).addEventListener('click', toggleFind, false);

  if ( document.getElementById( 'banner-vid' ) ) {
    document.getElementById( 'banner-vid' ).addEventListener('ended', vidPlayedTag, false);
    document.getElementById( 'banner-vid' ).addEventListener('click', replayVid, false);
  }

  if ( document.getElementById( 'newsSearchIcon' ) ) {
    document.getElementById( 'newsSearchIcon' ).addEventListener('click', searchFocus, false);
    document.getElementById( 'news-search' ).addEventListener('input', filterNews, false);
  }

  if ( document.getElementById( 'homeVideo' ) ) {
    lazyLoadVideo('homeVideo');
    document.getElementById( 'homeVideo' ).addEventListener('click', playVideo, false);
  }

  */
  // $(document).ready(function(){
  //   if $('.slideInit') {
  //   $('.slideInit').slick({
  //     dots: true,
  //     appendDots: '.slider--product__dots',
  //     arrows: true,
  //     vertical: true,
  //     verticalSwiping: true
  //   });
  //   }
  //   if $('.innerSlideInit') {
  //   $('.innerSlideInit').slick({
  //     dots: true,
  //     arrows: true
  //   });
  //   }
  // });
  
    $(document).ready(function(){
      
      $('.carousel-outer').advancedCarousel({

        waitTime: 2000,
        carouselInner: ".carousel-inner",
        wrapper: ".wrapper",
        leftTransparentElement: ".left-transparent",
        rightTransparentElement: ".right-transparent",
        carouselItem: ".carousel-item",
        customHeight: 400,
        leftLink: ".leftLink",
        rightLink: ".rightLink",
        scrollButtonsContainer: ".scroll-buttons",
        scrollButtonClass: ".scroll-button",
        autoSlide: true

      });


    });
 
    

};


