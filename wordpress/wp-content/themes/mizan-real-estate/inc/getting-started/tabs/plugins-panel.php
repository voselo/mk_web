<?php
/**
 * Plugin Panel.
 *
 */
?>
<!-- Updates panel -->
<div id="plugins-panel" class="panel-left">
    <div id="Mizan_Demo_Importor_editor" class="tabcontent">
        <?php if(!class_exists('Mizan_Importer_ThemeWhizzie')){
            $plugin_ins = Mizan_Real_Estate_Plugin_Activation_Mizan_Demo_Importor::get_instance();
            $mizan_real_estate_actions = $plugin_ins->recommended_actions;
            ?>
            <div class="mizan-real-estate-recommended-plugins ">
                    <div class="mizan-real-estate-action-list">
                        <?php if ($mizan_real_estate_actions): foreach ($mizan_real_estate_actions as $key => $mizan_real_estate_actionValue): ?>
                                <div class="mizan-real-estate-action" id="<?php echo esc_attr($mizan_real_estate_actionValue['id']);?>">
                                    <div class="action-inner plugin-activation-redirect">
                                        <h4 class="action-title"><?php echo esc_html($mizan_real_estate_actionValue['title']); ?></h4>
                                        <div class="action-desc"><?php echo esc_html($mizan_real_estate_actionValue['desc']); ?></div>
                                        <?php echo wp_kses_post($mizan_real_estate_actionValue['link']); ?>
                                    </div>
                                </div>
                            <?php endforeach;
                        endif; ?>
                    </div>
            </div>
        <?php }else{ ?>
            <div class="tab-outer-box">
                <h2><?php esc_html_e( 'Welcome to Mizan Theme!', 'mizan-real-estate' ); ?></h2>
                <p><?php esc_html_e( 'For setup the theme, First you need to click on the Begin activating plugins', 'mizan-real-estate' ); ?></p>
                <p><?php esc_html_e( '1. Install Mizan Demo Importor', 'mizan-real-estate' ); ?></p>
                <p><?php esc_html_e( '>> Then click to Return to Required Plugins Installer ', 'mizan-real-estate' ); ?></p>
                <p><?php esc_html_e( '2. Activate Mizan Demo Importor ', 'mizan-real-estate' ); ?></p>
                <p><?php esc_html_e( '>> Click on the start now button', 'mizan-real-estate' ); ?></p>
                <p><?php esc_html_e( '>> Click install plugins', 'mizan-real-estate' ); ?></p>
                <p><?php esc_html_e( '>> Click import demo button to setup the theme and click visit your site button', 'mizan-real-estate' ); ?></p>
            </div>
        <?php } ?>
    </div>
</div><!-- .panel-left -->