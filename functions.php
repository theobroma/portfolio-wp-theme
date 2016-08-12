<?php
function theme_name_scripts() {
	wp_enqueue_style( 'style-name', get_template_directory_uri() . '/css/main.css' );
	wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/bundle.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );