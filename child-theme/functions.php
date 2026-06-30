<?php
/**
 * Mayra Chaparro Child Theme functions and definitions
 *
 * @package mayrachaparro-child
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Enqueue styles and scripts.
 */
function mayrachaparro_child_enqueue_assets() {
	// Enqueue Parent Style (Divi)
	wp_enqueue_style(
		'divi-parent-style',
		get_template_directory_uri() . '/style.css',
		array(),
		'5.8.1'
	);

	// Enqueue Child Theme Main style.css
	wp_enqueue_style(
		'mayrachaparro-child-style',
		get_stylesheet_uri(),
		array( 'divi-parent-style' ),
		'1.0.0'
	);

	// Enqueue Custom Modular CSS
	wp_enqueue_style(
		'mayrachaparro-custom-style',
		get_stylesheet_directory_uri() . '/assets/css/main.css',
		array( 'mayrachaparro-child-style' ),
		'1.0.0'
	);

	// Enqueue Custom JS with modern defer strategy (WP 6.3+)
	wp_enqueue_script(
		'mayrachaparro-custom-script',
		get_stylesheet_directory_uri() . '/assets/js/main.js',
		array(),
		'1.0.0',
		array(
			'strategy'  => 'defer',
			'in_footer' => true,
		)
	);
}
add_action( 'wp_enqueue_scripts', 'mayrachaparro_child_enqueue_assets' );
