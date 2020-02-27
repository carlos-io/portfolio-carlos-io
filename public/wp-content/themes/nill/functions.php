<?php

function add_async_forscript($url)
{
    if ( strpos($url, '#async') === false )
        return $url;
    else if ( is_admin() )
        return str_replace('#async', '', $url);
    else
        return str_replace('#async', '', $url) . "' async='async";
}
add_filter('clean_url', 'add_async_forscript', 11, 1);

function cio_theme_post_thumbnails() {
  add_theme_support('post-thumbnails');
  add_image_size('portfolio-thumbnail', 600, 450, array('center', 'top'));
  add_image_size('portfolio-large', 1200, 600);
}
add_action('after_setup_theme', 'cio_theme_post_thumbnails');

function cio_theme_styles_scripts() {
  wp_enqueue_style('google-fonts-muli', '//fonts.googleapis.com/css?family=Muli:400,600,700');
  wp_enqueue_style('google-fonts-quicksand', '//fonts.googleapis.com/css?family=Quicksand:400,600&display=swap');
  wp_enqueue_style('bootstrap', get_theme_file_uri('/public/assets/css/bootstrap.css'));
  wp_enqueue_style('lineicons', get_theme_file_uri('/public/assets/css/LineIcons.css'));
  wp_enqueue_style('style', get_theme_file_uri('/public/assets/css/style.css'));
  wp_register_style('magnific', get_theme_file_uri('/public/assets/css/magnific-popup.css'));
  wp_register_style('owl-carousel', get_theme_file_uri('/public/assets/css/owl.carousel.min.css'));

  wp_enqueue_script('google-analytics', '//www.googletagmanager.com/gtag/js?id=UA-158618727-1#async');
  wp_add_inline_script('google-analytics', "window.dataLayer = window.dataLayer || [];" .
                                           "function gtag(){dataLayer.push(arguments);}" .
                                           "gtag('js', new Date());" .
                                           "gtag('config', 'UA-158618727-1');");
  wp_enqueue_script('jquery-min', get_theme_file_uri('/public/assets/js/jquery-3.4.1.min.js'), array(), '3.4.1', true);
  wp_enqueue_script('bootstrap', get_theme_file_uri('/public/assets/js/bootstrap.js'), array(), '4.3.1', true);
  wp_register_script('webgl-fluid-simulation', get_theme_file_uri('/public/assets/js/webgl-fluid-simulation.js'), array(), '1.0', true);
  wp_register_script('typedjs', get_theme_file_uri('/public/assets/js/typed.js'), array(), '2.0.9', true);
  wp_register_script('count-to', get_theme_file_uri('/public/assets/js/jquery.countTo.js'), array(), '1.0', true);
  wp_register_script('isotope', get_theme_file_uri('/public/assets/js/isotope.pkgd.min.js'), array(), '3.0.2', true);
  wp_register_script('magnific', get_theme_file_uri('/public/assets/js/jquery.magnific-popup.min.js'), array(), '1.1.0', true);
  wp_register_script('owl-carousel', get_theme_file_uri('/public/assets/js/owl.carousel.min.js'), array(), '2.3.4', true);
  // wp_register_script('google-maps', get_theme_file_uri('https://maps.googleapis.com/maps/api/js?key=AIzaSyBcmB207_E3E4SkA8jTA8FQjSWTop9YxZU'), array(), false, true);
  wp_register_script('nill', get_theme_file_uri('/public/assets/js/nill.js'), array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'cio_theme_styles_scripts');

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