<?php

function read_assets() {
  wp_enqueue_style(
    'reset-style',
    get_template_directory_uri().'/assets/css/reset.css',
  );

  wp_enqueue_style(
    'main-style',
    get_template_directory_uri().'/assets/css/style.css'
  );

  wp_deregister_script('jquery');

  wp_enqueue_script(
    'jquery',
    '//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js',
    array(),'3.6.0',true
  );

  wp_enqueue_script(
    'main-style',
    get_template_directory_uri().'/assets/js/index.js',
    array('jquery'),true
  );
}

function sub_loop($number) {
  $args = array (
    'posts_per_page' => $number,
    'post_type' => 'post',
    'paged' => get_query_var('paged')
  );
  $the_query = new WP_Query($args);
  return $the_query;
}

function replace_page_title($current_tag) {
  if (is_tag()) {
    $current_tag = single_tag_title();
  }
  return $current_tag;
}

function hooks() {
  add_action('wp_enqueue_scripts', 'read_assets');
  add_theme_support('post-thumbnails');
}

function init() {
  hooks();
}

init();
