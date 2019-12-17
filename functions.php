<?php

function add_favicon() { ?>
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri();?>/images/favicon.ico"/>
  <?php }
add_action('wp_head','add_favicon');

function load_fontawesome() {
    wp_enqueue_style( 'fontawesome_style', get_template_directory_uri() . '/node_modules/font-awesome/css/font-awesome.min.css', array(), '4.7.0', 'all');
}
add_action('wp_enqueue_scripts', 'load_fontawesome');

function load_stylesheets() {
  wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', '', 1, 'all');
  wp_enqueue_style('stylesheet');

  wp_register_style('custom', get_template_directory_uri() . '/app.css', '', 1, 'all');
  wp_enqueue_style('custom');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

function load_javascript(){
  wp_register_script('custom', get_template_directory_uri() . '/app.js', 'jquery', 1, true);
  wp_enqueue_script('custom');
}
add_action('wp_enqueue_scripts', 'load_javascript');

add_theme_support('menus');

register_nav_menus(
  array(
    'top-menu' => 'Top Menu',
  )
);