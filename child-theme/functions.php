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
	$theme_dir = get_stylesheet_directory();

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
		filemtime( $theme_dir . '/assets/css/tokens.css' )
	);

	// 3. Enqueue Utilities
	wp_enqueue_style(
		'mayrachaparro-utilities',
		get_stylesheet_directory_uri() . '/assets/css/utilities.css',
		array( 'mayrachaparro-tokens' ),
		filemtime( $theme_dir . '/assets/css/utilities.css' )
	);

	// 4. Enqueue Child Theme Main style.css (At root, acts as metadata anchor)
	wp_enqueue_style(
		'mayrachaparro-child-style-anchor',
		get_stylesheet_uri(),
		array( 'mayrachaparro-utilities' ),
		filemtime( $theme_dir . '/style.css' )
	);

	// 5. Enqueue Custom Primitives & Base Styles (main.css)
	wp_enqueue_style(
		'mayrachaparro-child-main',
		get_stylesheet_directory_uri() . '/assets/css/main.css',
		array( 'mayrachaparro-child-style-anchor' ),
		filemtime( $theme_dir . '/assets/css/main.css' )
	);

	// 6. Enqueue Custom JS with modern defer strategy (WP 6.3+)
	wp_enqueue_script(
		'mayrachaparro-custom-script',
		get_stylesheet_directory_uri() . '/assets/js/main.js',
		array(),
		filemtime( $theme_dir . '/assets/js/main.js' ),
		array(
			'strategy'  => 'defer',
			'in_footer' => true,
		)
	);
}
add_action( 'wp_enqueue_scripts', 'mayrachaparro_child_enqueue_assets' );

/**
 * Customize the MVP homepage document title.
 *
 * @param string $title Current document title.
 * @return string
 */
function mayrachaparro_home_document_title( $title ) {
	if ( is_front_page() ) {
		return 'Dra. Mayra Chaparro | Odontología familiar en Querétaro';
	}

	return $title;
}
add_filter( 'pre_get_document_title', 'mayrachaparro_home_document_title' );

/**
 * Add the MVP homepage meta description.
 */
function mayrachaparro_home_meta_description() {
	if ( ! is_front_page() ) {
		return;
	}

	echo '<meta name="description" content="Atención dental cercana para niños, adultos y familias en Querétaro. Agenda tu cita por WhatsApp con la Dra. Mayra Chaparro.">' . "\n";
}
add_action( 'wp_head', 'mayrachaparro_home_meta_description', 1 );

/**
 * Add Metricool tracking script to the footer.
 */
function mayrachaparro_add_metricool_pixel() {
	?>
	<script>function loadScript(a){var b=document.getElementsByTagName("head")[0],c=document.createElement("script");c.type="text/javascript",c.src="https://tracker.metricool.com/resources/be.js",c.onreadystatechange=a,c.onload=a,b.appendChild(c)}loadScript(function(){beTracker.t({hash:"b6607db822fd62b6b8bce07a8d3adea1"})});</script>
	<?php
}
add_action( 'wp_footer', 'mayrachaparro_add_metricool_pixel' );

