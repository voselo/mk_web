<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mizan_real_estate
 */

	/**
	 * Hook - mizan_real_estate_action_after_content.
	 *
	 * @hooked mizan_real_estate_content_end - 10
	 */
	do_action( 'mizan_real_estate_action_after_content' );
?>

	<?php
	/**
	 * Hook - mizan_real_estate_action_before_footer.
	 *
	 * @hooked mizan_real_estate_add_footer_bottom_widget_area - 5
	 * @hooked mizan_real_estate_footer_start - 10
	 */
	do_action( 'mizan_real_estate_action_before_footer' );
	?>
    <?php
	  /**
	   * Hook - mizan_real_estate_action_footer.
	   *
	   * @hooked mizan_real_estate_footer_copyright - 10
	   */
	  do_action( 'mizan_real_estate_action_footer' );
	?>
	<?php
	/**
	 * Hook - mizan_real_estate_action_after_footer.
	 *
	 * @hooked mizan_real_estate_footer_end - 10
	 */
	do_action( 'mizan_real_estate_action_after_footer' );
	?>

<?php
	/**
	 * Hook - mizan_real_estate_action_after.
	 *
	 * @hooked mizan_real_estate_page_end - 10
	 * @hooked mizan_real_estate_footer_goto_top - 20
	 */
	do_action( 'mizan_real_estate_action_after' );
?>

<?php wp_footer(); ?>
</body>
</html>
