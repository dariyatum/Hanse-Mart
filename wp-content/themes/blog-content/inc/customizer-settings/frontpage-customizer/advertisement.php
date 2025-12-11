<?php
/**
 * Artify Themes Customizer
 *
 * @package Blog Content
 *
 * Advertisement Section
 */

$wp_customize->add_section(
	'blog_content_advertisement_section',
	array(
		'title'    => esc_html__( 'Advertisement Section', 'blog-content' ),
		'panel'    => 'blog_content_frontpage_panel',
		'priority' => 40,
	)
);

// Advertisement Section section enable settings.
$wp_customize->add_setting(
	'blog_content_advertisement_section_enable',
	array(
		'default'           => false,
		'sanitize_callback' => 'blog_content_sanitize_checkbox',
	)
);

$wp_customize->add_control(
	new Blog_Content_Toggle_Checkbox_Custom_control(
		$wp_customize,
		'blog_content_advertisement_section_enable',
		array(
			'label'    => esc_html__( 'Enable Advertisement Section', 'blog-content' ),
			'type'     => 'checkbox',
			'settings' => 'blog_content_advertisement_section_enable',
			'section'  => 'blog_content_advertisement_section',
		)
	)
);

// Advertisement image.
$wp_customize->add_setting(
	'blog_content_advertisement_image',
	array(
		'default'           => '',
		'sanitize_callback' => 'blog_content_sanitize_image',
	)
);

$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'blog_content_advertisement_image',
		array(
			'label'           => esc_html__( 'Advertisement Image', 'blog-content' ),
			'section'         => 'blog_content_advertisement_section',
			'settings'        => 'blog_content_advertisement_image',
			'active_callback' => 'blog_content_if_advertisement_enabled',
		)
	)
);

// Advertisement Section - Image Url.
$wp_customize->add_setting(
	'blog_content_advertisement_link',
	array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	)
);

$wp_customize->add_control(
	'blog_content_advertisement_link',
	array(
		'label'           => esc_html__( 'Advertisement Link', 'blog-content' ),
		'section'         => 'blog_content_advertisement_section',
		'settings'        => 'blog_content_advertisement_link',
		'type'            => 'url',
		'active_callback' => 'blog_content_if_advertisement_enabled',
	)
);

/*========================Active Callback==============================*/
function blog_content_if_advertisement_enabled( $control ) {
	return $control->manager->get_setting( 'blog_content_advertisement_section_enable' )->value();
}
