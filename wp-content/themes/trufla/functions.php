<?php
/**
 * Trufla functions
*/

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function trufla_setup() {
	
	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	// Load regular editor styles into the new block-based editor.
	add_theme_support( 'editor-styles' );

	// Load default block styles.
	add_theme_support( 'wp-block-styles' );

	// Add support for responsive embeds.
	add_theme_support( 'responsive-embeds' );
	
	// Register Nav Menu
	register_nav_menus(
		array(
			'resources_menu' => __( 'Resources Menu', 'trufla' )
		)
	);


}
add_action( 'after_setup_theme', 'trufla_setup' );


/**
 * Enqueues scripts and styles.
 */
function trufla_scripts() {

	// Theme stylesheet.
	wp_enqueue_style( 'trufla-style', get_stylesheet_uri(), array(), '' );
}
add_action( 'wp_enqueue_scripts', 'trufla_scripts' );


