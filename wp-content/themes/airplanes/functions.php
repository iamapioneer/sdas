<?php 

function stylesheets() {
    wp_enqueue_style('ionicons', get_template_directory_uri() . '/bower_components/Ionicons/css/ionicons.css', array());
    wp_enqueue_style('skippr', get_template_directory_uri() . '/bower_components/skippr/dist/skippr.css', array());
    wp_enqueue_style('style', get_stylesheet_uri());
}

function scripts() {
    wp_enqueue_script('jquery', get_template_directory_uri() . '/bower_components/jquery/dist/jquery.min.js');
    wp_enqueue_script('maps', get_template_directory_uri() . '/bower_components/gmaps/gmaps.js');
    wp_enqueue_script('skippr', get_template_directory_uri() . '/bower_components/skippr/dist/skippr.js', ['jquery']);
	wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', ['jquery']);
}

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}

add_action( 'init', 'register_my_menu' );
add_action('wp_enqueue_scripts', 'stylesheets');
add_action('wp_enqueue_scripts', 'scripts');