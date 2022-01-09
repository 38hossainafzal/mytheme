<?php
require_once('bs4navwalker.php');

function mytheme_enqueue_styles() {

    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'core', get_template_directory_uri() . '/style.css' );
  
  }
  add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_styles');
  
  function mytheme_enqueue_scripts() {
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js//bootstrap.min.js', '', '', false );
  }
  add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_scripts');