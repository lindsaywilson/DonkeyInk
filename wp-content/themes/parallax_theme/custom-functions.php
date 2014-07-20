<?php

function custom_scripts() {
	wp_enqueue_script('theme-scripts', get_template_directory_uri() . '/js/scripts.js', array(), '', true );
}

add_action( 'wp_enqueue_scripts', 'custom_scripts' );


function btn_shortcode( $atts ) {
    $a = shortcode_atts( array(
        'title' => '',
        'url' => '',
		'text' => ''
    ), $atts );

    return '<a rel="external" class="button" href="'.esc_attr($a['url']).'"><div><span>'.esc_attr($a['title']).'</span>'.esc_attr($a['text']).'</div></a>';
}
add_shortcode( 'btn', 'btn_shortcode' );