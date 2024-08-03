<?php
$theme = wp_get_theme();

$screen = get_current_screen();
if ( ! empty( $screen->base ) && 'appearance_page_mizan-real-estate-getting-started' === $screen->base ) {
	return false;
}

?>
<div class="notice notice-success is-dismissible mizan-real-estate-admin-notice">
	<div class="mizan-real-estate-admin-notice-wrapper">
		<h2><?php esc_html_e( 'Thank you for selecting ', 'mizan-real-estate' ); ?> <?php echo $theme->get( 'Name' ); ?> <?php esc_html_e( 'Theme!', 'mizan-real-estate' ); ?></h2>
		<p><?php esc_html_e( 'Explore the benefits of our simple Demo Importer and automatic Plugin Installation. Click the button below to begin.', 'mizan-real-estate' ); ?></p>
		<span class="admin-2-btn" >
			<a class="button-secondary" style="margin-bottom: 15px; margin-right: 10px; " href="<?php echo esc_url( admin_url( 'themes.php?page=mizan-real-estate-getting-started' ) ); ?>"><?php esc_html_e( 'Import Theme Demo', 'mizan-real-estate' ); ?></a>
	        <a class="button-primary" style="margin-bottom: 15px; " href="<?php echo esc_url('https://www.mizanthemes.com/products/real-estate-wordpress-theme/'); ?>" target="_blank"><?php esc_html_e('Get Mizan Real Estate Pro', 'mizan-real-estate'); ?></a>
        </span>
	</div>
</div>