<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package mizan_real_estate
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'mizan-real-estate' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );
				?>

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
	</section>

<?php
	do_action( 'mizan_real_estate_action_sidebar' );
?>
<?php get_footer(); ?>
