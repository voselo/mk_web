<?php
/**
 * Customizer partials.
 *
 * @package mizan_real_estate
 */

/**
 * Render the site title for the selective refresh partial.
 *
 * @since 1.0.0
 *
 * @return void
 */
function mizan_real_estate_customize_partial_blogname() {

	bloginfo( 'name' );

}

/**
 * Render the site title for the selective refresh partial.
 *
 * @since 1.0.0
 *
 * @return void
 */
function mizan_real_estate_customize_partial_blogdescription() {

	bloginfo( 'description' );

}

/**
 * Partial for copyright text.
 *
 * @since 1.0.0
 *
 * @return void
 */
function mizan_real_estate_render_partial_copyright_text() {

	$mizan_real_estate_copyright_text = mizan_real_estate_get_option( 'mizan_real_estate_copyright_text' );
	$mizan_real_estate_copyright_text = apply_filters( 'mizan_real_estate_filter_copyright_text', $mizan_real_estate_copyright_text );
	if ( ! empty( $mizan_real_estate_copyright_text ) ) {
		$mizan_real_estate_copyright_text = wp_kses_data( $mizan_real_estate_copyright_text );
	}
	echo $mizan_real_estate_copyright_text;

}
