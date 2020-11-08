<?php
add_action('wp_footer', 'scripts_theme');
add_action('wp_enqueue_scripts', 'style_theme');
add_action('after_setup_theme', 'theme_register_headerMenu');

function scripts_theme() {
  wp_enqueue_script('baseJS', get_template_directory_uri() . '/assets/js/header.js');
  wp_enqueue_script('bodyJS', get_template_directory_uri() . '/assets/js/body.js');
}

global $template;

function style_theme() {
  if (!is_page("121")){
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('baseStyles', get_template_directory_uri() . '/assets/styles/style.css');
  }
  else{
    wp_enqueue_style('clear', get_template_directory_uri() . '/assets/styles/reset.css');
  }
}

function theme_register_headerMenu()
{
  register_nav_menu('headerMenu', 'menu in header');
  register_nav_menu('loginSyncMenu', 'authorization');
}



// Categoty in pages
add_action( 'init', 'wpschool_register_taxonomy' );
function wpschool_register_taxonomy() {
    register_taxonomy_for_object_type( 'category', 'page' );
}

function WP_auto_formatting($content) {
  global $post;
  if(get_post_meta($post->ID, 'disable_auto_formatting', true) == 1) {
      remove_filter('the_content', 'wpautop');
  }
  return $content;   
}
add_filter( "the_content", "WP_auto_formatting", 1 );

// Remove p tags from category description
function bnd_fix_shortcodes_extra_line_break( $content ){
  $array = array (
    '<p>['    => '[',
    ']</p>'   => ']',
    ']<br />' => ']'
  );
  $content = strtr( $content, $array );
  return $content;
}
add_filter('the_content', 'bnd_fix_shortcodes_extra_line_break');

// disable admin tool bar
add_filter('show_admin_bar', '__return_false');