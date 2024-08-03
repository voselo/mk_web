<?php
/**
 * Helper functions related to customizer and options.
 *
 * @package mizan_real_estate
 */

if ( ! function_exists( 'mizan_real_estate_get_global_layout_options' ) ) :

	/**
	 * Returns global layout options.
	 *
	 * @since 1.0.0 
	 *
	 * @return array Options array.
	 */
	function mizan_real_estate_get_global_layout_options() {

		$choices = array(
			'left-sidebar'  => esc_html__( 'Primary Sidebar - Content', 'mizan-real-estate' ),
			'right-sidebar' => esc_html__( 'Content - Primary Sidebar', 'mizan-real-estate' ),
			'three-columns' => esc_html__( 'Three Columns', 'mizan-real-estate' ),
			'four-columns' => esc_html__( 'Four Columns', 'mizan-real-estate' ),
			'no-sidebar'    => esc_html__( 'No Sidebar', 'mizan-real-estate' ),
		);
		$output = apply_filters( 'mizan_real_estate_filter_layout_options', $choices );
		return $output;

	}

endif;

if ( ! function_exists( 'mizan_real_estate_get_archive_layout_options' ) ) :

	/**
	 * Returns archive layout options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Options array.
	 */
	function mizan_real_estate_get_archive_layout_options() {

		$choices = array(
			'full'    => esc_html__( 'Full Post', 'mizan-real-estate' ),
			'excerpt' => esc_html__( 'Post Excerpt', 'mizan-real-estate' ),
		);
		$output = apply_filters( 'mizan_real_estate_filter_archive_layout_options', $choices );
		if ( ! empty( $output ) ) {
			ksort( $output );
		}
		return $output;

	}

endif;

if ( ! function_exists( 'mizan_real_estate_get_image_sizes_options' ) ) :

	/**
	 * Returns image sizes options.
	 *
	 * @since 1.0.0
	 *
	 * @param bool  $add_disable True for adding No Image option.
	 * @param array $allowed Allowed image size options.
	 * @return array Image size options.
	 */
	function mizan_real_estate_get_image_sizes_options( $add_disable = true, $allowed = array(), $show_dimension = true ) {

		global $_wp_additional_image_sizes;
		$get_intermediate_image_sizes = get_intermediate_image_sizes();
		$choices = array();
		if ( true === $add_disable ) {
			$choices['disable'] = esc_html__( 'No Image', 'mizan-real-estate' );
		}
		$choices['thumbnail'] = esc_html__( 'Thumbnail', 'mizan-real-estate' );
		$choices['medium']    = esc_html__( 'Medium', 'mizan-real-estate' );
		$choices['large']     = esc_html__( 'Large', 'mizan-real-estate' );
		$choices['full']      = esc_html__( 'Full (original)', 'mizan-real-estate' );

		if ( true === $show_dimension ) {
			foreach ( array( 'thumbnail', 'medium', 'large' ) as $key => $_size ) {
				$choices[ $_size ] = $choices[ $_size ] . ' (' . get_option( $_size . '_size_w' ) . 'x' . get_option( $_size . '_size_h' ) . ')';
			}
		}

		if ( ! empty( $_wp_additional_image_sizes ) && is_array( $_wp_additional_image_sizes ) ) {
			foreach ( $_wp_additional_image_sizes as $key => $size ) {
				$choices[ $key ] = $key;
				if ( true === $show_dimension ){
					$choices[ $key ] .= ' ('. $size['width'] . 'x' . $size['height'] . ')';
				}
			}
		}

		if ( ! empty( $allowed ) ) {
			foreach ( $choices as $key => $value ) {
				if ( ! in_array( $key, $allowed ) ) {
					unset( $choices[ $key ] );
				}
			}
		}

		return $choices;

	}

endif;


if ( ! function_exists( 'mizan_real_estate_get_image_alignment_options' ) ) :

	/**
	 * Returns image options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Options array.
	 */
	function mizan_real_estate_get_image_alignment_options() {

		$choices = array(
			'none'   => _x( 'None', 'alignment', 'mizan-real-estate' ),
			'left'   => _x( 'Left', 'alignment', 'mizan-real-estate' ),
			'center' => _x( 'Center', 'alignment', 'mizan-real-estate' ),
			'right'  => _x( 'Right', 'alignment', 'mizan-real-estate' ),
		);
		return $choices;

	}

endif;

if ( ! function_exists( 'mizan_real_estate_get_featured_slider_transition_effects' ) ) :

	/**
	 * Returns the featured slider transition effects.
	 *
	 * @since 1.0.0
	 *
	 * @return array Options array.
	 */
	function mizan_real_estate_get_featured_slider_transition_effects() {

		$choices = array(
			'fade'       => _x( 'fade', 'transition effect', 'mizan-real-estate' ),
			'fadeout'    => _x( 'fadeout', 'transition effect', 'mizan-real-estate' ),
			'none'       => _x( 'none', 'transition effect', 'mizan-real-estate' ),
			'scrollHorz' => _x( 'scrollHorz', 'transition effect', 'mizan-real-estate' ),
		);
		$output = apply_filters( 'mizan_real_estate_filter_featured_slider_transition_effects', $choices );

		if ( ! empty( $output ) ) {
			ksort( $output );
		}

		return $output;

	}

endif;

if ( ! function_exists( 'mizan_real_estate_get_featured_slider_content_options' ) ) :

	/**
	 * Returns the featured slider content options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Options array.
	 */
	function mizan_real_estate_get_featured_slider_content_options() {

		$choices = array(
			'home-page' => esc_html__( 'Static Front Page Only', 'mizan-real-estate' ),
			'disabled'  => esc_html__( 'Disabled', 'mizan-real-estate' ),
		);
		$output = apply_filters( 'mizan_real_estate_filter_featured_slider_content_options', $choices );
		if ( ! empty( $output ) ) {
			ksort( $output );
		}
		return $output;

	}

endif;

if ( ! function_exists( 'mizan_real_estate_get_featured_slider_type' ) ) :

	/**
	 * Returns the featured slider type.
	 *
	 * @since 1.0.0
	 *
	 * @return array Options array.
	 */
	function mizan_real_estate_get_featured_slider_type() {

		$choices = array(
			'featured-page' => __( 'Featured Pages', 'mizan-real-estate' ),
		);

		$output = apply_filters( 'mizan_real_estate_filter_featured_slider_type', $choices );

		if ( ! empty( $output ) ) {
			ksort( $output );
		}

		return $output;

	}

endif;

if ( ! function_exists( 'mizan_real_estate_get_numbers_dropdown_options' ) ) :

	/**
	 * Returns numbers dropdown options.
	 *
	 * @since 1.0.0
	 *
	 * @param int $min Min.
	 * @param int $max Max.
	 * @param string $prefix Prefix.
	 * @param string $suffix Suffix.
	 *
	 * @return array Options array.
	 */
	function mizan_real_estate_get_numbers_dropdown_options( $min = 1, $max = 4, $prefix = '', $suffix = '' ) {

		$output = array();

		if ( $min <= $max ) {
			for ( $i = $min; $i <= $max; $i++ ) {
				$string = $prefix . $i . $suffix;
				$output[ $i ] = $string;
			}
		}

		return $output;

	}

endif;