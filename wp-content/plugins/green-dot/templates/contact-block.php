  <?php 
  $postThumbnail = get_the_post_thumbnail_url();
  $postTitle = get_the_title();
  ?>
  <?php if (!empty($postTitle)) { ?>
  <li class="li--inline">
    <?php if (!empty($postThumbnail)) { ?>
    <div class="icon--45 icon--inline"><img src="<?php echo $postThumbnail; ?>" /></div>
    <?php } ?>
    <h3 class="li--title"><?php echo $postTitle; ?></h3>
  </li>
  <?php } ?>
  <div>
  <?php gd_insertEdit(); ?>
    <?php the_content(); ?>
  </div>

