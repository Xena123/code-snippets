<?
/*
  CTA
**/

// Add full-width CTA
function flCTARow( ) {
  $gdArgs = array(
		'post_type'		=> 'gd_link',
		'posts_per_page'	=> 1,
		'meta_query' => array(
			array(
			  'key'  => '_gd_embed',
			  'value'   => 'single-cta-link',
			  'meta_compare'   => '='
			),
		),
	);

  $gdQuery = new WP_Query( $gdArgs );
  //print_r($gdQuery);
  $ctaPost = $gdQuery->posts[0];
  $ctaTitle = $ctaPost->post_title;
  $ctaLink = 'https:/www.fundslibrary.co.uk/Clients/AdviserSite/';
  // $ctaLink = get_field( 'gd_link_url' , $ctaPost->ID);

  $ctaLinkText = get_field( 'gd_link_text' , $ctaPost->ID);
  $returnString = '';
  $returnString .= '<div class="row cta--single cta--short cta--banner">';
  if (current_user_can('manage_options')) {
    $returnString .=  '<a class="post-edit-link" href="' . get_edit_post_link($ctaPost->ID) . '">Edit This</a>';
  }
  $returnString .= '  <div class="block__content-overlay">';
  $returnString .= '    <h3>' . $ctaTitle . '</h3>';
  $returnString .= '    <a class="btn btn--rnd btn--or-lim btn--tall modal-btn--login js-ga" data-redirect="/Clients/AdviserSite/" data-ga-cat="Library User Journey" data-ga-act="CTA" data-ga-lab="Insight Article" href="' . $ctaLink . '">';
  $returnString .=        $ctaLinkText;
  $returnString .= '    </a>';
  $returnString .= '  </div>';
  $returnString .= '</div>';

  wp_reset_postdata();
	return $returnString;
}
add_shortcode( 'add_cta_row', 'flCTARow' );
