<?php
/**
 * Single Post Options
 */

$wp_customize->add_section(
	'blog_content_single_page_options',
	array(
		'title' => esc_html__( 'Single Post Options', 'blog-content' ),
		'panel' => 'blog_content_theme_options_panel',
	)
);

// Single post related Posts title label.
$wp_customize->add_setting(
	'blog_content_related_posts_title',
	array(
		'default'           => __( 'Related Posts', 'blog-content' ),
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'blog_content_related_posts_title',
	array(
		'label'    => esc_html__( 'Related Posts Title', 'blog-content' ),
		'section'  => 'blog_content_single_page_options',
		'settings' => 'blog_content_related_posts_title',
	)
);

// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
	$wp_customize->selective_refresh->add_partial(
		'blog_content_related_posts_title',
		array(
			'selector'            => '.theme-wrapper h2.related-title',
			'settings'            => 'blog_content_related_posts_title',
			'container_inclusive' => false,
			'fallback_refresh'    => true,
		)
	);
}
