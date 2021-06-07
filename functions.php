<?php
/**
 * @package citadela
 */

/* Load the parent and child theme styles */
function citadela_parent_theme_style() {

	// Parent theme styles
	wp_enqueue_style( 'citadela-style', get_template_directory_uri(). '/style.css' );

	// Child theme styles
	wp_enqueue_style( 'citadela-child-style', get_stylesheet_directory_uri(). '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'citadela_parent_theme_style' );


/* Add additional functions below */
