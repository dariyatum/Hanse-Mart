<?php

/**
 * Marketplace Shop functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Marketplace Shop
 */

define( 'MARKETPLACE_SHOP_URL', trailingslashit( get_template_directory_uri() ) );

if ( ! function_exists( 'marketplace_shop_setup' ) ) {

	load_theme_textdomain( 'marketplace-shop', get_template_directory() . '/languages' );

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	function marketplace_shop_setup() {

		// Add theme support
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'editor-styles' );
		add_theme_support( 'html5', array( 'comment-form', 'comment-list' ) );
		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'customize-selective-refresh-widgets' );

		require get_template_directory() .'/inc/core/main.php';
	}
}
add_action( 'after_setup_theme', 'marketplace_shop_setup' );

/**
 * Enqueue scripts and styles
 */
function marketplace_shop_scripts() {
	$version = wp_get_theme( 'marketplace-shop' )->get( 'Version' );
	// Stylesheet
	wp_enqueue_style( 'marketplace-shop-styles', get_theme_file_uri( '/style.css' ), array(), $version );
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css', array(), $version, 'all' );

	wp_enqueue_style( 'owl.carousel-css', get_template_directory_uri() . '/assets/css/owl.carousel.css');

	if ( file_exists( get_template_directory() . '/assets/css/theme-style.css' ) ) {
		wp_enqueue_style( 'marketplace-shop-theme-style', get_template_directory_uri() . '/assets/css/theme-style.css',  array(), $version );
	}

	$deps = array( 'marketplace-shop-animate' );
	global $wp_styles;
	if ( in_array( 'wc-blocks-vendors-style', $wp_styles->queue ) ) {
		$deps[] = 'wc-blocks-vendors-style';
	}

	if (is_rtl()) {
	    wp_enqueue_style( 'rtl-css', get_template_directory_uri() . '/assets/css/rtl.css', 'rtl_css' );
	}

	wp_enqueue_style( 'fontawesome-style', esc_url(get_template_directory_uri()).'/assets/fontawesome/css/all.css' );

	wp_enqueue_script( 'marketplace-shop-theme', get_template_directory_uri() . '/assets/js/theme.js', array( 'jquery' ), '', true );

	// Scripts
	$deps = array( 'jquery' );
	wp_enqueue_script( 'animate', get_template_directory_uri() . '/assets/js/animate.js', $deps, $version );

	wp_enqueue_script('owl.carousel-js', get_template_directory_uri() . '/assets/js/owl.carousel.js', array('jquery'), '', true );

}
add_action( 'wp_enqueue_scripts', 'marketplace_shop_scripts' );

/**
 * Add editor styles
 */
function marketplace_shop_editor_style() {
    wp_enqueue_style( 'marketplace-shop-editor-style', get_template_directory_uri() . '/assets/css/editor-style.css' );
}
add_action( 'enqueue_block_assets', 'marketplace_shop_editor_style' );

/**
 * Enqueue assets scripts for both backend and frontend
 */
function marketplace_shop_block_assets()
{
    wp_enqueue_style( 'marketplace-shop-blocks-style', get_template_directory_uri() . '/assets/css/blocks.css' );
}
add_action( 'enqueue_block_assets', 'marketplace_shop_block_assets' );

/**
 * Load core file
 */
require get_theme_file_path( '/inc/core/init.php' );

/**
 * Load core file
 */
require get_theme_file_path( '/inc/Tgm/tgm.php' );

load_template( trailingslashit( get_template_directory() ) . '/inc/core/class-upgrade-pro.php' );