<?php
/**
 * Sidebar settings
 */

$wp_customize->add_section(
	'blog_content_sidebar_option',
	array(
		'title' => esc_html__( 'Sidebar Options', 'blog-content' ),
		'panel' => 'blog_content_theme_options_panel',
	)
);

// Sidebar Option - Archive Sidebar Position.
$wp_customize->add_setting(
	'blog_content_archive_sidebar_position',
	array(
		'sanitize_callback' => 'blog_content_sanitize_select',
		'default'           => 'right-sidebar',
	)
);

$wp_customize->add_control(
	'blog_content_archive_sidebar_position',
	array(
		'label'   => esc_html__( 'Archive Sidebar Position', 'blog-content' ),
		'section' => 'blog_content_sidebar_option',
		'type'    => 'select',
		'choices' => array(
			'right-sidebar' => esc_html__( 'Right Sidebar', 'blog-content' ),
			'no-sidebar'    => esc_html__( 'No Sidebar', 'blog-content' ),
		),
	)
);

// Sidebar Option - Post Sidebar Position.
$wp_customize->add_setting(
	'blog_content_post_sidebar_position',
	array(
		'sanitize_callback' => 'blog_content_sanitize_select',
		'default'           => 'right-sidebar',
	)
);

$wp_customize->add_control(
	'blog_content_post_sidebar_position',
	array(
		'label'   => esc_html__( 'Post Sidebar Position', 'blog-content' ),
		'section' => 'blog_content_sidebar_option',
		'type'    => 'select',
		'choices' => array(
			'right-sidebar' => esc_html__( 'Right Sidebar', 'blog-content' ),
			'no-sidebar'    => esc_html__( 'No Sidebar', 'blog-content' ),
		),
	)
);

// Sidebar Option - Page Sidebar Position.
$wp_customize->add_setting(
	'blog_content_page_sidebar_position',
	array(
		'sanitize_callback' => 'blog_content_sanitize_select',
		'default'           => 'right-sidebar',
	)
);

$wp_customize->add_control(
	'blog_content_page_sidebar_position',
	array(
		'label'   => esc_html__( 'Page Sidebar Position', 'blog-content' ),
		'section' => 'blog_content_sidebar_option',
		'type'    => 'select',
		'choices' => array(
			'right-sidebar' => esc_html__( 'Right Sidebar', 'blog-content' ),
			'no-sidebar'    => esc_html__( 'No Sidebar', 'blog-content' ),
		),
	)
);
