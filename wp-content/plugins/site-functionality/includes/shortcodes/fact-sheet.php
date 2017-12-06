<?
/*
  Fact Sheet
**/

/* Shortcode Template */

//[foobar]
/*
function foobar_func( $atts ){
	return "foo and bar";
}
add_shortcode( 'foobar', 'foobar_func' );
*/

function flFundRow() {
  //global $post;
  //$post_ID = $post->ID;
  if ( have_rows('fact_sheet_list') ) {
    $rows = get_field('fact_sheet_list');
    $count = count($rows);
    if ( $count == 1 ) {
      $gridSize = 'grid-full';
    } else if ( $count == 2 ) {
      $gridSize = 'grid-half';
    } else {
      $gridSize = 'grid-third';
    }

    $returnString  = '<div class="insight-grid">';
    $returnString .= '  <h2 class="block--list__title insight-grid__title">Explore related Factsheets from THE Library</h2>';
    $returnString .= '  <div class="grid-container">';
    $n = 1;
    while ( have_rows('fact_sheet_list') ) {
      the_row();
      $sheet = get_sub_field('fact_sheet_select');
      $titleField = get_sub_field('fact_sheet_title');
      if ( $titleField == '' ) {
        $title = $sheet->post_title;
      } else {
        $title = $titleField;
      }
      $permalink = get_permalink($sheet->ID);
      $imgUrl = '/assets/img/content/fact' . $n . '.png';

      $returnString .= '    <div class="grid-item [ grid--fact grid-split-prod ' . $gridSize . ' background--block-xb ]">';
      $returnString .= '      <div class="grid-item__inner block block--fact-sheet">';
      $returnString .= '        <div class="block__content-overlay">';
      $returnString .= '          <h2>' . $title . '</h2>';
      //$returnString .= '          <p>' . mb_strimwidth($excerpt, 0, 48, '') . '</p>';
      $returnString .= '        </div>';
      $returnString .= '        <a class="btn--overlay js-ga" href="' . $permalink . '" data-ga-cat="Library User Journey" data-ga-act="Preview Factsheet" data-ga-lab="Insights Article"></a>';

      $returnString .= '        <div class="background--img" style="background-image: url(' . get_template_directory_uri() . $imgUrl . ');"></div>';
      $returnString .= '          <a href="' . $permalink . '" class="btn btn--rnd btn--or-c block__btn-alt">View Factsheet</a>';

      $returnString .= '      </div>';
      $returnString .= '    </div>';
      $n++;
    }
    $returnString .= '  </div>';
    $returnString .= '</div>';

    return $returnString;

  }
}

add_shortcode( 'add_fund_row', 'flFundRow' );
