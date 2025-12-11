<?php

// upgrade to pro.
require get_theme_file_path() . '/inc/customizer-settings/upgrade-to-pro/class-customize.php';

function blog_room_customize_register( $wp_customize ) {

	// Custom Controls.
	require get_theme_file_path() . '/inc/customizer-settings/custom-controller.php';

	// Banner section.
	require get_theme_file_path() . '/inc/customizer-settings/frontpage-customizer/banner.php';

}
add_action( 'customize_register', 'blog_room_customize_register' );

function blog_room_customize_preview_js() {
	wp_enqueue_script( 'blog-room-customizer', get_theme_file_uri() . '/assets/js/customizer.min.js', array( 'customize-preview', 'blog-content-customizer' ), true );
}
add_action( 'customize_preview_init', 'blog_room_customize_preview_js' );

function blog_room_custom_control_scripts() {
	wp_enqueue_style( 'blog-room-customize-controls', get_theme_file_uri() . '/assets/css/customize-controls.min.css' );
	wp_enqueue_script( 'blog-room-custom-controls-js', get_theme_file_uri() . '/assets/js/customize-control.min.js', array( 'blog-content-customize-control', 'jquery', 'jquery-ui-core' ), '1.0', true );
}
add_action( 'customize_controls_enqueue_scripts', 'blog_room_custom_control_scripts' );
