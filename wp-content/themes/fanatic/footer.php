<!-- +++footer -->
    <footer class="l-footer">
      <div class="l-footer--top">
        <div class="l-constrained">

          <?php get_template_part( 'partials/partial' ); ?>

          <div class="l-footer__wrap hvr--footer">
            <img class="l-footer__logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/logo.png /">
            <ul class="social l-footer__social">
              <li>
                <a href="#"><i class="fa fa-twitter"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-linkedin"></i></a>
              </li>
            </ul>
            <?php
              $args = array(
                'menu' => 'Footer Menu',
                'theme_location' => 'footer',
                'container' => false,
                'menu_class' => 'l-footer__nav nav nav--footer',
                'menu_id' => '',
                'depth' => 0
              );
              wp_nav_menu( $args );
            ?>
          </div>
        </div>
      </div>
      <div class="l-footer--bottom">
        <div class="l-constrained">
          © Company
        </div>
      </div>
    </footer>
  </body>
</html>
