<?php
/**
 * libertyCars functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package libertyCars
 */

if ( ! function_exists( 'libertycars_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function libertycars_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on libertyCars, use a find and replace
	 * to change 'libertycars' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'libertycars', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'libertycars' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'libertycars_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'libertycars_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function libertycars_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'libertycars_content_width', 640 );
}
add_action( 'after_setup_theme', 'libertycars_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function libertycars_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'libertycars' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'libertycars' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'libertycars_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function libertycars_scripts() {
	
	wp_enqueue_script('jquery');
	
	wp_enqueue_style( 'libertycars-style', get_stylesheet_uri() );

	wp_enqueue_script( 'libertycars-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'libertycars-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'libertycars_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';



/**
 * Navbar adding ++++++++++++++++++++
 */
/* Theme setup */
add_action( 'after_setup_theme', 'wpt_setup' );

if ( ! function_exists( 'wpt_setup' ) ):
function wpt_setup() {  
    register_nav_menu( 'primary', __( 'Primary navigation', 'LondonMinicabs' ) );
} endif;

require_once('wp_bootstrap_navwalker.php');

// Navbar Ending --------------------
//[widget_booking_minicabs_call]
require get_template_directory() . '/minicabs_app/cabs-init-sc.php';