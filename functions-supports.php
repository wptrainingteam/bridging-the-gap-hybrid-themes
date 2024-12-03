<?php
function hybrid_add_theme_supports() {
  add_theme_support( 'responsive-embeds' );
  add_theme_support( 'disable-custom-colors' );
  add_theme_support( 'disable-custom-gradients' );
  add_theme_support( 'disable-custom-font-sizes' );
 
  // Cannot use alongside a theme.json file
  add_theme_support( 'align-wide' );
  add_theme_support( 'custom-line-height' );
  add_theme_support( 'custom-spacing' );
  add_theme_support( 'custom-units', array( 'rem', 'em', 'px', 'vw', 'vh' ) );
 
  add_theme_support(
    'editor-color-palette',
    array(
      array(
        'name'  => __( 'Dusty Blue', 'hybrid-theme' ),
        'slug'  => 'dusty-blue',
        'color' => '#367cb3',
      ),
      array(
        'name'  => __( 'Faded Brown', 'hybrid-theme' ),
        'slug'  => 'faded-brown',
        'color' => '#7a6a53',
      ),
    )
  );
 
  add_theme_support(
    'editor-gradient-presets',
    array(
      array(
        'name'     => __( 'Dusty to Faded', 'hybrid-theme' ),
        'gradient' => 'linear-gradient(135deg, #367cb3 0%, #7a6a53 100%)',
        'slug'     => 'dusty-to-faded',
      ),
    )
  );
 
  add_theme_support(
    'editor-font-sizes',
    array(
      array(
        'name' => 'Small',
        'slug' => 'small',
        'size' => 12
      ),
      array(
        'name' => 'Medium',
        'slug' => 'medium',
        'size' => 18
      ),
    )
  );
 }
 add_action( 'after_setup_theme','hybrid_add_theme_supports' );