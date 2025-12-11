<?php

function blog_room_intro_text( $default_text ) {
	$default_text .= sprintf(
		'<p class="blog-room-demo-data">%1$s <a href="%2$s" target="_blank">%3$s</a></p>',
		esc_html__( 'Demo content files for Blog Room Theme.', 'blog-room' ),
		esc_url( 'https://demo.artifythemes.com/documentations/docs/blog-room/demo-data/' ),
		esc_html__( 'Click here for Demo File download', 'blog-room' )
	);

	return $default_text;
}
add_filter( 'pt-ocdi/plugin_intro_text', 'blog_room_intro_text' );

/**
 * OCDI after import.
 */
function blog_room_after_import_setup() {
	// Assign menus to their locations.
	$primary_menu = get_term_by( 'name', 'Primary Menu', 'nav_menu' );
	$topbar_menu  = get_term_by( 'name', 'Topbar Menu', 'nav_menu' );
	$social_menu  = get_term_by( 'name', 'Social Menu', 'nav_menu' );

	set_theme_mod(
		'nav_menu_locations',
		array(
			'primary'     => $primary_menu->term_id,
			'topbar-menu' => $topbar_menu->term_id,
			'social'      => $social_menu->term_id,
		)
	);

}
add_action( 'ocdi/after_import', 'blog_room_after_import_setup' );
