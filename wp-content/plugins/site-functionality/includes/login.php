<?
/*
  FL Login
**/


function fl_login() {
  /**
   * At this point, $_GET/$_POST variable are available
   *
   * We can do our normal processing here
   */

  // Sanitize the POST field
  // Generate email content
  // Send to appropriate email



}

add_action( 'admin_post_nopriv_login_form', 'fl_login' );
add_action( 'admin_post_login_form', 'fl_login' );
