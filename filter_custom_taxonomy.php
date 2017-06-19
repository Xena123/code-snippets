Excerpt from GB Investments -- category.php

<header class="c-open_offer__header u-inline-block">
  <!-- Output category name before the title -->
  <h2 class="o-article__title"><?php echo strtoupper($cat); ?> Open Offers</h2>
  <nav class="button-group filters-button-group dropdown">
    <button class="dropbtn">Filter by Client</button>
    <div class="dropdown-content">
    <!-- Dropdown menu with list of clients to filter by -->
    <?php
      $terms = get_terms([
        // Name of the custom taxonomy
      'taxonomy' => 'openoffer_clients',
      'hide_empty' => false,
      ]);
      foreach ( $terms as $term ) {
          $term_link = get_term_link( $term );
          // Output ?openoffer_clients= with the category slug into the URL
          echo '<a href="?openoffer_clients=' . $term->slug . '">' . $term->name . '</a>';
      }
    ?>

    </div>
  </nav>
</header>
