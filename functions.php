<?php
/* Theme support function */
add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('post-formats', array('aside', 'image', 'video', 'quote', 'link', 'audio', 'gallery', 'status'));
add_theme_support('custom-background');
add_theme_support('custom-header');

function theme_scripts()
{
  wp_enqueue_script('jquery');
  wp_enqueue_script('theme_script_waypoints', 'https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js', array('jquery'));
  wp_enqueue_script('theme_script_isotope', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js', array('jquery'));
  wp_enqueue_script('theme_script_counter', get_stylesheet_directory_uri() . '/js/jquery.counterup.min.js', array('jquery'));
}
add_action('wp_enqueue_scripts', 'theme_scripts', 0);


/* Excerpt Limit */
function custom_excerpt_length($length)
{
  return 25;
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);

/* Excerpt Custom */
function wpdocs_excerpt_more($more)
{
  return '...';
}
add_filter('excerpt_more', 'wpdocs_excerpt_more');



/* Register Menus */
function register_my_menus()
{
  add_theme_support('menus');
  register_nav_menu('headermenu', 'Header Menu navigation');
  register_nav_menu('smallmenutop', 'Small Menu Top navigation');
  register_nav_menu('footerquicklins', 'footer quick links navigation');
  register_nav_menu('footerourplans', 'footer our plans navigation');
  register_nav_menu('footerservice', 'footer service Top navigation');
}
add_action('init', 'register_my_menus');
