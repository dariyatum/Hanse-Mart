<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Blog Room
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary-content"><?php esc_html_e( 'Skip to content', 'blog-room' ); ?></a>

		<div id="loader">
			<div class="loader-container">
				<div id="preloader">
					<div class="pre-loader-3"></div>
				</div>
			</div>
		</div><!-- #loader -->

		<?php $topbar_enable = get_theme_mod( 'blog_content_topbar_enable', false ); ?>

		<header id="masthead" class="site-header">
			<?php if ( $topbar_enable === true ) { ?>
				<div class="site-top-header">
					<div class="site-container-width">
						<?php if ( has_nav_menu( 'topbar-menu' ) ) { ?>
							<div class="topbar-menu">
								<div class="menu-secondary-menu-container">
									<?php
									wp_nav_menu(
										array(
											'menu_id'        => 'header-secondary-menu',
											'theme_location' => 'topbar-menu',
										)
									);
									?>
								</div>							
							</div>
						<?php } ?>
						<div class="top-header-right">
							<span class="header-date"><?php echo esc_html( wp_date( 'l, M d, Y' ) ); ?></span>
						</div>
						
					</div>
				</div>
			<?php } ?>

			<div class="site-middle-header">
				<?php if ( ! empty( get_header_image() ) ) { ?>
					<div class="theme-header-img">
						<img src="<?php echo esc_url( get_header_image() ); ?>" alt="<?php esc_attr_e( 'Header Image', 'blog-room' ); ?>">
					</div>
				<?php } ?>

				<div class="site-container-width">
					<div class="site-middle-header-wrapper">
					
						<div class="site-branding">
							<?php if ( has_custom_logo() ) { ?>
								<div class="site-logo">
									<?php the_custom_logo(); ?>
								</div>
								<?php
							}
								if ( get_theme_mod( 'blog_content_header_text_display', true ) === true ) {
									?>
									<div class="site-identity">
										<?php
											if ( is_front_page() && is_home() ) :
												?>
											<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
												<?php
										else :
											?>
											<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
											<?php
										endif;
											$blog_content_description = get_bloginfo( 'description', 'display' );
											if ( $blog_content_description || is_customize_preview() ) :
												?>
												<p class="site-description"><?php echo $blog_content_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
												<?php
											endif;
										?>
									</div>
								<?php } ?>
						</div>
					</div>
				</div>
			</div>
		
			<div class="theme-main-header">
				<div class="site-container-width">
					<div class="theme-main-header-wrapper">
						<div class="primary-nav">
							<div class="primary-nav-container">
								<div class="header-nav">
									<nav id="site-navigation" class="main-navigation">
										<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
											<span></span>
											<span></span>
											<span></span>
										</button>
										<?php
										if ( has_nav_menu( 'primary' ) ) {
											wp_nav_menu(
												array(
													'theme_location' => 'primary',
													'menu_id' => 'primary-menu',
												)
											);
										}
										?>
									</nav><!-- #site-navigation -->
								</div>
							</div>
						</div>
						<div class="main-header-right">
							<?php if ( has_nav_menu( 'social' ) ) : ?>
								<div class="social-icons">
									<?php
									wp_nav_menu(
										array(
											'menu_class'  => 'menu social-links',
											'link_before' => '<span class="screen-reader-text">',
											'link_after'  => '</span>',
											'theme_location' => 'social',
										)
									);
									?>
								</div>
							<?php endif; ?>
							<div class="header-search">
								<div class="header-search-wrap">
									<a href="#" title="Search" class="header-search-icon">
										<i class="fa fa-search"></i>
									</a>
									<div class="header-search-form">
										<?php get_search_form(); ?>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</header><!-- #masthead -->

		<div id="primary-content" class="primary-site-content">
			<?php

			if ( ! is_front_page() || is_home() ) {

				if ( is_front_page() ) {

					require get_theme_file_path() . '/inc/frontpage-sections/sections.php';

				}

				?>

				<div id="content" class="site-content site-container-width">
					<div class="theme-wrapper">

					<?php } ?>
