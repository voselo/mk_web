<?php
/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Mizan_Real_Estate_Customize {

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
		load_template( trailingslashit( get_template_directory() ) . 'inc/upsell/upgrade-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Mizan_Real_Estate_Customize_Section_Pro' );

		$manager->add_section(
			new Mizan_Real_Estate_Customize_Section_Pro(
				$manager,
				'mizan_real_estate_upgrade_pro',
				array(
					'title'       => esc_html__( 'Mizan Real Estate Pro', 'mizan-real-estate' ),
					'pro_text'    => esc_html__( 'Get Pro Theme', 'mizan-real-estate' ),
					'pro_url'     => 'https://www.mizanthemes.com/products/real-estate-wordpress-theme/',
					'priority'    => 5,
				)
			)
		);

		$manager->add_section(
			new Mizan_Real_Estate_Customize_Section_Pro(
				$manager,
				'mizan_real_estate_documentation',
				array(
					'pro_text'    => esc_html__( 'Documentation', 'mizan-real-estate' ),
					'pro_url'     => 'https://preview.mizanthemes.com/setup-guide/mizan-real-estate-free/',
					'priority'    => 200,
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

		wp_enqueue_script( 'mizan-real-estate-customize-controls', trailingslashit( get_template_directory_uri() ) . '/inc/upsell/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'mizan-real-estate-customize-controls', trailingslashit( get_template_directory_uri() ) . '/inc/upsell/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Mizan_Real_Estate_Customize::get_instance();