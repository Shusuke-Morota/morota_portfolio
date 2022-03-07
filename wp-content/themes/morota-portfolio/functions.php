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

function active_header_navigation() {
  register_nav_menus(
    array (
      'global' => 'Global Menu'
    )
  );
}

function output_header_links() {
  $args = array (
    'menu' => 'global',
    'menu_class' => 'list',
    'container' => 'item',
    'depth' => 1
  );
  wp_nav_menu($args);
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

function tag_cloud() {
  $all_tags = array(
    'orderby' => 'count',
    'order' => 'desc',
    'number' => 0
  );
  $tags = get_terms('post_tag', $all_tags);
  foreach($tags as $tag) {
    echo '<li class="tag"><a href="'. get_tag_link($tag->term_id) .'" class="tagItem">'. $tag->name .'</a></li>';
  }
}

function output_pagination($the_query) {
  $big = 9999999999;
  $args = array(
    'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
    'current' => max(1, get_query_var('paged')),
    'total' => $the_query->max_num_pages,
    'prev_text' => '<i class="fas fa-chevron-left"></i>',
    'next_text' => '<i class="fas fa-chevron-right"></i>',
    'type' => 'array'
  );
  $article_paginate_links = paginate_links($args);

  $current = $args['current'];
  $allowed = [
    '/ current/u',
    '/prev /u',
    '/next /u',
    sprintf( '/\/page\/%d(\/|")/u', $current-2 ),
    sprintf( '/\/page\/%d(\/|")/u', $current-1 ),
    sprintf( '/\/page\/%d(\/|")/u', $current+1 ),
    sprintf( '/\/page\/%d(\/|")/u', $current+2 ),
  ];

  if(!empty($article_paginate_links)) {
    $article_paginate_links = array_filter(
        $article_paginate_links,
        function($value) use ($allowed) {
            foreach((array)$allowed as $tag) {
                if(preg_match($tag, $value))
                    return true;
            }
            return false;
        }
    );
  }

  if(!empty($article_paginate_links)) {
    foreach($article_paginate_links as $paginate_link) {
      echo $paginate_link;
    }
  }
}

if ( !is_home()){
  if(strpos($item -> url,"#")===0){
    $item -> url="/".$item -> url;
  }
}

function hooks() {
  add_action('wp_enqueue_scripts', 'read_assets');
  add_theme_support('post-thumbnails');
  remove_filter('the_content', 'wpautop');
  remove_filter('the_excerpt', 'wpautop');
}

function init() {
  hooks();
  active_header_navigation();
}

init();
