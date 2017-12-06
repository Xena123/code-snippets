<?
/*
  Related
**/

/* Shortcode Template */

//[foobar]
/*
function foobar_func( $atts ){
	return "foo and bar";
}
add_shortcode( 'foobar', 'foobar_func' );
*/



function flPostRow() {
  global $post;
  $terms = get_the_terms($post->ID, 'post_tag');
  if ( $terms && !is_wp_error( $terms ) ) {
    $termArray = array();
    foreach ( $terms as $term ) {
      $termArray[] = $term->slug;
    }
    $args = array(
      'post_type' => 'post',
      'posts_per_page' => 3,
      'orderby' => 'date',
      'order' => 'DESC',
      'post__not_in' => array (get_the_ID()),
      'tax_query' => array(
        array(
          'taxonomy' => 'post_tag',
          'field'    => 'slug',
          'terms'    => $termArray
        ),
      ),
    );
  } else {
    $args = array(
      'post_type' => 'post',
      'posts_per_page' => 3,
      'orderby' => 'date',
      'order' => 'DESC',
      'post__not_in' => array (get_the_ID()),
    );
  }

  $postRowQuery = new WP_Query( $args );
  if ( $postRowQuery->have_posts() ) {
    $count = $postRowQuery->post_count;
    if ( $count == 1 ) {
      $gridSize = 'grid-full';
    } else if ( $count == 2 ) {
      $gridSize = 'grid-half';
    } else {
      $gridSize = 'grid-third';
    }

    $returnString = '<div class="grid-container featured featured--insert">';

    while ( $postRowQuery->have_posts() ) {
      $postRowQuery->the_post();

      $returnString .= '<div class="grid-item ' . $gridSize . ' [ block-theme-a ]">';
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

  return $returnString;
}
add_shortcode( 'add_featured_row', 'flFeaturedRow' );
add_shortcode( 'add_most_read_row', 'flMostReadRow' );
add_shortcode( 'add_post_row', 'flPostRow' );
