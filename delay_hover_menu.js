// Taken from Funds Library

// Delay on hover for the dropdown menu
$(document).ready( function () {
  var timer;

  $(".menu-item-has-children").on("mouseover", function() {
    clearTimeout(timer);
    openSubmenu();
  }).on("mouseleave", function() {
    timer = setTimeout(
      closeSubmenu
    , 500);
  });

  // function openSubmenu() {
  //   $(".sub-menu").addClass("js-open");
  // }
  // function closeSubmenu() {
  //   $(".sub-menu").removeClass("js-open");
  // }
});
