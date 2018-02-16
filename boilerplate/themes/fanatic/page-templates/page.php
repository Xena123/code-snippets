<?php
/*
* Template Name: Page
*/
?>
<?php if ( have_posts() ) { ?>
  <?php while ( have_posts() ) { ?>
    <?php the_post(); ?>
    <main>

      <div class="banner">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/content/fallback.png" sizes="" srcset="">
      </div>

      <?php get_template_part( 'partials/partial' ); ?>
      <?php // Use include if variables need to be passed on to partial ?>
      <?php include(locate_template('partials/partial')); ?>

    </main>
    <aside>

    </aside>
  <?php }  ?>
<?php } ?>
<?php get_footer(); ?>
