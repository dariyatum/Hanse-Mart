<?php

$wp_customize->add_section(
	'blog_content_posts_meta_options',
	array(
		'title' => esc_html__( 'Post Meta Options', 'blog-content' ),
		'panel' => 'blog_content_theme_options_panel',
	)
);

// Enable post category setting.
$wp_customize->add_setting(
	'blog_content_enable_category',
	array(
		'default'           => true,
		'sanitize_callback' => 'blog_content_sanitize_checkbox',
	)
);

$wp_customize->add_control(
	new Blog_Content_Toggle_Checkbox_Custom_control(
		$wp_customize,
		'blog_content_enable_category',
		array(
			'label'    => esc_html__( 'Enable Category', 'blog-content' ),
			'settings' => 'blog_content_enable_category',
			'section'  => 'blog_content_posts_meta_options',
			'type'     => 'checkbox',
		)
	)
);

// Enable post author setting.
$wp_customize->add_setting(
	'blog_content_enable_author',
	array(
		'default'           => true,
		'sanitize_callback' => 'blog_content_sanitize_checkbox',
	)
);

$wp_customize->add_control(
	new Blog_Content_Toggle_Checkbox_Custom_control(
		$wp_customize,
		'blog_content_enable_author',
		array(
			'label'    => esc_html__( 'Enable Author', 'blog-content' ),
			'settings' => 'blog_content_enable_author',
			'section'  => 'blog_content_posts_meta_options',
			'type'     => 'checkbox',
		)
	)
);

// Enable post date setting.
$wp_customize->add_setting(
	'blog_content_enable_date',
	array(
		'default'           => true,
		'sanitize_callback' => 'blog_content_sanitize_checkbox',
	)
);

$wp_customize->add_control(
	new Blog_Content_Toggle_Checkbox_Custom_control(
		$wp_customize,
		'blog_content_enable_date',
		array(
			'label'    => esc_html__( 'Enable Date', 'blog-content' ),
			'settings' => 'blog_content_enable_date',
			'section'  => 'blog_content_posts_meta_options',
			'type'     => 'checkbox',
		)
	)
);

// Enable post tag setting.
$wp_customize->add_setting(
	'blog_content_enable_tag',
	array(
		'default'           => true,
		'sanitize_callback' => 'blog_content_sanitize_checkbox',
	)
);

$wp_customize->add_control(
	new Blog_Content_Toggle_Checkbox_Custom_control(
		$wp_customize,
		'blog_content_enable_tag',
		array(
			'label'    => esc_html__( 'Enable Post Tag', 'blog-content' ),
			'settings' => 'blog_content_enable_tag',
			'section'  => 'blog_content_posts_meta_options',
			'type'     => 'checkbox',
		)
	)
);