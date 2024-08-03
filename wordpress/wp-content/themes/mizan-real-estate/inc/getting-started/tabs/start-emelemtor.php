<?php
/**
 * Start Elementor.
 *
 */
?>
<!-- Start Elementor -->
<div id="start-panel" class="panel-left visible">
    <div id="mizan-real-estate-importer" class="tabcontent open">
        <?php if(!class_exists('Mizan_Importer_ThemeWhizzie')){
            $plugin_ins = Mizan_Real_Estate_Plugin_Activation_Mizan_Demo_Importor::get_instance();
            $mizan_real_estate_actions = $plugin_ins->recommended_actions;
            ?>
            <div class="mizan-real-estate-recommended-plugins ">
                <div class="mizan-real-estate-action-list">
                    <?php if ($mizan_real_estate_actions): foreach ($mizan_real_estate_actions as $key => $mizan_real_estate_actionValue): ?>
                            <div class="mizan-real-estate-action" id="<?php echo esc_attr($mizan_real_estate_actionValue['id']);?>">
                                <div class="action-inner plugin-activation-redirect">
                                    <h3 class="action-title"><?php echo esc_html($mizan_real_estate_actionValue['title']); ?></h3>
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
                <h3><?php esc_html_e('Welcome to Mizan Themes', 'mizan-real-estate'); ?></h3>
                <p class="start-text"><?php esc_html_e('The demo will import after you click the Start Quickly button.', 'mizan-real-estate'); ?></p>
                <div class="info-link">
                    <a class="button button-primary" href="<?php echo esc_url( admin_url('admin.php?page=mizandemoimporter-wizard') ); ?>"><?php esc_html_e('Start Quickly', 'mizan-real-estate'); ?></a>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
