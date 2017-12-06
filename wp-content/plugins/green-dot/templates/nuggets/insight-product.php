<?php

/*
$nuggetPost is an object that contains the following fields:
  WP_Post Object
  (
      [ID] =>
      [post_author] =>
      [post_date] =>
      [post_date_gmt] =>
      [post_content] =>
      [post_title] =>
      [post_excerpt] =>
      [post_status] =>
      [comment_status] =>
      [ping_status] =>
      [post_password] =>
      [post_name] =>
      [to_ping] =>
      [pinged] =>
      [post_modified] =>
      [post_modified_gmt] =>
      [post_content_filtered] =>
      [post_parent] =>
      [guid] =>
      [menu_order] =>
      [post_type] =>
      [post_mime_type] =>
      [comment_count] =>
      [filter] =>
  )

// To access post meta:
get_post_meta($nuggetPost->ID, 'meta_field');

*/
?>


<?php $permalink = get_the_permalink($nuggetPost->ID); ?>
<?php global $post; ?>
<?php $title = get_the_title($post->ID); ?>
<?php $excerpt = get_the_excerpt($post->ID); ?>


<div class="grid-split-t background--block-xb">
  <div class="grid-item__inner block block--insight-product">
    <div class="background--img" style="background-image: url('<?php echo the_post_thumbnail_url(); ?> ');"></div>
    <div class="block__content-overlay">
      <a class="btn--overlay" href="<?php echo $permalink; ?>"></a>
      <h3><?php echo(get_the_title($nuggetPost->ID)); ?></h3>
      <a class="btn btn--rnd btn--or-c btn--fact" href="<?php echo $permalink; ?>">Read More</a>
      <?php gd_insertEdit(); ?>
    </div>

  </div>
</div>
