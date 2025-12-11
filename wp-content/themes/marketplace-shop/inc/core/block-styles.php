<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package Marketplace Shop
 * @since 1.0.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	function marketplace_shop_register_block_styles() {
		// Box shadow for columns, column, group and image
		register_block_style(
			'core/columns',
			array(
				'name'  => 'bk-box-shadow',
				'label' => __( 'Box Shadow', 'marketplace-shop' )
			)
		);

		register_block_style(
			'core/column',
			array(
				'name'  => 'bk-box-shadow',
				'label' => __( 'Box Shadow', 'marketplace-shop' )
			)
		);
		register_block_style(
			'core/column',
			array(
				'name'  => 'bk-box-shadow-medium',
				'label' => __( 'Box Shadow Medium', 'marketplace-shop' )
			)
		);
		register_block_style(
			'core/column',
			array(
				'name'  => 'bk-box-shadow-large',
				'label' => __( 'Box Shadow Large', 'marketplace-shop' )
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'bk-box-shadow',
				'label' => __( 'Box Shadow', 'marketplace-shop' )
			)
		);
		register_block_style(
			'core/group',
			array(
				'name'  => 'bk-box-shadow-medium',
				'label' => __( 'Box Shadow Medium', 'marketplace-shop' )
			)
		);
		register_block_style(
			'core/group',
			array(
				'name'  => 'bk-box-shadow-large',
				'label' => __( 'Box Shadow Larger', 'marketplace-shop' )
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'  => 'bk-box-shadow',
				'label' => __( 'Box Shadow', 'marketplace-shop' )
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'  => 'bk-box-shadow-medium',
				'label' => __( 'Box Shadow Medium', 'marketplace-shop' )
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'  => 'bk-box-shadow-larger',
				'label' => __( 'Box Shadow Large', 'marketplace-shop' )
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'  => 'bk-box-shadow-hover',
				'label' => __( 'Box Shadow on Hover', 'marketplace-shop' )
			)
		);
		register_block_style(
			'core/columns',
			array(
				'name'  => 'bk-box-shadow-hover',
				'label' => __( 'Box Shadow on Hover', 'marketplace-shop' )
			)
		);

		register_block_style(
			'core/column',
			array(
				'name'  => 'bk-box-shadow-hover',
				'label' => __( 'Box Shadow on Hover', 'marketplace-shop' )
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'bk-box-shadow-hover',
				'label' => __( 'Box Shadow on Hover', 'marketplace-shop' )
			)
		);

		// Secondary button
		register_block_style(
			'core/button',
			array(
				'name'   => 'bk-button-secondary',
				'label'  => __( 'Secondary', 'marketplace-shop' )
			)
		);
	}
	add_action( 'init', 'marketplace_shop_register_block_styles' );
}
