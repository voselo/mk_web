<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mizan_real_estate
 */

?>
<?php
	/**
	 * Hook - mizan_real_estate_action_doctype.
	 *
	 * @hooked mizan_real_estate_doctype -  10
	 */
	do_action( 'mizan_real_estate_action_doctype' );
?>
<head>
	<?php
	/**
	 * Hook - mizan_real_estate_action_head.
	 *
	 * @hooked mizan_real_estate_head -  10
	 */
	do_action( 'mizan_real_estate_action_head' );
	?>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php do_action( 'wp_body_open' ); ?>

	<?php 
	$mizan_real_estate_show_preloader = mizan_real_estate_get_option( 'mizan_real_estate_show_preloader_setting' );
        if ( true === $mizan_real_estate_show_preloader ) : ?>
			<div id="preloader" class="loader-head">
				<div class="preloader">
				    <div class="spinner"></div>
				    <div class="spinner-2"></div>
				</div>
			</div>
	<?php endif; ?>

	<?php
	/**
	 * Hook - mizan_real_estate_action_before.
	 *
	 * @hooked mizan_real_estate_page_start - 10
	 * @hooked mizan_real_estate_skip_to_content - 15
	 */
	do_action( 'mizan_real_estate_action_before' );
	?>

    <?php
	  /**
	   * Hook - mizan_real_estate_action_before_header.
	   *
	   * @hooked mizan_real_estate_header_start - 10
	   */
	  do_action( 'mizan_real_estate_action_before_header' );
	?>
		<?php
		/**
		 * Hook - mizan_real_estate_action_header.
		 *
		 * @hooked mizan_real_estate_site_branding - 10
		 */
		do_action( 'mizan_real_estate_action_header' );
		?>
    <?php
	  /**
	   * Hook - mizan_real_estate_action_after_header.
	   *
	   * @hooked mizan_real_estate_header_end - 10
	   */
	  do_action( 'mizan_real_estate_action_after_header' );
	?>

	<?php
	/**
	 * Hook - mizan_real_estate_action_before_content.
	 *
	 * @hooked mizan_real_estate_content_start - 10
	 */
	do_action( 'mizan_real_estate_action_before_content' );
	?>

	<!-- <?php
	  /**
	   * Hook - mizan_real_estate_action_content.
	   */
	  do_action( 'mizan_real_estate_action_content' );
	?> -->
