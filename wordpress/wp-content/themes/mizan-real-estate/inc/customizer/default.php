<?php
/**
 * Default theme options.
 *
 * @package mizan_real_estate
 */

if ( ! function_exists( 'mizan_real_estate_get_default_theme_options' ) ) :

	/**
	 * Get default theme options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Default theme options.
	 */
	function mizan_real_estate_get_default_theme_options() {

		$defaults = array();

		//General Option
        $defaults['mizan_real_estate_show_scroll_to_top']          = true;
        $defaults['mizan_real_estate_show_preloader_setting']      = false;
        $defaults['mizan_real_estate_show_data_sticky_setting']    = false;

        //Post Option
        $defaults['mizan_real_estate_show_post_date_setting']         		 = true;
        $defaults['mizan_real_estate_show_post_heading_setting']      		 = true;
        $defaults['mizan_real_estate_show_post_content_setting']       		 = true;
        $defaults['mizan_real_estate_show_post_admin_setting']         		 = true;
        $defaults['mizan_real_estate_show_post_categories_setting']    		 = true;
        $defaults['mizan_real_estate_show_post_comments_setting']    	 	 = true;
        $defaults['mizan_real_estate_show_post_featured_image_setting']   	 = true;
        $defaults['mizan_real_estate_show_post_tags_setting']    			 = true;

		// Header.
		$defaults['mizan_real_estate_show_title']            = true;
		$defaults['mizan_real_estate_show_tagline']          = false;

		// Layout.
		$defaults['mizan_real_estate_global_layout']           = 'right-sidebar';
		$defaults['mizan_real_estate_archive_layout']          = 'excerpt';
		$defaults['mizan_real_estate_archive_image']           = 'large';
		$defaults['mizan_real_estate_archive_image_alignment'] = 'center';
		$defaults['mizan_real_estate_single_image']            = 'large';

		// Home Page.
		$defaults['mizan_real_estate_home_content_status'] = true;
		
		// Footer.
		$defaults['mizan_real_estate_copyright_text']        = esc_html__( 'Copyright &copy; All rights reserved.', 'mizan-real-estate' );
		$defaults['mizan_real_estate_copyright_text_font_size'] = '18';
		$defaults['mizan_real_estate_copyright_text_align'] = 'center';

		// Pass through filter.
		$defaults = apply_filters( 'mizan_real_estate_filter_default_theme_options', $defaults );
		return $defaults;
	}

endif;
