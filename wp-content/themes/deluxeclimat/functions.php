<?php
/**
 * deluxeclimat functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package deluxeclimat
 */

if ( ! function_exists( 'deluxeclimat_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function deluxeclimat_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on deluxeclimat, use a find and replace
	 * to change 'deluxeclimat' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'deluxeclimat', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	//Добавил кастомный лого в админку
	add_theme_support( 'custom-logo' );
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
		'menu-1' => esc_html__( 'Primary', 'deluxeclimat' ),
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
	add_theme_support( 'custom-background', apply_filters( 'deluxeclimat_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'deluxeclimat_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function deluxeclimat_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'deluxeclimat_content_width', 640 );
}
add_action( 'after_setup_theme', 'deluxeclimat_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function deluxeclimat_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'deluxeclimat' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'deluxeclimat' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'deluxeclimat_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function deluxeclimat_scripts() {
	wp_enqueue_style( 'deluxeclimat-style', get_stylesheet_uri() );

	wp_enqueue_script( 'deluxeclimat-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'deluxeclimat-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'deluxeclimat_scripts' );

add_theme_support( 'woocommerce' );
add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );

define('WOOCOMMERCE_USE_CSS', false);

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
 * Подключу ка я свой woocommerce акшн отдельным файликом
 **/

require get_template_directory() . '/template-parts/woocommerce-actions.php';

/* отключил h1 титул на страничках*/
add_filter( 'woocommerce_page_title', 'custom_woocommerce_page_title');
function custom_woocommerce_page_title( $page_title ) {
    if( $page_title == 'Shop' ) {
        return $page_title = "Выберите тип кондиционера и бренд для просмотра каталога товаров";
    }
}