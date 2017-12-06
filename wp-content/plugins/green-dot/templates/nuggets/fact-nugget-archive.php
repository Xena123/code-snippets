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

<li>

  <?php if ( $nuggetPost ) { ?>

    <?php $permalink = get_the_permalink($nuggetPost->ID); ?>
    <?php global $post; ?>
    <?php $title = get_the_title($post->ID); ?>
    <?php $excerpt = get_the_excerpt($post->ID); ?>

      <?php if ( has_post_thumbnail() ) {
        $imgUrl = get_the_post_thumbnail_url();
      } else {
        $imgUrl = get_template_directory_uri() . '/assets/img/icons/doc.png';
      } ?>
      <div class="block--facts__title" style="background-image: url('<?php echo $imgUrl; ?>')">
        <h4><?php echo get_the_title($post->ID); ?></h4>
      </div>

      <a class="btn--overlay js-ga" href="<?php echo $permalink; ?>" data-ga-cat="Library User Journey" data-ga-act="Preview Factsheet" data-ga-lab="Insights Archive"></a>

  <?php } ?>
  <?php gd_insertEdit(); ?>
</li>
