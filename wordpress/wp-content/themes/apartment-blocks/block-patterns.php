<?php
/**
 * Apartment Blocks: Block Patterns
 *
 * @since Apartment Blocks 1.0
 */

/**
 * Registers block patterns and categories.
 *
 * @since Apartment Blocks 1.0
 *
 * @return void
 */
function apartment_blocks_register_block_patterns() {
	$block_pattern_categories = array(
		'apartment-blocks'    => array( 'label' => __( 'Apartment Blocks', 'apartment-blocks' ) ),
	);

	$block_pattern_categories = apply_filters( 'apartment_blocks_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'apartment_blocks_register_block_patterns', 9 );
