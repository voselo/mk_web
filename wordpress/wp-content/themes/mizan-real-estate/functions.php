<?php
/**
 * Theme functions and definitions.
 *
 * @link https://codex.wordpress.org/Functions_File_Explained
 *
 * @package mizan_real_estate
 */

if ( ! function_exists( 'mizan_real_estate_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function mizan_real_estate_setup() {
		/*
		 * Make theme available for translation.
		 */ 
		load_theme_textdomain( 'mizan-real-estate', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Let WordPress manage the document title.
		add_theme_support( 'title-tag' );

		// Enable support for Post Thumbnails on posts and pages.
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'mizan-real-estate-thumb', 400, 300 );

		// Register nav menu locations.
		register_nav_menus( array(
			'primary-menu'  => esc_html__( 'Primary Menu', 'mizan-real-estate' ),
		) );

		/*
		* This theme styles the visual editor to resemble the theme style,
		* specifically font, colors, icons, and column width.
		*/
		$min = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
		add_editor_style( array( '/css/editor-style' . $min . '.css', mizan_real_estate_fonts_url() ) );

		/*
		 * Switch default core markup to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'mizan_real_estate_custom_background_args', array(
			'default-color' => 'f7fcfe',
		) ) );

		// Enable support for selective refresh of widgets in Customizer.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Enable support for custom logo.
		add_theme_support( 'custom-logo', array(
			'height'      => 240,
			'width'       => 240,
			'flex-height' => true,
		) );

		// Load default block styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for responsive embeds.
		add_theme_support( 'responsive-embeds' );

		// Enable support for footer widgets.
		add_theme_support( 'footer-widgets', 4 );

		// woocommerce
		add_theme_support( 'woocommerce' );

		// Load Supports.
		require_once get_template_directory() . '/inc/support.php';

		// Add custom editor font sizes.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => __( 'Small', 'mizan-real-estate' ),
					'shortName' => __( 'S', 'mizan-real-estate' ),
					'size'      => 13,
					'slug'      => 'small',
				),
				array(
					'name'      => __( 'Normal', 'mizan-real-estate' ),
					'shortName' => __( 'M', 'mizan-real-estate' ),
					'size'      => 14,
					'slug'      => 'normal',
				),
				array(
					'name'      => __( 'Large', 'mizan-real-estate' ),
					'shortName' => __( 'L', 'mizan-real-estate' ),
					'size'      => 30,
					'slug'      => 'large',
				),
				array(
					'name'      => __( 'Huge', 'mizan-real-estate' ),
					'shortName' => __( 'XL', 'mizan-real-estate' ),
					'size'      => 36,
					'slug'      => 'huge',
				),
			)
		);

		// Editor color palette.
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => __( 'Black', 'mizan-real-estate' ),
					'slug'  => 'black',
					'color' => '#121212',
				),
				array(
					'name'  => __( 'White', 'mizan-real-estate' ),
					'slug'  => 'white',
					'color' => '#ffffff',
				),
				array(
					'name'  => __( 'Gray', 'mizan-real-estate' ),
					'slug'  => 'gray',
					'color' => '#727272',
				),
				array(
					'name'  => __( 'Blue', 'mizan-real-estate' ),
					'slug'  => 'blue',
					'color' => '#007BFF',
				),
				array(
					'name'  => __( 'Navy Blue', 'mizan-real-estate' ),
					'slug'  => 'navy-blue',
					'color' => '#007BFF',
				),
				array(
					'name'  => __( 'Light Blue', 'mizan-real-estate' ),
					'slug'  => 'light-blue',
					'color' => '#f7fcfe',
				),
				array(
					'name'  => __( 'Orange', 'mizan-real-estate' ),
					'slug'  => 'orange',
					'color' => '#121212',
				),
				array(
					'name'  => __( 'Green', 'mizan-real-estate' ),
					'slug'  => 'green',
					'color' => '#77a464',
				),
				array(
					'name'  => __( 'Red', 'mizan-real-estate' ),
					'slug'  => 'red',
					'color' => '#e4572e',
				),
				array(
					'name'  => __( 'Yellow', 'mizan-real-estate' ),
					'slug'  => 'yellow',
					'color' => '#f4a024',
				),
			)
		);
	}
endif;

add_action( 'after_setup_theme', 'mizan_real_estate_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mizan_real_estate_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'mizan_real_estate_content_width', 771 );
}
add_action( 'after_setup_theme', 'mizan_real_estate_content_width', 0 );

/**
 * Register widget area.
 */
function mizan_real_estate_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Primary Sidebar', 'mizan-real-estate' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here to appear in your Primary Sidebar.', 'mizan-real-estate' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Secondary Sidebar', 'mizan-real-estate' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Add widgets here to appear in your Secondary Sidebar.', 'mizan-real-estate' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Secondary Sidebar 1', 'mizan-real-estate' ),
		'id'            => 'sidebar-3',
		'description'   => esc_html__( 'Add widgets here to appear in your Secondary Sidebar 1.', 'mizan-real-estate' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'mizan_real_estate_widgets_init' );

/**
 * Register custom fonts.
 */
function mizan_real_estate_fonts_url() {
	$font_family   = array(
		'Hind+Madurai:wght@300;400;500;600;700',
	);
	
	$mizan_real_estate_fonts_url = add_query_arg( array(
		'family' => implode( '&family=', $font_family ),
		'display' => 'swap',
	), 'https://fonts.googleapis.com/css2' );

	$contents = wptt_get_webfont_url( esc_url_raw( $mizan_real_estate_fonts_url ) );
	return $contents;
}

/**
 * Enqueue scripts and styles.
 */
function mizan_real_estate_scripts() {

	$min = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

	wp_enqueue_style( 'mizan-real-estate-font-awesome', get_template_directory_uri() . '/third-party/font-awesome/css/font-awesome' . $min . '.css', '', '4.7.0' );

	$mizan_real_estate_fonts_url = mizan_real_estate_fonts_url();
	if ( ! empty( $mizan_real_estate_fonts_url ) ) {
		wp_enqueue_style( 'mizan-real-estate-google-fonts', $mizan_real_estate_fonts_url, array(), null );
	}

	wp_enqueue_style( 'dashicons' );

	wp_enqueue_style('bootstrap-style', get_template_directory_uri().'/css/bootstrap.css');

	// Theme stylesheet.
	wp_enqueue_style( 'mizan-real-estate-style', get_stylesheet_uri(), null, date( 'Ymd-Gis', filemtime( get_template_directory() . '/style.css' ) ) );

	wp_enqueue_style( 'mizan-real-estate-style', get_stylesheet_uri() );
	wp_style_add_data( 'mizan-real-estate-style', 'rtl', 'replace' );

	require get_parent_theme_file_path( '/inc/color-palette/custom-color-control.php' );
	wp_add_inline_style( 'mizan-real-estate-style',$mizan_real_estate_color_palette_css );

	// Theme block stylesheet.
	wp_enqueue_style( 'mizan-real-estate-block-style', get_theme_file_uri( '/css/blocks.css' ), array( 'mizan-real-estate-style' ), '20211006' );
	
	wp_enqueue_script( 'mizan-real-estate-custom-js', get_template_directory_uri(). '/js/custom.js', array('jquery') ,'',true);
	
	wp_enqueue_script( 'jquery-superfish', get_theme_file_uri( '/js/jquery.superfish.js' ), array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/js/bootstrap.js', array('jquery'), '', true);
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'mizan_real_estate_scripts' );

/*radio button sanitization*/
function mizan_real_estate_sanitize_choices( $input, $setting ) {
    global $wp_customize;
    $control = $wp_customize->get_control( $setting->id );
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

/**
 * Enqueue styles for the block-based editor.
 *
 * @since Mizan Real Estate
 */
function mizan_real_estate_block_editor_styles() {
	// Theme block stylesheet.
	wp_enqueue_style( 'mizan-real-estate-editor-style', get_template_directory_uri() . '/css/editor-blocks.css', array(), '20101208' );

	$mizan_real_estate_fonts_url = mizan_real_estate_fonts_url();
	if ( ! empty( $mizan_real_estate_fonts_url ) ) {
		wp_enqueue_style( 'mizan-real-estate-google-fonts', $mizan_real_estate_fonts_url, array(), null );
	}
}
add_action( 'enqueue_block_editor_assets', 'mizan_real_estate_block_editor_styles' );


/**
 * Load init.
 */
require_once get_template_directory() . '/inc/init.php';

// Dashboard Admin Info
require get_template_directory() . '/inc/dashboard-admin-info.php';

/**
 *  Webfonts 
 */
require_once get_template_directory() . '/inc/wptt-webfont-loader.php';

require_once get_template_directory() . '/inc/recommendations/tgm.php';

require_once get_template_directory() . '/inc/upsell/class-upgrade-pro.php';

require get_template_directory() . '/inc/getting-started/getting-started.php';

require get_template_directory() . '/inc/getting-started/plugin-activation.php';

define('MIZAN_REAL_ESTATE_DOCUMENTATION',__('https://preview.mizanthemes.com/setup-guide/mizan-real-estate-free/','mizan-real-estate'));
define('MIZAN_REAL_ESTATE_SUPPORT',__('https://wordpress.org/support/theme/mizan-real-estate/','mizan-real-estate'));
define('MIZAN_REAL_ESTATE_REVIEW',__('https://wordpress.org/support/theme/mizan-real-estate/reviews/','mizan-real-estate'));
define('MIZAN_REAL_ESTATE_BUY_NOW',__('https://www.mizanthemes.com/products/real-estate-wordpress-theme/','mizan-real-estate'));
define('MIZAN_REAL_ESTATE_LIVE_DEMO',__('https://preview.mizanthemes.com/mizan-real-estate/','mizan-real-estate'));
define('MIZAN_REAL_ESTATE_PRO_DOC',__('https://preview.mizanthemes.com/setup-guide/mizan-real-estate-pro/','mizan-real-estate'));