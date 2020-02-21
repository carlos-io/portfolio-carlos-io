<?php

function nilltheme_post_thumbnails() {
  add_theme_support('post-thumbnails');
  add_image_size('portfolio-thumbnail', 600, 450, array('center', 'top'));
  add_image_size('portfolio-large', 1200, 600);
}

add_action('after_setup_theme', 'nilltheme_post_thumbnails');

if ( ! function_exists('get_post_featured_image') ) {
  function get_post_featured_image($post_id, $size) {
      $image_properties = [];
      $image_id = get_post_thumbnail_id($post_id);
      $image = wp_get_attachment_image_src($image_id, $size);
      $image_url = $image[0];
      $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
      $image_post = get_post($image_id);
      $image_caption = $image_post->post_excerpt;
      $image_description = $image_post->post_content;
      $image_properties['id'] = $image_id;
      $image_properties['url'] = $image_url;
      $image_properties['alt'] = $image_alt;
      $image_properties['caption'] = $image_caption;
      $image_properties['description'] = $image_description;
      return $image_properties;
  }
}