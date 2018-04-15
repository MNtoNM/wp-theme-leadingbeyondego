<?php

// ======================================
// Enqueue Stylesheets and Scripts
// ======================================

function lbe_files() {
  wp_enqueue_script('jquery');
  wp_enqueue_script( 'parallax', get_template_directory_uri() . '/js/parallax.js');
  wp_enqueue_style('lbe_main_styles', get_stylesheet_uri(), microtime());
  // wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
  // wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  // wp_localize_script('main-university-js', 'universityData', array(
    // 'root_url' => get_site_url(),
    // 'nonce' => wp_create_nonce('wp_rest')
  // ));
}

add_action('wp_enqueue_scripts', 'lbe_files');
