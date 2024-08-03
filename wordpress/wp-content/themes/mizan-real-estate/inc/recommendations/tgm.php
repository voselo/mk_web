<?php

require get_template_directory() . '/inc/recommendations/class-tgm-plugin-activation.php';

/**
 * Recommended plugins.
 */
function mizan_real_estate_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Mizan Demo Importor', 'mizan-real-estate' ),
			'slug'             => 'mizan-demo-importer',
			'required'         => false,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'Prime Slider', 'mizan-real-estate' ),
			'slug'             => 'bdthemes-prime-slider-lite',
			'required'         => false,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'Ultimate Post Kit', 'mizan-real-estate' ),
			'slug'             => 'ultimate-post-kit',
			'required'         => false,
			'force_activation' => false,
		)
	);
	$config = array();
	mizan_real_estate_tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'mizan_real_estate_register_recommended_plugins' );