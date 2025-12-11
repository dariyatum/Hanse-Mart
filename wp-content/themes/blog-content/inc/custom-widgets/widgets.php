<?php

// Slider Widget.
require get_template_directory() . '/inc/custom-widgets/slider-widget.php';

// Author Info Widget.
require get_template_directory() . '/inc/custom-widgets/info-author-widget.php';

// Featured Posts Widget.
require get_template_directory() . '/inc/custom-widgets/featured-posts-widget.php';

/**
 * Register Widgets
 */
function blog_content_register_widgets() {

	register_widget( 'Blog_Content_Slider_Widget' );

	register_widget( 'Blog_Content_Author_Info_Widget' );

	register_widget( 'Blog_Content_Featured_Posts_Widget' );

}
add_action( 'widgets_init', 'blog_content_register_widgets' );
