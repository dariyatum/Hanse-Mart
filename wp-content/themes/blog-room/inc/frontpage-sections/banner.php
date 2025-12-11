<?php
/**
 * Frontpage Banner Section.
 *
 * @package Blog Room
 */

// Banner Section.
$banner_section = get_theme_mod( 'blog_room_banner_section_enable', false );

if ( false === $banner_section ) {
	return;
}

$banner_posts_content_ids  = array();
$banner_posts_content_type = get_theme_mod( 'blog_room_banner_posts_content_type', 'post' );

if ( $banner_posts_content_type === 'post' ) {

	for ( $i = 1; $i <= 5; $i++ ) {
		$banner_posts_content_ids[] = get_theme_mod( 'blog_room_banner_posts_post_' . $i );
	}

	$banner_posts_args = array(
		'post_type'           => 'post',
		'posts_per_page'      => absint( 5 ),
		'ignore_sticky_posts' => true,
	);

	if ( ! empty( array_filter( $banner_posts_content_ids ) ) ) {
		$banner_posts_args['post__in'] = array_filter( $banner_posts_content_ids );
		$banner_posts_args['orderby']  = 'post__in';
	} else {
		$banner_posts_args['orderby'] = 'date';
	}
} else {
	$cat_content_id    = get_theme_mod( 'blog_room_banner_posts_category' );
	$banner_posts_args = array(
		'cat'            => $cat_content_id,
		'posts_per_page' => absint( 5 ),
	);
}

?>

<section id="blog_room_banner_section" class="banner-section banner-layout-3">
	<div class="site-container-width">

		<div class="banner-content-wrap">
			<?php
			$banner_posts_query = new WP_Query( $banner_posts_args );
			if ( $banner_posts_query->have_posts() ) {
				?>
				<div class="main-banner-posts">
					<div class="content-wrap banner-carousel artify-navigation">
						<?php
						while ( $banner_posts_query->have_posts() ) :
							$banner_posts_query->the_post();
							?>
							<div class="carousel-container">
								<div class="single-card-container tile-card">
									<div class="single-card-image">
										<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
									</div>
									<div class="single-card-detail">
										<div class="card-categories">
											<?php blog_content_categories_list(); ?>
										</div>
										<h3 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
										<div class="card-meta">
											<?php
											blog_content_posted_by();
											blog_content_posted_on();
											?>
										</div>
									</div>
								</div>
							</div>
							<?php
						endwhile;
						wp_reset_postdata();
						?>
					</div>
				</div>
			<?php } ?>
		</div>
		
	</div>
</section>