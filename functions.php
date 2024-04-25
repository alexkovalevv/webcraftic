<?php

/**
 * Register and Enqueue Styles.
 */
function webcraftic_register_styles() {

	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style( 'webcraftic-style', get_stylesheet_uri(), array(), $theme_version );
	// Add print CSS.
	wp_enqueue_style( 'webcraftic-print-style', get_template_directory_uri() . '/print.css', null, $theme_version, 'print' );

}

add_action( 'wp_enqueue_scripts', 'webcraftic_register_styles' );


// Remove <p> and <br/> from Contact Form 7
add_filter('wpcf7_autop_or_not', '__return_false');
