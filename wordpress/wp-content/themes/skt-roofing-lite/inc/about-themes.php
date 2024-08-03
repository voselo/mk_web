<?php
//about theme info
add_action( 'admin_menu', 'skt_roofing_lite_abouttheme' );
function skt_roofing_lite_abouttheme() {    	
	add_theme_page( esc_html__('About Theme', 'skt-roofing-lite'), esc_html__('About Theme', 'skt-roofing-lite'), 'edit_theme_options', 'skt_roofing_lite_guide', 'skt_roofing_lite_mostrar_guide');   
} 
//guidline for about theme
function skt_roofing_lite_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
?>
<div class="wrapper-info">
	<div class="col-left">
   		   <div class="col-left-area">
			  <?php esc_html_e('Theme Information', 'skt-roofing-lite'); ?>
		   </div>
          <p><?php esc_html_e('SKT Roofing WordPress theme is suitable for roof installation, roof construction, roof repair, roof maintenance, roof replacement, roof work, roof covering, roof shingling, roof tiling, roofing services and building and contractor, construction and builder, developer, constructor, subcontractor, engineer, project manager, tradesman, service provider, firm, concrete, mortar, adhesive, binder, grout, paste, cementitious material, cement mix, hydraulic cement, Portland cement, architect and interior designer, building design and decor, architectural design and interior styling, architectural planning and interior decoration, construction design and interior arrangement, structure design and interior aesthetics, building planning and interior space design, architectural drafting and interior furnishing, construction architect and interior decorator.','skt-roofing-lite'); ?></p>
          <a href="<?php echo esc_url(SKT_ROOFING_LITE_SKTTHEMES_PRO_THEME_URL); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/free-vs-pro.png" alt="" /></a>
	</div><!-- .col-left -->
	<div class="col-right">			
			<div class="centerbold">
				<hr />
				<a href="<?php echo esc_url(SKT_ROOFING_LITE_SKTTHEMES_LIVE_DEMO); ?>" target="_blank"><?php esc_html_e('Live Demo', 'skt-roofing-lite'); ?></a> | 
				<a href="<?php echo esc_url(SKT_ROOFING_LITE_SKTTHEMES_PRO_THEME_URL); ?>"><?php esc_html_e('Buy Pro', 'skt-roofing-lite'); ?></a> | 
				<a href="<?php echo esc_url(SKT_ROOFING_LITE_SKTTHEMES_THEME_DOC); ?>" target="_blank"><?php esc_html_e('Documentation', 'skt-roofing-lite'); ?></a>
                <div class="space5"></div>
				<hr />                
                <a href="<?php echo esc_url(SKT_ROOFING_LITE_SKTTHEMES_THEMES); ?>" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sktskill.jpg" alt="" /></a>
			</div>		
	</div><!-- .col-right -->
</div><!-- .wrapper-info -->
<?php } ?>