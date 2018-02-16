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
<div class="grid-item__inner block block--product">
  <div class="block__content-overlay">
    <h2><?php echo mb_strimwidth($title, 0, 24, ''); ?></h2>
    <p><?php echo mb_strimwidth($excerpt, 0, 120, ''); ?></p>
  </div>
  <a class="btn--overlay" href="<?php echo $permalink; ?>"></a>
  <?php if ( has_post_thumbnail() ) { ?>
    <div class="background--img" style="background-image: url('<?php the_post_thumbnail_url(); ?>">
      <a class="btn btn--rnd btn--or-c block__btn-alt" href="<?php echo $permalink; ?>">Read More</a>
    </div>
  <?php } else { ?>
    <?php $imgUrl = '/assets/img/content/product' . rand(1,3) . '.png'; ?>
    <div class="background--img" style="background-image: url('<?php echo get_template_directory_uri() . $imgUrl; ?>');">
      <a class="btn btn--rnd btn--or-c block__btn-alt" href="<?php echo $permalink; ?>">Read More</a>
    </div>
  <?php } ?>
  <?php gd_insertEdit(); ?>
</div>
