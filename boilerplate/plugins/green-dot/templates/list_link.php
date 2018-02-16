<li class="li--inline li--custom li--img__before">
  <?php gd_insertEdit(); ?>
  <a class="" href="<?php the_field('gd_link_url'); ?>">
    <?php the_field('gd_link_text'); ?>
  </a>
  <img class="li--custom__img" src="<?php the_post_thumbnail_url(); ?>">
</li>

