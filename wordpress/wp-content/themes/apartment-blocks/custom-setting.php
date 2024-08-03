<?php 

function apartment_blocks_add_admin_menu() {
    add_menu_page(
        'Theme Settings', // Page title
        'Theme Settings', // Menu title
        'manage_options', // Capability
        'apartment-blocks-theme-settings', // Menu slug
        'apartment_blocks_settings_page' // Function to display the page
    );
}
add_action( 'admin_menu', 'apartment_blocks_add_admin_menu' );

function apartment_blocks_settings_page() {
    ?>
    <div class="wrap">
        <h1><?php esc_html_e( 'Theme Settings', 'apartment-blocks' ); ?></h1>
        <form action="options.php" method="post">
            <?php
            settings_fields( 'apartment_blocks_settings_group' );
            do_settings_sections( 'apartment-blocks-theme-settings' );
            submit_button();
            ?>
        </form>
    </div>
    <?php
}

function apartment_blocks_register_settings() {
    register_setting( 'apartment_blocks_settings_group', 'apartment_blocks_enable_animations' );

    add_settings_section(
        'apartment_blocks_settings_section',
        __( 'Animation Settings', 'apartment-blocks' ),
        null,
        'apartment-blocks-theme-settings'
    );

    add_settings_field(
        'apartment_blocks_enable_animations',
        __( 'Enable Animations', 'apartment-blocks' ),
        'apartment_blocks_enable_animations_callback',
        'apartment-blocks-theme-settings',
        'apartment_blocks_settings_section'
    );
}
add_action( 'admin_init', 'apartment_blocks_register_settings' );

function apartment_blocks_enable_animations_callback() {
    $checked = get_option( 'apartment_blocks_enable_animations', true );
    ?>
    <input type="checkbox" name="apartment_blocks_enable_animations" value="1" <?php checked( 1, $checked ); ?> />
    <?php
}

