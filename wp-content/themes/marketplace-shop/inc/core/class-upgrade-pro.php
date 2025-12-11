<?php
/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Marketplace_Shop_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	*/
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/core/upgrade-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Marketplace_Shop_Customize_Section_Pro' );

		$manager->add_section(
		    new Marketplace_Shop_Customize_Section_Pro(
		        $manager,
		        'marketplace_shop_upgrade_pro',
		        array(
		            'title'       => esc_html__( 'Upgrade to Marketplace Shop PRO', 'marketplace-shop' ),
		            'description' => esc_html__( 'Unlock premium features: Multiple Sections, Color Pallete, Typography, Premium Support and much more...', 'marketplace-shop' ),
		            'pro_text'    => esc_html__( 'View Marketplace Shop PRO', 'marketplace-shop' ),
		            'pro_url'     => esc_url( MARKETPLACE_SHOP_RENTAL_BUY_NOW ),
		            'bundle_text' => esc_html__( 'Get All Themes In Single Pack', 'marketplace-shop' ),
		            'bundle_url'  => esc_url( MARKETPLACE_SHOP_RENTAL_THEME_BUNDLE ),
		            'priority'    => 1,
		        )
		    )
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'marketplace-shop-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'marketplace-shop-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Marketplace_Shop_Customize::get_instance();