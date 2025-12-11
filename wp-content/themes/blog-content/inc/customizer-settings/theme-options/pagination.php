<?php
/**
 * Pagination setting
 */

// Pagination setting.
$wp_customize->add_section(
	'blog_content_pagination',
	array(
		'title' => esc_html__( 'Pagination', 'blog-content' ),
		'panel' => 'blog_content_theme_options_panel',
	)
);

// Pagination enable setting.
$wp_customize->add_setting(
	'blog_content_pagination_enable',
	array(
		'default'           => true,
		'sanitize_callback' => 'blog_content_sanitize_checkbox',
	)
);

$wp_customize->add_control(
	new Blog_Content_Toggle_Checkbox_Custom_control(
		$wp_customize,
		'blog_content_pagination_enable',
		array(
			'label'    => esc_html__( 'Enable Pagination.', 'blog-content' ),
			'settings' => 'blog_content_pagination_enable',
			'section'  => 'blog_content_pagination',
			'type'     => 'checkbox',
		)
	)
);

// Pagination - Pagination Style.
$wp_customize->add_setting(
	'blog_content_pagination_type',
	array(
		'default'           => 'numeric',
		'sanitize_callback' => 'blog_content_sanitize_select',
	)
);

$wp_customize->add_control(
	'blog_content_pagination_type',
	array(
		'label'           => esc_html__( 'Pagination Style', 'blog-content' ),
		'section'         => 'blog_content_pagination',
		'type'            => 'select',
		'choices'         => array(
			'default' => __( 'Default (Older/Newer)', 'blog-content' ),
			'numeric' => __( 'Numeric', 'blog-content' ),
		),
		'active_callback' => 'blog_content_pagination_enabled',
	)
);

/*========================Active Callback==============================*/
function blog_content_pagination_enabled( $control ) {
	return $control->manager->get_setting( 'blog_content_pagination_enable' )->value();
}
