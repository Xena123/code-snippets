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
<?php $thumbnail = get_the_post_thumbnail_url($nuggetPost->ID); ?>
<?php global $post; ?>
<?php $title = get_the_title($post->ID); ?>
<?php $excerpt = get_the_excerpt($post->ID); ?>

<div class="grid-item__inner block block--product">
  <div class="block__content-overlay">
    <h2><?php echo mb_strimwidth($title, 0, 80, ''); ?></h2>
    <a class="btn btn--rnd btn--drk block__btn" href="<?php echo $permalink; ?>">Read More</a>
  </div>
  <a class="btn--overlay" href="<?php echo $permalink; ?>"></a>
  <?php if ( isset($thumbnail) ) { ?>
    <div class="background--img" style="background-image: url('<?php echo $thumbnail; ?>');"></div>
  <?php } ?>
  <?php gd_insertEdit(); ?>
</div>
