<?php
/**
 * Theme functions related to structure.
 *
 * This file contains structural hook functions.
 *
 * @package mizan_real_estate
 */

if ( ! function_exists( 'mizan_real_estate_doctype' ) ) :
	/**
	 * Doctype Declaration.
	 *
	 * @since 1.0.0
	 */
	function mizan_real_estate_doctype() {
	?><!DOCTYPE html> <html <?php language_attributes(); ?>><?php
	}
endif;

add_action( 'mizan_real_estate_action_doctype', 'mizan_real_estate_doctype', 10 );


if ( ! function_exists( 'mizan_real_estate_head' ) ) :
	/**
	 * Header Codes.
	 *
	 * @since 1.0.0
	 */
	function mizan_real_estate_head() {
	?>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php
	}
endif;
add_action( 'mizan_real_estate_action_head', 'mizan_real_estate_head', 10 );

if ( ! function_exists( 'mizan_real_estate_page_start' ) ) :
	/**
	 * Page Start.
	 *
	 * @since 1.0.0
	 */
	function mizan_real_estate_page_start() {
	?>
    <div id="page" class="hfeed site">
    <?php
	}
endif;
add_action( 'mizan_real_estate_action_before', 'mizan_real_estate_page_start' );

if ( ! function_exists( 'mizan_real_estate_page_end' ) ) :
	/**
	 * Page End.
	 *
	 * @since 1.0.0
	 */
	function mizan_real_estate_page_end() {
	?></div><!-- #page --><?php
	}
endif;

add_action( 'mizan_real_estate_action_after', 'mizan_real_estate_page_end' );

if ( ! function_exists( 'mizan_real_estate_content_start' ) ) :
	/**
	 * Content Start.
	 *
	 * @since 1.0.0
	 */
	function mizan_real_estate_content_start() {
	?><?php if(!is_page_template( 'home-page-template.php' )) { echo '<div id="content" class="site-content">'; } ?><?php if(!is_page_template( 'home-page-template.php' )) { echo '<div class="container">'; } ?><div class="inner-wrapper"><?php
	}
endif;
add_action( 'mizan_real_estate_action_before_content', 'mizan_real_estate_content_start' );


if ( ! function_exists( 'mizan_real_estate_content_end' ) ) :
	/**
	 * Content End.
	 *
	 * @since 1.0.0
	 */
	function mizan_real_estate_content_end() {
	?></div><!-- .inner-wrapper --></div><!-- .container --><?php if(!is_page_template( 'home-page-template.php' )) { echo '</div>'; } ?><!-- #content --><?php
	}
endif;
add_action( 'mizan_real_estate_action_after_content', 'mizan_real_estate_content_end' );


if ( ! function_exists( 'mizan_real_estate_header_start' ) ) :
	/**
	 * Header Start.
	 *
	 * @since 1.0.0
	 */
	function mizan_real_estate_header_start() {
		?><header id="masthead" class="site-header" role="banner"><?php
	}
endif;
add_action( 'mizan_real_estate_action_before_header', 'mizan_real_estate_header_start' );

if ( ! function_exists( 'mizan_real_estate_header_end' ) ) :
	/**
	 * Header End.
	 *
	 * @since 1.0.0
	 */
	function mizan_real_estate_header_end() {
	?></div><!-- .container --></header><!-- #masthead --><?php
	}
endif;
add_action( 'mizan_real_estate_action_after_header', 'mizan_real_estate_header_end' );



if ( ! function_exists( 'mizan_real_estate_footer_start' ) ) :
	/**
	 * Footer Start.
	 *
	 * @since 1.0.0
	 */
	function mizan_real_estate_footer_start() {
		$mizan_real_estate_footer_status = apply_filters( 'mizan_real_estate_filter_footer_status', true );
		if ( true !== $mizan_real_estate_footer_status ) {
			return;
		}
	?><footer id="colophon" class="site-footer" role="contentinfo"><div class="container"><?php
	}
endif;
add_action( 'mizan_real_estate_action_before_footer', 'mizan_real_estate_footer_start' );


if ( ! function_exists( 'mizan_real_estate_footer_end' ) ) :
	/**
	 * Footer End.
	 *
	 * @since 1.0.0
	 */
	function mizan_real_estate_footer_end() {
		$mizan_real_estate_footer_status = apply_filters( 'mizan_real_estate_filter_footer_status', true );
		if ( true !== $mizan_real_estate_footer_status ) {
			return;
		}
	?></div><!-- .container --></footer><!-- #colophon --><?php
	}
endif;
add_action( 'mizan_real_estate_action_after_footer', 'mizan_real_estate_footer_end' );
