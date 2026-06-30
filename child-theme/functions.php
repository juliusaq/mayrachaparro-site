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
	// 1. Enqueue Parent Style (Divi)
	wp_enqueue_style(
		'divi-parent-style',
		get_template_directory_uri() . '/style.css',
		array(),
		'5.8.1'
	);

	// 2. Enqueue Design Tokens
	wp_enqueue_style(
		'mayrachaparro-tokens',
		get_stylesheet_directory_uri() . '/assets/css/tokens.css',
		array( 'divi-parent-style' ),
		'1.0.0'
	);

	// 3. Enqueue Utilities
	wp_enqueue_style(
		'mayrachaparro-utilities',
		get_stylesheet_directory_uri() . '/assets/css/utilities.css',
		array( 'mayrachaparro-tokens' ),
		'1.0.0'
	);

	// 4. Enqueue Child Theme Main style.css (At root, acts as metadata anchor)
	wp_enqueue_style(
		'mayrachaparro-child-style-anchor',
		get_stylesheet_uri(),
		array( 'mayrachaparro-utilities' ),
		'1.0.0'
	);

	// 5. Enqueue Custom Primitives & Base Styles (main.css)
	wp_enqueue_style(
		'mayrachaparro-child-main',
		get_stylesheet_directory_uri() . '/assets/css/main.css',
		array( 'mayrachaparro-child-style-anchor' ),
		'1.0.0'
	);

	// 6. Enqueue Custom JS with modern defer strategy (WP 6.3+)
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
