<?php
/**
 * Blog Content Theme Customizer
 *
 * @package Blog Content
 */

// upgrade to pro.
require get_template_directory() . '/inc/customizer-settings/upgrade-to-pro/class-customize.php';

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function blog_content_customize_register( $wp_customize ) {

	// Custom Controls.
	require get_template_directory() . '/inc/customizer-settings/custom-controller.php';

	$wp_customize->get_setting( 'blogname' )->transport        = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'blog_content_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'blog_content_customize_partial_blogdescription',
			)
		);
	}

	// Header text display setting.
	$wp_customize->add_setting(
		'blog_content_header_text_display',
		array(
			'default'           => true,
			'sanitize_callback' => 'blog_content_sanitize_checkbox',
		)
	);

	$wp_customize->add_control(
		'blog_content_header_text_display',
		array(
			'section' => 'title_tagline',
			'type'    => 'checkbox',
			'label'   => esc_html__( 'Display Site Title and Tagline', 'blog-content' ),
		)
	);

	// Archive Page title.
	$wp_customize->add_setting(
		'blog_content_archive_page_title',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'blog_content_archive_page_title',
		array(
			'label'           => esc_html__( 'Archive Posts Title', 'blog-content' ),
			'section'         => 'static_front_page',
			'active_callback' => 'blog_content_is_latest_posts',
		)
	);

	// Abort if selective refresh is not available.
	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blog_content_archive_page_title',
			array(
				'selector'            => '.home .site-main h3.section-title',
				'settings'            => 'blog_content_archive_page_title',
				'container_inclusive' => false,
				'fallback_refresh'    => true,
				'render_callback'     => 'blog_content_archive_page_title_text_partial',
			)
		);
	}

	// Archive Page subtitle.
	$wp_customize->add_setting(
		'blog_content_archive_page_subtitle',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'blog_content_archive_page_subtitle',
		array(
			'label'           => esc_html__( 'Archive Posts Subtitle', 'blog-content' ),
			'section'         => 'static_front_page',
			'active_callback' => 'blog_content_is_latest_posts',
		)
	);

	/*========================Partial Refresh==============================*/
	if ( ! function_exists( 'blog_content_archive_page_title_text_partial' ) ) :
		// Archive Page Title.
		function blog_content_archive_page_title_text_partial() {
			return esc_html( get_theme_mod( 'blog_content_archive_page_title' ) );
		}
	endif;

	// Enable Homepage Content.
	$wp_customize->add_setting(
		'blog_content_enable_frontpage_content',
		array(
			'default'           => false,
			'sanitize_callback' => 'blog_content_sanitize_checkbox',
		)
	);

	$wp_customize->add_control(
		'blog_content_enable_frontpage_content',
		array(
			'label'           => esc_html__( 'Enable Homepage Content', 'blog-content' ),
			'description'     => esc_html__( 'Check to enable the selected homepage content on the front page.', 'blog-content' ),
			'section'         => 'static_front_page',
			'type'            => 'checkbox',
			'active_callback' => 'blog_content_is_static_homepage_enabled',
		)
	);

	// Color Customizer Setting.
	require get_template_directory() . '/inc/customizer-settings/color.php';

	// frontpage customizer section.
	require get_template_directory() . '/inc/customizer-settings/frontpage-customizer/customizer-sections.php';

	// theme options customizer section.
	require get_template_directory() . '/inc/customizer-settings/theme-options/theme-options-sections.php';

}
add_action( 'customize_register', 'blog_content_customize_register' );

// Sanitize callback.
require get_template_directory() . '/inc/sanitize-callback.php';

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function blog_content_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function blog_content_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function blog_content_customize_preview_js() {
	wp_enqueue_script( 'blog-content-customizer', get_template_directory_uri() . '/assets/js/customizer.min.js', array( 'customize-preview' ), BLOG_CONTENT_VERSION, true );
}
add_action( 'customize_preview_init', 'blog_content_customize_preview_js' );

/**
 * Binds JS handlers for Customizer controls.
 */
function blog_content_customize_control_js() {
	wp_enqueue_style( 'blog-content-customize-style', get_template_directory_uri() . '/assets/css/customize-controls.min.css', array(), '1.0.0' );
	wp_enqueue_script( 'blog-content-customize-control', get_template_directory_uri() . '/assets/js/customize-control.min.js', array( 'jquery', 'customize-controls' ), '1.0.0', true );
	$localized_data = array(
		'refresh_msg' => esc_html__( 'Refresh the page after Save and Publish.', 'blog-content' ),
		'reset_msg'   => esc_html__( 'Warning!!! This will reset all the settings. Refresh the page after Save and Publish to reset all.', 'blog-content' ),
	);
	wp_localize_script( 'blog-content-customize-control', 'localized_data', $localized_data );
}
add_action( 'customize_controls_enqueue_scripts', 'blog_content_customize_control_js' );
