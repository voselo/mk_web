<?php
/**
 * Theme Options.
 *
 * @package mizan_real_estate
 */

$default = mizan_real_estate_get_default_theme_options();

// Add Panel.
$wp_customize->add_panel( 'mizan_real_estate_theme_option_panel',
	array(
	'title'      => __( 'Theme Options', 'mizan-real-estate' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
	)
);

// General Option.
$wp_customize->add_section( 'mizan_real_estate_section_general_option',
	array(
	'title'      => __( 'General Options', 'mizan-real-estate' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
	'panel'      => 'mizan_real_estate_theme_option_panel',
	)
);

// Setting show scroll to top.
$wp_customize->add_setting( 'theme_options[mizan_real_estate_show_scroll_to_top]',
	array(
	'default'           => $default['mizan_real_estate_show_scroll_to_top'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'mizan_real_estate_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[mizan_real_estate_show_scroll_to_top]',
	array(
	'label'    => __( 'Show Scroll To Top', 'mizan-real-estate' ),
	'section'  => 'mizan_real_estate_section_general_option',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// Setting show Preloader.
$wp_customize->add_setting( 'theme_options[mizan_real_estate_show_preloader_setting]',
	array(
	'default'           => $default['mizan_real_estate_show_preloader_setting'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'mizan_real_estate_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[mizan_real_estate_show_preloader_setting]',
	array(
	'label'    => __( 'Show Preloader', 'mizan-real-estate' ),
	'section'  => 'mizan_real_estate_section_general_option',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// Setting show Sticky Header.
$wp_customize->add_setting( 'theme_options[mizan_real_estate_show_data_sticky_setting]',
	array(
	'default'           => $default['mizan_real_estate_show_data_sticky_setting'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'mizan_real_estate_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[mizan_real_estate_show_data_sticky_setting]',
	array(
	'label'    => __( 'Show Sticky Header', 'mizan-real-estate' ),
	'section'  => 'mizan_real_estate_section_general_option',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// Post Option.
$wp_customize->add_section( 'mizan_real_estate_section_post_option',
	array(
	'title'      => __( 'Post Options', 'mizan-real-estate' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
	'panel'      => 'mizan_real_estate_theme_option_panel',
	)
);

// Setting show Post date.
$wp_customize->add_setting( 'theme_options[mizan_real_estate_show_post_date_setting]',
	array(
	'default'           => $default['mizan_real_estate_show_post_date_setting'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'mizan_real_estate_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[mizan_real_estate_show_post_date_setting]',
	array(
	'label'    => __( 'Show Post Date', 'mizan-real-estate' ),
	'section'  => 'mizan_real_estate_section_post_option',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// Setting show Post Heading.
$wp_customize->add_setting( 'theme_options[mizan_real_estate_show_post_heading_setting]',
	array(
	'default'           => $default['mizan_real_estate_show_post_heading_setting'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'mizan_real_estate_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[mizan_real_estate_show_post_heading_setting]',
	array(
	'label'    => __( 'Show Post Heading', 'mizan-real-estate' ),
	'section'  => 'mizan_real_estate_section_post_option',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// Setting show Post Content.
$wp_customize->add_setting( 'theme_options[mizan_real_estate_show_post_content_setting]',
	array(
	'default'           => $default['mizan_real_estate_show_post_content_setting'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'mizan_real_estate_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[mizan_real_estate_show_post_content_setting]',
	array(
	'label'    => __( 'Show Post Full Content', 'mizan-real-estate' ),
	'section'  => 'mizan_real_estate_section_post_option',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// Setting show Post admin.
$wp_customize->add_setting( 'theme_options[mizan_real_estate_show_post_admin_setting]',
	array(
	'default'           => $default['mizan_real_estate_show_post_admin_setting'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'mizan_real_estate_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[mizan_real_estate_show_post_admin_setting]',
	array(
	'label'    => __( 'Show Post Admin', 'mizan-real-estate' ),
	'section'  => 'mizan_real_estate_section_post_option',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// Setting show Post Categories.
$wp_customize->add_setting( 'theme_options[mizan_real_estate_show_post_categories_setting]',
	array(
	'default'           => $default['mizan_real_estate_show_post_categories_setting'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'mizan_real_estate_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[mizan_real_estate_show_post_categories_setting]',
	array(
	'label'    => __( 'Show Post Categories', 'mizan-real-estate' ),
	'section'  => 'mizan_real_estate_section_post_option',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// Setting show Post Comments.
$wp_customize->add_setting( 'theme_options[mizan_real_estate_show_post_comments_setting]',
	array(
	'default'           => $default['mizan_real_estate_show_post_comments_setting'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'mizan_real_estate_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[mizan_real_estate_show_post_comments_setting]',
	array(
	'label'    => __( 'Show Post Comments', 'mizan-real-estate' ),
	'section'  => 'mizan_real_estate_section_post_option',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// Setting show Post Featured Image.
$wp_customize->add_setting( 'theme_options[mizan_real_estate_show_post_featured_image_setting]',
	array(
	'default'           => $default['mizan_real_estate_show_post_featured_image_setting'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'mizan_real_estate_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[mizan_real_estate_show_post_featured_image_setting]',
	array(
	'label'    => __( 'Show Post Featured Image', 'mizan-real-estate' ),
	'section'  => 'mizan_real_estate_section_post_option',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// Setting show Post Tags.
$wp_customize->add_setting( 'theme_options[mizan_real_estate_show_post_tags_setting]',
	array(
	'default'           => $default['mizan_real_estate_show_post_tags_setting'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'mizan_real_estate_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[mizan_real_estate_show_post_tags_setting]',
	array(
	'label'    => __( 'Show Post Tags', 'mizan-real-estate' ),
	'section'  => 'mizan_real_estate_section_post_option',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// Header Section.
$wp_customize->add_section( 'mizan_real_estate_section_header',
	array(
	'title'      => __( 'Header Options', 'mizan-real-estate' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
	'panel'      => 'mizan_real_estate_theme_option_panel',
	)
);

// Setting show_title.
$wp_customize->add_setting( 'theme_options[mizan_real_estate_show_title]',
	array(
	'default'           => $default['mizan_real_estate_show_title'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'mizan_real_estate_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[mizan_real_estate_show_title]',
	array(
	'label'    => __( 'Show Site Title', 'mizan-real-estate' ),
	'section'  => 'mizan_real_estate_section_header',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// Setting show_tagline.
$wp_customize->add_setting( 'theme_options[mizan_real_estate_show_tagline]',
	array(
	'default'           => $default['mizan_real_estate_show_tagline'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'mizan_real_estate_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[mizan_real_estate_show_tagline]',
	array(
	'label'    => __( 'Show Tagline', 'mizan-real-estate' ),
	'section'  => 'mizan_real_estate_section_header',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// Contact button Text

$wp_customize->add_setting( 'theme_options[mizan_real_estate_sell_button_text]',
	array(
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control( 'theme_options[mizan_real_estate_sell_button_text]',
	array(
	'label'    => __( 'Sell Button Text', 'mizan-real-estate' ),
	'section'  => 'mizan_real_estate_section_header',
	'type'     => 'text',
	'priority' => 100,
	)
);

// Contact button link
$wp_customize->add_setting( 'theme_options[mizan_real_estate_sell_button_link]',
	array(
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'esc_url_raw',
	)
);
$wp_customize->add_control( 'theme_options[mizan_real_estate_sell_button_link]',
	array(
	'label'    => __( 'Sell Button Link', 'mizan-real-estate' ),
	'section'  => 'mizan_real_estate_section_header',
	'type'     => 'url',
	'priority' => 100,
	)
);

// Layout Section.
$wp_customize->add_section( 'mizan_real_estate_section_layout',
	array(
	'title'      => __( 'Layout Options', 'mizan-real-estate' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
	'panel'      => 'mizan_real_estate_theme_option_panel',
	)
);

// Setting global_layout.
$wp_customize->add_setting( 'theme_options[mizan_real_estate_global_layout]',
	array(
	'default'           => $default['mizan_real_estate_global_layout'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'mizan_real_estate_sanitize_select',
	)
);
$wp_customize->add_control( 'theme_options[mizan_real_estate_global_layout]',
	array(
	'label'    => __( 'Global Layout', 'mizan-real-estate' ),
	'section'  => 'mizan_real_estate_section_layout',
	'type'     => 'select',
	'choices'  => mizan_real_estate_get_global_layout_options(),
	'priority' => 100,
	)
);

// Setting archive_layout.
$wp_customize->add_setting( 'theme_options[mizan_real_estate_archive_layout]',
	array(
	'default'           => $default['mizan_real_estate_archive_layout'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'mizan_real_estate_sanitize_select',
	)
);
$wp_customize->add_control( 'theme_options[mizan_real_estate_archive_layout]',
	array(
	'label'    => __( 'Archive Layout', 'mizan-real-estate' ),
	'section'  => 'mizan_real_estate_section_layout',
	'type'     => 'select',
	'choices'  => mizan_real_estate_get_archive_layout_options(),
	'priority' => 100,
	)
);

// Setting archive_image.
$wp_customize->add_setting( 'theme_options[mizan_real_estate_archive_image]',
	array(
	'default'           => $default['mizan_real_estate_archive_image'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'mizan_real_estate_sanitize_select',
	)
);
$wp_customize->add_control( 'theme_options[mizan_real_estate_archive_image]',
	array(
	'label'    => __( 'Image in Archive', 'mizan-real-estate' ),
	'section'  => 'mizan_real_estate_section_layout',
	'type'     => 'select',
	'choices'  => mizan_real_estate_get_image_sizes_options( true, array( 'disable', 'thumbnail', 'medium', 'large' ), false ),
	'priority' => 100,
	)
);
// Setting archive_image_alignment.
$wp_customize->add_setting( 'theme_options[mizan_real_estate_archive_image_alignment]',
	array(
	'default'           => $default['mizan_real_estate_archive_image_alignment'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'mizan_real_estate_sanitize_select',
	)
);
$wp_customize->add_control( 'theme_options[mizan_real_estate_archive_image_alignment]',
	array(
	'label'           => __( 'Image Alignment in Archive', 'mizan-real-estate' ),
	'section'         => 'mizan_real_estate_section_layout',
	'type'            => 'select',
	'choices'         => mizan_real_estate_get_image_alignment_options(),
	'priority'        => 100,
	'active_callback' => 'mizan_real_estate_is_image_in_archive_active',
	)
);
// Setting single_image.
$wp_customize->add_setting( 'theme_options[mizan_real_estate_single_image]',
	array(
	'default'           => $default['mizan_real_estate_single_image'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'mizan_real_estate_sanitize_select',
	)
);
$wp_customize->add_control( 'theme_options[mizan_real_estate_single_image]',
	array(
	'label'    => __( 'Image in Single Post/Page', 'mizan-real-estate' ),
	'section'  => 'mizan_real_estate_section_layout',
	'type'     => 'select',
	'choices'  => mizan_real_estate_get_image_sizes_options( true, array( 'disable', 'large' ), false ),
	'priority' => 100,
	)
);

// Footer Section.
$wp_customize->add_section( 'mizan_real_estate_section_footer',
	array(
	'title'      => __( 'Footer Options', 'mizan-real-estate' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
	'panel'      => 'mizan_real_estate_theme_option_panel',
	)
);

// Setting copyright_text.

$wp_customize->add_setting( 'theme_options[mizan_real_estate_copyright_text]',
	array(
	'default'           => $default['mizan_real_estate_copyright_text'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'mizan_real_estate_sanitize_textarea_content',
	'transport'         => 'postMessage',
	)
);
$wp_customize->add_control( 'theme_options[mizan_real_estate_copyright_text]',
	array(
	'label'    => __( 'Copyright Text', 'mizan-real-estate' ),
	'section'  => 'mizan_real_estate_section_footer',
	'type'     => 'text',
	'priority' => 100,
	)
);

$wp_customize->add_setting('theme_options[mizan_real_estate_copyright_text_align]',
	array(
	'capability'        => 'edit_theme_options',
	'default' 			=> $default['mizan_real_estate_copyright_text_align'],
	'sanitize_callback' => 'mizan_real_estate_sanitize_choices'
));
$wp_customize->add_control('theme_options[mizan_real_estate_copyright_text_align]',array(
	'type' => 'radio',
	'label' => __('Copyright Text Alignment','mizan-real-estate'),
	'section' => 'mizan_real_estate_section_footer',
	'priority' => 100,
	'choices' => array(
		'left' => __('Left Align','mizan-real-estate'),
		'right' => __('Right Align','mizan-real-estate'),
		'center' => __('Center Align','mizan-real-estate'),
	),
) );

$wp_customize->add_setting( 'theme_options[mizan_real_estate_copyright_text_font_size]',
	array(
	'capability'        => 'edit_theme_options',
	'default'           => $default['mizan_real_estate_copyright_text_font_size'],
	'transport'            => 'refresh',
    'sanitize_callback'    => 'absint',
    'sanitize_js_callback' => 'absint',
	)
);
$wp_customize->add_control( 'theme_options[mizan_real_estate_copyright_text_font_size]',
	array(
	'label'    => __( 'Copyright Font Size', 'mizan-real-estate' ),
	'section'  => 'mizan_real_estate_section_footer',
	'type'     => 'number',
	'priority' => 100,
	)
);