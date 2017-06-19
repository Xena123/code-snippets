<article>
  <!-- Blocks displaying categories with an image background and color overlay --> 
    <ul class="c-open-offer--category-blocks">
        <?php
          $terms = get_terms([
          'taxonomy' => 'category',
          'hide_empty' => false,
          'include' => array( 5248, 5247, 5252, 5251, 5250, 5249, 86, 85, 87, 88, 90, 89 )
          ]);
          foreach ( $terms as $term ) {
              $term_link = get_term_link( $term );
              $termid = 'category_' . $term->term_id;
              $ooImage = get_field('background_image', $termid );
              echo '<a href="' . esc_url( $term_link ) . '" style="background-image: url('. $ooImage.');"><li class="' . $term->slug . '" ><div class="' . $term->slug . ' o-background"</div>' . $term->name . '</li></a>';
          }

        ?>
    </ul>


</article>
