<?php
/**
 * Frontpage Banner Section.
 *
 * @package Blog Content
 */

// Banner Section.
$banner_section = get_theme_mod( 'blog_content_banner_section_enable', false );

if ( false === $banner_section ) {
	return;
}

$banner_posts_content_ids  = $top_posts_content_ids = array();
$banner_posts_content_type = get_theme_mod( 'blog_content_banner_posts_content_type', 'post' );
$hot_topics_content_type   = get_theme_mod( 'blog_content_banner_hot_topics_content_type', 'post' );

if ( $banner_posts_content_type === 'post' ) {

	for ( $i = 1; $i <= 3; $i++ ) {
		$banner_posts_content_ids[] = get_theme_mod( 'blog_content_banner_posts_post_' . $i );
	}

	$banner_posts_args = array(
		'post_type'           => 'post',
		'posts_per_page'      => absint( 3 ),
		'ignore_sticky_posts' => true,
	);

	if ( ! empty( array_filter( $banner_posts_content_ids ) ) ) {
		$banner_posts_args['post__in'] = array_filter( $banner_posts_content_ids );
		$banner_posts_args['orderby']  = 'post__in';
	} else {
		$banner_posts_args['orderby'] = 'date';
	}
} else {
	$cat_content_id    = get_theme_mod( 'blog_content_banner_posts_category' );
	$banner_posts_args = array(
		'cat'            => $cat_content_id,
		'posts_per_page' => absint( 3 ),
	);
}

if ( $hot_topics_content_type === 'post' ) {

	for ( $i = 1; $i <= 2; $i++ ) {
		$hot_topics_content_ids[] = get_theme_mod( 'blog_content_banner_hot_topics_post_' . $i );
	}

	$hot_topics_args = array(
		'post_type'           => 'post',
		'posts_per_page'      => absint( 2 ),
		'ignore_sticky_posts' => true,
	);

	if ( ! empty( array_filter( $hot_topics_content_ids ) ) ) {
		$hot_topics_args['post__in'] = array_filter( $hot_topics_content_ids );
		$hot_topics_args['orderby']  = 'post__in';
	} else {
		$hot_topics_args['orderby'] = 'date';
	}
} else {
	$cat_content_id  = get_theme_mod( 'blog_content_banner_hot_topics_category' );
	$hot_topics_args = array(
		'cat'            => $cat_content_id,
		'posts_per_page' => absint( 2 ),
	);
}

?>

<section id="blog_content_banner_section" class="banner-section banner-layout-2">
	<div class="site-container-width">

		<div class="banner-content-wrap">
			<?php
			require get_template_directory() . '/inc/frontpage-sections/banner/banner-posts.php';

			require get_template_directory() . '/inc/frontpage-sections/banner/hot-topics.php';

			?>
		</div>
		
	</div>
</section>