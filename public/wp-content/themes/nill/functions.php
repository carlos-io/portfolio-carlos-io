<?php

function nilltheme_post_thumbnails() {
  add_theme_support('post-thumbnails');
  add_image_size('portfolio-thumbnail', 600, 450, array('center', 'top'));
  add_image_size('portfolio-large', 1200, 600);
}

add_action('after_setup_theme', 'nilltheme_post_thumbnails');