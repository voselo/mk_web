<?php
/**
 * Apartment Blocks: Customizer
 *
 * @subpackage Apartment Blocks
 * @since 1.0
 */

function apartment_blocks_customize_register( $wp_customize ) {

	wp_enqueue_style('customizercustom_css', esc_url( get_template_directory_uri() ). '/inc/customizer/customizer.css');

	// Pro Section
 	$wp_customize->add_section('apartment_blocks_pro', array(
        'title'    => __('APARTMENT BLOCKS PREMIUM ', 'apartment-blocks'),
        'priority' => 1,
    ));
    $wp_customize->add_setting('apartment_blocks_pro', array(
        'default'           => null,
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control(new Apartment_Blocks_Pro_Control($wp_customize, 'apartment_blocks_pro', array(
        'label'    => __('APARTMENT BLOCKS PREMIUM', 'apartment-blocks'),
        'section'  => 'apartment_blocks_pro',
        'settings' => 'apartment_blocks_pro',
        'priority' => 1,
    )));
}
add_action( 'customize_register', 'apartment_blocks_customize_register' );


define('APARTMENT_BLOCKS_PRO_LINK',__('https://www.ovationthemes.com/products/apartment-rental-wordpress-theme','apartment-blocks'));

/* Pro control */
if (class_exists('WP_Customize_Control') && !class_exists('Apartment_Blocks_Pro_Control')):
    class Apartment_Blocks_Pro_Control extends WP_Customize_Control{

    public function render_content(){?>
        <label style="overflow: hidden; zoom: 1;">
	        <div class="col-md upsell-btn">
                <a href="<?php echo esc_url( APARTMENT_BLOCKS_PRO_LINK ); ?>" target="blank" class="btn btn-success btn"><?php esc_html_e('UPGRADE APARTMENT BLOCKS PREMIUM ','apartment-blocks');?> </a>
	        </div>
            <div class="col-md">
                <img class="apartment_blocks_img_responsive " src="<?php echo esc_url(get_template_directory_uri()); ?>/screenshot.png">
            </div>
	        <div class="col-md">
                <ul style="padding-top:10px">
                    <li class="upsell-apartment_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Responsive Design', 'apartment-blocks');?> </li>                 
                    <li class="upsell-apartment_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Demo Importer', 'apartment-blocks');?> </li>
                    <li class="upsell-apartment_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Section Reordering', 'apartment-blocks');?> </li>
                    <li class="upsell-apartment_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Contact Page Template', 'apartment-blocks');?> </li>
                    <li class="upsell-apartment_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Multiple Blog Layouts', 'apartment-blocks');?> </li>
                    <li class="upsell-apartment_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Unlimited Color Options', 'apartment-blocks');?> </li>
                    <li class="upsell-apartment_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Cross Browser Support', 'apartment-blocks');?> </li>
                    <li class="upsell-apartment_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Detailed Documentation Included', 'apartment-blocks');?> </li>
                    <li class="upsell-apartment_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('WPML Compatible (Translation Ready)', 'apartment-blocks');?> </li>
                    <li class="upsell-apartment_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Woo-commerce Compatible', 'apartment-blocks');?> </li>
                    <li class="upsell-apartment_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Full Support', 'apartment-blocks');?> </li>
                    <li class="upsell-apartment_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('10+ Sections', 'apartment-blocks');?> </li>
                    <li class="upsell-apartment_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('SEO Friendly', 'apartment-blocks');?> </li>
                    <li class="upsell-apartment_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Supper Fast', 'apartment-blocks');?> </li>
                </ul>
        	</div>
            <div class="col-md upsell-btn upsell-btn-bottom">
                <a href="<?php echo esc_url( APARTMENT_BLOCKS_PRO_LINK ); ?>" target="blank" class="btn btn-success btn"><?php esc_html_e('UPGRADE APARTMENT BLOCKS PREMIUM ','apartment-blocks');?> </a>
            </div>
        </label>
    <?php } }
endif;