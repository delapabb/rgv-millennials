<?php
/**
 * RGV Millennials functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package RGV_Millennials
 */

if ( ! function_exists( 'rgvmillennials_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function rgvmillennials_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'header' => esc_html__( 'Header', 'rgvmillennials' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Hide the admin bar.
	show_admin_bar( false );

	// Add excerpts to pages
	add_post_type_support( 'page', 'excerpt' );

}
endif;
add_action( 'after_setup_theme', 'rgvmillennials_setup' );

/**
 * Enqueue scripts and styles.
 */
function rgvmillennials_scripts() {
	// WordPress Styles
	wp_enqueue_style( 'rgvmillennials-style', get_stylesheet_uri() );

	// Foundation JS
	wp_enqueue_script( 'foundation-app-js', get_template_directory_uri() . '/js/app.js', array(), false, true );

	// Comments Script
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'rgvmillennials_scripts' );

/**
 * Extra dynamic classes
 */
add_filter('body_class','rgvmillennials_extra_body_classes');
function rgvmillennials_extra_body_classes($classes) {
    if (! ( is_user_logged_in() ) ) {
        $classes[] = 'logged-out';
    }
    return $classes;
}

/**
* Remove Ninja Forms css_includes*
*/
remove_action( 'ninja_forms_display_css', 'ninja_forms_display_css');
