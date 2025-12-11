<?php
/**
 * Template part for displaying front page introduction.
 *
 * @package Blog Content
 */

// Categories Section.
$categories_section = get_theme_mod( 'blog_content_categories_section_enable', false );

if ( false === $categories_section ) {
	return;
}

$section_content = $content_ids = array();

$content_ids = array();
for ( $i = 1; $i <= 5; $i++ ) {
	$content_post_id = get_theme_mod( 'blog_content_categories_category_' . $i );
	if ( ! empty( $content_post_id ) ) {
		$content_ids[] = $content_post_id;
	}
}
$args = array(
	'taxonomy'   => 'category',
	'number'     => 5,
	'include'    => array_filter( $content_ids ),
	'orderby'    => 'include',
	'hide_empty' => false,
);

$terms = get_terms( $args );
$i     = 1;
foreach ( $terms as $value ) {
	$data['title']         = $value->name;
	$data['count']         = $value->count;
	$data['permalink']     = get_term_link( $value->term_id );
	$data['thumbnail_url'] = get_theme_mod( 'blog_content_categories_image_' . $i, '' );
	array_push( $section_content, $data );
	$i++;
}

$section_title    = get_theme_mod( 'blog_content_categories_title', __( 'Category Section', 'blog-content' ) );
$section_subtitle = get_theme_mod( 'blog_content_categories_subtitle', '' );
?>

<section id="blog_content_categories_section" class="categories-section section-divider category-layout-2">
	<div class="site-container-width">
		<div class="header-title">
			<h3 class="section-title"><?php echo esc_html( $section_title ); ?></h3>
			<p class="section-sub-title"><?php echo esc_html( $section_subtitle ); ?></p>
		</div>
		<div class="container-wrap">
			<?php foreach ( $section_content as $content ) : ?>
				<div class="single-card-container">
					<?php if ( ! empty( $content['thumbnail_url'] ) ) : ?>
						<div class="single-card-image">
							<img src="<?php echo esc_url( $content['thumbnail_url'] ); ?>" alt="<?php echo esc_attr( $content['title'] ); ?>">
						</div>
					<?php endif; ?>
					<div class="single-card-detail">
						<h3 class="category-title"><a href="<?php echo esc_url( $content['permalink'] ); ?>"><?php echo esc_html( $content['title'] ); ?></a></h3>
						<?php $posts_counts = $content['count'] < 2 ? $content['count'] . ' article' : $content['count'] . ' articles'; ?>
						<span class="article-counter"><?php echo esc_html( $posts_counts ); ?></span>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<?php
