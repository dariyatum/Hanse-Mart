<?php

/**
* Get started notice
*/

add_action( 'wp_ajax_marketplace_shop_dismissed_notice_handler', 'marketplace_shop_ajax_notice_handler' );

/**
 * AJAX handler to store the state of dismissible notices.
 */
function marketplace_shop_ajax_notice_handler() {
    if ( isset( $_POST['type'] ) ) {
        // Pick up the notice "type" - passed via jQuery (the "data-notice" attribute on the notice)
        $type = sanitize_text_field( wp_unslash( $_POST['type'] ) );
        // Store it in the options table
        update_option( 'dismissed-' . $type, TRUE );
    }
}

function marketplace_shop_deprecated_hook_admin_notice() {
        // Check if it's been dismissed...
        if ( ! get_option('dismissed-get_started', FALSE ) ) {
        $current_screen = get_current_screen();
			if ($current_screen->id !== 'appearance_page_marketplace-shop-guide-page') {
         $marketplace_shop_comments_theme = wp_get_theme(); ?>
            <div class="marketplace-shop-notice-wrapper updated notice notice-get-started-class is-dismissible" data-notice="get_started">
			<div class="marketplace-shop-notice">
				<div class="marketplace-shop-notice-content">
					<div class="marketplace-shop-notice-heading">
						<h2><?php esc_html_e('Thanks For Installing ','marketplace-shop'); ?><?php echo esc_html( $marketplace_shop_comments_theme ); ?> <?php esc_html_e('Theme','marketplace-shop'); ?></h2>
					<p><?php 
                    /* translators: %s: theme name */
                    printf(esc_html__("%s is now installed and ready to use. We've provide some links to get you started.", 'marketplace-shop'), $marketplace_shop_comments_theme ); ?></p>
					</div>
					<div class="diplay-flex-btn">
						<a class="button button-primary" href="<?php echo esc_url(admin_url('themes.php?page=marketplace-shop-guide-page')); ?>"><?php echo esc_html__('GET STARTED','marketplace-shop'); ?></a>
						<a class="button button-primary" target="_blank" href="<?php echo esc_url( MARKETPLACE_SHOP_RENTAL_BUY_NOW ); ?>"><?php echo esc_html__('GO TO PREMIUM','marketplace-shop'); ?></a>
					</div>
				</div>
				<div class="marketplace-shop-notice-img">
					<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/notification.png'); ?>" alt="<?php esc_attr_e('logo', 'marketplace-shop'); ?>">
				</div>
			</div>
		</div>
        <?php }
	}
}

add_action( 'admin_notices', 'marketplace_shop_deprecated_hook_admin_notice' );

function marketplace_shop_admin_enqueue_scripts() {
	wp_enqueue_style( 'marketplace-shop-admin-style', esc_url( get_template_directory_uri() ).'/assets/css/main.css' );
	wp_enqueue_script( 'marketplace-shop-admin-script', get_template_directory_uri() . '/assets/js/marketplace-shop-admin-script.js', array( 'jquery' ), '', true );
    wp_localize_script( 'marketplace-shop-admin-script', 'marketplace_shop_ajax_object',
        array( 'ajax_url' => admin_url( 'admin-ajax.php' ) )
    );
}
add_action( 'admin_enqueue_scripts', 'marketplace_shop_admin_enqueue_scripts' );

add_action( 'admin_menu', 'marketplace_shop_getting_started' );
function marketplace_shop_getting_started() {
	add_theme_page( esc_html__('Get Started', 'marketplace-shop'), esc_html__('Get Started', 'marketplace-shop'), 'edit_theme_options', 'marketplace-shop-guide-page', 'marketplace_shop_test_guide');
}

if ( ! defined( 'MARKETPLACE_SHOP_RENTAL_DOCS_FREE' ) ) {
define('MARKETPLACE_SHOP_RENTAL_DOCS_FREE',__('https://demo.misbahwp.com/docs/marketplace-shop-free-docs/','marketplace-shop'));
}
if ( ! defined( 'MARKETPLACE_SHOP_RENTAL_DOCS_PRO' ) ) {
define('MARKETPLACE_SHOP_RENTAL_DOCS_PRO',__('https://demo.misbahwp.com/docs/marketplace-shop-pro-docs/','marketplace-shop'));
}
if ( ! defined( 'MARKETPLACE_SHOP_RENTAL_BUY_NOW' ) ) {
define('MARKETPLACE_SHOP_RENTAL_BUY_NOW',__('https://www.misbahwp.com/products/electronic-market-wordpress-theme','marketplace-shop'));
}
if ( ! defined( 'MARKETPLACE_SHOP_RENTAL_SUPPORT_FREE' ) ) {
define('MARKETPLACE_SHOP_RENTAL_SUPPORT_FREE',__('https://wordpress.org/support/theme/marketplace-shop','marketplace-shop'));
}
if ( ! defined( 'MARKETPLACE_SHOP_RENTAL_REVIEW_FREE' ) ) {
define('MARKETPLACE_SHOP_RENTAL_REVIEW_FREE',__('https://wordpress.org/support/theme/marketplace-shop/reviews/#new-post','marketplace-shop'));
}
if ( ! defined( 'MARKETPLACE_SHOP_RENTAL_DEMO_PRO' ) ) {
define('MARKETPLACE_SHOP_RENTAL_DEMO_PRO',__('https://demo.misbahwp.com/marketplace-shop/','marketplace-shop'));
}
if( ! defined( 'MARKETPLACE_SHOP_RENTAL_THEME_BUNDLE' ) ) {
define('MARKETPLACE_SHOP_RENTAL_THEME_BUNDLE',__('https://www.misbahwp.com/products/wordpress-bundle','marketplace-shop'));
}

