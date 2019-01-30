<?php

function add_theme_scripts() {

    wp_enqueue_style( 'style', get_template_directory_uri().'/style.css',array(),'1.0','all'); 
    wp_enqueue_style( 'mystyle', get_template_directory_uri().'/css/css/style.css',false,'1.0','all');

     wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array ( 'jquery' ),'1.0', false);
 
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

function register_my_menu() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
  }
  add_action( 'init', 'register_my_menu' );

  add_theme_support( 'post-thumbnails' );
