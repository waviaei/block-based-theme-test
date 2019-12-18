<?php

add_action( 'after_setup_theme', function() {
  load_theme_textdomain( 'block-based-theme-test' );
  add_theme_support( 'automatic-feed-links' );
  add_theme_support( 'title-tag' );
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'html5', [
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ] );
  add_theme_support( 'align-wide' );
  add_theme_support( 'customize-selective-refresh-widgets' );
} );


add_action( 'wp_enqueue_scripts', function() {
  wp_enqueue_style( 'block-based-theme-style', get_stylesheet_uri() );
} );
