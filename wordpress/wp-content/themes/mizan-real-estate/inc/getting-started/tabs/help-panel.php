<?php
/**
 * Help Panel.
 *
 */
?>
<!-- Help file panel -->
<div id="help-panel" class="panel-left">
    <div class="panel-aside">
        <h4><?php esc_html_e( 'Theme Customizer', 'mizan-real-estate' ); ?></h4>
        <p><?php esc_html_e( 'To begin customizing your website, start by clicking "Customize"', 'mizan-real-estate' ); ?></p>
        <a class="button button-primary" href="<?php echo esc_url( admin_url('customize.php') ); ?>" title="<?php esc_attr_e( 'Visit the Demo', 'mizan-real-estate' ); ?>" target="_blank">
            <?php esc_html_e( 'Customizing', 'mizan-real-estate' ); ?>
        </a>
    </div><!-- .panel-aside -->

    <div class="panel-aside">
        <h4><?php esc_html_e( 'Documentation', 'mizan-real-estate' ); ?></h4>
        <p><?php esc_html_e( 'Explore the comprehensive guide and instructions for this WordPress Theme. Begin your journey with assurance.', 'mizan-real-estate' ); ?></p>
        <a class="button button-primary" href="<?php echo esc_url( MIZAN_REAL_ESTATE_DOCUMENTATION ); ?>" title="<?php esc_attr_e( 'Visit the doc', 'mizan-real-estate' ); ?>" target="_blank">
            <?php esc_html_e( 'Documentation', 'mizan-real-estate' ); ?>
        </a>
    </div><!-- .panel-aside -->

    <div class="panel-aside">
        <h4><?php esc_html_e( 'Support Ticket', 'mizan-real-estate' ); ?></h4>
        <p><?php esc_html_e( 'Our dedicated team is well prepared to help you out in case of queries and doubts regarding our theme', 'mizan-real-estate' ); ?></p>
        <a class="button button-primary" href="<?php echo esc_url( MIZAN_REAL_ESTATE_SUPPORT ); ?>" title="<?php esc_attr_e( 'Visit the Support', 'mizan-real-estate' ); ?>" target="_blank">
            <?php esc_html_e( 'Contact Support', 'mizan-real-estate' ); ?>
        </a>
    </div><!-- .panel-aside -->

    <div class="panel-aside">
        <h4><?php esc_html_e( 'Reviews & Testimonials', 'mizan-real-estate' ); ?></h4>
        <p><?php esc_html_e( 'All the features and aspects of this WordPress Theme are phenomenal. I\'d recommend this theme to all.', 'mizan-real-estate' ); ?></p>
        <a class="button button-primary" href="<?php echo esc_url( MIZAN_REAL_ESTATE_REVIEW ); ?>" title="<?php esc_attr_e( 'Visit the Demo', 'mizan-real-estate' ); ?>" target="_blank">
            <?php esc_html_e( 'Review', 'mizan-real-estate' ); ?>
        </a>
    </div><!-- .panel-aside -->
</div>