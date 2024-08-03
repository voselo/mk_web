<?php
/**
 * The Secondary Sidebar.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mizan_real_estate
 */

?>
<?php $mizan_real_estate_default_sidebar = apply_filters( 'mizan_real_estate_filter_default_sidebar_id', 'sidebar-2', 'secondary' ); ?>
<div id="sidebar-secondary" class="widget-area sidebar" role="complementary">
	<?php if ( is_active_sidebar( $mizan_real_estate_default_sidebar ) ) : ?>
		<?php dynamic_sidebar( $mizan_real_estate_default_sidebar ); ?>
	<?php else : ?>
		<?php
			do_action( 'mizan_real_estate_action_default_sidebar', $mizan_real_estate_default_sidebar, 'secondary' );
		?>
	<?php endif ?>
</div>

<?php $mizan_real_estate_default_sidebar1 = apply_filters( 'mizan_real_estate_filter_default_sidebar_id1', 'sidebar-3', 'secondary' ); ?>
<div id="sidebar-secondary1" class="widget-area sidebar" role="complementary">
	<?php if ( is_active_sidebar( $mizan_real_estate_default_sidebar1 ) ) : ?>
		<?php dynamic_sidebar( $mizan_real_estate_default_sidebar1 ); ?>
	<?php else : ?>
		<?php
			do_action( 'mizan_real_estate_action_default_sidebar1', $mizan_real_estate_default_sidebar1, 'secondary' );
		?>
	<?php endif ?>
</div>