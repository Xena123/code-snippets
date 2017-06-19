Excerpt from Ellani Cars - front-page_vehicles.php

<article class="o-content-block-wrap o-content-block-third-width--homepage">

  <div class="o-content-block u-relative u-box-height--260 u-text-center">
    <div class="o-background">
      <div class="c-front-page__slider-img" style="background-image: url('<?php the_post_thumbnail_url(); ?>');"></div>
    </div>
    <!-- overlay if item is sold -using acf tick box in the cms -->
    <?php echo get_field('sold') ? '<div class="o-background u-overlay--sold"></div>' : '' ?>
    <!-- overlay on hover showing car icon, post title and link -->
    <div class="o-background u-overlay--dark-on-hover"></div>
    <div class="u-relative u-text-white o-hover-text u-opacity-hover">
      <img src="<?php the_field('icon'); ?>" class="c-content-block__icon u-padding-bottom-15">
      <h3 class="u-padding-bottom-20 u-uppercase u-bold"><?php the_title(); ?></h3>
      <h5 class="u-uppercase u-padding-bottom-5 u-bold"><?php the_field('mileage'); ?> Miles</h5>
      <h5 class="u-padding-bottom-20">£<?php the_field('price'); ?></h5>
      <a href="<?php the_permalink(); ?>" class="u-border-button u-padding-button-15">
        <p class="u-inline-block u-uppercase"><?php the_field('link_label'); ?></p>
        <img src="<?php echo home_url(); ?>/wp-content/themes/ellani/img/icons/caret_right.png" class="u-inline-block u-padding-left-15">
      </a>
    </div>
  </div>

</article>


.o-background {
  height: 100%;
  width: 100%;
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
}

.o-hover-text {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
}

.o-content-block {
  font-size: medium;
  font-size: initial;
  display: block;
  vertical-align: top;
  text-align: left;
  overflow: hidden;
  padding: 22px 23px 25px 22px;
}

.o-content-block-wrap {
  width: 100%;
  margin: 0;
  font-size: 0;
}

.u-overlay--dark-on-hover {
  background-color: rgba(14, 22, 31, 0);
}
.o-content-block:hover .u-opacity-hover {
  opacity: 1;
}
.o-content-block:hover .u-overlay--dark-on-hover {
  background-color: rgba(14, 22, 31, 0.85);
}

.u-overlay--sold {
  background-color: rgba(17, 14, 26, 0.75);
  background-image: url(../img/icons/sold.png);
  background-repeat: no-repeat;
  background-position: center center;
  background-size: contain;
}