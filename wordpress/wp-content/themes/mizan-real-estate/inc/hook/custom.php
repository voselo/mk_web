<?php
/**
 * Custom theme functions.
 *
 * This file contains hook functions attached to theme hooks.
 *
 * @package mizan_real_estate
 */

if ( ! function_exists( 'mizan_real_estate_skip_to_content' ) ) :
	/**
	 * Add Skip to content.
	 *
	 * @since 1.0.0
	 */
	function mizan_real_estate_skip_to_content() {
	?><a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'mizan-real-estate' ); ?></a><?php
	}
endif;

add_action( 'mizan_real_estate_action_before', 'mizan_real_estate_skip_to_content', 15 );

// Middle Header

if ( ! function_exists( 'mizan_real_estate_site_branding' ) ) :

	/**
	 * Site branding.
	 *
	 * @since 1.0.0
	 */
	function mizan_real_estate_site_branding() {
		$mizan_real_estate_sell_button_link = mizan_real_estate_get_option( 'mizan_real_estate_sell_button_link' );
		$mizan_real_estate_sell_button_text = mizan_real_estate_get_option( 'mizan_real_estate_sell_button_text' );
		$mizan_real_estate_data_sticky = mizan_real_estate_get_option( 'mizan_real_estate_show_data_sticky_setting' );
		?>

	<header class="main-header py-3">
		<div id="middle-header" data-sticky= "<?php echo esc_attr($mizan_real_estate_data_sticky); ?>">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-4 col-sm-12 col-12 align-self-center text-start">
						<div class="site-branding mb-3 mb-lg-0">
							<?php mizan_real_estate_the_custom_logo(); ?>
							<?php $mizan_real_estate_show_title = mizan_real_estate_get_option( 'mizan_real_estate_show_title' ); ?>
							<?php $mizan_real_estate_show_tagline = mizan_real_estate_get_option( 'mizan_real_estate_show_tagline' ); ?>
							<?php if ( true === $mizan_real_estate_show_title || true === $mizan_real_estate_show_tagline ) :  ?>
								<div id="site-identity" class="text-center text-md-start">
									<?php if ( true === $mizan_real_estate_show_title ) :  ?>
										<?php if ( is_front_page() ) : ?>
											<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
										<?php else : ?>
											<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
										<?php endif; ?>
									<?php endif; ?>
									<?php if ( true === $mizan_real_estate_show_tagline ) :  ?>
										<p class="site-description"><?php bloginfo( 'description' ); ?></p>
									<?php endif; ?>
								</div>
							<?php endif; ?>
						</div>
					</div>
					<div class="col-lg-6 col-md-4 col-sm-6 col-4 align-self-center">
						<div class="toggle-menu gb_menu text-md-center my-2 text-start">
							<button onclick="mizan_real_estate_gb_Menu_open()" class="gb_toggle"><span class="dashicons dashicons-menu-alt"></span></button>
						</div>
						<div id="gb_responsive" class="nav side_gb_nav">
							<nav id="top_gb_menu" class="gb_nav_menu" role="navigation" aria-label="<?php esc_attr_e( 'Menu', 'mizan-real-estate' ); ?>">
								<?php
									wp_nav_menu( array( 
										'theme_location' => 'primary-menu',
										'container_class' => 'gb_navigation clearfix' ,
										'menu_class' => 'gb_navigation clearfix',
										'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav m-0 px-0">%3$s</ul>',
										'fallback_cb' => 'wp_page_menu',
									) );
								?>
								<a href="javascript:void(0)" class="closebtn gb_menu" onclick="mizan_real_estate_gb_Menu_close()">x<span class="screen-reader-text"><?php esc_html_e('Close Menu','mizan-real-estate'); ?></span></a>
							</nav>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 col-8 align-self-center text-end ">
						<?php if( !empty($mizan_real_estate_sell_button_link) || !empty($mizan_real_estate_sell_button_text)):?>
							<div class="subscribe-btn my-2">
								<a href="<?php echo esc_url($mizan_real_estate_sell_button_link);?>"><?php echo esc_html($mizan_real_estate_sell_button_text);?></a>
							</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</header>

	<?php

	}

endif;

add_action( 'mizan_real_estate_action_header', 'mizan_real_estate_site_branding' );


/////////////////////////////////// copyright start /////////////////////////////

