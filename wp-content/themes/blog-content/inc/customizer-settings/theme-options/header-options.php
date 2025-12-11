<?php
/**
 * Header Options
 */

// Header Options.
$wp_customize->add_section(
	'blog_content_header_section',
	array(
		'title' => esc_html__( 'Header Options', 'blog-content' ),
		'panel' => 'blog_content_theme_options_panel',
	)
);

// Topbar Section.
$wp_customize->add_setting(
	'blog_content_topbar_enable',
	array(
		'default'           => false,
		'sanitize_callback' => 'blog_content_sanitize_checkbox',
	)
);

$wp_customize->add_control(
	new Blog_Content_Toggle_Checkbox_Custom_control(
		$wp_customize,
		'blog_content_topbar_enable',
		array(
			'label'    => esc_html__( 'Enable Topbar.', 'blog-content' ),
			'settings' => 'blog_content_topbar_enable',
			'section'  => 'blog_content_header_section',
			'type'     => 'checkbox',
		)
	)
);
