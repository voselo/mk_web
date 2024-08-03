<?php

  $mizan_real_estate_color_palette_css = '';

  /*-------------- Copyright Text Align-------------------*/

	$mizan_real_estate_copyright_text_align = mizan_real_estate_get_option('mizan_real_estate_copyright_text_align');
	$mizan_real_estate_color_palette_css .='.site-footer{';
	$mizan_real_estate_color_palette_css .='text-align: '.esc_attr($mizan_real_estate_copyright_text_align).' !important;';
	$mizan_real_estate_color_palette_css .='}';
	$mizan_real_estate_color_palette_css .='
	@media screen and (max-width:575px) {
	.site-footer{';
	$mizan_real_estate_color_palette_css .='text-align: center !important;';
	$mizan_real_estate_color_palette_css .='} }';

  // copyright font size
	$mizan_real_estate_copyright_text_font_size = mizan_real_estate_get_option('mizan_real_estate_copyright_text_font_size');
	$mizan_real_estate_color_palette_css .='#colophon p, #colophon a , #colophon{';
	$mizan_real_estate_color_palette_css .='font-size: '.esc_attr($mizan_real_estate_copyright_text_font_size).'px;';
	$mizan_real_estate_color_palette_css .='}';