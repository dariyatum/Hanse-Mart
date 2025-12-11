<?php
/**
 * Footer copyright
 */

// Footer copyright
$wp_customize->add_section(
	'blog_content_footer_section',
	array(
		'title' => esc_html__( 'Footer Options', 'blog-content' ),
		'panel' => 'blog_content_theme_options_panel',
	)
);

$copyright_default = sprintf( esc_html_x( 'Copyright &copy; %1$s %2$s', '1: Year, 2: Site Title with home URL', 'blog-content' ), '[the-year]', '[site-link]' );

// Footer copyright setting.
$wp_customize->add_setting(
	'blog_content_copyright_txt',
	array(
		'default'           => $copyright_default,
		'sanitize_callback' => 'blog_content_sanitize_html',
	)
);

$wp_customize->add_control(
	'blog_content_copyright_txt',
	array(
		'label'   => esc_html__( 'Copyright text', 'blog-content' ),
		'section' => 'blog_content_footer_section',
		'type'    => 'textarea',
	)
);
