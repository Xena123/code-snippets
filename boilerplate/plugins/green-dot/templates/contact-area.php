<!-- File: gd/templates/social_icon.php -->

<li class="li--inline li--custom li--img__before">
<?php gd_insertEdit(); ?>
  <div><?php the_content(); ?></div>
  <img class="li--custom__img li--align-top" src="<?php the_post_thumbnail_url(); ?>">
</li>
