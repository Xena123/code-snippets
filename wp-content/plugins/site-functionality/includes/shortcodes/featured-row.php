<?
/*
  Featured Row
**/

/* Shortcode Template */

//[foobar]
/*
function foobar_func( $atts ){
	return "foo and bar";
}
add_shortcode( 'foobar', 'foobar_func' );
*/


// Add row of three posts
  // Featured
  function flFeaturedRow( ) {
    global $post;

    $args = array(
      'post_type' => 'post',
      'posts_per_page' => 3,
      'orderby' => 'date',
      'order' => 'DESC',
      'post__not_in' => array (get_the_ID()),
      'tax_query' => array(
        array(
          'taxonomy' => 'category',
          'field'    => 'name',
          'terms'    => 'Featured',
        ),
      ),
    );
    $postRowQuery = new WP_Query( $args );
    if ( $postRowQuery->have_posts() ) {
      $returnString = '<div class="grid-container featured featured--insert">';

      while ( $postRowQuery->have_posts() ) {
        $postRowQuery->the_post();

        $returnString .= '<div class="grid-item grid-third [ block-theme-a ]">';
        $returnString .= '  <div class="grid-item__inner block">';
        $returnString .= '    <div class="block__content-overlay">';
        $returnString .= '      <h1>' . get_the_title() . '</h1>';
        $returnString .= '    </div>';
        $returnString .= '  </div>';
        $returnString .= '</div>';

      }
      wp_reset_postdata();
      $returnString .= '</div>';
    }
  }
