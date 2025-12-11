<?php

// Home Page Customizer panel.
$wp_customize->add_panel(
	'blog_content_frontpage_panel',
	array(
		'title'    => esc_html__( 'Frontpage Sections', 'blog-content' ),
		'priority' => 140,
	)
);

$customizer_settings = array( 'flash-posts', 'banner', 'categories', 'advertisement' );

foreach ( $customizer_settings as $customizer ) {

	require get_template_directory() . '/inc/customizer-settings/frontpage-customizer/' . $customizer . '.php';

}
