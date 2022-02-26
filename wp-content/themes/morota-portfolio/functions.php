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

function hooks() {
  add_action('wp_enqueue_scripts', 'read_assets');
  add_theme_support('post-thumbnails');
}

function init() {
  hooks();
}

init();
