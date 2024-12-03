<?php
// Enqueue script into block editor
function hybrid_theme_enqueue_scripts() {
  wp_enqueue_script(
    'hybrid-theme-scripts',
    get_template_directory_uri() . '/assets/js/hybrid-theme.js',
    array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
    null,
    true
  );
}
add_action( 'enqueue_block_editor_assets', 'hybrid_theme_enqueue_scripts' );
 
// Enqueue styles in block editor and front end
function hybrid_theme_enqueue_styles() {
  wp_enqueue_style(
    'hybrid-theme-styles',
    get_template_directory_uri() . '/assets/css/hybrid-theme.css',
    array(),
    filemtime( get_template_directory() . '/assets/css/hybrid-theme.css' )
  );
  add_editor_style( 'assets/css/hybrid-theme.css' );
}
add_action( 'enqueue_block_assets', 'hybrid_theme_enqueue_styles' );

// Add support for block template parts
function hybrid_add_template_parts_support() {
  add_theme_support( 'block-template-parts' );
}
add_action( 'after_setup_theme', 'hybrid_add_template_parts_support' );