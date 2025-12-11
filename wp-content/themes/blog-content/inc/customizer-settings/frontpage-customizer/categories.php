<?php
/**
 * Artify Themes Customizer
 *
 * @package Blog Content
 *
 * Categories Section
 */

$wp_customize->add_section(
	'blog_content_categories_section',
	array(
		'title'    => esc_html__( 'Categories Section', 'blog-content' ),
		'panel'    => 'blog_content_frontpage_panel',
		'priority' => 30,
	)
);

// Categories Section section enable settings.
$wp_customize->add_setting(
	'blog_content_categories_section_enable',
	array(
		'default'           => false,
		'sanitize_callback' => 'blog_content_sanitize_checkbox',
	)
);

$wp_customize->add_control(
	new Blog_Content_Toggle_Checkbox_Custom_control(
		$wp_customize,
		'blog_content_categories_section_enable',
		array(
			'label'    => esc_html__( 'Enable Categories Section', 'blog-content' ),
			'type'     => 'checkbox',
			'settings' => 'blog_content_categories_section_enable',
			'section'  => 'blog_content_categories_section',
		)
	)
);

// Categories Section title settings.
$wp_customize->add_setting(
	'blog_content_categories_title',
	array(
		'default'           => __( 'Category Section', 'blog-content' ),
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'blog_content_categories_title',
	array(
		'label'           => esc_html__( 'Section Title', 'blog-content' ),
		'section'         => 'blog_content_categories_section',
		'active_callback' => 'blog_content_if_categories_enabled',
	)
);

// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
	$wp_customize->selective_refresh->add_partial(
		'blog_content_categories_title',
		array(
			'selector'            => '.categories-section h3.section-title',
			'settings'            => 'blog_content_categories_title',
			'container_inclusive' => false,
			'fallback_refresh'    => true,
		)
	);
}

// Categories Section subtitle settings.
$wp_customize->add_setting(
	'blog_content_categories_subtitle',
	array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'blog_content_categories_subtitle',
	array(
		'label'           => esc_html__( 'Section Subtitle', 'blog-content' ),
		'section'         => 'blog_content_categories_section',
		'active_callback' => 'blog_content_if_categories_enabled',
	)
);

for ( $i = 1; $i <= 5; $i++ ) {

	// categories category setting.
	$wp_customize->add_setting(
		'blog_content_categories_category_' . $i,
		array(
			'sanitize_callback' => 'blog_content_sanitize_select',
		)
	);

	$wp_customize->add_control(
		'blog_content_categories_category_' . $i,
		array(
			'label'           => sprintf( esc_html__( 'Category %d', 'blog-content' ), $i ),
			'section'         => 'blog_content_categories_section',
			'settings'        => 'blog_content_categories_category_' . $i,
			'type'            => 'select',
			'choices'         => blog_content_get_post_cat_choices(),
			'active_callback' => 'blog_content_if_categories_enabled',
		)
	);

	// categories bg image.
	$wp_customize->add_setting(
		'blog_content_categories_image_' . $i,
		array(
			'default'           => '',
			'sanitize_callback' => 'blog_content_sanitize_image',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'blog_content_categories_image_' . $i,
			array(
				'label'           => sprintf( esc_html__( 'Category Image %d', 'blog-content' ), $i ),
				'section'         => 'blog_content_categories_section',
				'settings'        => 'blog_content_categories_image_' . $i,
				'active_callback' => 'blog_content_if_categories_enabled',
			)
		)
	);

}

/*========================Active Callback==============================*/
function blog_content_if_categories_enabled( $control ) {
	return $control->manager->get_setting( 'blog_content_categories_section_enable' )->value();
}

/*========================Partial Refresh==============================*/
if ( ! function_exists( 'blog_content_categories_title_text_partial' ) ) :
	// Title.
	function blog_content_categories_title_text_partial() {
		return esc_html( get_theme_mod( 'blog_content_categories_title' ) );
	}
endif;
