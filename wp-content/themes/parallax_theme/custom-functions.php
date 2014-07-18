
<?php

function custom_scripts() {
	wp_enqueue_style('theme-custom', get_stylesheet_directory_uri().'/did.css');
	wp_enqueue_script('theme-scripts', get_template_directory_uri() . '/js/scripts.js', array(), '', true );
}

add_action( 'wp_enqueue_scripts', 'custom_scripts' );