if ( ! function_exists( 'mizan_real_estate_footer_copyright' ) ) :

	/**
	 * Footer copyright
	 *
	 * @since 1.0.0
	 */
	function mizan_real_estate_footer_copyright() {

		// Check if footer is disabled.
		$mizan_real_estate_footer_status = apply_filters( 'mizan_real_estate_filter_footer_status', true );
		if ( true !== $mizan_real_estate_footer_status ) {
			return;
		}

		// Copyright content.
		$mizan_real_estate_copyright_text = mizan_real_estate_get_option( 'mizan_real_estate_copyright_text' );
		$mizan_real_estate_copyright_text = apply_filters( 'mizan_real_estate_filter_copyright_text', $mizan_real_estate_copyright_text );
		if ( ! empty( $mizan_real_estate_copyright_text ) ) {
			$mizan_real_estate_copyright_text = wp_kses_data( $mizan_real_estate_copyright_text );
		}

		// Powered by content.
		$mizan_real_estate_powered_by_text = sprintf( __( 'Mizan Real Estate by %s', 'mizan-real-estate' ), '<span>' . __( 'Mizan Themes', 'mizan-real-estate' ) . '</span>' );
		?>

		<div class="colophon-inner">
		    <?php if ( ! empty( $mizan_real_estate_copyright_text ) ) : ?>
			    <div class="colophon-column">
			    	<div class="copyright">
					<a href="<?php echo esc_url('https://www.mizanthemes.com/products/free-estate-wordpress-theme/','mizan-real-estate'); ?>"><?php echo $mizan_real_estate_copyright_text; ?></a>
			    	</div><!-- .copyright -->
			    </div><!-- .colophon-column -->
		    <?php endif; ?>

		    <?php if ( ! empty( $mizan_real_estate_powered_by_text ) ) : ?>
			    <div class="colophon-column">
			    	<div class="site-info">
					<?php echo $mizan_real_estate_powered_by_text; ?>
			    	</div><!-- .site-info -->
			    </div><!-- .colophon-column -->
		    <?php endif; ?>
		</div><!-- .colophon-inner -->
		
	    <?php
	}

endif;

add_action( 'mizan_real_estate_action_footer', 'mizan_real_estate_footer_copyright', 10 );

// /////////////////////////////////sidebar//////////////////

if ( ! function_exists( 'mizan_real_estate_add_sidebar' ) ) :

	/**
	 * Add sidebar.
	 *
	 * @since 1.0.0
	 */
	function mizan_real_estate_add_sidebar() {

		global $post;

		$mizan_real_estate_global_layout = mizan_real_estate_get_option( 'mizan_real_estate_global_layout' );
		$mizan_real_estate_global_layout = apply_filters( 'mizan_real_estate_filter_theme_global_layout', $mizan_real_estate_global_layout );

		// Check if single.
		if ( $post && is_singular() ) {
			$mizan_real_estate_post_options = get_post_meta( $post->ID, 'mizan_real_estate_theme_settings', true );
			if ( isset( $mizan_real_estate_post_options['post_layout'] ) && ! empty( $mizan_real_estate_post_options['mizan_real_estate_post_layout'] ) ) {
				$mizan_real_estate_global_layout = $mizan_real_estate_post_options['mizan_real_estate_post_layout'];
			}
		}

		// Include primary sidebar.
		if ( 'no-sidebar' !== $mizan_real_estate_global_layout ) {
			get_sidebar();
		}
		// Include Secondary sidebar.
		switch ( $mizan_real_estate_global_layout ) {
			case 'three-columns':
			get_sidebar( 'secondary' );
			break;

			default:
			break;
		}

		// Include Secondary sidebar 1.
		switch ( $mizan_real_estate_global_layout ) {
			case 'four-columns':
			get_sidebar( 'secondary' );
			break;

			default:
			break;
		}

	}

endif;

add_action( 'mizan_real_estate_action_sidebar', 'mizan_real_estate_add_sidebar' );

//////////////////////////////////////// single page


if ( ! function_exists( 'mizan_real_estate_add_image_in_single_display' ) ) :

	/**
	 * Add image in single post.
	 *
	 * @since 1.0.0
	 */
	function mizan_real_estate_add_image_in_single_display() {

		global $post;

		if ( has_post_thumbnail() ) {

			$values = get_post_meta( $post->ID, 'mizan_real_estate_theme_settings', true );
			$mizan_real_estate_theme_settings_single_image = isset( $values['mizan_real_estate_single_image'] ) ? esc_attr( $values['mizan_real_estate_single_image'] ) : '';

			if ( ! $mizan_real_estate_theme_settings_single_image ) {
				$mizan_real_estate_theme_settings_single_image = mizan_real_estate_get_option( 'mizan_real_estate_single_image' );
			}

			if ( 'disable' !== $mizan_real_estate_theme_settings_single_image ) {
				$args = array(
					'class' => 'aligncenter',
				);
				the_post_thumbnail( esc_attr( $mizan_real_estate_theme_settings_single_image ), $args );
			}
		}

	}

endif;

add_action( 'mizan_real_estate_single_image', 'mizan_real_estate_add_image_in_single_display' );

if ( ! function_exists( 'mizan_real_estate_footer_goto_top' ) ) :

	/**
	 * Go to top.
	 *
	 * @since 1.0.0
	 */
	function mizan_real_estate_footer_goto_top() {
        
        $mizan_real_estate_show_scroll_to_top = mizan_real_estate_get_option( 'mizan_real_estate_show_scroll_to_top' );
        if ( true === $mizan_real_estate_show_scroll_to_top ) :
		echo '<a href="#page" class="scrollup" id="btn-scrollup"><i class="fa fa-angle-up"><span class="screen-reader-text">' . esc_html__( 'Scroll Up', 'mizan-real-estate' ) . '</span></i></a>';
		endif;

	}

endif;

add_action( 'mizan_real_estate_action_after', 'mizan_real_estate_footer_goto_top', 20 );