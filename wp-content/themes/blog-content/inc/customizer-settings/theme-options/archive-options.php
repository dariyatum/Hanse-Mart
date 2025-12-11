<?php
/**
 * Blog / Archive Options
 */

$wp_customize->add_section(
	'blog_content_archive_page_options',
	array(
		'title' => esc_html__( 'Blog / Archive Pages Options', 'blog-content' ),
		'panel' => 'blog_content_theme_options_panel',
	)
);

// Excerpt - Excerpt Length.
$wp_customize->add_setting(
	'blog_content_excerpt_length',
	array(
		'default'           => 35,
		'sanitize_callback' => 'blog_content_sanitize_number_range',
	)
);

$wp_customize->add_control(
	'blog_content_excerpt_length',
	array(
		'label'       => esc_html__( 'Excerpt Length (no. of words)', 'blog-content' ),
		'section'     => 'blog_content_archive_page_options',
		'settings'    => 'blog_content_excerpt_length',
		'type'        => 'number',
		'input_attrs' => array(
			'min'  => 5,
			'max'  => 200,
			'step' => 1,
		),
	)
);

// Archive Column layout options.
$wp_customize->add_setting(
	'blog_content_archive_column_layout',
	array(
		'default'           => 'double-column',
		'sanitize_callback' => 'blog_content_sanitize_select',
	)
);

$wp_customize->add_control(
	'blog_content_archive_column_layout',
	array(
		'label'   => esc_html__( 'Column Layout', 'blog-content' ),
		'section' => 'blog_content_archive_page_options',
		'type'    => 'select',
		'choices' => array(
			'double-column' => __( 'Column 2', 'blog-content' ),
			'triple-column' => __( 'Column 3', 'blog-content' ),
		),
	)
);
