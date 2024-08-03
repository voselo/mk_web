<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package mizan_real_estate
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php if ( have_posts() ) : ?>
				<header class="page-header">
					<?php
						the_archive_title( '<h1 class="page-title">', '</h1>' );
						the_archive_description( '<div class="taxonomy-description">', '</div>' );
					?>
				</header>
				<?php  ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'template-parts/content' ); ?>
				<?php endwhile; ?>

				<div class="navigation">
		            <?php
			            the_posts_pagination( array(
			                'prev_text'          => __( 'Previous page', 'mizan-real-estate' ),
			                'next_text'          => __( 'Next page', 'mizan-real-estate' ),
			                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'mizan-real-estate' ) . ' </span>',
			            ) );
			            ?>
			            <div class="clearfix"></div>
			    </div>
			<?php
			/**
			 * Hook - mizan_real_estate_action_posts_navigation.
			 *
			 * @hooked: mizan_real_estate_custom_posts_navigation - 10
			 */
			do_action( 'mizan_real_estate_action_posts_navigation' ); ?>
			<?php else : ?>
				<?php get_template_part( 'template-parts/content', 'none' ); ?>
			<?php endif; ?>
		</main>
	</div>
	<?php
		/**
		 * Hook - mizan_real_estate_action_sidebar.
		 *
		 * @hooked: mizan_real_estate_add_sidebar - 10
		 */
		do_action( 'mizan_real_estate_action_sidebar' );
	?>
<?php get_footer(); ?>
