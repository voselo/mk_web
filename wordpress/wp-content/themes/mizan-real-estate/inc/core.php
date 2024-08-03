<?php
/**
 * Core functions.
 *
 * @package mizan_real_estate
 */

if ( ! function_exists( 'mizan_real_estate_get_option' ) ) :

	/**
	 * Get theme option
	 *
	 * @since 1.0.0
	 *
	 * @param string $key Option key.
	 * @return mixed Option value.
	 */
	function mizan_real_estate_get_option( $key ) {

		$mizan_real_estate_default_options = mizan_real_estate_get_default_theme_options();

		if ( empty( $key ) ) {
			return;
		}

		$mizan_real_estate_theme_options = (array)get_theme_mod( 'theme_options' );
		$mizan_real_estate_theme_options = wp_parse_args( $mizan_real_estate_theme_options, $mizan_real_estate_default_options );

		$mizan_real_estate_value = null;

		if ( isset( $mizan_real_estate_theme_options[ $key ] ) ) {
			$mizan_real_estate_value = $mizan_real_estate_theme_options[ $key ];
		}

		return $mizan_real_estate_value;

	}

endif;

if ( ! function_exists( 'mizan_real_estate_get_options' ) ) :

	/**
	 * Get all theme options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Theme options.
	 */
  function mizan_real_estate_get_options() {

    $mizan_real_estate_default_options = mizan_real_estate_get_default_theme_options();
    $mizan_real_estate_theme_options = (array)get_theme_mod( 'theme_options' );
    $mizan_real_estate_theme_options = wp_parse_args( $mizan_real_estate_theme_options, $mizan_real_estate_default_options );
    return $mizan_real_estate_theme_options;

  }

endif;

if( ! function_exists( 'mizan_real_estate_exclude_category_in_blog_page' ) ) :

  /**
   * Exclude category in blog page.
   *
   * @since 1.0
   */
  function mizan_real_estate_exclude_category_in_blog_page( $query ) {

    if( $query->is_home && $query->is_main_query()   ) {
      $mizan_real_estate_exclude_categories = mizan_real_estate_get_option( 'exclude_categories' );
      if ( ! empty( $mizan_real_estate_exclude_categories ) ) {
        $cats = explode( ',', $mizan_real_estate_exclude_categories );
        $cats = array_filter( $cats, 'is_numeric' );
        $mizan_real_estate_string_exclude = '';
        if ( ! empty( $cats ) ) {
          $mizan_real_estate_string_exclude = '-' . implode( ',-', $cats);
          $query->set( 'cat', $mizan_real_estate_string_exclude );
        }
      }
    }
    return $query;
  }

endif;

add_filter( 'pre_get_posts', 'mizan_real_estate_exclude_category_in_blog_page' );
