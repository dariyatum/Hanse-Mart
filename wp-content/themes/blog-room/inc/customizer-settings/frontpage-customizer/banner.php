<?php

/**
 * Frontpage Customizer Settings
 *
 * @package Blog Content
 *
 * Banner Section
 */

$wp_customize->add_section(
	'blog_room_banner_section',
	array(
		'title' => esc_html__('Banner Section', 'blog-room'),
		'panel' => 'blog_content_frontpage_panel',
		'priority' => 15,
	)
);

// Banner section enable settings.
$wp_customize->add_setting(
	'blog_room_banner_section_enable',
	array(
		'default'           => false,
		'sanitize_callback' => 'blog_content_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	new Blog_Room_Toggle_Checkbox_Custom_control(
		$wp_customize,
		'blog_room_banner_section_enable',
		array(
			'label'    => esc_html__('Enable Banner Section', 'blog-room'),
			'type'     => 'checkbox',
			'settings' => 'blog_room_banner_section_enable',
			'section'  => 'blog_room_banner_section',
		)
	)
);

// banner content type settings.
$wp_customize->add_setting(
	'blog_room_banner_posts_content_type',
	array(
		'default'           => 'post',
		'sanitize_callback' => 'blog_content_sanitize_select',
	)
);

$wp_customize->add_control(
	'blog_room_banner_posts_content_type',
	array(
		'label'           => esc_html__('Content type:', 'blog-room'),
		'description'     => esc_html__('Choose where you want to render the content from.', 'blog-room'),
		'section'         => 'blog_room_banner_section',
		'type'            => 'select',
		'active_callback' => 'blog_room_if_banner_enabled',
		'choices'         => array(
			'post'     => esc_html__('Post', 'blog-room'),
			'category' => esc_html__('Category', 'blog-room'),
		),
	)
);

for ($i = 1; $i <= 5; $i++) {
	// banner post setting.
	$wp_customize->add_setting(
		'blog_room_banner_posts_post_' . $i,
		array(
			'sanitize_callback' => 'blog_content_sanitize_dropdown_pages',
		)
	);

	$wp_customize->add_control(
		'blog_room_banner_posts_post_' . $i,
		array(
			'label'           => sprintf(esc_html__('Post %d', 'blog-room'), $i),
			'section'         => 'blog_room_banner_section',
			'type'            => 'select',
			'choices'         => blog_content_get_post_choices(),
			'active_callback' => 'blog_room_banner_posts_content_type_post_enabled',
		)
	);
}

// banner category setting.
$wp_customize->add_setting(
	'blog_room_banner_posts_category',
	array(
		'sanitize_callback' => 'blog_content_sanitize_select',
	)
);

$wp_customize->add_control(
	'blog_room_banner_posts_category',
	array(
		'label'           => esc_html__('Category', 'blog-room'),
		'section'         => 'blog_room_banner_section',
		'type'            => 'select',
		'choices'         => blog_content_get_post_cat_choices(),
		'active_callback' => 'blog_room_banner_posts_content_type_category_enabled',
	)
);

/*========================Active Callback==============================*/
function blog_room_if_banner_enabled($control)
{
	return $control->manager->get_setting('blog_room_banner_section_enable')->value();
}
// Banner Posts.
function blog_room_banner_posts_content_type_post_enabled($control)
{
	$content_type = $control->manager->get_setting('blog_room_banner_posts_content_type')->value();
	return blog_room_if_banner_enabled($control) && ('post' === $content_type);
}
function blog_room_banner_posts_content_type_category_enabled($control)
{
	$content_type = $control->manager->get_setting('blog_room_banner_posts_content_type')->value();
	return blog_room_if_banner_enabled($control) && ('category' === $content_type);
}
