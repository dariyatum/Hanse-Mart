<?php
/**
 * Template part for displaying front page introduction.
 *
 * @package Blog Content
 */

// Advertisement Section.
$ads_section = get_theme_mod( 'blog_content_advertisement_section_enable', false );

if ( false === $ads_section ) {
	return;
}

$advertisement_image = get_theme_mod( 'blog_content_advertisement_image', '' );
$advertisement_url   = get_theme_mod( 'blog_content_advertisement_link', '' );
if ( ! empty( $advertisement_image ) ) {
	?>
	<section id="blog_content_advertisement_section" class="commercial-area section-divider">
		<div class="site-container-width">
			<a href="<?php echo esc_url( $advertisement_url ); ?>"><img src="<?php echo esc_url( $advertisement_image ); ?>" alt="<?php esc_attr_e( 'Advertisement Image', 'blog-content' ); ?>"></a>
		</div>
	</section>

	<?php
}
