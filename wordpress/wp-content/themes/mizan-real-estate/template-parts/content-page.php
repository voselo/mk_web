<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package mizan_real_estate
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header>
    <div class="single-post-footer">
		<?php
		  do_action( 'mizan_real_estate_single_image' );
		?>
	</div>
	<div class="entry-content-wrapper">
		<div class="entry-content">
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'mizan-real-estate' ),
					'after'  => '</div>',
				) );
			?>
		</div>
	</div>
	<footer class="entry-footer">
		<?php edit_post_link( esc_html__( 'Edit', 'mizan-real-estate' ), '<span class="edit-link">', '</span>' ); ?>
	</footer>
</article>

