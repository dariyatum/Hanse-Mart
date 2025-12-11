<?php

/**
 * Register custom fonts.
 */
function blog_content_fonts_url() {
	$fonts_url     = '';
	$font_families = array();
	$subsets       = 'latin,latin-ext';

	if ( 'off' !== _x( 'on', 'Aldrich font: on or off', 'blog-content' ) ) {
		$font_families[] = 'Aldrich:400,600,700';
	}

	if ( 'off' !== _x( 'on', 'Roboto font: on or off', 'blog-content' ) ) {
		$font_families[] = 'Roboto:400,600,700';
	}

	if ( 'off' !== _x( 'on', 'Poppins font: on or off', 'blog-content' ) ) {
		$font_families[] = 'Poppins:400,600,700';
	}

	if ( 'off' !== _x( 'on', 'Karla font: on or off', 'blog-content' ) ) {
		$font_families[] = 'Karla:400,600,700';
	}

	if ( ! empty( get_theme_mod( 'blog_content_site_title_font' ) ) ) {
		$font_families[] = str_replace( '+', ' ', get_theme_mod( 'blog_content_site_title_font' ) );
	}

	if ( ! empty( get_theme_mod( 'blog_content_site_description_font' ) ) ) {
		$font_families[] = str_replace( '+', ' ', get_theme_mod( 'blog_content_site_description_font' ) );
	}

	if ( ! empty( get_theme_mod( 'blog_content_header_font' ) ) ) {
		$font_families[] = str_replace( '+', ' ', get_theme_mod( 'blog_content_header_font' ) );
	}

	if ( ! empty( get_theme_mod( 'blog_content_body_font' ) ) ) {
		$font_families[] = str_replace( '+', ' ', get_theme_mod( 'blog_content_body_font' ) );
	}

	$query_args = array(
		'family' => urlencode( implode( '|', $font_families ) ),
		'subset' => urlencode( $subsets ),
	);

	if ( $font_families ) {

		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );

	}

	return esc_url_raw( $fonts_url );
}