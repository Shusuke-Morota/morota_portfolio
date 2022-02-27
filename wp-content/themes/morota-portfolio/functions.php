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

function upper_limit_output_tags() {
  $post_tags = get_the_tags();
  $tags_count = 0;
  if ($post_tags){
    foreach($post_tags as $tag){
      $tags_count++;
      if ($tags_count <= 3){
        echo '<li class="tag"><a href="' . get_tag_link($tag->term_id) . '" class="tagItem">' . $tag->name . '</a></li>';
      }
    }
  }
}

function no_upper_limit_output_tags() {
  $post_tags = get_the_tags();
  foreach($post_tags as $tag ) {
    echo '<li class="tag"><a href="' . get_tag_link($tag->term_id) . '" class="tagItem">' . $tag->name . '</a></li>';
  }
}

function hooks() {
  add_action('wp_enqueue_scripts', 'read_assets');
  add_theme_support('post-thumbnails');
}

function init() {
  hooks();
}

init();
