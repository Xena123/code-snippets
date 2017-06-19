Excerpt from GB Investments -- category.php
<!-- Filter by custom taxonomy and only show list of clients actually available on the page  -->
<!-- Update from filter_custom_taxonomy.php as that was showing all the clients whether there were posts available attached to that client or not -->

<header class="c-open_offer__header u-inline-block">
  <h2 class="o-article__title"><?php echo strtoupper($cat); ?> Open Offers</h2>
  <nav class="button-group filters-button-group dropdown">
    <button class="dropbtn">
      Filter by Client
      <img src="<?php echo home_url(); ?>/wp-content/themes/ifa_magazine/assets/img/caret_down.png">
    </button>
    <div class="dropdown-content">
      <!-- Loop through posts on the page and get all the categories and show them in this dropdown button as a list -->
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
        $term_list = wp_get_object_terms( $post->ID, 'openoffer_clients');
        foreach ( $term_list as $term ) {
            echo '<a href="?openoffer_clients=' . $term->slug . '">' . $term->name . '</a>';
        }
        endwhile; endif; wp_reset_postdata(); ?>
    </div>

  </nav>
</header>
