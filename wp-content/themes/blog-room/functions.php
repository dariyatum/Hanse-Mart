<?php

/**
 * Blog Room functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Blog Room
 */

add_theme_support('title-tag');

add_theme_support('automatic-feed-links');

add_theme_support('register_block_style');

add_theme_support('register_block_pattern');

add_theme_support('responsive-embeds');

add_theme_support('wp-block-styles');

add_theme_support('align-wide');

add_theme_support(
	'html5',
	array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		'style',
		'script',
	)
);

add_theme_support(
	'custom-logo',
	array(
		'height'      => 250,
		'width'       => 250,
		'flex-width'  => true,
		'flex-height' => true,
	)
);

if (! function_exists('blog_room_setup')) :
	function blog_room_setup()
	{
		/*
		* Make child theme available for translation.
		* Translations can be filed in the /languages/ directory.
		*/
		load_child_theme_textdomain('blog-room', get_stylesheet_directory() . '/languages');
	}
endif;
add_action('after_setup_theme', 'blog_room_setup');

if (! function_exists('blog_room_enqueue_styles')) :
	/**
	 * Enqueue scripts and styles.
	 */
	function blog_room_enqueue_styles()
	{
		$parenthandle = 'blog-content-style';
		$theme        = wp_get_theme();

		wp_enqueue_style(
			$parenthandle,
			get_template_directory_uri() . '/style.css',
			array(
				'blog-content-fonts',
				'slick-style',
				'all-style',
				'blog-content-blocks-style',
			),
			$theme->parent()->get('Version')
		);

		wp_enqueue_style(
			'blog-room-style',
			get_stylesheet_uri(),
			array($parenthandle),
			$theme->get('Version')
		);

		wp_enqueue_script('blog-room-custom-script', get_stylesheet_directory_uri() . '/assets/js/custom.min.js', array('jquery', 'blog-content-custom-script'), $theme->get('Version'), true);
	}

endif;

add_action('wp_enqueue_scripts', 'blog_room_enqueue_styles');


// Style for ocdi admin panel.
function blog_room_admin_panel_demo_data_download_link()
{

	wp_enqueue_style('blog-room-admin-css', get_theme_file_uri() . '/assets/css/admin.min.css');
}
add_action('admin_enqueue_scripts', 'blog_room_admin_panel_demo_data_download_link');

function blog_room_custom_header_setup()
{
	add_theme_support(
		'custom-header',
		apply_filters(
			'blog_room_custom_header_args',
			array(
				'default-image'      => '',
				'default-text-color' => '703b3b',
				'width'              => 1000,
				'height'             => 250,
				'flex-height'        => true,
				'wp-head-callback'   => 'blog_content_header_style',
			)
		)
	);
}
add_action('after_setup_theme', 'blog_room_custom_header_setup');

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function blog_room_body_classes($classes)
{

	// added class for sticky header.
	$classes[] = 'header-fixed';

	return $classes;
}
add_filter('body_class', 'blog_room_body_classes');

require get_theme_file_path() . '/inc/customizer-settings/customizer.php';

// One Click Demo Import after import setup.
if (class_exists('OCDI_Plugin')) {
	require get_theme_file_path() . '/assets/demo-data/demo-import.php';
}
