<!DOCTYPE html>
<!-- +++header -->
<html lang="en">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>


    <header class="l-header">

      <?php get_template_part( 'partials/partial' ); ?>

      <div class="l-constrained l-constrained--nav l-header__wrap">
        <a href="<?php echo get_home_url(); ?>" class="l-header__logo btn">
        </a>
        <nav class="l-header__nav nav__container">
          <?php
            $args = array(
              'menu' => 'Primary Menu',
              'theme_location' => 'primary',
              'container' => false,
              'menu_class' => 'nav nav--header hvr--nav',
              'menu_id' => '',
              'depth' => 0
            );
            wp_nav_menu( $args );
          ?>
        </nav>
        <div id="js-brg" class="l-header__brg btn--brg" role="button">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </header>