function marketplace_shop_test_guide() { ?>
	<?php $marketplace_shop_theme = wp_get_theme(); ?>

	<div class="wrap" id="main-page">
		<div id="lefty">
			<div id="admin_links">
				<a href="<?php echo esc_url( MARKETPLACE_SHOP_RENTAL_DOCS_FREE ); ?>" target="_blank" class="blue-button-1"><?php esc_html_e( 'Documentation', 'marketplace-shop' ) ?></a>
				<a href="<?php echo esc_url( admin_url('customize.php') ); ?>" id="customizer" target="_blank"><?php esc_html_e( 'Customize', 'marketplace-shop' ); ?> </a>
				<a class="blue-button-1" href="<?php echo esc_url( MARKETPLACE_SHOP_RENTAL_SUPPORT_FREE ); ?>" target="_blank" class="btn3"><?php esc_html_e( 'Support', 'marketplace-shop' ) ?></a>
				<a class="blue-button-2" href="<?php echo esc_url( MARKETPLACE_SHOP_RENTAL_REVIEW_FREE ); ?>" target="_blank" class="btn4"><?php esc_html_e( 'Review', 'marketplace-shop' ) ?></a>
			</div>
			<div id="description">
				<h3><?php esc_html_e('Welcome! Thank you for choosing ','marketplace-shop'); ?><?php echo esc_html( $marketplace_shop_theme ); ?>  <span><?php esc_html_e('Version: ', 'marketplace-shop'); ?><?php echo esc_html($marketplace_shop_theme['Version']);?></span></h3>
				<img class="img_responsive" style="width: 100%;" src="<?php echo esc_url( $marketplace_shop_theme->get_screenshot() ); ?>" />
				<div id="description-insidee">
					<?php
						$marketplace_shop_theme = wp_get_theme();
						echo wp_kses_post( apply_filters( 'misbah_theme_description', esc_html( $marketplace_shop_theme->get( 'Description' ) ) ) );
					?>
				</div>
			</div>
		</div>

		<div id="righty">
			<div class="postboxx donate">
				<h3 class="hndle"><?php esc_html_e( 'Upgrade to Premium', 'marketplace-shop' ); ?></h3>
				<div class="insidee">
					<p><?php esc_html_e('Discover upgraded pro features with premium version click to upgrade.','marketplace-shop'); ?></p>
					<div id="admin_pro_links">
						<a class="blue-button-2" href="<?php echo esc_url( MARKETPLACE_SHOP_RENTAL_BUY_NOW ); ?>" target="_blank"><?php esc_html_e( 'Go Pro', 'marketplace-shop' ); ?></a>
						<a class="blue-button-1" href="<?php echo esc_url( MARKETPLACE_SHOP_RENTAL_DEMO_PRO ); ?>" target="_blank"><?php esc_html_e( 'Live Demo', 'marketplace-shop' ) ?></a>
						<a class="blue-button-2" href="<?php echo esc_url( MARKETPLACE_SHOP_RENTAL_DOCS_PRO ); ?>" target="_blank"><?php esc_html_e( 'Pro Docs', 'marketplace-shop' ) ?></a>
					</div>
				</div>
				<h3 class="hndle bundle"><?php esc_html_e( 'Get All Themes', 'marketplace-shop' ); ?></h3>
				<div class="insidee theme-bundle">
					<img width="100%" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/bundle-image.png' ); ?>" alt="<?php esc_attr_e('logo', 'marketplace-shop'); ?>">
					<p class="offer"><?php esc_html_e('Get 90+ Perfect WordPress Theme In A Single Package at just $89."','marketplace-shop'); ?></p>
					<p class="coupon"><?php esc_html_e('Get Our Theme Pack of 90+ WordPress Themes At 15% Off','marketplace-shop'); ?><span class="coupon-code"><?php esc_html_e('"Bundleup15"','marketplace-shop'); ?></span></p>
				<div id="admin_pro_linkss">
					<a class="blue-button-1" href="<?php echo esc_url( MARKETPLACE_SHOP_RENTAL_THEME_BUNDLE ); ?>" target="_blank"><?php esc_html_e( 'Buy All Themes - $89', 'marketplace-shop' ) ?></a>
				</div>
				<div class="d-table">
			    <ul class="d-column">
			      <li class="feature"><?php esc_html_e('Features','marketplace-shop'); ?></li>
			      <li class="free"><?php esc_html_e('Pro','marketplace-shop'); ?></li>
			      <li class="plus"><?php esc_html_e('Free','marketplace-shop'); ?></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('24hrs Priority Support','marketplace-shop'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Posttype','marketplace-shop'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Reordering','marketplace-shop'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Enable / Disable Option','marketplace-shop'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Multiple Sections','marketplace-shop'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Color Pallete','marketplace-shop'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Widgets','marketplace-shop'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Page Templates','marketplace-shop'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Typography','marketplace-shop'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Background Image / Color ','marketplace-shop'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
	  		</div>
			</div>
		</div>
	</div>
<?php } ?>