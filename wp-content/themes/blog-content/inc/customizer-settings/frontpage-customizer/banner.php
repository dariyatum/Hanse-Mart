<?php
/**
 * Frontpage Customizer Settings
 *
 * @package Blog Content
 *
 * Banner Section
 */

$wp_customize->add_section(
	'blog_content_banner_section',
	array(
		'title'    => esc_html__( 'Banner Section', 'blog-content' ),
		'panel'    => 'blog_content_frontpage_panel',
		'priority' => 20,
	)
);

// Banner section enable settings.
$wp_customize->add_setting(
	'blog_content_banner_section_enable',
	array(
		'default'           => false,
		'sanitize_callback' => 'blog_content_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	new Blog_Content_Toggle_Checkbox_Custom_control(
		$wp_customize,
		'blog_content_banner_section_enable',
		array(
			'label'    => esc_html__( 'Enable Banner Section', 'blog-content' ),
			'type'     => 'checkbox',
			'settings' => 'blog_content_banner_section_enable',
			'section'  => 'blog_content_banner_section',
		)
	)
);

// Banner Posts Sub Heading.
$wp_customize->add_setting(
	'blog_content_banner_posts_sub_heading',
	array(
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	new Blog_Content_Section_Sub_Heading_Control(
		$wp_customize,
		'blog_content_banner_posts_sub_heading',
		array(
			'label'           => esc_html__( 'Banner Posts Section', 'blog-content' ),
			'settings'        => 'blog_content_banner_posts_sub_heading',
			'section'         => 'blog_content_banner_section',
			'active_callback' => 'blog_content_if_banner_enabled',
		)
	)
);

// banner content type settings.
$wp_customize->add_setting(
	'blog_content_banner_posts_content_type',
	array(
		'default'           => 'post',
		'sanitize_callback' => 'blog_content_sanitize_select',
	)
);

$wp_customize->add_control(
	'blog_content_banner_posts_content_type',
	array(
		'label'           => esc_html__( 'Content type:', 'blog-content' ),
		'description'     => esc_html__( 'Choose where you want to render the content from.', 'blog-content' ),
		'section'         => 'blog_content_banner_section',
		'type'            => 'select',
		'active_callback' => 'blog_content_if_banner_enabled',
		'choices'         => array(
			'post'     => esc_html__( 'Post', 'blog-content' ),
			'category' => esc_html__( 'Category', 'blog-content' ),
		),
	)
);

for ( $i = 1; $i <= 3; $i++ ) {
	// banner post setting.
	$wp_customize->add_setting(
		'blog_content_banner_posts_post_' . $i,
		array(
			'sanitize_callback' => 'blog_content_sanitize_dropdown_pages',
		)
	);

	$wp_customize->add_control(
		'blog_content_banner_posts_post_' . $i,
		array(
			'label'           => sprintf( esc_html__( 'Post %d', 'blog-content' ), $i ),
			'section'         => 'blog_content_banner_section',
			'type'            => 'select',
			'choices'         => blog_content_get_post_choices(),
			'active_callback' => 'blog_content_banner_posts_content_type_post_enabled',
		)
	);

}

// banner category setting.
$wp_customize->add_setting(
	'blog_content_banner_posts_category',
	array(
		'sanitize_callback' => 'blog_content_sanitize_select',
	)
);

$wp_customize->add_control(
	'blog_content_banner_posts_category',
	array(
		'label'           => esc_html__( 'Category', 'blog-content' ),
		'section'         => 'blog_content_banner_section',
		'type'            => 'select',
		'choices'         => blog_content_get_post_cat_choices(),
		'active_callback' => 'blog_content_banner_posts_content_type_category_enabled',
	)
);

// Banner Hot Topics Sub Heading.
$wp_customize->add_setting(
	'blog_content_banner_hot_topics_sub_heading',
	array(
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	new Blog_Content_Section_Sub_Heading_Control(
		$wp_customize,
		'blog_content_banner_hot_topics_sub_heading',
		array(
			'label'           => esc_html__( 'Banner Hot Topics Section', 'blog-content' ),
			'settings'        => 'blog_content_banner_hot_topics_sub_heading',
			'section'         => 'blog_content_banner_section',
			'active_callback' => 'blog_content_if_banner_enabled',
		)
	)
);

// banner content type settings.
$wp_customize->add_setting(
	'blog_content_banner_hot_topics_content_type',
	array(
		'default'           => 'post',
		'sanitize_callback' => 'blog_content_sanitize_select',
	)
);

$wp_customize->add_control(
	'blog_content_banner_hot_topics_content_type',
	array(
		'label'           => esc_html__( 'Content type:', 'blog-content' ),
		'description'     => esc_html__( 'Choose where you want to render the content from.', 'blog-content' ),
		'section'         => 'blog_content_banner_section',
		'type'            => 'select',
		'active_callback' => 'blog_content_if_banner_enabled',
		'choices'         => array(
			'post'     => esc_html__( 'Post', 'blog-content' ),
			'category' => esc_html__( 'Category', 'blog-content' ),
		),
	)
);

for ( $i = 1; $i <= 2; $i++ ) {
	// banner post setting.
	$wp_customize->add_setting(
		'blog_content_banner_hot_topics_post_' . $i,
		array(
			'sanitize_callback' => 'blog_content_sanitize_dropdown_pages',
		)
	);

	$wp_customize->add_control(
		'blog_content_banner_hot_topics_post_' . $i,
		array(
			'label'           => sprintf( esc_html__( 'Post %d', 'blog-content' ), $i ),
			'section'         => 'blog_content_banner_section',
			'type'            => 'select',
			'choices'         => blog_content_get_post_choices(),
			'active_callback' => 'blog_content_banner_hot_topics_content_type_post_enabled',
		)
	);

}

// banner category setting.
$wp_customize->add_setting(
	'blog_content_banner_hot_topics_category',
	array(
		'sanitize_callback' => 'blog_content_sanitize_select',
	)
);

$wp_customize->add_control(
	'blog_content_banner_hot_topics_category',
	array(
		'label'           => esc_html__( 'Category', 'blog-content' ),
		'section'         => 'blog_content_banner_section',
		'type'            => 'select',
		'choices'         => blog_content_get_post_cat_choices(),
		'active_callback' => 'blog_content_banner_hot_topics_content_type_category_enabled',
	)
);

/*========================Active Callback==============================*/
function blog_content_if_banner_enabled( $control ) {
	return $control->manager->get_setting( 'blog_content_banner_section_enable' )->value();
}
// Banner Posts.
function blog_content_banner_posts_content_type_post_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'blog_content_banner_posts_content_type' )->value();
	return blog_content_if_banner_enabled( $control ) && ( 'post' === $content_type );
}
function blog_content_banner_posts_content_type_category_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'blog_content_banner_posts_content_type' )->value();
	return blog_content_if_banner_enabled( $control ) && ( 'category' === $content_type );
}
// Banner Hot Topics.
function blog_content_banner_hot_topics_content_type_post_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'blog_content_banner_hot_topics_content_type' )->value();
	return blog_content_if_banner_enabled( $control ) && ( 'post' === $content_type );
}
function blog_content_banner_hot_topics_content_type_category_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'blog_content_banner_hot_topics_content_type' )->value();
	return blog_content_if_banner_enabled( $control ) && ( 'category' === $content_type );
}
