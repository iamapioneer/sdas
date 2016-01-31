<?php 

function scripts() {

	wp_enqueue_style('ionicons', get_template_directory_uri() . '/bower_components/Ionicons/css/ionicons.css', array());
	wp_enqueue_style('style', get_stylesheet_uri());

}

add_action('wp_enqueue_scripts', 'scripts');