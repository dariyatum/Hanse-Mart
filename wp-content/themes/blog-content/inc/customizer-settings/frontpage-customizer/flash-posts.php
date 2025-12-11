<?php
/**
 * Frontpage Customizer Settings
 *
 * @package Blog Content
 *
 * Flash Posts Section
 */

$wp_customize->add_section(
	'blog_content_flash_posts_section',
	array(
		'title'    => esc_html__( 'Flash Posts Section', 'blog-content' ),
		'panel'    => 'blog_content_frontpage_panel',
		'priority' => 10,
	)
);

// Flash Posts section enable settings.
$wp_customize->add_setting(
	'blog_content_flash_posts_section_enable',
	array(
		'default'           => false,
		'sanitize_callback' => 'blog_content_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	new Blog_Content_Toggle_Checkbox_Custom_control(
		$wp_customize,
		'blog_content_flash_posts_section_enable',
		array(
			'label'    => esc_html__( 'Enable Flash Posts Section', 'blog-content' ),
			'type'     => 'checkbox',
			'settings' => 'blog_content_flash_posts_section_enable',
			'section'  => 'blog_content_flash_posts_section',
		)
	)
);

// Flash Posts Section title settings.
$wp_customize->add_setting(
	'blog_content_flash_posts_title',
	array(
		'default'           => __( 'Flash Posts', 'blog-content' ),
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'blog_content_flash_posts_title',
	array(
		'label'           => esc_html__( 'Section Title', 'blog-content' ),
		'section'         => 'blog_content_flash_posts_section',
		'active_callback' => 'blog_content_if_flash_posts_enabled',
	)
);

// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
	$wp_customize->selective_refresh->add_partial(
		'blog_content_flash_posts_title',
		array(
			'selector'            => '.flash-posts .flash-posts-title span',
			'settings'            => 'blog_content_flash_posts_title',
			'container_inclusive' => false,
			'fallback_refresh'    => true,
		)
	);
}

// flash_posts content type settings.
$wp_customize->add_setting(
	'blog_content_flash_posts_content_type',
	array(
		'default'           => 'post',
		'sanitize_callback' => 'blog_content_sanitize_select',
	)
);

$wp_customize->add_control(
	'blog_content_flash_posts_content_type',
	array(
		'label'           => esc_html__( 'Content type:', 'blog-content' ),
		'description'     => esc_html__( 'Choose where you want to render the content from.', 'blog-content' ),
		'section'         => 'blog_content_flash_posts_section',
		'type'            => 'select',
		'active_callback' => 'blog_content_if_flash_posts_enabled',
		'choices'         => array(
			'post'     => esc_html__( 'Post', 'blog-content' ),
			'category' => esc_html__( 'Category', 'blog-content' ),
		),
	)
);

for ( $i = 1; $i <= 5; $i++ ) {
	// flash_posts post setting.
	$wp_customize->add_setting(
		'blog_content_flash_posts_post_' . $i,
		array(
			'sanitize_callback' => 'blog_content_sanitize_dropdown_pages',
		)
	);

	$wp_customize->add_control(
		'blog_content_flash_posts_post_' . $i,
		array(
			'label'           => sprintf( esc_html__( 'Post %d', 'blog-content' ), $i ),
			'section'         => 'blog_content_flash_posts_section',
			'type'            => 'select',
			'choices'         => blog_content_get_post_choices(),
			'active_callback' => 'blog_content_flash_posts_section_content_type_post_enabled',
		)
	);

}

// flash_posts category setting.
$wp_customize->add_setting(
	'blog_content_flash_posts_category',
	array(
		'sanitize_callback' => 'blog_content_sanitize_select',
	)
);

$wp_customize->add_control(
	'blog_content_flash_posts_category',
	array(
		'label'           => esc_html__( 'Category', 'blog-content' ),
		'section'         => 'blog_content_flash_posts_section',
		'type'            => 'select',
		'choices'         => blog_content_get_post_cat_choices(),
		'active_callback' => 'blog_content_flash_posts_section_content_type_category_enabled',
	)
);

/*========================Active Callback==============================*/
function blog_content_if_flash_posts_enabled( $control ) {
	return $control->manager->get_setting( 'blog_content_flash_posts_section_enable' )->value();
}
function blog_content_flash_posts_section_content_type_post_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'blog_content_flash_posts_content_type' )->value();
	return blog_content_if_flash_posts_enabled( $control ) && ( 'post' === $content_type );
}
function blog_content_flash_posts_section_content_type_category_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'blog_content_flash_posts_content_type' )->value();
	return blog_content_if_flash_posts_enabled( $control ) && ( 'category' === $content_type );
}
