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
  var targetId = document.getElementById("targetId");

  //------------------------------------------------------------------|
  // Initialize Site: Call setup functions & code                     |
  //------------------------------------------------------------------|
  if ( document.getElementById( targetId ) ) {
    // Run code if ID exists on page
  }

  //------------------------------------------------------------------|
  // Initialize Site: Plugins                                         |
  //------------------------------------------------------------------|
  if ( document.getElementById( targetId ) ) {
    // Initialise Plugin if ID exists on page
  }

  //------------------------------------------------------------------|
  // Initialize Site: Event Listeners                                 |
  //------------------------------------------------------------------|
  document.getElementById( 'js-brg' ).addEventListener('click', toggleNav, false);

  targetId.addEventListener('click', callFunction, false);
  window.addEventListener('resize', callFunction, false);

  // Event Listener if ID exists
  if ( document.getElementById( targetId ) ) {
    targetId.addEventListener('click', callFunction, false);
  }

  // Optimized Window resize event listener
  window.addEventListener( "optimizedResize", callFunction, false);

};
