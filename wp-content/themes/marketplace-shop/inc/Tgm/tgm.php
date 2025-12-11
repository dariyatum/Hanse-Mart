<?php

require get_theme_file_path( '/inc/Tgm/class-tgm-plugin-activation.php' );
/**
 * Recommended plugins.
 */
function marketplace_shop_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'      => esc_html__( 'Gutentor', 'marketplace-shop' ),
			'slug'      => 'gutentor',
			'source'           => '',
			'required'         => false,
			'force_activation' => false,
		),
		array(
			'name'      => esc_html__( 'GTranslate', 'marketplace-shop' ),
			'slug'      => 'gtranslate',
			'source'           => '',
			'required'         => false,
			'force_activation' => false,
		),
		array(
			'name'      => esc_html__( 'Essential Blocks', 'marketplace-shop' ),
			'slug'      => 'essential-blocks',
			'source'           => '',
			'required'         => false,
			'force_activation' => false,
		),
		array(
			'name'      => esc_html__( 'FOX - Currency Switcher Professional for WooCommerce', 'marketplace-shop' ),
			'slug'      => 'woocommerce-currency-switcher',
			'source'           => '',
			'required'         => false,
			'force_activation' => false,
		),
		array(
			'name'      => esc_html__( 'WooCommerce', 'marketplace-shop' ),
			'slug'      => 'woocommerce',
			'source'           => '',
			'required'         => false,
			'force_activation' => false,
		)
	);
	$config = array();
	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'marketplace_shop_register_recommended_plugins' );