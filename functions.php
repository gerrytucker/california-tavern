<?php

/**
 * Remove query strings from static resources
 */
function remove_query_strings( $src ) {

	$parts = explode( '?ver', $src );
	return $parts[0];

}
add_filter( 'script_loader_src', 'remove_query_strings', 15, 1 );
add_filter( 'style_loader_src', 'remove_query_strings', 15, 1 );

/**
 * Enqueue styles & scripts
 */
function print_front_styles() {

	wp_enqueue_style( 'california-css', get_stylesheet_uri() );
	wp_enqueue_script( 'california-js', get_template_directory_uri() . '/main.min.js', array('jquery'), false, 'screen' );

}
add_action( 'wp_enqueue_scripts', 'print_front_styles' );

